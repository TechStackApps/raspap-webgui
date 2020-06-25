<?php
require_once '../../includes/dhcp.php';

$status = new StatusMessages();
StartDhcp($status);
echo json_encode($status);
