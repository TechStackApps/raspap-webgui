<?php
require_once '../../includes/dhcp.php';

$status = new StatusMessages();
StopDhcp($status);
echo json_encode($status);
