<?php
   require 'connect.php';
   if (isset($_POST['submit'])) {
        

    $Payment = $_POST['paymentproof'];
    
    
 
    /*if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($username) || empty($password) || empty(  $rpassword)
    || empty($pix) || empty($skill) || empty($howlong)
    || empty($duration) || empty($profile))
    {
     header("Location:learnaskill.php?error=some-fields-are-empty");
    exit();
    }*/
/*    
     if($password !==$rpassword){
         header("Location:teachaskill.php?error=unmatchedpasswords=".$username.  "&tutorssemail=".$email);
          exit();
    }*/
    
     /*else {
        $sql = "SELECT Username FROM learnersdata WHERE Username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:learnaskill.php?error=sqlerror"); 
             exit(); 
        }
   }
*/

    $sql = "INSERT INTO getaloandata(paymentproof) VALUES (?)";
        $stmt=mysqli_stmt_init($conn);
        if( !mysqli_stmt_prepare($stmt,$sql)){
        header("Location:pay.php?error=connection-error");
            exit();
    }
    
      
    /*  else{  $hashedpassword = password_hash($password,PASSWORD_DEFAULT);*/
        
        mysqli_stmt_bind_param($stmt, "s", $paymentproof);
        mysqli_stmt_execute($stmt);
        header("Location:index.html?submission=successful");
            exit();
        

mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
    header("Location:pay.php");
exit();

}
