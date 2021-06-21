<?php
session_start();
include('includes/dbconfig.php');

if (isset($_POST['addcon']))
{

    $name = $_POST['name'];
    $meterno = $_POST['meter_no'];
    $c_no = $_POST['c_no'];
    $mono = $_POST['mo_no'];
    $email = $_POST['email'];
    $customertype = $_POST['customer_type'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    
    

    $data = [

        'name' => $name,
        'meter_no' => $meterno,
        'c_no' => $c_no,
        'mo_no' => $mono,
        'email' => $email,
        'customer_type' => $customertype,
        'password' => $password,
        'username' => $username
        
      
    ];

    $ref = "Users/Consumer/".$username;
    $pushdata = $database->getReference($ref)->set($data);

    if($pushdata) {
        $_SESSION['status'] = "Data updated successfully";
        header("Location: viewuser.php");
    } else {
        $_SESSION['status'] = "Update failed";
        header("Location: viewuser.php");
    }
}

?>