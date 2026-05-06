# Inventory Management System

Simple Inventory Management System built with Laravel 12 and MySQL.

---

## Features

### Authentication
- User Login
- User Register
- Logout

### Product Management
- Add Product
- View Products
- Delete Product
- Increase Stock
- Decrease Stock

### Order Management
- Create Orders
- View Orders
- Automatic Stock Reduction

### Reports
- Total Products
- Total Stock
- Total Orders
- Product Stock Report

---

# Technologies Used

- PHP 8.2+
- Laravel 12
- MySQL
- Bootstrap 5
- Vite
- Laravel Breeze

---

# Installation Guide

## 1. Clone Repository

```bash
git clone https://github.com/Brovek12/erp-inventory.git
```

---

## 2. Open Project Folder

```bash
cd erp-inventory
```

---

## 3. Install Composer Dependencies

```bash
composer install
```

---

## 4. Install Node Modules

```bash
npm install
```

---

## 5. Copy Environment File

```bash
cp .env.example .env
```

For Windows CMD:

```bash
copy .env.example .env
```

---

## 6. Generate Application Key

```bash
php artisan key:generate
```

---

# Database Configuration

Open `.env` file and configure your database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory_management
DB_USERNAME=root
DB_PASSWORD=
```

---

# Run Migration

```bash
php artisan migrate
```

---

# Run Development Server

## Start Laravel Server

```bash
php artisan serve
```

---

## Start Vite Server

```bash
npm run dev
```

---

# Access Application

Open browser:

```txt
http://127.0.0.1:8000
```
