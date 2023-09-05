<?php 

namespace MyPackage;

use Illuminate\Support\ServiceProvider;

class CustomSQLServerProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('db.connector.sqlsrv', CustomSqlServerConnector::class);
    }
}