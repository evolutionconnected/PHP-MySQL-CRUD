#### PHP-MySQL-CRUD
Needs  a MySQL DB with name: php_crud

Create table:
CREATE TABLE users(
    ID int NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
   PRIMARY KEY (ID)
);

------------

LAMP Installation on Ubuntu 20.04:
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04

------------
After installing MySQL, if you encounter problems while setting password, then see this post:

https://www.nixcraft.com/t/mysql-failed-error-set-password-has-no-significance-for-user-root-localhost-as-the-authentication-method-used-doesnt-store-authentication-data-in-the-mysql-server-please-consider-using-alter-user/4233/3

1. Open the terminal application.
2. Terminate the mysql_secure_installation from another terminal using the killall command:
