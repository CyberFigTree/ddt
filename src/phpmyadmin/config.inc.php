<?php
$cfg['PmaAbsoluteUri'] = './';
$cfg['Servers'][1]['host'] = 'mysql';
$cfg['Servers'][1]['auth_type'] = 'cookie';
$cfg['Servers'][1]['AllowNoPassword'] = false;
$cfg['LoginCookieValidity'] = 36000;
$cfg['ForceSSL'] = false;
$cfg['CookieSameSite'] = 'Strict';
$cfg['CheckConfigurationPermissions'] = false;
$cfg['Servers'][1]['ssl'] = false; // Ensure SSL is disabled
?>

