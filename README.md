<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======

# ✅ Laravel Task Tracker

A simple task tracking application built with **Laravel 12** and **Livewire 3**, allowing users to create, update, filter, and manage tasks with real-time toast notifications.

---


## 🚀 Features

- ✅ User Authentication (Login & Register)
- ✅ Create, Edit, Delete tasks
- ✅ Mark tasks as **Completed**
- ✅ Task list filtering (All, Completed, Not Completed)
- ✅ MySQL-compatible schema
- ✅ Real-time updates using **Livewire**
- ✅ Glassmorphism styled **Welcome Page**
- ✅ Clean and responsive design

---

---

## 🚀 Tech Stack

- Laravel 12
- Livewire 3
- Tailwind CSS
- MySQL (XAMPP)
- SQLite (dev)
- PHP 8.2+

---

## 🛠️ Prerequisites

Before starting, make sure you have:

- [XAMPP](https://www.apachefriends.org/index.html) installed and running
- [Composer](https://getcomposer.org/) installed
- [Git](https://git-scm.com/) (optional but helpful)
- [Node.js](https://nodejs.org/) (for frontend build)
- A code editor like VS Code

---

## ⚙️ Installation

### 1. 🧬 Clone the Repository

```bash
git clone https://github.com/YOUR_USERNAME/Task_Tracker.git
cd Task_Tracker
```

### 2. 🧩 Install PHP Dependencies

```bash
composer install
```

### 3. 🧑‍🎨 Install JS/CSS Dependencies

```bash
npm install
npm run build
```

> Or use `npm run dev` if you're actively developing

---

## 🔌 Configure Environment

### 4. 🧾 Copy `.env` File

```bash
cp .env.example .env
```

### 5. 🔑 Generate App Key

```bash
php artisan key:generate
```

---

## 🗃️ Database Setup (XAMPP MySQL)

### 6. ✅ Start Apache and MySQL from XAMPP Control Panel

### 7. 💽 Create a Database

Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin) and:

- Click "New"
- Name it `task_tracker`
- Click "Create"

### 8. 🧬 Update `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_tracker
DB_USERNAME=root
DB_PASSWORD=
```

---

## 🧱 Run Migrations

```bash
php artisan migrate
```

> This will create tables like `users`, `tasks`, etc.

---

## 🔓 Optional: Add Authentication (if not added)

If you're using Laravel Breeze:

```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run build
php artisan migrate
```

---

## ▶️ Run the App

```bash
php artisan serve
```

Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---
##  Folder Structure Highlights
app/Livewire/TaskManager.php - Task logic (CRUD, filtering)

resources/views/livewire/task-manager.blade.php - Main UI

resources/views/welcome.blade.php - Glass-style landing

routes/web.php - Route configuration


--

## 🎨 Project Structure

```bash
app/
├── Http/
│   └── Livewire/
│       └── TaskManager.php
resources/
└── views/
    └── livewire/
        └── task-manager.blade.php
database/
├── migrations/
│   ├── create_users_table.php
│   ├── create_tasks_table.php
│   └── add_completed_to_tasks_table.php
```

---

## ✅ Sample User Flow

1. Register/Login
2. Create tasks using the form
3. Filter tasks (All / Completed / Not Completed)
4. Edit, mark complete/incomplete, or delete
5. See real-time feedback via toast notifications

---
##  Testing
Register or login via the welcome page.

Create tasks and mark them completed.

Try filtering and editing tasks.



## ✅ Screenshots
| Welcome Page | Task Dashboard |
<img width="1918" height="964" alt="image" src="https://github.com/user-attachments/assets/99593791-332a-4b62-9d48-8f1aca6c2225" />
<img width="1919" height="985" alt="image" src="https://github.com/user-attachments/assets/d96c3cc0-9e0b-4139-aa85-8c4590685fcd" />


---



---

## 🧑‍💻 Developer Notes

- Use `php artisan tinker` for quick DB testing
- Use `php artisan migrate:fresh --seed` to reset the database

---

##  Credits
This application was built as part of a associate software engineer assignment.
Styled using TailwindCSS with glass effect and icons.

##  Author
Kuhananth Chandrapalan
Email: kuhananthchandrapalan2001@gmail.com
GitHub: Kuhananth-Chandrapalan



