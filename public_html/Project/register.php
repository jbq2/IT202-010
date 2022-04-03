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
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        document.getElementById("flash").innerHTML = "";
        let isValid = true;

        let email = form.email.value;
        if(/[@]/.test(email) && !/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(email)){
            flash("Invalid email", "warning");

            isValid = false;
        }

        let usern = form.username.value;
        if(!(/^[a-z0-9_-]{3,16}$/.test(usern))){
            flash("Invalid username", "warning");

            isValid = false;
        }

        let pw = form.password.value;
        if(String(pw).length < 8){
            flash("Password is too short", "warning");

            isValid = false;
        }

        let con = form.confirm.value;
        if(pw !== con){
            flash("Passwords must match", "warning");

            isValid = false;
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