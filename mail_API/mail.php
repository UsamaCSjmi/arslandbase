<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit_leasing_form'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST;
        $name = "";
        $email  = "";
        $phone = "";
        $looking_for = "";
        $budget = "";
        $page = "Leasing";
        $message = "";
        if ($data) {
            if(isset($data['email'])){
                $from = $data['email'];
            }
            if(isset($data['name'])){
                $name = $data['name'];
            }
            if(isset($data['mobile'])){
                $phone = $data['mobile'];
            }
            if(isset($data['looking_for'])){
                $looking_for = $data['looking_for'];
            }
            if(isset($data['budget'])){
                $budget = $data['budget'];
            }
            if(isset($data['message'])){
                $message = $data['message'];
            }
            
            $response = 'success';
        } 
        else {
            $response = 'empty';
            echo ($response);
            die();
        }
    }
    
    $header = "https://arslandbase.com/".$page;
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id='mailer@arslandbase.com';
        $pass='ajhdgDCu22#$nsd';
        $to='info@arslandbase.com';
        // $to='nhusain34@gmail.com';
        $subject="Leasing Property Requirement from ARSLandbase.com";
        $message1 = "\nEmail : ".$from."\n\n Name : ".$name."\n\n Phone : ".$phone."\n\n Looking For : ".$looking_for."\n\n Budjet : ".$budget."\n\n Write to Us : ".$message;
    }
    else{
        header("Location : ".$header);
        die();
    }
    
    
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPDebug = 0;
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $id;                     //SMTP username
    $mail->Password   = $pass;                               //SMTP password
    $mail->Port       = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit SMTPS encryption
    //Recipients
    $mail->setFrom($id,'arslandbase.com - Leasing');
    $mail->addAddress($to);     //Add a recipient
    
    //Content
    $mail->Subject = $subject;
    $mail->Body    = $message1;
    
    
    $mail->send();
    if($mail){
        echo "success";
    }
    else {
        echo "failed";
    }
    header("Location : ".$header);
}
elseif(isset($_POST['submit_contact_form'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST;
        $name = "";
        $email  = "";
        $phone = "";
        $city = "";
        $from = "";
        $page = "";
        if ($data) {
            if(isset($data['email'])){
                $from = $data['email'];
            }
            if(isset($data['name'])){
                $name = $data['name'];
            }
            if(isset($data['mobile'])){
                $phone = $data['mobile'];
            }
            if(isset($data['city'])){
                $city = $data['city'];
            }
            if(isset($data['req_page'])){
                $page = $data['req_page'];
            }
            $response = 'success';
        } 
        else {
            $response = 'empty';
            echo ($response);
            die();
        }
    }
    
    $header = "https://arslandbase.com/".$page;
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id='mailer@arslandbase.com';
        $pass='ajhdgDCu22#$nsd';
        $to='info@arslandbase.com';
        // $to='nhusain34@gmail.com';
        $subject="Someone Contacted you from ARSLandbase.com";
        $message1 = "\nEmail : ".$from."\n\n Name : ".$name."\n\n Phone : ".$phone."\n\n City : ".$city;
    }
    else{
        header("Location : ".$header);
        die();
    }
    
    
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPDebug = 0;
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $id;                     //SMTP username
    $mail->Password   = $pass;                               //SMTP password
    $mail->Port       = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit SMTPS encryption
    //Recipients
    $mail->setFrom($id,'arslandbase.com - Contact');
    $mail->addAddress($to);     //Add a recipient
    
    //Content
    $mail->Subject = $subject;
    $mail->Body    = $message1;
    
    
    $mail->send();
    if($mail){
        echo "success";
    }
    else {
        echo "failed";
    }
    header("Location : ".$header);
}
elseif(isset($_POST['submit_quick_enq'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST;
        $name = "";
        $email  = "";
        $phone = "";
        $message = "";
        $from = "";
        $page = "";
        if ($data) {
            if(isset($data['email'])){
                $from = $data['email'];
            }
            if(isset($data['name'])){
                $name = $data['name'];
            }
            if(isset($data['mobile'])){
                $phone = $data['mobile'];
            }
            if(isset($data['message'])){
                $message = $data['message'];
            }
            if(isset($data['req_page'])){
                $page = $data['req_page'];
            }
            $response = 'success';
        } 
        else {
            $response = 'empty';
            echo ($response);
            die();
        }
    }
    
    $header = "https://arslandbase.com/".$page;
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id='mailer@arslandbase.com';
        $pass='ajhdgDCu22#$nsd';
        $to='info@arslandbase.com';
        // $to='nhusain34@gmail.com';
        $subject="Quick Enquiry from ARSLandbase.com";
        $message1 = "\nEmail : ".$from."\n\n Name : ".$name."\n\n Phone : ".$phone."\n\n Message : ".$message;
    }
    else{
        header("Location : ".$header);
        die();
    }
    
    
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPDebug = 0;
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $id;                     //SMTP username
    $mail->Password   = $pass;                               //SMTP password
    $mail->Port       = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit SMTPS encryption
    //Recipients
    $mail->setFrom($id,'arslandbase.com - Contact');
    $mail->addAddress($to);     //Add a recipient
    
    //Content
    $mail->Subject = $subject;
    $mail->Body    = $message1;
    
    
    $mail->send();
    if($mail){
        echo "success";
    }
    else {
        echo "failed";
    }
    header("Location : ".$header);
}
elseif(isset($_POST['submit_subscription'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST;
        $email  = "";
        $from = "";
        $page = "";
        if ($data) {
            if(isset($data['email'])){
                $from = $data['email'];
            }
            if(isset($data['req_page'])){
                $page = $data['req_page'];
            }
            $response = 'success';
        } 
        else {
            $response = 'empty';
            echo ($response);
            die();
        }
    }
    
    $header = "https://arslandbase.com/".$page;
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id='mailer@arslandbase.com';
        $pass='ajhdgDCu22#$nsd';
        $to='info@arslandbase.com';
        // $to='nhusain34@gmail.com';
        $subject="New Subscription from ARSLandbase.com";
        $message1 = "\nEmail : ".$from;
    }
    else{
        header("Location : ".$header);
        die();
    }
    
    
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPDebug = 0;
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $id;                     //SMTP username
    $mail->Password   = $pass;                               //SMTP password
    $mail->Port       = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit SMTPS encryption
    //Recipients
    $mail->setFrom($id,'arslandbase.com - Contact');
    $mail->addAddress($to);     //Add a recipient
    
    //Content
    $mail->Subject = $subject;
    $mail->Body    = $message1;
    
    
    $mail->send();
    if($mail){
        echo "success";
    }
    else {
        echo "failed";
    }
    header("Location : ".$header);
}
elseif(isset($_POST['submit_career_form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $tnc = $_POST['tnc'];
    if($tnc == ""){
        $tnc = "Not Accepted";
    }
    $page = $_POST['req_page'];
    $resume = $_FILES['resume'];
    $file = "";
    if($resume['name']!=''){
        $file=rand(111111111,999999999).'_'.$resume['name'];
        move_uploaded_file($resume['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/images/resumes/".$file);
    }
    $header = "https://arslandbase.com/".$page;
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id='mailer@arslandbase.com';
        $pass='ajhdgDCu22#$nsd';
        $to='info@arslandbase.com';
        // $to='nhusain34@gmail.com';
        $subject="Candidate Approached from ARSLandbase.com";
        $message1 = "<br>Email : ".$from."<br><br> Name : ".$name."<br><br> Mobile : ".$mobile."<br><br> Resume : <a href='https://arslandbase.com/images/resumes/".$file."'>View</a> <br><br> T&C Accepted : ".$tnc;
    }
    else{
        header("Location : ".$header);
        die();
    }
    
    
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPDebug = 0;
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $id;                     //SMTP username
    $mail->Password   = $pass;                               //SMTP password
    $mail->Port       = 465;                                    
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit SMTPS encryption
    //Recipients
    $mail->setFrom($id,'arslandbase.com - Career');
    $mail->addAddress($to);     //Add a recipient
    $mail->IsHTML(true);
    
    //Content
    $mail->Subject = $subject;
    $mail->Body    = $message1;
    
    
    $mail->send();
    if($mail){
        echo "success";
    }
    else {
        echo "failed";
    }
    header("Location : ".$header);
}

?>
