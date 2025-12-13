# Simple Learning Management System (LMS)

A simple LMS built with Laravel for instructors and students to create and view courses.

## Group Members
- Glory Rose Ansay
- Jhalen Guadalquiver
- Loise Raphael Padriga

## Frameworks & Technologies Used
- **Backend:** Laravel 11.x (PHP)
- **Database:** MySQL
- **Frontend:** Blade Templates + Tailwind CSS
- **Authentication:** Laravel Breeze

## Features
### Instructor Features:
- Register and login
- Create courses with title, short description, and full content
- Edit own courses
- Delete own courses
- View instructor dashboard with all created courses

### Student Features:
- Register and login
- Browse all available courses
- View course details including full content
- See instructor information and course dates

## Installation Instructions

### Prerequisites
- PHP >= 8.2
- Composer
- MySQL/MariaDB
- Node.js & NPM

### Setup Steps
1. Clone the repository:
```bash
git clone [your-repo-url]
cd simple-lms
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node dependencies:
```bash
npm install
```

4. Create a copy of .env file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure database in `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lms_db
DB_USERNAME=root
DB_PASSWORD=
```

7. Run migrations:
```bash
php artisan migrate
```

8. Build assets:
```bash
npm run build
```

9. Start the development server:
```bash
php artisan serve
```

10. Visit: `http://localhost:8000`

## Deployment Link
[Your deployed application URL]

## Default Test Accounts
- **Instructor:** instructor@test.com / password
- **Student:** student@test.com / password

## License
This project is for educational purposes only.