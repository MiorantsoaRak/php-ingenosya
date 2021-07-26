# Test PHP App
This app was made with CodeIgniter4.
Make sure you have Composer installed before downloading the project.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

## Project setup

Download or clone the project into your local repository
`git clone https://github.com/MiorantsoaRak/php-ingenosya.git`.

Then enter the project directory `cd php-ingenosya`

Run `composer install` to install all CodeIgniter dependencies.

Create the database (here named: `links_utility`), and import the sql file `links_utility.sql` to the newly created database.

Copy `env` to `.env` and in the Database portion of the file, change the corresponding information (host,database name,username, password) according to your local configuration

## Run the app

To run the app, run this command : `php spark serve`.

The app should be available in ``http://localhost:8080`` by default.

