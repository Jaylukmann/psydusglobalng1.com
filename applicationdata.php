<?php

   if (isset($_POST['submit'])) {
   
     require 'connect.php';   

    $Fullname = $_POST['fullname'];
    $Address = $_POST['address'];
    $Email = $_POST['email'];
    $PhoneNumber = $_POST['phonenumber'];
    $Gender = $_POST['gender'];
    $Dob = $_POST['dob'];
    $Job = $_POST['job'];
    $OfficeAddress = $_POST['officeaddress'];
    $GradeLevel= $_POST['gradelevel'];
    $BankName = $_POST['bankname'];
    $AccountName = $_POST['accountname'];
    $AccountType = $_POST['accounttype'];
    $AccountNumber = $_POST['accountnumber'];
    $BVN = $_POST['bvn'];
    $Passport = $_POST['passport'];
    $MeansOfIdentification = $_POST['identification'];
    $StaffId = $_POST['staffid'];
    $Utility= $_POST['utility'];
    $BankStatement = $_POST['bankstatement'];
    $Payslip = $_POST['payslip'];
    
 
     if(empty($Fullname)  || empty($Address) || empty($Email) || empty($PhoneNumber) || empty($Gender) || empty($Dob) || empty($Job) || empty($OfficeAddress)
    || empty($GradeLevel) || empty($BankName) || empty($AccountName) || empty($AccountType)
    || empty($AccountNumber) || empty($BVN) || empty($Passport) || empty($MeansOfIdentification) || empty($StaffId) || empty($Utility) || empty($BankStatement) || empty($Payslip))
    
    {
     header("Location:application.php?error=some-fields-are-empty");
    exit();
    }

   else {
    
    $sql = "INSERT INTO applicationdata(Fullname,Address,Email,PhoneNumber,Gender,Dob,Job,OfficeAddress,GradeLevel,BankName,AccountName,AccountType,AccountNumber,BVN,Passport,MeansOfIdentification,StaffId,Utility,BankStatement,Payslip) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
         $stmt=mysqli_stmt_init($conn);
        if( !mysqli_stmt_prepare($stmt,$sql)){
        header("Location:application.php?error=connection-error");
            exit();
    }
    
    else{
        mysqli_stmt_bind_param($stmt, "ssssssssssssssbbbbbb", $Fullname, $Address,$Email,$PhoneNumber,$Gender,$Dob,$Job,$OfficeAddress,$GradeLevel,$BankName,$AccountName,$AccountType,$AccountNumber,$BVN,$Passport,$MeansOfIdentification,$StaffId,$UtilityBill,$BankStatement,$Payslip);
        mysqli_stmt_execute($stmt);
        
        header("Location:index.html?submission=data-submitted-successfully");
            exit();
        }
   }
   
  
     
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }
    
    else{
    header("Location:application.php");
    exit();
    }
    
    
   
