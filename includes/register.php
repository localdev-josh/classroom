<?php

$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['user_role'] = $_POST['userrole'];

$username = $mysqli->escape_string($_POST['username']);
$email = $mysqli->escape_string($_POST['email']);
$userrole = $mysqli->escape_string($_POST['userrole']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ));




$result = $mysqli->query("SELECT * FROM users WHERE email='$email' OR username='$username'") or die($mysqli-error());


if ($result->num_rows > 0 ){
    $_SESSION['message'] = 'User with this email already exists!';

} else{

    $sql = "INSERT INTO users(username, email, password, hash, user_role, date_joined)"
            . "VALUES('$username','$email','$password','$hash','$userrole', now())";

            $create_user = mysqli_query($mysqli, $sql);

            header("Location: success.php");
}

?>