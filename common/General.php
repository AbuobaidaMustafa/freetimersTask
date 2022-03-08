<?php

class General {
    public static function writeEvent($Activity, $fileName = "delibox_log") {

        $TimeRef = date('Y-m-d H:i:s');
        $date = date('Y-m-d');
        if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
            $fileName = "C:/log/freetimers" . "_" . $date . ".log";
        } else {
            $fileName = "/var/log/freetimers" . "_" . $date . ".log";
        }

        $Handle = fopen($fileName, 'a');
        if (!$Handle) {
            $Handle = fopen($fileName, 'w');
        }
        $Data = '--- ' . $TimeRef . ' -- ' . $Activity . "~\n";
        fwrite($Handle, $Data);
        fclose($Handle);
    }
    


         

}
