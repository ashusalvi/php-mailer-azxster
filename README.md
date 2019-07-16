# php-mailer-azxster
************************************************
PHP mailer make simple 

/*
*@ Ashitosh Salvi
* I try to simplify the PHPMailer 
* PHPMailer Object Oriented
*THANK YOU
*
*/

#Step 1 : Open phpmailer/mail-confiq.php
         -setup smtp detail 
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'abc@gmail.com';                     // SMTP username
                $mail->Password   = '***************';                               // SMTP password
                $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 465;                                    // TCP port to connect to
                
#Step 2 : Include mail-confiq.php 
        -include 'phpmailer/mail-config.php';
       
#Step 3 :Create Object
        -$mainClass = new mainClass();
      
#Step 4 : Call mailSend() function
        -$to = abc@gmail.com;
         $subject = "PHP Mailer Object Oriented";
         $txt = 'Message';
         $mainClass->mailSend($to,$subject,$txt);
      
      
     ****************************Thank You***********************
