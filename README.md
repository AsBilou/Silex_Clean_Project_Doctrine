Silex archetype V1.0 (08/March/2013)

Initialisation
=============

- Install dependencies with : 
    php composer.phar install

- Configure '.htaccess' (change RewriteBase line)
    vi .htaccess

Doctrine
======

- Create your own database with phpmyadmin or other

- Uncomment to active doctrine and change arguments
    $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
        'db.options' => array(
            'driver'    => 'pdo_mysql',
            'host'      => 'mysql_read.someplace.tld',
            'dbname'    => 'my_database',
            'user'      => 'my_username',
            'password'  => 'my_password',
            'charset'   => 'utf8',
        ),
    ));

Security
=============

- Configure security.firewalls register in bootstrap.php
