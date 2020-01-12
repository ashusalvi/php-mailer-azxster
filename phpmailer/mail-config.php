<?php
    // Load Composer's autoloader
    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    trait mail
    {   
        // Mail Send function
        function mailSend($to,$subject,$txt) {
            $developementMode = true;
            $mail = new PHPMailer($developementMode);

            try{
                //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'abc@gmail.com';                     // SMTP username
                $mail->Password   = '********';                               // SMTP password
                $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 465;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('azxster@gmail.com', 'azxster');
                $mail->addAddress($to);     // Add a recipient      

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $txt;

                $mail->send();
                //echo 'Message has been sent';
            }catch(Exception $e){
                //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

    }


    class mainClass{
        use mail;
    }
