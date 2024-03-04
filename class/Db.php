<?php
class Db {
    private $pathToCsv;

     function __construct($pathToCsv = "../csv/reservation.csv") {
        $this->pathToCsv = $pathToCsv;
    }

    function getpathToCsv(){
        return $this->pathToCsv;
    }

    function setpathToCsv($pathToCsv){
        $this->pathToCsv = $pathToCsv;
    }

    function checkIfCsvIsWritable(){
        is_writable($this->pathToCsv);
    }

    function readCsv(){
        return fopen($this->pathToCsv, 'r');
    }

    function openCsv(){
        return fopen($this->pathToCsv, 'ab');
            }

    function writeIntoCsv($file, $array){
        fputcsv($file, $array);
    }

    function closeCsv($file){
        fclose($file);
    }
    public function readFromCsv()
    {
        $data = [];
        $csv = $this->readCsv();

        if ($csv !== false) {
            while (($row = fgetcsv($csv)) !== false) {
                $data[] = $row;
            }

            $this->closeCsv($csv);
        }

        return $data;
    }
}


?>