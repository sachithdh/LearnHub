# Database Setup Guide

This guide will help you set up the database for the project using `cli.php` to create the database from a `.sql` file.

## Steps to Create the Database

### 1. Specify the Correct `.sql` File
In the `cli.php` file, you need to point to the correct `.sql` file that will be used to create your database schema. 

To do this, open the `cli.php` file and ensure that the `$sql_file` variable is pointing to the right file:
```php
$sql_file = file_get_contents("./database.sql");