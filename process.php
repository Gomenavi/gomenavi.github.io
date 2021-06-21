<?php      
   session_start();
   include('includes/dbconfig.php');
    
   if (isset($_POST['register']))
{
    $email = $_POST['emailReg'];  
    $pass = $_POST['passwordReg'];  


    $auth = $firebase->getAuth();
    $user = $auth->createUserWithEmailAndPassword($email,$pass);
    header("Location:index.php");
    exit;
}
else{
    
    $email = $_POST['emailLogin'];
    $pass = $_POST['passLogin'];

    $auth = $firebase->getAuth();
    $user = $auth->signInWithEmailAndPassword($email,$pass);
    if($user){
        session_start();
        $_SESSION['user'] = true;
        header("Location:home.php");
    }
}


?>  

