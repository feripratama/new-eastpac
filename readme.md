#EASTPAC

## 1. first :

1. ```composer install```
2. rename ```.env.example``` to ```.env```
3. ```php artisan key:generate```

## 2. configuration file .env
### database config :
```
DB_DATABASE=smart_coin
DB_USERNAME=root
DB_PASSWORD=root
```
### smtp config :
```
#connection 1
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smart_coin
DB_USERNAME=root
DB_PASSWORD=

#connection 2
DB_CONNECTION=mysql_admin
DB_HOST_ADMIN=127.0.0.1
DB_PORT_ADMIN=3306
DB_DATABASE_ADMIN=smart_coin_admin
DB_USERNAME_ADMIN=root
DB_PASSWORD_ADMIN=

#gmail smtp
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=youemail@gmail.com
MAIL_PASSWORD=youremailpassword
MAIL_ENCRYPTION=tls
```
### `config/database.php`
```php
'mysql' => [
    'driver' => 'mysql',
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', 'forge'),
    'username' => env('DB_USERNAME', 'forge'),
    'password' => env('DB_PASSWORD', ''),
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'prefix_indexes' => true,
    'strict' => true,
    'engine' => null,
],
// -----------------------------------------------

'mysql_admin' => [
    'driver' => 'mysql',
    'host' => env('DB_HOST_ADMIN', '127.0.0.1'),
    'port' => env('DB_PORT_ADMIN', '3306'),
    'database' => env('DB_DATABASE_ADMIN', 'forge'),
    'username' => env('DB_USERNAME_ADMIN', 'forge'),
    'password' => env('DB_PASSWORD_ADMIN', ''),
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'prefix_indexes' => true,
    'strict' => true,
    'engine' => null,
],
```

## 3. create database :
`database name = smart_coin`

## 4. migrate table to database :
run this command on ```terminal``` or ```cmd``` if you use windows OS.

```bash 
php artisan migrate
```
## 5. insert data to table :
```bash
php artisan db:seed
```

## 6. run 
```bash
composer dump-autoload -o
php artisan storage:link
php artisan serve
```
```http://localhost:8000```

