<?php
    if(isset($_POST['submit'])) {
        session_start();
        $name = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $message = filter_input(INPUT_POST, 'message');
        $subject = "$name $email - Portfolio mail";
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = $message;
        $_SESSION['nameError'] = '';
        $_SESSION['emailError'] = '';
        $_SESSION['messageError'] = '';
        define('WYMAGANE','To pole jest wymagane!');
        if(!$name) {
            $_SESSION['nameError'] = WYMAGANE;
        }
        if(!$email) {
            $_SESSION['emailError'] = WYMAGANE;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['emailError'] = 'E-mail musi być poprawny!';
        }
        if(!$message) {
            $_SESSION['messageError'] = WYMAGANE;
        }
        if(!$_SESSION['messageError'] && !$_SESSION['emailError'] && !$_SESSION['nameError']) {
            $data = date("h:i:s d.m.Y");
            $mailTo = "kontakt@pawelgrabos.pl";
            $headers .= "Content-Type: text/plain; charset=UTF-8 .\r\n";
            $headers .= "From: $email";
            $body .= "Od:   $name <$email> \r\n";
			$body .= "Data: $data \r\n";
            $body .= "Wiadomość: \r\n\n$message";
            mail($mailTo, $subject, $body, $headers);
            $_SESSION['sent'] = true;
            $_SESSION['name'] = '';
            $_SESSION['email'] = '';
            $_SESSION['message'] = '';
            header("Location: index.php#footer");
        }
    }
    header("Location: index.php#footer");