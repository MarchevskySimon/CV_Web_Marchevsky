<?php

if (isset ($_POST['submit'])) {
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "jety258@gmail.com";
    $headers = "From: ".$mail;
    $txt = $message;
}

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");

?>