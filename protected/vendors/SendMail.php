<?php

class SendMail {

    public $EMAIL_KEYWORD;
    public $EMAIL_SUBJECT;
    public $EMAIL_CONTENT;
    public $EMAIL_FROM;
    public $EMAIL_TO = array();
    public $EMAIL_TAGS = array();

    public function __construct($EMAIL_KEYWORD) {
        $this->EMAIL_KEYWORD = $EMAIL_KEYWORD;
        $EmailTemplates = EmailTemplates::model()->getEmailTemplate($this->EMAIL_KEYWORD);
        $this->EMAIL_CONTENT = $EmailTemplates->email_content;
        $this->EMAIL_FROM = $EmailTemplates->email_from;
        $this->EMAIL_SUBJECT = $EmailTemplates->email_subject;
    }

    public function setEmailParams() {
        $EMAIL_TAGS_REPLACE = array_keys($this->EMAIL_TAGS);
        $this->EMAIL_CONTENT = str_replace($EMAIL_TAGS_REPLACE, $this->EMAIL_TAGS, $this->EMAIL_CONTENT);

        $message = new YiiMailMessage;
        $message->setBody($this->EMAIL_CONTENT, 'text/html');
        $message->subject = $this->EMAIL_SUBJECT;
        $message->from = $this->EMAIL_FROM;

        if (!empty($this->EMAIL_TO)) : foreach ($this->EMAIL_TO as $TO):
                $message->addTo($TO);
            endforeach;
        endif;
        return $message;
    }

    public function send($instantSend = true) {
        $message = $this->setEmailParams();
        if ($instantSend) {
            Yii::app()->mail->send($message);
            $this->saveEmailLog($this, true);
        } else {
            $this->saveEmailLog($this);
        }
    }

    public function cronSend() {
        $message = $this->setEmailParams();
        Yii::app()->mail->send($message);
        $this->saveEmailLog($this, true);
    }

    public function saveEmailLog($model, $sent = false) {
        if (!empty($model->EMAIL_TO)) : foreach ($model->EMAIL_TO as $TO):
                if (!empty($TO)):
                    $emailLogs = new EmailLogs();
                    $emailLogs->email_from = $model->EMAIL_FROM;
                    $emailLogs->email_to = $TO;
                    $emailLogs->email_content = $model->EMAIL_CONTENT;
                    $emailLogs->is_email_sent = $sent;
                    $emailLogs->created_dt = common::getTimeStamp();
                    $emailLogs->created_by = true;
                    $emailLogs->save(false);
                endif;
            endforeach;
        endif;
    }

}
