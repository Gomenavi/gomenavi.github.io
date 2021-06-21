<?php
 require __DIR__.'/vendor/autoload.php';


 use Kreait\Firebase\Factory;
 use Kreait\Firebase\ServiceAccount;
 use Kreait\Firebase\Database;
 use Kreait\Firebase;
 use Kreait\Firebase\Auth;
 use Kreait\Firebase\Exception\Auth\RevokedIdToken;


 $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/waterbillingsystem-232a2-firebase-adminsdk-u3ggt-e7f8a9f874.json');

 $firebase = (new Factory)
 -> withServiceAccount($serviceAccount)
 -> withDatabaseUri('https://waterbillingsystem-232a2-default-rtdb.firebaseio.com/')
 -> create();

 $database = $firebase -> getDatabase();
 
?>

 