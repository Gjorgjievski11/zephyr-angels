# Zephyr Angels — Deployment & Hosting Guide

This document covers everything needed to deploy the Zephyr Angels website on a new server, or migrate it from one host to another.

---

## Tech Stack Overview

| Layer | Technology |
|---|---|
| Language | PHP 8.3+ |
| Framework | Laravel 13 |
| Admin Panel | Filament v5 |
| Database | MySQL |
| Frontend Build | Vite / Node.js |
| Web Server | Nginx or Apache |

---

## Server Requirements

Before starting, make sure the server has the following:

- **PHP 8.3 or higher** with extensions: `pdo_mysql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`, `curl`, `fileinfo`, `gd` or `imagick`
- **MySQL 8.0+**
- **Composer** (PHP dependency manager)
- **Node.js 18+** and **npm**
- **Git**
- A web server: **Nginx** (recommended) or **Apache**

---

## Step 1 — Clone the Repository

SSH into your server and clone the project into the desired directory:

```bash
git clone https://github.com/Gjorgjievski11/zephyr-angels.git /var/www/zephyr-angels
cd /var/www/zephyr-angels
```

> If you are migrating from an existing server instead of cloning fresh, copy the project folder over via `rsync` or an SFTP client, then proceed from Step 2.

---

## Step 2 — Install PHP Dependencies

```bash
composer install --no-dev --optimize-autoloader
```

---

## Step 3 — Install & Build Frontend Assets

```bash
npm install
npm run build
```

This compiles all CSS and JavaScript into the `public/build/` directory.

---

## Step 4 — Configure the Environment

Copy the example environment file and open it for editing:

```bash
cp .env.example .env
```

Then edit `.env` with your server's actual values:

```env
APP_NAME="Zephyr Angels"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=zephyr_angels
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

FILESYSTEM_DISK=public

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email@domain.com
MAIL_PASSWORD=your_email_password
MAIL_FROM_ADDRESS="noreply@yourdomain.com"
MAIL_FROM_NAME="Zephyr Angels"
```

> **Important:** Set `APP_DEBUG=false` and `APP_ENV=production` on live servers. Never leave debug mode on in production.

---

## Step 5 — Generate the Application Key

```bash
php artisan key:generate
```

This sets the `APP_KEY` value in your `.env` file. The app will not function without it.

---

## Step 6 — Set Up the Database

Create the database on your MySQL server:

```sql
CREATE DATABASE zephyr_angels CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'your_db_user'@'localhost' IDENTIFIED BY 'your_db_password';
GRANT ALL PRIVILEGES ON zephyr_angels.* TO 'your_db_user'@'localhost';
FLUSH PRIVILEGES;
```

Then run the migrations:

```bash
php artisan migrate --force
```

---

## Step 7 — Migrating an Existing Database

If you are moving the site from an existing server (not a fresh install), export the database from the old server:

```bash
# On the OLD server:
mysqldump -u root -p zephyr_angels > zephyr_angels_backup.sql
```

Transfer the file to the new server, then import it:

```bash
# On the NEW server:
mysql -u your_db_user -p zephyr_angels < zephyr_angels_backup.sql
```

After importing, skip `php artisan migrate` and jump to Step 8.

---

## Step 8 — Set Up File Storage

The application stores uploaded images and files in `storage/app/public`. Create the symbolic link that makes them publicly accessible:

```bash
php artisan storage:link
```

If you are **migrating** from another server, also copy over the storage folder contents from the old server so uploaded files aren't lost:

```bash
# On the OLD server:
rsync -avz /var/www/zephyr-angels/storage/app/public/ user@new-server:/var/www/zephyr-angels/storage/app/public/
```

---

## Step 9 — Set Correct File Permissions

The web server needs write access to the `storage` and `bootstrap/cache` directories:

```bash
chown -R www-data:www-data /var/www/zephyr-angels
chmod -R 755 /var/www/zephyr-angels/storage
chmod -R 755 /var/www/zephyr-angels/bootstrap/cache
```

> Replace `www-data` with the correct web server user if your system uses a different one (e.g. `nginx`, `apache`, or `nobody`).

---

## Step 10 — Optimize for Production

Run these commands to cache config, routes, and views for better performance:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:cache-components
```

---

## Step 11 — Web Server Configuration

### Nginx (recommended)

Create a new site config at `/etc/nginx/sites-available/zephyr-angels`:

```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/zephyr-angels/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
        fastcgi_hide_header X-Powered-By;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Enable the site and restart Nginx:

```bash
ln -s /etc/nginx/sites-available/zephyr-angels /etc/nginx/sites-enabled/
nginx -t
systemctl restart nginx
```

### Apache

Make sure `mod_rewrite` is enabled, then ensure the document root points to `/var/www/zephyr-angels/public`. The included `.htaccess` file in the `public/` folder handles URL rewriting automatically.

---

## Step 12 — SSL Certificate (HTTPS)

It is strongly recommended to set up HTTPS. Using Certbot with Let's Encrypt is the easiest option:

```bash
apt install certbot python3-certbot-nginx
certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

After obtaining the certificate, update `APP_URL` in `.env` to use `https://`.

---

## Step 13 — Admin Panel Access

The Filament admin panel is available at:

```
https://yourdomain.com/admin
```

To create the first admin user, run:

```bash
php artisan make:filament-user
```

You will be prompted to enter a name, email address, and password.

---

## Quick Reference — Command Cheatsheet

| Task | Command |
|---|---|
| Install dependencies | `composer install --no-dev` |
| Build frontend | `npm install && npm run build` |
| Generate app key | `php artisan key:generate` |
| Run migrations | `php artisan migrate --force` |
| Link storage | `php artisan storage:link` |
| Cache for production | `php artisan config:cache && php artisan route:cache && php artisan view:cache` |
| Clear all caches | `php artisan optimize:clear` |
| Create admin user | `php artisan make:filament-user` |

---

## Troubleshooting

**Blank page / 500 error after deployment**
Check the Laravel log at `storage/logs/laravel.log`. The most common causes are a missing `APP_KEY`, wrong database credentials, or missing storage permissions.

**Images not showing**
Make sure you ran `php artisan storage:link` and that `FILESYSTEM_DISK=public` is set in `.env`.

**Admin panel not loading properly**
Run `php artisan filament:cache-components` and `php artisan view:clear`, then hard-refresh the browser.

**CSS/JS not loading**
Run `npm run build` again and confirm the `public/build/` directory was created.
