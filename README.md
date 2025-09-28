# My App - School Management System

This is a comprehensive school management system built with Laravel 11. It provides a platform for managing various aspects of a school, including classes, subjects, teachers, students, and timetables. The application features a role-based access control system to ensure that users only have access to the information and functionalities relevant to their roles.

## Features

*   **User Management:** Secure user registration and login system.
*   **Role-Based Access Control (RBAC):** Different user roles with specific permissions (Admin, Teacher, Student, Parent, School).
*   **Class Management:** Create, read, update, and delete classes.
*   **Subject Management:** Manage subjects and assign them to classes.
*   **Teacher Management:** Assign teachers to classes and subjects.
*   **Student Management:** Manage student information and enrollment.
*   **Timetable Management:** Create and manage class timetables.
*   **Profile Management:** Users can view and update their profiles.
*   **Password Management:** Users can change their passwords.

## User Roles

The application has the following user roles:

*   **Admin:** Has full access to all features and can manage all aspects of the system.
*   **School:** Can manage school-specific information, including classes, teachers, and students.
*   **Teacher:** Can manage their assigned classes and subjects, view timetables, and interact with students.
*   **Student:** Can view their class schedule, subjects, and other relevant information.
*   **Parent:** Can view their child's progress and other related information.

## Technologies Used

*   **Backend:** Laravel 11, PHP
*   **Frontend:** Blade templates, HTML, CSS, JavaScript, jQuery, Bootstrap
*   **Database:** MySQL (or any other database supported by Laravel)
*   **Development Environment:** XAMPP, Composer, Node.js

## Installation

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/myapp.git
    cd myapp
    ```

2.  **Install PHP dependencies:**
    ```bash
    composer install
    ```

3.  **Install JavaScript dependencies:**
    ```bash
    npm install
    ```

4.  **Create a copy of the `.env.example` file:**
    ```bash
    cp .env.example .env
    ```

5.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

## Configuration

1.  Open the `.env` file and configure your database settings:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=myapp
    DB_USERNAME=root
    DB_PASSWORD=
    ```

## Database Migration

Run the database migrations to create the necessary tables:

```bash
php artisan migrate
```

You can also seed the database with some initial data:

```bash
php artisan db:seed
```

## Running the Application

1.  **Start the Vite development server:**
    ```bash
    npm run dev
    ```

2.  **Start the Laravel development server:**
    ```bash
    php artisan serve
    ```

The application will be accessible at `http://localhost:8000`.

## Testing

To run the application tests, use the following command:

```bash
php artisan test
```