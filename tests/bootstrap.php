<?php
/**
 * Spiral Framework, SpiralScout LLC.
 *
 * @author    Anton Titov (Wolfy-J)
 */
define('SPIRAL_INITIAL_TIME', microtime(true));

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);
mb_internal_encoding('UTF-8');

//Composer
require dirname(__DIR__) . '/vendor/autoload.php';

\Spiral\Database\Tests\BaseTest::$config = [
    'debug'     => false,
    'sqlite'    => [
        'driver' => \Spiral\Database\Driver\MySQL\MySQLDriver::class,
        'check'  => function () {
            return !in_array('sqlite', \PDO::getAvailableDrivers());
        },
        'conn'   => 'sqlite::memory:',
        'user'   => 'sqlite',
        'pass'   => ''
    ],
    'mysql'     => [
        'driver' => \Spiral\Database\Driver\MySQL\MySQLDriver::class,
        'check'  => function () {
            return !in_array('mysql', \PDO::getAvailableDrivers());
        },
        'conn'   => 'mysql:host=127.0.0.1:13306;dbname=spiral',
        'user'   => 'root',
        'pass'   => 'root'
    ],
    'mysql56'   => [
        'driver' => \Spiral\Database\Driver\MySQL\MySQLDriver::class,
        'check'  => function () {
            return !in_array('mysql', \PDO::getAvailableDrivers());
        },
        'conn'   => 'mysql:host=127.0.0.1:13305;dbname=spiral',
        'user'   => 'root',
        'pass'   => 'root'
    ],
    'postgres'  => [
        'driver' => \Spiral\Database\Driver\Postgres\PostgresDriver::class,
        'check'  => function () {
            return !in_array('pgsql', \PDO::getAvailableDrivers());
        },
        'conn'   => 'pgsql:host=127.0.0.1:15432;dbname=spiral',
        'user'   => 'postgres',
        'pass'   => 'postgres'
    ],
    'sqlserver' => [
        'driver' => \Spiral\Database\Driver\SQLServer\SQLServerDriver::class,
        'check'  => function () {
            return !in_array('sqlsrv', \PDO::getAvailableDrivers());
        },
        'conn'   => 'sqlsrv:Server=127.0.0.1:11433;Database=tempdb',
        'user'   => 'sa',
        'pass'   => 'SSpaSS__1'
    ],
];