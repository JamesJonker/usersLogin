<?php
session_start();
include "database_connection.php";

if(isset($_POST['user_name']) && isset($_POST['password'])){

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$user_name = validate($_POST['user_name']);
$password = validate($_POST['password']);

if(empty($user_name)){
    header("Location: index.php?error=Username is required");
    exit();
}
else if(empty($password)){
    header("Location: index.php?error=Paassword is required");
    exit();
}

//$sql = "SELECT * FROM users WHERE 'user_name'='$user_name' AND 'password'=$password'";
$sql = "SELECT * FROM `users` WHERE `user_name`='$user_name' AND `password`='$password'";

$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] === $user_name && $row['password'] === $password){
        echo "Logged In";
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['[password]'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        //header("Location: home.php");
        header("Location: manage_people.php");

        exit();
    } 
    else{
        header("Location: index.php?error=Incorrect Username or Password entered");
        exit();
    }
} else {
    header("Location: index.php?error=Incorrect Username or Password entered");
}