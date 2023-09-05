<?php

namespace Martinezart87\CustomSqlServerConnector;
use Illuminate\Database\Connectors\SqlServerConnector;

class CustomSqlServerConnector extends CustomSqlServerConnector
{

    protected $options = [
        \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_ORACLE_NULLS => \PDO::NULL_NATURAL,
        \PDO::SQLSRV_ATTR_FETCHES_NUMERIC_TYPE => true,
    ];

}