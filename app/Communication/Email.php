<?php

namespace App\Communication;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Email{
    /** 
     * SMTP Access Credentials 
     * @var string
    */
    const HOST = 'smtp.gmail.com';
    const USER = 'globetek.contato@gmail.com';
    const PASS = 'globetek123456';
    const SECURE = 'TLS';
    const PORT = 587;
    const CHARSET = 'UTF-8';

    /**
     * Send error message
     * @var string
     */
    private $error;

    /**
     * Method responsible for returning the submission error message
     * @var string
     */
    public function getError(){
        return $this -> error;
    }

    /**
     * Responsible method for sending the email
     * @param string/array $addresses
     * @param string $body
     * @param string $body
     * @param string/array $attachments
     * @param string/array $ccs
     * @param string/array $bccs
     * @return boolean
     */
    public function sendEmail($senderName, $senderEmail, $addresses, $subject, $body, $attachments = [], $ccs = [], $bccs = []){
        # Clear the error message
        $this -> error = '';

        # PHPMailer instance
        $obMail = new PHPMailer(true);

        try{
            # SMTP Access Credentials
            $obMail -> isSMTP(true);
            $obMail -> Host= self::HOST;
            $obMail -> SMTPAuth = true;
            $obMail -> Username = self::USER;
            $obMail -> Password = self::PASS;
            $obMail -> SMTPSecure = self::SECURE;
            $obMail -> Port = self::PORT;
            $obMail -> CharSet = self::CHARSET;

            # Sender
            $obMail -> setFrom($senderEmail, $senderName);

            # Recipient
            $addresses = is_array($addresses) ? $addresses : [$addresses];
            foreach($addresses as $address){
                $obMail -> addAddress($address);
            }

            # Attachments
            $attachments = is_array($attachments) ? $attachments : [$attachments];
            foreach($attachments as $attachment){
                $obMail -> addAttachment($attachment);
            }

            # CC
            $ccs = is_array($ccs) ? $ccs : [$ccs];
            foreach($ccs as $cc){
                $obMail -> addCC($cc);
            }

            # BCC
            $bccs = is_array($bccs) ? $bccs : [$bccs];
            foreach($bccs as $bcc){
                $obMail -> addBCC($bcc);
            }

            # Email content
            $obMail -> isHTML(true);
            $obMail -> Subject = $subject;
            $obMail -> Body = $body;

            return $obMail -> send();

        }catch(PHPMailerException $e){
            $this -> error = $e -> getMessage();
            return false;
        }
    }
}