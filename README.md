# Financial System
Balance Management System with PHP. developed by Érick Firmo (BR) http://erickfirmo.dev


## Requirements
- PHP >= 7.1.11
- <a href="https://github.com/erickfirmo/.htaccess/blob/master/.htaccess" target="_blank">URL rewrite</a>


## Install
Clone the project:

```console
$ git clone https://github.com/erickfirmo/Financial-System.git

```
Installing the dependencies:




```console

// Installing the back-end dependencies
$ composer install

// Entering the public folder
$ cd public

//Installing the front-end dependencies

$ npm install
```


### Settings

Application:
```php
<?php
  return [
  
    'APP_NAME' => 'Financial System',
    'APP_URL' => '<server>'
    
];
  

```

Database:
```php
<?php

  return [

    'HOST' => 'localhost',
    'DB_USER' => '<user>',
    'DB_PASSWORD' => '<password>',
    'DB_NAME' => '<database_name>',
    'DB_DRIVER' => 'mysql',
    'CHARSET' => 'utf-8'
];

  
```
