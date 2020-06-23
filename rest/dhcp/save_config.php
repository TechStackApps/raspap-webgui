<?php
require_once '../../includes/dhcp.php';

$status = new StatusMessages();
SaveDhcpConfig($status);
echo json_encode(GetDhcpConfig());