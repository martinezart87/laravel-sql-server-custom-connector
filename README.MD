# laravel-sql-server-custom-connector

This package fix error:

```Fatal error: Uncaught PDOException: SQLSTATE[IMSSP]: An invalid attribute was designated on the PDO object```

~We are waiting for an official hotfix: https://github.com/microsoft/msphpsql/issues/1474~
The official PHP driver patch for SQL Server has been released. There is no need to install this package if you update the driver: https://github.com/microsoft/msphpsql/releases/tag/v5.11.1

## Installation 

```composer require martinezart87/laravel-sql-server-custom-connector```

## Edit AppServiceProvider

At Your Laravel project open App\Providers\AppServiceProvider.php add folowing line:

```use Martinezart87\CustomSqlServerConnector\CustomSqlServerConnector;```

And add into register method following line:

```$this->app->bind('db.connector.sqlsrv', CustomSqlServerConnector::class);```
