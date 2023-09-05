# laravel-sql-server-custom-connector

This package fix error:

```Fatal error: Uncaught PDOException: SQLSTATE[IMSSP]: An invalid attribute was designated on the PDO object```

We are waiting for an official hotfix: https://github.com/microsoft/msphpsql/issues/1474

## Install package

```composer require martinezart87/laravel-sql-server-custom-connector```

## Edit AppServiceProvider

Add:
```$this->app->bind('db.connector.sqlsrv', CustomSqlServerConnector::class);```