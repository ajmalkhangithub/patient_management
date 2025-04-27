<?php
// $host = "127.0.0.1:3307"; // MySQL host with port 3307
// $user = "root";           // Default MySQL user
// $password = "Ajmalkh@123";           // Replace with your actual password if you have set one
// $db = "clinic";           // Your database name

// $conn = new mysqli($host, $user, $password, $db);

// if ($conn->connect_error) {
//   echo json_encode(["success" => false, "error" => $conn->connect_error]);
//   exit;
// }

// // Get form data
// $name = $_POST['name'];
// $age = $_POST['age'];
// $disease = $_POST['disease'];

// // Query to insert data
// $sql = "INSERT INTO patients (name, age, disease) VALUES ('$name', '$age', '$disease')";

// if ($conn->query($sql) === TRUE) {
//   echo json_encode(["success" => true]);
// } else {
//   echo json_encode(["success" => false, "error" => $conn->error]);
// }

// $conn->close();








$con=mysqli_connnect('localhost','root','Ajmalkh@123','clinic',)

if(isset($_POST['sb']))
{
    $name=$_POST['name']
    $age=$_POST['age']
    $disease=$_POST['disease']

    $query="INSERT INTO pstients(name,age,disease) values('$name','$age','$disease') "
    $Execute=mysqli_query($con,$query)
}

?>
