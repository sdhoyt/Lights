<?php
$sendPath = '/var/www/Lights/codesend ';
$outletLight = $_POST['outletId'];
$outletStatus = $_POST['outletStatus'];

if ($outletLight == "1" && $outletStatus == "on") {
    $rfCodes = array(21811);
} else if ($outletLight == "1" && $outletStatus == "off") {
    $rfCodes = array(21820);
} else if ($outletLight == "2" && $outletStatus == "on") {
    $rfCodes = array(21955);
} else if ($outletLight == "2" && $outletStatus == "off") {
    $rfCodes = array(21964);
} else if ($outletLight == "3" && $outletStatus == "on") {
    $rfCodes = array(22275);
} else if ($outletLight == "3" && $outletStatus == "off") {
    $rfCodes = array(22284);
} else if ($outletLight == "4" && $outletStatus == "on") {
    $rfCodes = array(351491);
} else if ($outletLight == "4" && $outletStatus == "off") {
    $rfCodes = array(351500);
} else if ($outletLight == "5" && $outletStatus == "on") {
    $rfCodes = array(357635);
} else if ($outletLight == "5" && $outletStatus == "off") {
    $rfCodes = array(357644);
} else if ($outletLight == "6" && $outletStatus == "on") {
    $rfCodes = array(349491, 349635, 349955, 351491, 357635);
} else if ($outletLight == "6" && $outletStatus == "off") {
        $rfCodes = array(349500, 349644, 349964, 351500, 357644);
}


foreach ($rfCodes as $rfCode) {
        shell_exec($sendPath . $rfCode);
        sleep(1);
}

echo json_encode(array('success' => true));
?>
