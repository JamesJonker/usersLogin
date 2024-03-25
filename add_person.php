<?php 

include('database_connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'C:\xampp\composer\vendor\autoload.php';

require 'C:\xampp\htdocs\usersLogin\composer\vendor\phpmailer\phpmailer\src/Exception.php';
require 'C:\xampp\htdocs\usersLogin\composer\vendor\phpmailer\phpmailer\src/PHPMailer.php';
require 'c:\xampp\htdocs\usersLogin\composer\vendor\phpmailer\phpmailer\src/SMTP.php';
if(isset($_POST['add_person'])){


}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$id_number = $_POST['id_number'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$langauge = $_POST['langauge'];
$interests = implode(',', $_POST['interests']);

//include('sendmail.php');

$sql = "INSERT INTO `people` (`first_name`,`last_name`,`id_number`,`contact_number`,`email`,`dob`,`langauge`, `interests`) values ('$first_name', '$last_name', '$id_number', '$contact_number', '$email', '$dob', '$langauge', '$interests' )";
$query= mysqli_query($connection,$sql);
$lastId = mysqli_insert_id($connection);
if($query){

    $_SESSION['status']="Person added successfully";
    echo json_encode(true);
    return;
}

?>