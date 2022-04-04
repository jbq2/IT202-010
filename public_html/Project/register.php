<?php
require(__DIR__ . "/../../partials/nav.php");
reset_session();
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" />
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"  />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {//UCID: jbq2; IT202-010
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        document.getElementById("flash").innerHTML = "";
        let isValid = true;

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

        let pw = form.password.value;
        if(!isValidPassword(pw)){
            isValid = false;
            flash("Password is too short", "warning");
        }

        let con = form.confirm.value;
        if(!isMatchingPasswords(pw, con)){
            isValid = false;
            flash("Passwords must match", "warning");
        }

        return isValid;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"]) && isset($_POST["username"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $confirm = se($_POST, "confirm", "", false);
    $username = se($_POST, "username", "", false);
    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty", "danger");
        $hasError = true;
    }
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!is_valid_username($username)) {
        flash("Username must only contain 3-16 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (empty($password)) {
        flash("password must not be empty", "danger");
        $hasError = true;
    }
    if (empty($confirm)) {
        flash("Confirm password must not be empty", "danger");
        $hasError = true;
    }
    if (!is_valid_password($password)) {
        flash("Password too short", "danger");
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm
    ) {
        flash("Passwords must match", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            flash("Successfully registered!", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>