# Autosuggest API

## Solution Explanation

### Planning & Setup
Before starting development, I outlined a clear plan to structure the implementation efficiently. The approach included:
1. Creating two models and defining their relationships.
2. Generating factories to facilitate test data creation.
3. Writing tests to ensure the logic functioned correctly.
4. Developing a comprehensive seeder with diverse testable data.

### Backend Development
Once the foundational setup was complete, I proceeded with implementing the required functionality:

#### Controller & Route Definition
I created a controller function to handle search queries via a `GET` request.

#### Query Logic
The function performed a `LIKE` query on the `Food` model, filtering results based on the provided search term.

#### Response Handling
- If matches were found, the response returned an array of messages listing the foods and their respective categories.
- If no matches were found, a message indicating the absence of results was returned.

#### Testing
I wrote tests for this functionality to ensure reliability before moving forward.

### Frontend Implementation
With the backend functional, I moved to the frontend:

#### UI Components
Implemented a search input, a clear button, and a display area for the results.

#### Asynchronous Requests
Used **Axios** to send the search query without requiring a page reload.

#### Performance Optimization
Introduced a throttle mechanism to prevent excessive requests and improve efficiency.

#### Formatting & Highlighting
Processed the returned messages and replaced instances of the search query within the text, wrapping them in `<b>` tags for emphasis.

#### Styling & Refinements
Applied CSS adjustments to ensure a clean and user-friendly interface.

### Version Control & Best Practices
Throughout development:
- Work was conducted on **separate branches** for the backend, frontend, and tests.
- Once verified and refined, each branch was merged back into the `main` branch following best practices.

This structured approach ensured a well-tested, performant, and maintainable implementation.


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



