<?php

$array = $fields = array(); $i = 0;
$csvPath = LOCAL_PATH . 'inc/testimonials.csv';
$handle = @fopen($csvPath, "r");
if ($handle) {
    while (($row = fgetcsv($handle, 4096)) !== false) {
        if (empty($fields)) {
            $fields = $row;
            continue;
        }
        foreach ($row as $k=>$value) {
            $array[$i][$fields[$k]] = $value;
        }
        $i++;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
// echo "<pre>";
// var_dump($array);
// echo "</pre>";
// echo "<h1>" . count($array) . "</h1>";
?>
