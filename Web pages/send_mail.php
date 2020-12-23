<?php
	session_start();
    $var= $_POST['eventname'];
    $mailaddress = "collegeforumpsgtech@gmail.com";
    $mailpwd ="psgforum2020";
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
	$mailmsg = str_replace("\n",'<br>',$mailMsg);
    $conn=mysqli_connect("localhost","root","","collegeforum");
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465;
    $mail ->IsHTML(true);
    $mail ->Username = $mailaddress;
    $mail ->Password = $mailpwd;
    $mail ->SetFrom($mailaddress);
    $sql ="select * from register where event='$var'";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
      $mail->addReplyTo($mailaddress);
	  while($x=mysqli_fetch_assoc($res))
	  {

		$mail ->addAddress($x['email']);
	  }
	  $mail ->Subject = $mailSub;
      $mail ->Body = $mailmsg;
      if(!$mail->Send())
      {
          $_SESSION['mail_error1']='Mail not sent';
	      header('location:compose_mail.php');
      }
      else
      {
          $_SESSION['mail_success']='Mail sent';
	      header('location:club-admin.php');
      }
    }
    else
    {
        $_SESSION['mail_error2']='Email id not found';
        header('location:compose_mail.php');
    }
?>   

