# Bayanno Hospital Management System

This repository is a CodeIgniter project. It is not a Laravel application and should be run as a CodeIgniter app only.

## Project type
- Framework: CodeIgniter
- PHP version: PHP 8.x
- Database: MySQL
- Local development: PHP built-in server or Apache/Nginx virtual host

## Local startup

1. Open a terminal in the project root.
2. Make sure MySQL is running and the database exists.
3. Start the app with the built-in PHP server:

   php -S localhost:8000

4. Open the app in the browser:

   http://localhost:8000/

   or

   http://localhost:8000/index.php

## Configuration
- Base URL is configured in `application/config/config.php`.
- Database settings are configured in `application/config/database.php`.

## Notes
- Do not use `php artisan serve` for this project. That command belongs to Laravel and is not valid here.
- The project is intended to run as a standalone CodeIgniter application, not mixed with Laravel or any other framework.
