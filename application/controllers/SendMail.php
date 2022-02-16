<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . "controllers/BaseController.php"; // include base controller
// Register Controller
header("Access-Control-Allow-Origin: *");

class SendMail extends BaseController {
    public function sendEmail() {
        $details = $this->input->post();

        $to = $details['advertemail'];
        $subject = 'Cleaning Request';
        $from = $details['email'];
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Compose a simple HTML email message
        $message = '<html><body>';
            $message .= "<p>First Name: ".$details['firstname']."<p>";
            $message .= "<p>Last Name: ".$details['lastname']."<p>";
            $message .= "<p>E-Mail: ".$details['email']."<p>";
            $message .= "<p>Phone: ".$details['phone']."<p>";
            $message .= "<p>Requirements<p>";
            $message .= "<p>city: ".$details['city']."<p>";
            $message .= "<p>vacuuming: ".$details['vacuuming']."<p>";
            $message .= "<p>moping: ".$details['moping']."<p>";
            $message .= "<p>metersquare: ".$details['metersquare']."<p>";
            $message .= "<p>kitchencleaning: ".$details['kitchencleaning']."<p>";
            $message .= "<p>bathroomcleaning: ".$details['bathroomcleaning']."<p>";
        $message .= '</body></html>';
        
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }
    }
}