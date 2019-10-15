<?php
$to = 'postmaster@inlaw.spb.ru';
$subject = 'Заявка с IN LAW';
$message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
                <p>Имя: '.$_POST['name'].'</p>
                <p>Email: '.$_POST['email'].'</p>
                <p>Телефон: '.$_POST['phone'].'</p>   
                <p>Сообщение: '.$_POST['text'].'</p>                        
            </body>
        </html>';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Отправитель <from@inlaw.ru>\r\n";
mail($to, $subject, $message, $headers);
?>