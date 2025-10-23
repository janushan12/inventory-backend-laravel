# Inventory Management Backend (Laravel)

A RESTful API built with Laravel for managing product inventory.

## ⚙️ Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
