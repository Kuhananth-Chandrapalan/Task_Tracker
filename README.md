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
# Task_Tracker
Task tracker using Laravel with Filament and Livewire. The system should  allow users to create, update, and delete tasks while providing real-time updates when tasks  are modified.
# 📝 Task Tracker - Laravel Developer Intern Assignment

A sleek and interactive task tracking application built with **Laravel**, **Livewire**, **TailwindCSS**, and **MySQL**.  
This system supports real-time task management, filtering, and modern UI enhancements.

---

## 🚀 Features

- ✅ User Authentication (Login & Register)
- ✅ Create, Edit, Delete tasks
- ✅ Mark tasks as **Completed**
- ✅ Task list filtering (All, Completed, Not Completed)
- ✅ Interactive UI with TailwindCSS
- ✅ Real-time updates using **Livewire**
- ✅ Glassmorphism styled **Welcome Page**
- ✅ Clean and responsive design

---

## 📸 Screenshots

| Welcome Page | Task Dashboard |
<img width="1918" height="964" alt="image" src="https://github.com/user-attachments/assets/99593791-332a-4b62-9d48-8f1aca6c2225" />

<img width="1919" height="945" alt="image" src="https://github.com/user-attachments/assets/b372835b-0c15-44ff-ad3a-04b8bcb823ff" />


---

## ⚙️ Installation

```bash
# Clone the repository
git clone https://github.com/your-username/task-tracker.git
cd task-tracker

# Install dependencies
composer install
npm install && npm run dev

# Copy and configure your .env
cp .env.example .env
php artisan key:generate

# Set your DB credentials in .env and run:
php artisan migrate

# Start the server
php artisan serve
```

##  Testing
Register or login via the welcome page.

Create tasks and mark them completed.

Try filtering and editing tasks.

##  Folder Structure Highlights
app/Livewire/TaskManager.php - Task logic (CRUD, filtering)

resources/views/livewire/task-manager.blade.php - Main UI

resources/views/welcome.blade.php - Glass-style landing

routes/web.php - Route configuration

##  Credits
This application was built as part of a associate software engineer assignment.
Styled using TailwindCSS with glass effect and icons.

##  Author
Kuhananth Chandrapalan
Email: kuhananthchandrapalan2001@gmail.com
GitHub: Kuhananth-Chandrapalan
--


