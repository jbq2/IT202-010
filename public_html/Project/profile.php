<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    flash("You must be logged in to view this page.", "warning");
    die(header("Location: login.php"));
}
?>
<?php
if (isset($_POST["save"])) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);

    $params = [":email" => $email, ":username" => $username, ":id" => get_user_id()];
    $db = getDB();
    $stmt = $db->prepare("UPDATE Users set email = :email, username = :username where id = :id");
    try {
        $stmt->execute($params);
        flash("Profile saved", "success");
    } catch (Exception $e) {
        if ($e->errorInfo[1] === 1062) {
            //https://www.php.net/manual/en/function.preg-match.php
            preg_match("/Users.(\w+)/", $e->errorInfo[2], $matches);
            if (isset($matches[1])) {
                flash("The chosen " . $matches[1] . " is not available.", "warning");
            } else {
                //TODO come up with a nice error message
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            //TODO come up with a nice error message
            echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }
    //select fresh data from table
    $stmt = $db->prepare("SELECT id, email, username from Users where id = :id LIMIT 1");
    try {
        $stmt->execute([":id" => get_user_id()]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            //$_SESSION["user"] = $user;
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["username"] = $user["username"];
        } else {
            flash("User doesn't exist", "danger");
        }
    } catch (Exception $e) {
        flash("An unexpected error occurred, please try again", "danger");
        //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
    }


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        if ($new_password === $confirm_password) {
            //TODO validate current
            $stmt = $db->prepare("SELECT password from Users where id = :id");
            try {
                $stmt->execute([":id" => get_user_id()]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if (isset($result["password"])) {
                    if (password_verify($current_password, $result["password"])) {
                        $query = "UPDATE Users set password = :password where id = :id";
                        $stmt = $db->prepare($query);
                        $stmt->execute([
                            ":id" => get_user_id(),
                            ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                        ]);

                        flash("Password reset", "success");
                    } else {
                        flash("Current password is invalid", "warning");
                    }
                }
            } catch (Exception $e) {
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            flash("New passwords don't match", "warning");
        }
    }

    $public = se($_POST, "pubSetting", "", false);
    if(!empty($public)){
        $statement = $db->prepare("UPDATE Users
        SET public = :pubSetting
        WHERE id = :userID");
        $userID = get_user_id();
        $pubSetting = ($public == "pub") ? 1 : 0;
        
        try{
            $statement->execute([":pubSetting" => $pubSetting, ":userID" => $userID]);    
        }
        catch(PDOException $e){
            flash("Error updating your profile's publicity setting", "warning");
        }
    }
}
?>

<?php
$email = get_user_email();
$username = get_username();
?>
<div class="container-fluid">
    <h1>Profile</h1>
    <form method="POST" onsubmit="return validate(this);">
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
        </div>
        <!-- DO NOT PRELOAD PASSWORD -->
        <h3 style="margin-top:25px">Password Reset</h3>
        <div class="mb-3"></div>
        <div class="mb-3">
            <label class="form-label" for="cp">Current Password</label>
            <input class="form-control" type="password" name="currentPassword" id="cp" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="np">New Password</label>
            <input class="form-control" type="password" name="newPassword" id="np" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="conp">Confirm Password</label>
            <input class="form-control" type="password" name="confirmPassword" id="conp" />
        </div>
        <div>
            <input class="radioClass" type="radio" id="pub" name="pubSetting" value="pub" />
            <label class="radioLabel" for="pub">Public</label>
            <br>
            <input class="radioClass" type="radio" id="priv" name="pubSetting" value="priv" />
            <label class="radioLabel" for="priv">Private</label>
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Update Profile" name="save" />
    </form>
</div>

<script>
    function validate(form) {//UCID: jbq2; IT202-010
        document.getElementById("flash").innerHTML = "";
        let isValid = true;
        //TODO add other client side validation....

        let email = form.email.value;
        if(!isValidEmail(email)){
            isValid = false;
            flash("Invalid email", "warning");
        }

        let usern = form.username.value;
        if(!isValidUsername(usern)){
            isValid = false;
            flash("Username must include 3-16 characters from a-z (lowercase), 0-9, _, or -", "warning");
        }

        let currpw = form.currentPassword.value;
        if(!isValidPassword(currpw)){
            isValid = false;
            flash("Current password is too short", "warning");
        }

        let pw = form.newPassword.value;
        if(!isValidPassword(pw)){
            isValid = false;
            flash("New password is too short", "warning");
        }
        
        let con = form.confirmPassword.value;
        if(!isMatchingPasswords(pw, con)){
            isValid = false;
            flash("Passwords must match", "warning");
        }

        let public = form.pubSetting.value;
        if(!isset(public)){
            isValid = false;
            flash("Please choose a publicity setting for your profile", "warning");
        }

        return isValid;
    }
</script>

<style>
.radioClass{
    display:inline;
}
.radioLabel{
    display:inline;
}
</style>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>