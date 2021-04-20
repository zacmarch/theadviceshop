<?php
error_reporting(E_ALL);
session_start();

$password_list = ["admin", "Zac", "Lindsay"];
$username_list = ["admin", "Zac", "Lindsay"];

function find_user_password_match($password_list, $username_list){
    $password = $_REQUEST['password'];
    $username = $_REQUEST['username'];

    for ($i = 0; $i < count($username_list); $i++){
        if ($username == $username_list[$i] && $password == $password_list[$i]){
            return $username;
        }
    }
    return "No user";
}

$username = find_user_password_match($password_list, $username_list);

if($username == "No user"){
    header("Location:index.php"); //Page would go blank if using dynamic $_GET['page'] method :(
}
else{
    $_SESSION['username'] = $username;
    header("Location: ".$_GET['page'].".php");
}
exit();
