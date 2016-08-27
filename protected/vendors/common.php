<?php

class common {

    public static function getTimeStamp($date = "", $format = "Y-m-d") {
        if ($date != "" && !is_numeric($date)) {
            @list($day, $month, $year) = explode('/', $date);
            $date = @$month . '/' . @$day . '/' . @$year;
            return strtotime("$date");
        } else
            return strtotime(date($format));
    }

    public static function getDateTimeFromTimeStamp($timeStamp, $format = "Y-m-d H:i:s") {
        return (!empty($timeStamp) && is_numeric($timeStamp)) ? date($format, $timeStamp) : "";
    }

    public static function getDateTime($date = "now", $format = "Y-m-d H:i:s") {
        return date($format, strtotime("$date"));
    }

    public static function getDateTimeInterval($interval = "+3 day", $format = "Y-m-d H:i:s") {
        $timeStamp = strtotime($interval, strtotime(date("Y-m-d H:i:s")));
        return common::getDateTimeFromTimeStamp($timeStamp, $format);
    }

    public static function getDateTimeIntervalTimeStamp($interval = "+3 day", $date) {
        $timeStamp = strtotime($interval, $date);
        return $timeStamp;
    }

    public static function getTimeRange($lower = 0, $upper = 86400, $step = 3600, $format = 'g:i A') {
        $times = array();
        foreach (range($lower, $upper, $step) as $increment) {
            $increment = gmdate('H:i:s', $increment);

            list( $hour, $minutes ) = explode(':', $increment);

            $date = new DateTime($hour . ':' . $minutes);

            $times[(string) $increment] = $date->format($format);
        }
        return $times;
    }

    public function getAgeFromDate($date) {
        if (!empty($date)):
            $bday = DateTime::createFromFormat(Yii::app()->params->dateFormatPHP, $date);
            $today = new DateTime('00:00:00'); //- use this for the current date
            $diff = $today->diff($bday);
            return array("years" => $diff->y, "months" => $diff->m, "days" => $diff->d);
        else:
            return array("years" => 0, "months" => 0, "days" => 0);
        endif;
    }

    public static function encryptText($string) {
        return md5($string);
    }

    public static function resizeImage($srcPath, $destPath, $width, $height, $quality = "75", $sharpen = "20") {
        $image = Yii::app()->image->load($srcPath);
        $image->resize($width, $height)->quality($quality)->sharpen($sharpen);
        $image->save($destPath);
    }

    public static function getMessage($class, $message) {
        return '<div class="alert alert-dismissable alert-' . $class . '">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		' . $message . '
		</div>';
    }

    public static function p($string) {
        echo "<pre>";
        print_r($string);
        echo "</pre>";
    }

