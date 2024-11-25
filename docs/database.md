# Database Setup Guide

This guide will help you set up the database for the project using `cli.php` to create the database from a `.sql` file.

## Steps to Create the Database

### 1. Specify the Correct `.sql` File
In the `cli.php` file, you need to point to the correct `.sql` file that will be used to create your database schema. 

To do this, open the `cli.php` file and ensure that the `$sql_file` variable is pointing to the right file:
```php
$sql_file = file_get_contents("./database.sql");
```

### 2. Configure Database Connection Details

Database connection details are specified in the `/src/App/Config/AppConstants.php` file. You need to provide the correct information to connect to your database.

To configure these details:

1. Open the `/src/App/Config/AppConstants.php` file in a text editor.

2. Define the following constants with your database connection details:

   ```php
   public const DB_HOST = 'localhost';
   public const DB_PORT = 3306;
   public const DB_NAME = 'learnhub';
   public const DB_USER = 'root';
   public const DB_PASS = '';
   ```

### 3. Run the Database Creation Command

To apply the `.sql` script and create the database schema, run the following command in your terminal:

```bash
composer run createdb
```