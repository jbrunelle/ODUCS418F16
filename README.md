# ODUCS418F16

Fall 2016 ODU CS 418/518
========
This GitHub repository will be the basis for submitting assignments for the Fall 2016 CS418/518 course - Web Programming at Old Dominion University

Instructor: Dr. Justin F. Brunelle [mail](mailto:jfbrunel@odu.edu)

<a href='http://www.cs.odu.edu/~jbrunelle/cs518/'>Course homepage</a>

## Student Project Repositories 
Below are links to students' project repositories for the class based on their submission in <a href="http://www.cs.odu.edu/~jbrunelle/cs518/assignments/assignment1.html">assignment 1</a>. 

* [cs_name](https://github.com/USERNAME) 



## Some useful demo day information

### To be run for each student:

```sh
$ docker run -it -p 80:80 -e MYSQL_PASS="M0n@rch$" -v `pwd`:/app jbrunelle/lamptest
```

### In the instance that the database creation SQL is not provided
 
```sql
CREATE DATABASE IF NOT EXISTS `TheDatabase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TheDatabase`;
```


### Enable PHP error reporting

```php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
```

### Create, Maintain, and Destroy Sessions in PHP
NOTE: Examples are from Mat Kelly's Spring 2015 CS418 offering!!

A demo to serve as an example for how to deal with sessions in PHP to maintain a persistent user login. The scripts have been deployed at http://www.cs.odu.edu/~mkelly/semester/2015_spring/cs418/sessionsExample/ but should be portable enough to be run anywhere that can execute PHP scripts (e.g., your XAMPP installation). The [credentials previously provided](https://github.com/machawk1/ODUCS418/blob/spring2015/credentials.txt) can be used to log into the system.
* [index.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/index.php) - checks if a user is logged in. If so, lists questions. If not, redirects to login.php.
* [login.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/login.php) - provides an HTML form for interfacing with the credentials verification script (header.php).
* [header.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/header.php) - included in the login.php script (whose form targets itself) to check if post data has been supplied and check it against a pseudo-database in db.php
* [db.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/db.php) - a pseudo-database to replicate what would be done with MySQL queries but simply returns arrays.
* [question.php](https://github.com/machawk1/ODUCS418/blob/spring2015/sessionsExample/question.php) - takes a HTTP GET parameter of id, which causes a "query" to the data in db.php and returns the appropriate content.
