<?php
session_start();
if (isset($SESSION["Username"])) {
    header('Location: dashboard.php');
    exit;
}else{
include "init.php";
include "includes/langs/en.php";
include $tmp . "header.php";
?>
<div class="alert alert-primary" role="alert">
    <?php print_r($_SESSION); ?>
</div>


<div class="container login">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['email'];
        $password = $_POST['passw'];
        $hashpassword = sha1($password);

        $stmt = $con->prepare("SELECT email, password FROM users WHERE email = ? AND password = ? AND GroupID = 1");
        $stmt->execute(array($username,$hashpassword));
        $count = $stmt->rowCount();
        if ($count > 0) {
            $_SESSION['Username'] = $username;
            header('Location: dashboard.php');
            exit;
        }
    };?>
    <form class="form-signin text-center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <img class="mb-4" src="layouts/images/logo.png" alt="" width="200" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control mb-3" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="passw" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    <div class="my-5 p-10 text-center">
        <div class="mb-3 fb-login-button" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="true" data-width=""></div>
        <div class="m-sp g-signin2" data-onsuccess="onSignIn"></div>
    </div>
</div>
<?php include $tmp . "footer.php";} ?>