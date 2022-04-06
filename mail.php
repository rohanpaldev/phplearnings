<?php
    $to_email = "rohan.pal@bonamisoftware.com";
    $subject = "Simple Email Test via PHP";
    $body = "Hi, This is test email send by PHP Script";
    $headers = "From: rohan.pal@bonamisoftware.com";
    if (mail("rohan.pal@bonamisoftware.com", $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email";
    } else {
        echo "Email sending failed...";
    }
    


?>