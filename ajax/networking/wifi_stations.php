<?php

require_once '../../includes/wifi_functions.php';

$networks = getWifiStations();

echo renderTemplate('wifi_stations', compact('networks'));
