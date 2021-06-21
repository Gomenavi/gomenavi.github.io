<?php
session_start();
include('includes/dbconfig.php');

if (isset($_POST['total']))
{

    $name = $_POST['name'];
    $meterno = $_POST['meter_no'];
    $c_no = $_POST['c_no'];
    $lastunit = intval ($_POST['last_unit']);
    $subamount = intval ($_POST['subamount']);
    $deduction = intval ($_POST['deduction']);
    $payable = intval ($_POST['pending_amount']);
    $status = $_POST['status'];
    $lastinsfee = doubleval ($_POST['lastinsfee']);
    $penalty = intval ($_POST['penalty']);
    $amountpaid = doubleval ($_POST['amount_paid']);
    $duedate = $_POST['due_date'];
    
    

    $data = [

        'name' => $name,
        'meter_no' => $meterno,
        'c_no' => $c_no,
        'last_unit' => $lastunit,
        'subamount' => $subamount,
        'deduction' => $deduction,
        'pending_amount' => $payable,
        'lastinsfee' => $lastinsfee,
        'status' => $status,
        'penalty' => $penalty,
        'amount_paid' => $amountpaid,
        'due_date' => $duedate
      
    ];

    $ref = "Bill Info/".$meterno;
    $postdata = $database->getReference($ref)->update($data);

    if($postdata) {
        $_SESSION['status'] = "Data updated successfully";
        header("Location: bill.php");
    } else {
        $_SESSION['status'] = "Update failed";
        header("Location: bill.php");
    }
}

?>