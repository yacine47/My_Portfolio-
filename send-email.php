<!-- <?php


if(!empty($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'zitaniyacine629@gmail.com';


    $mailHeaders = 'Name:' .$name 
    ."\r\n Email: ".$email
    ."\r\n Message: ".$message . "\r\n";


    if(mail($email,$name,$mailHeaders)){
        echo "OK";
    }

    echo "Something went wrong. Please try again.";


}
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php.php';
// require 'phpmailer/src/SMTP.php';

// $to = 'yacine.zitani@univ-constantine2.dz';
// // Replace this with your own email address

// function url(){
//   return sprintf(
//     "%s://%s",
//     isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
//     $_SERVER['SERVER_NAME']
//   );
// }

// if ($_POST) {

//   $name = trim(stripslashes($_POST['name']));
//   $email = trim(stripslashes($_POST['email']));
//   $subject = trim(stripslashes($_POST['subject']));
//   $contact_message = trim(stripslashes($_POST['message']));

//   if ($subject == '') { $subject = "Contact Form Submission"; }

//   // Set Message
//   $message = ''; // Initialize message variable
//   $message .= "Email from: " . htmlspecialchars($name) . "<br />";
//   $message .= "Email address: " . htmlspecialchars($email) . "<br />";
//   $message .= "Message: <br />";
//   $message .= nl2br(htmlspecialchars($contact_message));
//   $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

//   // Create a new PHPMailer instance
//   $mail = new PHPMailer;

//   // Set up SMTP
//   $mail->isSMTP();
//   $mail->Host = 'yacine.zitani@univ-constantine2.dz'; // Specify main and backup SMTP servers
//   $mail->SMTPAuth = true; // Enable SMTP authentication
//   $mail->Username = 'yacine.zitani@univ-constantine2.dz'; // SMTP username
//   $mail->Password = 'rafinz'; // SMTP password
//   $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
//   $mail->Port = 587; // TCP port to connect to

//   // Set From email and name
//   $mail->setFrom($email, $name);
//   $mail->addAddress($to); // Add a recipient

//   // Content
//   $mail->isHTML(true); // Set email format to HTML
//   $mail->Subject = $subject;
//   $mail->Body    = $message;
//   $mail->AltBody = strip_tags($message); // Plain text version for non-HTML mail clients

//   if($mail->send()) {
//     echo 'OK';
//   } else {
//     echo 'Something went wrong. Please try again.';
//   }
// }
?> -->