
<?php 
include('database_connection.php');

if(isset($_POST['update_data'])){


}
$id =$_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$id_number = $_POST['id_number'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$langauge = $_POST['langauge'];
$interests = implode(',', $_POST['interests']);

$sql = "UPDATE `people` SET  `first_name`='$first_name' , `last_name`= '$last_name', `id_number`='$id_number',  `contact_number`='$contact_number', `email`='$email', `dob`='$dob', `langauge`='$langauge', `interests`='$interests' WHERE id='$id' ";
$query= mysqli_query($connection,$sql);
$lastId = mysqli_insert_id($connection);

if($query){
    $_SESSION['status']="Person data updated successfully";
    header('location: manage_people.php');
}

?>
