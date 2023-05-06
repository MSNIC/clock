<?php
$handle = fopen($_SERVER['DOCUMENT_ROOT']."/latlng_data.csv", "r");
$lineNumber = 1;
while (($raw_string = fgets($handle)) !== false) {
    $row = str_getcsv($raw_string);
    if($row[1]==$_POST['ln']){
        $json = json_encode(array("code"=>$row[0],"pre"=>$row[1],"city"=>$row[2],"coordX"=>$row[5],"coordY"=>$row[6]),JSON_UNESCAPED_UNICODE);
    }
}
fclose($handle);
header('Content-Type: application/json; charset=UTF-8');
echo $json;
?>