<?php

class sendEmailPlug {

    private $type = '';
    private $sendEmail = 'operations@hirelib.com';
    private $sendEmailName = '众人识才';
    private $sendEmailPassword = 'aQLFuh94DERjCr';
    private $sendEmailPort = '465';
    private $sendEmailHost = 'smtp.exmail.qq.com';
    private $sendEmailSubject = '';
    private $receiptEmail = '';
    private $sendEmailContent = '';
    private $sendEmailObject;
    private $sendEmailParams;

    public function __construct($sendEmail, $title, $content) {

        if (!empty($sendEmail) && !empty($title) && !empty($content)) {

            $this->receiptEmail = $sendEmail;

            $this->sendEmailSubject = $title;

            $this->sendEmailContent = $content;
        }

        include_once PLUGCONFIGPATH.'/PHPMailer-master/PHPMailerAutoload.php';

        $this->sendEmailObject = new PHPMailer;
    }

    public function send() {

        $this->setSendEmailAttr();
    }

    public function setFile($path,$file_name){

        if(!empty($path) && !empty($file_name)){

            $this->sendEmailObject->AddAttachment($path,$file_name);

        }
    }

    private function setSendEmailAttr() {

        $this->sendEmailObject->isSMTP();

        $this->sendEmailObject->Host = $this->sendEmailHost;

        $this->sendEmailObject->SMTPAuth = true;

        $this->sendEmailObject->CharSet = 'utf-8';

        $this->sendEmailObject->Username = $this->sendEmail;

        $this->sendEmailObject->Password = $this->sendEmailPassword;

        $this->sendEmailObject->SMTPSecure = 'ssl';

        $this->sendEmailObject->Port = $this->sendEmailPort;

        $this->sendEmailObject->From = $this->sendEmail;

        $this->sendEmailObject->FromName = $this->sendEmailName;

        $this->sendEmailObject->addAddress($this->receiptEmail);

        $this->sendEmailObject->isHTML(true);

        $this->sendEmailObject->Subject = $this->sendEmailSubject;

        $this->sendEmailObject->Body = $this->sendEmailContent;

        if (!$this->sendEmailObject->send()) {

            $this->res = 0;
        } else {

            $this->res = 1;
        }
    }

}

?>