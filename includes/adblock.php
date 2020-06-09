<?php
require_once 'functions.php';   

/**
 * Manages ad blocking (dnsmasq) configuration
 *
 */
function DisplayAdBlockConfig()
{    $config = getAdBlockConfig();
    echo renderTemplate("adblock", $config);
}
