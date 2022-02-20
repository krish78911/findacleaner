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
            $message .= "<p style='font-size: 20px;'><strong>Request From:</strong><p>";
            $message .= "<p><strong>First Name: </strong>".$details['firstname']."<p>";
            $message .= "<p><strong>Last Name: </strong>".$details['lastname']."<p>";
            $message .= "<p><strong>E-Mail: </strong>".$details['email']."<p>";
            $message .= "<p><strong>Phone: </strong>".$details['phone']."<p>";
            $message .= "<p style='font-size: 20px;'><strong>Requirements Below:</strong><p>";
            $message .= "<p><strong>Choose One or Multiple dates between these dates depending on amount of work.</strong><p>";
            $message .= "<p><strong>From Date: </strong>".$details['fromdate']."<p>";
            $message .= "<p><strong>To Date: </strong>".$details['todate']."<p>";
            $message .= "<p><strong>Choose time between these hours.</strong><p>";
            $message .= "<p><strong>From Time (0 to 24): </strong>".$details['fromtime']."<p>";
            $message .= "<p><strong>To Time (0 to 24): </strong>".$details['totime']."<p>";
            $message .= "<p><strong>City: </strong>".$details['city']."<p>";
            $message .= "<p><strong>Vacuuming: </strong>".$details['vacuuming']."<p>";
            $message .= "<p><strong>Moping: </strong>".$details['moping']."<p>";
            $message .= "<p><strong>Metersquare &#13217; : </strong>".$details['metersquare']."<p>";
            $message .= "<p><strong>Kitchencleaning: </strong>".$details['kitchencleaning']."<p>";
            $message .= "<p><strong>Bathroomcleaning: </strong>".$details['bathroomcleaning']."<p>";
            $message .= "<p><strong>Total Price: </strong>€".$details['totalprice']."<p>";
        $message .= '</body></html>';

        // Sending email to advertiser
        if(mail($to, $subject, $message, $headers)){
            echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }

        $messageToUser = '<html><body>';
            $messageToUser .= "<p><strong>Copy of email sent to advertiser</strong><p>";
            $messageToUser .= "<p style='font-size: 20px;'><strong>Request From:</strong><p>";
            $messageToUser .= "<p><strong>First Name: </strong>".$details['firstname']."<p>";
            $messageToUser .= "<p><strong>Last Name: </strong>".$details['lastname']."<p>";
            $messageToUser .= "<p><strong>E-Mail: </strong>".$details['email']."<p>";
            $messageToUser .= "<p><strong>Phone: </strong>".$details['phone']."<p>";
            $messageToUser .= "<p style='font-size: 20px;'><strong>Requirements Below:</strong><p>";
            $messageToUser .= "<p><strong>Choose One or Multiple dates between these dates depending on amount of work.</strong><p>";
            $messageToUser .= "<p><strong>From Date: </strong>".$details['fromdate']."<p>";
            $messageToUser .= "<p><strong>To Date: </strong>".$details['todate']."<p>";
            $messageToUser .= "<p><strong>Choose time between these hours.</strong><p>";
            $messageToUser .= "<p><strong>From Time (0 to 24): </strong>".$details['fromtime']."<p>";
            $messageToUser .= "<p><strong>To Time (0 to 24): </strong>".$details['totime']."<p>";
            $messageToUser .= "<p><strong>City: </strong>".$details['city']."<p>";
            $messageToUser .= "<p><strong>Vacuuming: </strong>".$details['vacuuming']."<p>";
            $messageToUser .= "<p><strong>Moping: </strong>".$details['moping']."<p>";
            $messageToUser .= "<p><strong>Metersquare &#13217; : </strong>".$details['metersquare']."<p>";
            $messageToUser .= "<p><strong>Kitchencleaning: </strong>".$details['kitchencleaning']."<p>";
            $messageToUser .= "<p><strong>Bathroomcleaning: </strong>".$details['bathroomcleaning']."<p>";
            $messageToUser .= "<p><strong>Total Price: </strong>€".$details['totalprice']."<p>";
        $messageToUser .= '</body></html>';

        // Sending Email to User
        $toUser = $details['email'];
        $fromAdvertiser = $details['advertemail'];
        $subjectUser = 'Copy of Cleaning Request sent to Advertiser';

        // To send HTML mail, the Content-type header must be set
        $headersUser  = 'MIME-Version: 1.0' . "\r\n";
        $headersUser .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // Create email headers
        $headersUser .= 'From: '.$fromAdvertiser."\r\n".
            'Reply-To: '.$fromAdvertiser."\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(mail($toUser, $subjectUser, $messageToUser, $headersUser)){
            echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }
    }
}