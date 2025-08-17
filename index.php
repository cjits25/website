<?php
$pageTitle = "Home";
require_once 'frontend/header.php';
require_once 'frontend/auth.php';
redirectIfLoggedIn();
?>

<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to Our Website</h1>
    <p class="lead">Please register or login to access the dashboard.</p>
    <hr class="my-4">
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="register.php" class="btn btn-primary btn-lg px-4 gap-3">Register</a>
        <a href="login.php" class="btn btn-outline-secondary btn-lg px-4">Login</a>
    </div>
</div>

<?php require_once 'frontend/footer.php'; ?>