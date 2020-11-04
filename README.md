## Approach

The application is developed utilizing PHP 7.4 and Laravel 8 framework and MySql. Also, It uses HTML, CSS, Javascript Bootstrap and JQuery for developing frontend. This development opted for TDD that comes out of the box with Laravel. Composer package manager is used to manage PHP packages.   

The default Laravel behaviour is use Auto increment in the Model, but this behaviour is change to UUIds. 

## Setup Steps
- Create a database called 'currencyfair' in MySql
- Install required packages
```sh
composer install
```
- Change configuration
Create a .env file in the root for the project directory and paste following sample .env content
```sh
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:7oE68s8PZa2/N9N7x02A3wOwdIqRvlCLf6PBwv+MAHs=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=currencyfair
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
- Change data base settings if required

Change following in the .env file
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=currencyfair
DB_USERNAME=root
DB_PASSWORD=
```
- Issue following command in the root rectory to migrate the tables to newly created database.
```sh
php artisan migrate
```

- To run the application
```sh
php artisan serve
```

- To run the test cases
```sh
php artisan test
```
#### View Postman API Documentation
<a href="https://documenter.getpostman.com/view/12470139/TVYPztZW">Postman Documentation</a>

**BY: Moharajan Suresh Kumar**