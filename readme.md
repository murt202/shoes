# E-commerce Website

The project is a simple e-commerce website that is built using Laravel.

## Getting Started

### Prerequisites

* You have PHP >= 7.2 installed on your system.
* You have composer installed on your system.
* You have SQL database setup on your system.

### Installing

To install PHP, Apache and MariaDB on your system you can install XAMMP or WAMP using the following links

* XAMMP : [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)
* WAMP : [https://sourceforge.net/projects/wampserver/](https://sourceforge.net/projects/wampserver/)

Alternately you can install and setup PHP and SQL individually as well.  

To install Composer use the following link: [https://getcomposer.org/download/](https://getcomposer.org/download/)

Next, to install all the dependencies for the project run the following command
```
composer install
```

After the dependencies are installed without any errors, make sure your SQL server is running and then navigate to the project directory in the terminal and run the migrate command to create the database tables and fill in some dummy values

```
php artisan migrate 
```
### Configuration

The config file contains the default database username, password and database used by many SQL databases. If you have a different username, password and database name you will have to make the changes in the .env file in the following section

```
DB_HOST=localhost
DB_DATABASE=<database name>
DB_USERNAME=<username>
DB_PASSWORD=<password>

```


## Run the project 

To run the project on your local environment you need to open the terminal in your project directory and run the following command

```
php artisan serve
```

This will serve your application on [http://localhost:8000/home](http://localhost:8000/home)

## Screenshots

Home Page:

![Home Page](/images/home.png)

Login Page:

![Login Page](/images/login.png)

Cart Page:

![Cart Page](/images/cart.png)

## Authors

**Murtaza Rajagara** - [https://github.com/murt202](https://github.com/murt202)


