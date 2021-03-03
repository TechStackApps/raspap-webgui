<?php
require_once '../../includes/hostapd.php';

echo GetServiceStatus() == 'up'? 'true': 'false';