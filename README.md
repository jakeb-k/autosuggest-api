# Laravel & Vue Project

## Prerequisites

Before setting up the project, ensure you have the following installed:

- [PHP](https://www.php.net/downloads) (>= 8.0 recommended)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download) & [npm](https://www.npmjs.com/get-npm)
- [Laravel](https://laravel.com/docs/10.x/installation)
- [MySQL](https://dev.mysql.com/downloads/) or another compatible database

## Project Setup

### 1. Clone the Repository
```sh
git clone https://github.com/your-repo-name.git
cd your-repo-name
```

### 2. Install PHP Dependencies
```sh
composer install
```

### 3. Install JavaScript Dependencies
```sh
npm install
```

### 4. Environment Configuration
Copy the `.env.example` file and rename it to `.env`:
```sh
cp .env.example .env
```
Generate the application key:
```sh
php artisan key:generate
```

### 5. Database Configuration
Update your `.env` file with database details:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```
Run migrations to set up the database:
```sh
php artisan migrate --seed
```

### 6. Run the Development Server
Start the backend server:
```sh
php artisan serve
```
Run the frontend development server:
```sh
npm run dev
```

### 7. Access the Application
The backend API will be available at:
```
http://127.0.0.1:8000
```
The frontend application will be available at:
```
http://localhost:5173
```

## Additional Commands

### Running Tests
```sh
php artisan test
```

### Compiling Assets for Production
```sh
npm run build
```

### Clearing Cache
```sh
php artisan cache:clear
php artisan config:clear
```
