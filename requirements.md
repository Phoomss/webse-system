# WebSE System - Requirements Summary

## Project Overview
WebSE System is a web application built with the Laravel PHP framework. It appears to be an educational management system with features for managing classrooms, courses, news, activities, and user roles.

## Technology Stack

### Backend
- **Framework**: Laravel 12.x
- **Language**: PHP 8.2+
- **Database**: SQLite (default), with support for MySQL, MariaDB, PostgreSQL, SQL Server
- **Cache**: Redis support included
- **Queue System**: Database-based queue implementation

### Frontend
- **Build Tool**: Vite
- **CSS Framework**: Tailwind CSS 4.x
- **JavaScript**: ES modules
- **HTTP Client**: Axios
- **Development Tool**: Laravel Vite Plugin

### Development Tools
- **Testing**: PHPUnit 11.5.3, Mockery
- **Code Quality**: Laravel Pint, Collision, Laravel Sail
- **Local Development**: Laravel Pail
- **Dependency Management**: Composer (PHP), NPM (JS)

## Application Features

### Public-facing Features
- Homepage with hero slides, news, and activities
- About section (history, laboratory, teacher information)
- Course management with curriculum and tuition details
- News and activities section

### Authentication & Authorization
- Login/Logout functionality
- Role-based access control (Admin, Teacher)
- Middleware-based permission system

### Admin Features
- Full CRUD operations for all content types
- Classroom management
- Content management (news, activities, videos, slides)
- Course and curriculum management
- User management
- Lecturer and teacher profiles

### Teacher Features
- Dashboard with content statistics
- Personal profile management
- Content creation and management (news, activities, videos, slides, courses)
- Content ownership tracking

### Models & Data Management
- Activity
- Course
- CourseCard
- CurriculumTuition
- HeroSlide
- News
- Video
- User
- Classroom
- Lecturer
- Teacher

## Environment Configuration
- **Database**: SQLite by default (configurable)
- **Session**: Database driver
- **Cache**: Database store
- **Queue**: Database connection
- **Broadcasting**: Log driver
- **Mail**: Log driver (configurable)
- **File Storage**: Local disk

## Development Workflow
- **Start Development Server**: `npm run dev` or `composer run dev`
- **Build Assets**: `npm run build`
- **Run Tests**: `composer run test`
- **Artisan Commands**: Available via `php artisan`

## Security Features
- CSRF Protection (Laravel default)
- Role-based access control
- Authentication middleware
- Environment variable management

## File Structure
- **app/**: Application logic, controllers, models, middleware
- **config/**: Configuration files
- **database/**: Migrations, factories, seeders
- **public/**: Web root, assets
- **resources/**: Views, frontend assets
- **routes/**: Route definitions
- **storage/**: Compiled templates, logs, file uploads

## Database Requirements
- SQLite file (default) or MySQL/MariaDB/PostgreSQL server
- Migrations included for schema management
- Foreign key constraints enabled by default for SQLite