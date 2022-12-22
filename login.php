<?php
session_start();
include 'utils/authenticateUtil.php';

// logout
if (isset($_GET['logout'])) {
    session_unset();
    $_SESSION = array();
    unset($_SESSION['USER_ACCOUNT']);
    unset($_SESSION['USER_NAME']);
    unset($_SESSION['ROLE']);
    session_destroy();
    header("Location: login.php");
    die();
}

if(isset($_SESSION['USER_ACCOUNT'])) {
    header("Location: index.php");
    die();
}

// login
if (isset($_POST['userLogin']) && isset($_POST['userPassword'])) {
    $username = $_POST['userLogin'];
    $password = $_POST['userPassword'];
    $data = Authenticate::authenticateUser($username, $password);
    if($data == null) {
        $error = "You are not authorized to access. Please contact admin for help!";
    } else {
        // login succeed
        $_SESSION['USER_ACCOUNT']   = $data['ACCOUNT'];
        $_SESSION['USER_NAME']      = $data['NAME'];
        $_SESSION['ROLE']           = $data['ROLE'];
        header("Location: index.php");
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <h2>Login ADMIN</h2>
    <form action="" class="was-validated" method="post">
        <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="userLogin" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="userPassword" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

</body>
</html>
