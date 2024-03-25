<?php 
include('database_connection.php');
$person_id = $_POST['id'];
$sql = "DELETE FROM people WHERE id='$person_id'";
$delQuery =mysqli_query($connection,$sql);


if ($connection->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$connection->close();

?>