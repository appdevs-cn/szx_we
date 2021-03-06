<?php
defined('IN_IA') or define('IN_IA', true);

$we7_config_file = __DIR__ . '/../../../../data/config.php';
$ind_db_file = __DIR__ . '/ind_db.php';
error_reporting(E_ERROR);
try {
    if (file_exists($ind_db_file)) {
        return require($ind_db_file);
    } elseif (file_exists($we7_config_file)) {
        require __DIR__ . '/../../../../data/config.php';
        if (!isset($config['db']['master']))
            $config['db']['master'] = [];

        if (empty($config['db']['master']['host']))
            $config['db']['master']['host'] = $config['db']['host'];

        if (empty($config['db']['master']['port']))
            $config['db']['master']['port'] = $config['db']['port'];

        if (empty($config['db']['master']['database']))
            $config['db']['master']['database'] = $config['db']['database'];

        if (empty($config['db']['master']['username']))
            $config['db']['master']['username'] = $config['db']['username'];

        if (empty($config['db']['master']['password']))
            $config['db']['master']['password'] = $config['db']['password'];
    }
} catch (Exception $e) {
}


return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . $config['db']['master']['host'] . ';port=' . $config['db']['master']['port'] . ';dbname=' . $config['db']['master']['database'],
    'username' => $config['db']['master']['username'],
    'password' => $config['db']['master']['password'],
    'charset' => 'utf8',
    'tablePrefix' => 'hjmall_',
];
