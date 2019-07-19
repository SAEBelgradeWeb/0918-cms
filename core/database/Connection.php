<?php
namespace Cms\Core\Database;
class Connection {
    public static function make($db_config)
    {
        try {
            return new \PDO(
                "{$db_config['driver']}:host={$db_config['host']};dbname={$db_config['dbname']}",
                $db_config['user'],
                $db_config['password'],
                $db_config['options']);
        } catch (\PDOException $exception){
            echo "<b>There is some error in connecting to the database:</b><br>";
            echo $exception->getMessage();
            die;
        }
    }
}


