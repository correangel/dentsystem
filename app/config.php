<?php

// =======================================
// --- CONFIGURAÇÕES DO BANCO DE DADOS --- 
define('DSN', 'mysql:host=localhost;dbname=dentsystem');
define('USER', 'root');
define('PASS', '');
define('OPTIONS', [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ]);