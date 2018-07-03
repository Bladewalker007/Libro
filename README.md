# LIBRO 

The basic idea behind this project is, social reading. people can explore books and make friends on the way. LIBRO is project that I made for my school project, it contains a book **recommendation** system and full admin panel to manage books. Upcoming versions will contain social networking and more accurate recommendation algorithm.

## Getting Started

The project is developed on PHP and the database used is MySql. The database file is provided **libro.sql** and should be imported to the local machine,
the credientials for connection to the database should be provided in the "config.php" file, 

```
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'DB_username');
   define('DB_PASSWORD', 'DB_password');
   define('DB_DATABASE', 'Database_name');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

```

### Prerequisites

If the project is being used in windows machine the xampp or any similar web server solution can be used, since the project is web based so a modern web browser is recommended example : Google Chrome



## Deployment

To deploy the project onto a live system, a webserver will be needed along with a domain.

## Built With

* [PHP](http://php.net/) - Language Used
* [MySQL](https://www.mysql.com/) - Database used
* [HTML & CSS]- Used for markup and Styling
* [javascript]- Used for display logic



## Authors

* **Nikhil Pandey** - [nikhil-web](https://github.com/nikhil-web)


