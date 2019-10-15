<?php
if(isset($_POST['captcha']) &&
   $_POST['captcha'] == '' &&
   $_POST['name'] != '' &&
   $_POST['phone'] != '') {
    $to = 'leshka3333@mail.ru';
    $subject = 'Заявка с InLaw';
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Имя: '.$_POST['name'].'</p>
                    <p>Телефон: '.$_POST['phone'].'</p>
                    <p>Сообщение: '.$_POST['message'].'</p>
                </body>
            </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <from@inlaw.ru>\r\n";

    mail($to, $subject, $message, $headers);
}
?>