    public static function getDatePicker($model, $attribute, $htmlOptions = array(), $options = array()) {
        $options = $options + array("dateFormat" => Yii::app()->params->dateFormatJS, "changeMonth" => true, 'yearRange' => '1960:2015', "changeYear" => true);
        Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
            "model" => $model,
            "options" => $options,
            'attribute' => $attribute,
            'htmlOptions' => $htmlOptions
        ));
    }

    public static function getDateTimePicker($model, $attribute, $htmlOptions = array(), $mode = "datetime") {
        Yii::app()->controller->widget(
                'ext.jui.EJuiDateTimePicker', array(
            'model' => $model,
            'attribute' => $attribute,
            'htmlOptions' => $htmlOptions,
            'language' => 'en', //default Yii::app()->language
            'mode' => $mode, //'datetime' or 'time' ('datetime' default)
            'options' => array(
                'dateFormat' => Yii::app()->params->dateFormatJS, //'dd.mm.yy',
                'timeFormat' => Yii::app()->params->timeFormatJS, //'hh:mm tt' default'
                'yearRange' => '1960:2015',
                "controlType" => 'select'
            ),
                )
        );
    }

    public static function getTimePicker($model, $attribute, $htmlOptions = array(), $disableTimeRanges = array()) {

        $options = array("step" => 10, "timeFormat" => "H:i:s", "useSelect" => false, /* 'noneOption'=>array('label'=>'Select Time','value'=>''), */ "scrollDefault" => "now", "disableTimeRanges" => array('09:00:00'));
        //$options = !empty($disableTimeRanges) ? $options + array("disableTimeRanges"=>array($disableTimeRanges)) : $options; 
        //common::pr(json_encode($options));exit;
        Yii::app()->controller->widget(
                'ext.timepicker.TimePicker', array(
            'model' => $model,
            'attribute' => $attribute,
            'htmlOptions' => $htmlOptions,
            'options' => $options,
                )
        );
    }

    public static function hoursToSecods($hour) { // $hour must be a string type: "HH:mm:ss"
        $parse = array();
        if (!preg_match('#^(?<hours>[\d]{2}):(?<mins>[\d]{2}):(?<secs>[\d]{2})$#', $hour, $parse)) {
            // Throw error, exception, etc
            throw new RuntimeException("Hour Format not valid");
        }

        return (int) $parse['hours'] * 3600 + (int) $parse['mins'] * 60 + (int) $parse['secs'];
    }

    public static function isDirectory($directoryPath) {
        return is_dir($directoryPath);
    }

    public static function makeDirectory($directoryPath) {
        return @mkdir($directoryPath, 0777);
    }

    public static function removeDirectory($directoryPath) {
        return rmdir($directoryPath.'');
    }

    public static function checkAndCreateDirectory($directoryPath) {
        if (!common::isDirectory($directoryPath)): common::makeDirectory($directoryPath);
        endif;
        return true;
    }

    public static function fileWrite($filePath, $content) {
        $file = fopen($filePath, "w");
        fwrite($file, $content);
        fclose($file);
    }

    public static function copyFile($file, $to_file) {
        @copy($file, $to_file);
    }

    public static function checkActionAccess($pageUrl) {
        return (common::isSuperAdmin()) ? true : in_array($pageUrl, Yii::app()->user->_permissions) ? true : false;
    }

    public static function isSuperAdmin() {
        return (Yii::app()->user->user_group == UsersGroup::SUPER_ADMIN);
    }

    public static function isAdmin() {
        return (Yii::app()->user->user_group == UsersGroup::ADMIN);
    }

    public static function isCustomer() {
        return (Yii::app()->user->user_group == UsersGroup::CUSTOMER);
    }

    public static function isVendor() {
        return (Yii::app()->user->user_group == UsersGroup::VENDOR);
    }

    public static function getTitle($pageUrl) {
//        if (key_exists($pageUrl, Yii::app()->user->_titles)) {
//            return Yii::app()->user->_titles[$pageUrl];
//        } else {
            return "Title not defined";
        //}
    }

    public static function pr($string) {
        echo "<pre>";
        print_r($string);
        echo "</pre>";
    }

    public static function translateText($keyword) {
        return Yii::t("app", $keyword);
    }

    public static function select2($model, $attribute, $data, $htmlOptions = array()) {
        Yii::app()->controller->widget('ext.select2.ESelect2', array(
            'model' => $model,
            'attribute' => $attribute,
            'data' => $data,
            'htmlOptions' => $htmlOptions
        ));
    }

    public static function EmailAddress($email_address, $link = false) {
        return ($link) ? CHtml::Link($email_address, "mailto:" . $email_address) : $email_address;
    }

    public static function getParams($model) {
        $modelName = get_class($model);
        $params = null;
        foreach ($model->attributes as $key => $value):
            $params.= "[" . $modelName . "][" . $key . "]=" . $value . "&amp;";
        endforeach;
        return rtrim($params, "&amp;");
    }

    public static function getCurrecySymbol() {
        return "Rs.";
    }

    public static function formatCurrency($price, $decimal = 2) {
        return common::getCurrecySymbol() . " " . common::setNumberFormat($price, $decimal);
    }

    public static function setNumberFormat($amount, $decimal = 2, $dec_point = ".", $thousands_sep = "") {
        return number_format((float) $amount, $decimal, $dec_point, $thousands_sep);
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public static function getVideoID($url) {
        $pattern = '%^# Match any youtube URL
        (?:https?://)?  # Optional scheme. Either http or https
        (?:www\.)?      # Optional www subdomain
        (?:             # Group host alternatives
          youtu\.be/    # Either youtu.be,
        | youtube\.com  # or youtube.com
          (?:           # Group path alternatives
            /embed/     # Either /embed/
          | /v/         # or /v/
          | /watch\?v=  # or /watch\?v=
          )             # End path alternatives.
        )               # End host alternatives.
        ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
        $%x'
        ;
        $result = preg_match($pattern, $url, $matches);
        if ($result) {
            return $matches[1];
        }
        return false;
    }

    public static function shortText($text, $start, $to) {
        $length = strlen(trim($text));
        if ($length <= $to)
            $displayText = $text;
        else
            $displayText = substr($text, $start, $to) . '...';
        return $displayText;
    }

    public static function zipFilesAndDownload($file_names, $archive_file_name, $file_path, $exit = true) {
        $zip = new ZipArchive();
        //create the file and throw the error if unsuccessful
        if ($zip->open($archive_file_name, ZIPARCHIVE::CREATE) !== TRUE) {
            exit("cannot open <$archive_file_name>\n");
        }
        //add each files of $file_name array to archive
        foreach ($file_names as $files) {
            if (file_exists($file_path . $files)):
                $zip->addFile($file_path . $files, $files);
            endif;
            //  echo $file_path.$files,$files."<br />";
        }
        $zip->close();
        //then send the headers to foce download the zip file
        header("Content-type: application/zip");
        header("Content-Disposition: attachment; filename=$archive_file_name");
        header("Pragma: no-cache");
        header("Expires: 0");
        readfile("$archive_file_name");

        if (file_exists($archive_file_name)) {
            unlink($archive_file_name);
        }
        if ($exit)
            exit;
    }

}
