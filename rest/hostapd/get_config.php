<?php
require_once '../../includes/hostapd.php';

function ConvertHostapdConfArray($arrHostapdConf)
{
    $result = array();
    foreach($arrHostapdConf as $value){
        $entry = explode('=', $value);
        $result[$entry[0]] = $entry[1];
    }
    return $result;
}

$hostapdconfig =  parse_ini_file('/etc/raspap/hostapd.ini');
$convertedConf = ConvertHostapdConfArray(GetHostApdConfig());
echo json_encode(array_merge($hostapdconfig, $convertedConf));