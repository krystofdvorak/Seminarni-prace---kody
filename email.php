<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];
        
        $mailTO = "dvorak.krystof@zsvratislavovo.cz";
        $headers = "Od : ".$mailFrom;
        $txt = "Prisel ti email od ".$name.".\n\n".$message;

        mail($mailTO, $subject, $txt, $headers);
        header("Location: kontakt.html?mailsend");

    }


?>