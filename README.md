# Laravel & Vue Project

## Prerequisites

Before setting up the project, ensure you have the following installed:

- [PHP](https://www.php.net/downloads) (>= 8.0 recommended)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download) & [npm](https://www.npmjs.com/get-npm)
- [MySQL](https://dev.mysql.com/downloads/)

## Project Setup

### 1. Clone the Repository
```sh
git clone https://github.com/jakeb-k/autosuggest-api.git
cd autosuggest-api
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
The database details will default to the following:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=autosuggest_api
DB_USERNAME=root
DB_PASSWORD=
```
Run migrations to set up the database:
```sh
php artisan migrate --seed
```

### 6. Run the Development Server

#### [Herd](https://herd.laravel.com)
If using Herd, you can just run the vite client
```sh
npm run dev
```

or 

Start the server:
```sh
php artisan serve
```
And then run the vite client:
```sh
npm run dev
```

### 7. Access the Application
If using Herd the API will be available at:

```
http://autosuggest-api.test
```
Or what the TLD is currently configured to

Else the API will be available at:
```
http://127.0.0.1:8000
```
You can just navigate to the URL to use the designed interface or access the API directly. 

## Additional Commands

### Running Tests
```sh
php artisan test
```



