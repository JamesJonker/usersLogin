<?php include('database_connection.php');
 
$output= array();
$sql = "SELECT * FROM people";
 
$totalQuery = mysqli_query($connection,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);
 
if(isset($_POST['search']['value']))
{
    $search_value = $_POST['search']['value'];
    $sql .= " WHERE first_name like '%".$search_value."%'";
    $sql .= " OR last_name like '%".$search_value."%'";
    $sql .= " OR id_number like '%".$search_value."%'";
    $sql .= " OR contact_number like '%".$search_value."%'";

    $sql .= " OR email like '%".$search_value."%'";
    $sql .= " OR dob like '%".$search_value."%'";
    $sql .= " OR langauge like '%".$search_value."%'";
    $sql .= " OR interests like '%".$search_value."%'";
}
 
if(isset($_POST['order']))
{
    $column_name = $_POST['order'][0]['column'];
    $order = $_POST['order'][0]['dir'];
    $sql .= " ORDER BY ".$column_name." ".$order."";
}
else
{
    $sql .= " ORDER BY id desc";
}
 
if($_POST['length'] != -1)
{
    $start = $_POST['start'];
    $length = $_POST['length'];
    $sql .= " LIMIT  ".$start.", ".$length;
}   
 
$query = mysqli_query($connection,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();

while($row = mysqli_fetch_assoc($query))
{


    $sub_array = array();
    $sub_array[] = $row['id'];
    $sub_array[] = $row['first_name'];
    $sub_array[] = $row['last_name'];
    $sub_array[] = $row['id_number'];
    $sub_array[] = $row['contact_number'];
    $sub_array[] = $row['email'];
    $sub_array[] = $row['dob'];
    $sub_array[] = $row['langauge'];
    $sub_array[] = $row['interests'];
    $sub_array[] = '<a href="#" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>';
    $sub_array[] = '<a href=";" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
    $data[] = $sub_array;

}
 
$output = array(
    'draw'=> intval($_POST['draw']),
    'recordsTotal' =>$count_rows ,
    'recordsFiltered'=>   $total_all_rows,
    'data'=>$data,
);
echo  json_encode($output);