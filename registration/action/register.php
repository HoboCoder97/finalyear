<?php
// Create Variables
$error = 0;
$msg = "";
//Include Database Connection
include ("../../includes/con.php");
// Check First field is Filled
error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_POST["name"])){
$name = $_POST["name"];
$username = $_POST["username"];
$experience = $_POST["experience"];
$email = $_POST["email"];
$password = $_POST["pwd"];
$cpassword = $_POST["cpwd"];
//Check All Posted Variables
    if ($username == ""){
        $msg .= "-Username is Not Filled ";
        $error++;
    }
    if ($cpassword != $password){
        $msg .= "-Passwords do not Match ";
        $error++;
    }
    if ($name == ""){
        $msg .= "-Name not Given ";
        $error++;
    }
    if (is_null($experience)){
        $msg .= "-Experience is Not Filled ";
        $error++;
    }
    if ($password == ""){
        $msg .= "-Password is Not Filled ";
        $error++;
    }
    if ($email == ""){
        $msg .= "-Email not entered ";
        $error++;
    }
}
else {
    $error++;
    $msg .= "Full name not filled";

}

if ($error == 0){
    //Register User
    include ("../../includes/con.php");
    $password = trim(password_hash($_POST["pwd"], PASSWORD_DEFAULT));

    $sql = "INSERT INTO users (username, password, name , experience, email)
VALUES ('$username', '$password', '$name', $experience, '$email')";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {

        echo "Error: " . $sql . "<br>" . $con->error;
    die();
    }

    $con->close();
    //Notify
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='../../index.php';
    </script>");
}
else {
    //Notify of Errors

    echo $msg;
    $msg = 'There is a problem with your registration: \n' . $msg;
    echo "<script type=text/javascript>var message = '" . $msg . "' ;" . "alert(message);window.location.href='../index.php'</script>";


}