<?php
require_once '../../includes/hostapd.php';
require_once '../../includes/status_messages.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/app/lib/system.php';
require_once '../../includes/config.php';

exec("ip -o link show | awk -F': ' '{print $2}'", $interfaces);
$status = new StatusMessages();
SaveHostAPDConfig($interfaces, $status);
echo json_encode($status);