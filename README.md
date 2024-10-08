# Bookstore API

A RESTful API for managing a bookstore, built using the **Laravel framework**. This API allows users to perform CRUD operations on books, and manage users and includes authentication and authorization using **Laravel Sanctum**.

## Features

- **Laravel API Foundations**: 
  - Structured routes and organized controllers
  - Eloquent ORM for interacting with the database
- **CRUD Operations**:
  - Create, read, update, and delete books
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
  
## API Endpoints
### Authentication

| Method | Endpoint        | Description           | Auth Required |
|--------|-----------------|-----------------------|---------------|
| POST   | `/api/register` | Register a new user    | No            |
| POST   | `/api/login`    | Login a user           | No            |
| POST   | `/api/logout`   | Logout a user          | Yes           |

### Book Management (Admin-only for Write Operations)

| Method | Endpoint           | Description                     | Auth Required | Role  |
|--------|--------------------|----------------------------------|---------------|-------|
| GET    | `/api/books`        | Get a list of all books          | No            | Any   |
| POST   | `/api/books`        | Create a new book                | Yes           | Admin |
| GET    | `/api/books/{id}`   | Get details of a specific book   | No            | Any   |
| PUT    | `/api/books/{id}`   | Update an existing book          | Yes           | Admin |
| DELETE | `/api/books/{id}`   | Delete a book                    | Yes           | Admin |

## Installation Instructions

Follow these steps to install and run the project locally.

### Step 1: Clone the Repository
First, clone the repository from GitHub:
```bash
git clone https://github.com/HudaSeyam/Book-Store-API.git
cd book-store-api
```

### Step 2: Set Up the Environment
Install the dependencies:
```bash
composer install
```
Copy the example environment file and update the environment variables:
```bash
cp .env.example .env
```
Set up the following variables in the .env file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Generate the Laravel application key:
```bash
php artisan key:generate
```
### Step 3: Run Migrations
Run the database migrations to create the necessary tables:
```bash
php artisan migrate
```
### Step 4: Start the Development Server
Now, you can start the Laravel development server:
```bash
php artisan serve
```
Visit http://localhost:8000 in your browser to see the application.
