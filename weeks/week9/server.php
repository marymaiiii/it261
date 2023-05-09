<?php
// our server.php file - this is where our session will start
// our session is a way to store the information

session_start();
include('config.php');
// this is where eventually you will have the header include
// include('./includes/header.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__, mysqli_connect_error()));


if(isset($_POST['reg_user'])) {
$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

$errors = array();

if(empty($first_name)) {
array_push($errors, 'First name is required!!!');
}
if(empty($last_name)) {
    array_push($errors, 'Last name is required!!!');
}
if(empty($email)) {
    array_push($errors, 'Email is required!!!');    
}
if(empty($username)) {
    array_push($errors, 'Username is required!!!');       
}
if(empty($password_1)) {
    array_push($errors, 'Password is required!!!');
}
if($password_1 !== $password_2) {
    array_push($errors, 'Password do not match!');
}
$user_check_query = " SELECT * FROM users WHERE usernane = '$username'  OR email = '$email' LIMIT 1 ";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

//we are going to have an if statement, and we will nest 2 additional if statements inside our main if statement
if($rows) {
if($rows['username'] == $username) {
    array_push($errors, 'Username already exists!');
}

if($rows['email'] == $email) {
    array_push($errors, 'Email already exists!');
}


} //close big if statement
// do we have any errors???? idealistcally, no errors!!!
if(count($errors) == 0  ) {
$password = md5($password_1);

// Now is tine to insert  the information into our table!!!!

$query = " INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username','$password')";

mysqli_query($iConn, $query); 

$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

header('Location:login.php');


} //close if count errors



}

// now we must communicate with the login page - we will ask the same question!!!

if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);
if(empty($username)) {
array_push($errors, 'Username is required!!!');
}

if(empty($password)) {
    array_push($errors, 'Password is required!!!');
}

if(count($errors) == 0) {
    $password =md5($password);

    $query = "SELECT * FROM users WHERE username = '$usernane' AND password = '$password' ";
// below you have a new variable that is result NOT result
    $result = mysqli_query($iConn, $query);

    if(mysqli_num_row($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = $success;

    header('Location:index.php');
    } else {
array_push($errors, 'Wrong username/password combination');
    } //close else

} //close count

} //close issit login user