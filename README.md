# SysMVC

## 📌 Project Information
**SysMVC** is a system developed by **Marco Costa** (**sysmvc@syspanel.com.br**), with source code licensed under the **MIT License**.

This software is offered for free and can be used, modified, and distributed under the terms of the MIT License.

Project website: [https://sysmvc.syspanel.com.br](https://sysmvc.syspanel.com.br)

Github: https://github.com/syspanel/SysMVC.git

### Support the Project
If you find this project useful, consider supporting its development with a donation via PayPal:

[![Donate via PayPal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/donate/?business=marcocosta@gmx.com&currency_code=USD)

---

## 🚀 Installation Tutorial

### ✅ Prerequisites
- **PHP 7.4** or higher
- **Composer** (dependency manager for PHP)
- **Web Server** (Apache or Nginx)
- **MySQL** or another compatible database

### 🔧 Step-by-Step Guide

#### 1️⃣ Unzip the File
Download and unzip the SysMVC file to your local environment:

    bash
    unzip sysmvc.zip -d sysmvc
    cd sysmvc
    
    2️⃣ Install Dependencies
    
    Use Composer to install the project dependencies:
    
    composer install
    
    3️⃣ Configure the Environment
    
    Copy the .env.example file to .env and configure your environment variables:
    
    cp .env.example .env
    
    Open the .env file and edit the following lines with your information:
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    
    4️⃣ Set Permissions
    
    Change the permissions for the storage and cache directories to ensure the web server can write to them:
    
    chmod -R 775 storage
    chmod -R 775 bootstrap/cache
    
    5️⃣ Generate the Application Key
    
    php bin/console generate:app-key
    
    6️⃣ Run Migrations
    
    Run the migrations to create the tables in the database:
    
    php bin/console migrate
    
    7️⃣ Configure the Web Server
    📌 Apache
    
    Add the following configuration to your Apache configuration file:
    
    <VirtualHost *:80>
        ServerName sysmvc.local
        DocumentRoot /path/to/sysmvc/public
    
        <Directory /path/to/sysmvc/public>
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>
    
    📌 Nginx
    
    Add the following configuration to your Nginx configuration file:
    
    server {
        listen 80;
        server_name sysmvc.local;
        root /path/to/sysmvc/public;
    
        index index.php index.html index.htm;
    
        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }
    
        location ~ \.php$ {
            include snippets/fastcgi-php.conf;
            fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        }
    }

📦 Dependencies Used

The project uses the following third-party packages, each with its respective license:
✅ Packages with MIT License

    Illuminate Database → illuminate/database
    Monolog → monolog/monolog
    BladeOne → eftec/bladeone
    Twig → twig/twig
    Symfony Console → symfony/console
    Phinx → robmorgan/phinx
    Defuse Encryption → defuse/php-encryption
    Random Compatibility → paragonie/random_compat
    Rakit Validation → rakit/validation
    Carbon → nesbot/carbon
    Flysystem → league/flysystem
    Intervention Image → intervention/image
    Symfony Cache → symfony/cache
    Predis Redis Client → predis/predis
    PHP Dependency Injection → php-di/php-di
    Symfony Dotenv → symfony/dotenv
    BladeOne HTML → eftec/bladeonehtml
    Pecee SimpleRouter → pecee/simple-router
    Nyholm PSR7 → nyholm/psr7
    FakerPHP Faker → fakerphp/faker
    Symfony Mailer → symfony/mailer

📜 Terms of Use

This project is licensed under the MIT License.

You can use, copy, modify, merge, publish, distribute, sublicense, or sell copies of the Software, as long as the license and copyright notice are included in all copies or substantial portions of the Software.

The Software is provided "as is", without warranties of any kind. For more details, see the MIT License.

For more information, contact: sysmvc@syspanel.com.br

### Support the Project
If you find this project useful, consider supporting its development with a donation via PayPal:

[![Donate via PayPal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/donate/?business=marcocosta@gmx.com&currency_code=USD)

© 2025 Marco Costa - All rights reserved under the MIT License.
