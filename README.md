# Zephyr Angels

Website for **Zephyr Angels**, an angel investing firm. Built with Laravel 13 and a Filament-powered admin panel for managing site content.

---

## Tech Stack

| | |
|---|---|
| Backend | PHP 8.3 / Laravel 13 |
| Admin Panel | Filament v5 |
| Frontend | Blade · Tailwind CSS v4 · Vite |
| Database | MySQL |

---

## Requirements

- PHP 8.3+
- Composer
- Node.js 18+ & npm
- MySQL 8.0+

---

## Local Setup

```bash
# 1. Clone and enter the project
git clone https://github.com/Gjorgjievski11/zephyr-angels.git
cd zephyr-angels

# 2. Install dependencies
composer install
npm install

# 3. Configure environment
cp .env.example .env
php artisan key:generate

# 4. Set up your database credentials in .env, then run migrations
php artisan migrate

# 5. Link storage
php artisan storage:link

# 6. Start the dev server
composer run dev
```

`composer run dev` spins up the Laravel server, queue worker, and Vite all at once via `concurrently`.

---

## Admin Panel

Accessible at `/admin`. To create your first user:

```bash
php artisan make:filament-user
```

---

## Building for Production

```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan filament:cache-components
```

For full deployment and hosting instructions, see [DEPLOYMENT.md](DEPLOYMENT.md).

---
