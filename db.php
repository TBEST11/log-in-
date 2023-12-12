<?php

$hostName = 'localhost';
$userName = 'root';
$password = '';
$database = 'login';

$conn = new mysqli($hostName, $userName, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email= $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $data['taskMsg'] = '';
    if(empty($fname)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($lname)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($gender)) {

      $data['taskMsg'] = "Empty Field!";
      
    }
    $data['taskMsg'] = '';
    if(empty($email)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($dob)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($phone)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($password)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($cpassword)) {

      $data['taskMsg'] = "Empty Field!";
      
    }
     $validation = false;
    if(empty($data['taskMsg'])) {
       $validation = true;
    }

     if($validation) {

     /* insert query*/
     $sql = "INSERT INTO `reg` (`first_name`, `last_name`, `gender`, `email`, `dob`,`phone`, `password`, `confirm_password`) VALUES ('$fname', '$lname', '$gender', '$email', '$dob', '$phone', '$password', '$cpassword')";
     
    // $result = $conn->query($query);
     
     //if ($result) {
       //  $data['success'] = "Task is added successfully";
    // }
     
     //return $data;
     $result = mysqli_query($conn, $sql);
        
     # Checks that the query executed successfully
     if ($result) {
        
                                 
     }
     else{
         echo "Failed to insert new data.";
     }
    }
}
?>