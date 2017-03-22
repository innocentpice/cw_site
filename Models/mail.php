<?php

class mail extends Model {
    function __construct(){
        parent::__construct();
        $this->email = new PHPMailer;
        $this->email->SMTPDebug = 0;                              // Enable verbose debug output
        $this->email->isSMTP();                                      // Set mailer to use SMTP
        $this->email->Host = 'cpanel02wh.bkk1.cloud.z.com';  // Specify main and backup SMTP servers
        $this->email->SMTPAuth = true;                               // Enable SMTP authentication
        $this->email->Username = 'webmaster@cwgreat.co.th';                 // SMTP username
        $this->email->Password = 'cwgreat2016';                           // SMTP password
        $this->email->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $this->email->Port = 465;                                    // TCP port to connect to
        $this->email->setFrom('webmaster@cwgreat.co.th', 'CW GREAT CO., LTD.');
        $this->email->addReplyTo('webmaster@cwgreat.co.th', 'CW GREAT CO., LTD.');
        $this->email->isHTML(true);
    }
    function sendMail($to,$toname,$subject,$body,$altbody=''){
        $this->email->addAddress($to, $toname);     // Add a recipient
        $this->email->Subject = $subject;
        $this->email->Body    = $body;
        $this->email->AltBody = $altbody;
        if(!$this->email->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->email->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}