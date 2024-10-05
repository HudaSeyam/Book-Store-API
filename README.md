# My Bookstore API

A RESTful API for managing a bookstore, built using the **Laravel framework**. This API allows users to perform CRUD operations on books, and manage users and includes authentication and authorization using **Laravel Sanctum**.

## Features

- **Laravel API Foundations**: 
  - Structured routes and organized controllers
  - Eloquent ORM for interacting with the database
- **CRUD Operations**:
  - Create, read, update, and delete books
  - Pagination, search, and filtering on book resources
- **Authentication & Authorization**:
  - User registration and login system
  - Protected routes using Laravel Sanctum
  - Role-based access control (Admin/User roles)
  - Token-based authentication
- **Book Management**:
  - Manage books with title, author, ISBN, and price attributes
  - Admin-only permissions for adding, editing, and deleting books
  - View details of specific books
- **User Management**:
  - Register and login users with unique roles
  - Logout and invalidate user tokens

## Technologies Used

- **Laravel Framework** 10.x
- **Laravel Sanctum** for API token management
- **MySQL** (or any other supported database)
- **Composer** for PHP dependency management
- **PHP** >= 8.1
- **Postman** (for testing API endpoints)
