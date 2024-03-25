<?php include('database_connection.php');
    $id = $_POST['id'];
    $sql = "SELECT * FROM people WHERE id='$id' LIMIT 1";
    $query = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($query);
    echo json_encode($row);
?>

