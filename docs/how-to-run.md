# How to Run the Website

Follow these steps to set up and run the website on your local machine.

## 1. Clone the Project

## 2. Edit Configuration Data

Update the necessary configuration settings in the `AppConstants` file:

```bash
src\App\Config\AppConstants.php
```

Make sure to replace any placeholders or default values with your own configuration data.

### **Database Setup**

If you need to create a database for this project, follow the steps provided in the link below:

[Database Setup Guide](https://github.com/mahima-ucsc/LearnHub/blob/develop/docs/database.md)

## 3. Modify Apache Configuration

Edit the `httpd.conf` file of your Apache server. The location of this file may vary, but a common path is:

C:\xampp\apache\conf\httpd.conf

### Change Allow Override for Directories

Find the following section and modify it:

```
<Directory />
    AllowOverride All
    Require all denied
</Directory>
```

*Note: Instead of allowing override for the root directory (`/`), you can allow it for a specific directory. However, for simplicity, we are applying it globally here.*

### Configure Virtual Hosts

Next, append the following to the `httpd-vhosts.conf` file. A typical path for this file is:

C:\xampp\apache\conf\extra\httpd-vhosts.conf
```
<VirtualHost *:80>
    DocumentRoot "C:\Users\mahima\Documents\UCSC\Group Project 1\learnhub\public"
    ServerName learnhub.local
    <Directory "C:\Users\mahima\Documents\UCSC\Group Project 1\learnhub\public">
        Require all granted
    </Directory>
</VirtualHost>
```

Make sure to replace the path with the location of the `public` folder in your cloned project.

## 4. Edit Hosts File

To ensure the local domain works, update your system's `hosts` file. For Windows 10, the file is located at:

C:\Windows\System32\drivers\etc\hosts

For other operating systems, refer to the article below (skip to the "Edit Manually" section):

[How to Edit Hosts File](https://www.hostinger.com/tutorials/how-to-edit-hosts-file)

Append the following line to the `hosts` file:

```
# XAMPP Php Projects  
127.0.0.1 learnhub.local  
# End of Section
```

## 5. Restart Apache Server and Access the Website

Once the above steps are complete, restart the apache server and open your browser and go to:

http://learnhub.local

The website should now be running locally.