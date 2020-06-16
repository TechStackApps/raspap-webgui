<?php
require_once '../../includes/hostapd.php';

if (isset($_POST['StartHotspot']) || isset($_POST['RestartHotspot'])) {
    echo 'restart';
    echo json_encode(RestartHotSpot(GetHostApdConfig()));
} else if(isset($_POST['StopHotspot'])) {
    echo json_encode(StopHotspot());
}