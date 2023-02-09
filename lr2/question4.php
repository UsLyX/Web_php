
<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if(isset($_POST['mail_ok'])){
        mailFunction($to, $subject, $message);
    }
    function mailFunction($to, $subject, $message){
        if(
        $to == $_POST['to'] &&
        $subject == $_POST['subject'] &&
        $message == $_POST['message']
        )
        {
            echo 'Письмо отправлено';
        }else{
            echo 'Не удалось отправить';
        }
    };

    unset($_POST);

?>
<form method="post">
    <input type="text" placeholder="to" name="to" required="required">
    <input type="text" placeholder="subject" name="subject" required="required">
    <textarea name="" id="" cols="30" rows="10" placeholder="message" name="message" required="required"></textarea>
    <button name="mail_ok">mail_ok</button>
</form>