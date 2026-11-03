# Laravel Blog CRUD with Reports Module

## Student Information
- **Name:** [Janna Rhea Ybanez]
- **Course:** IT9 – Web Development

## Features
- Standard Blog CRUD (Create, Read, Update, Delete)
- Reports Module
- Date filtering for reports (Start Date / End Date)
- PDF Export using `barryvdh/laravel-dompdf`
- CSV Export

## Setup Instructions
1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Copy `.env.example` to `.env` and configure your database settings.
4. Run `php artisan key:generate`.
5. Run `php artisan migrate` to create the tables.
6. Run `php artisan serve` to start the application.