# Basic Information Project

## Description
This project is about providing basic information regarding its creation, including details about the developer and the current time .

## Setup Instructions

### Prerequisites
Ensure you have the following installed on your system:
- PHP (>=8.0)
- Composer
- Laravel CLI

### Installation Steps

1. **Clone the repository:**
   ```bash
   git clone <repository_url>
   cd <project_folder>
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Set up environment file:**
   ```bash
   cp .env.example .env
   ```

4. **Generate an application key:**
   ```bash
   php artisan key:generate
   ```

5. **Configure the database:**
   - Update `.env` file with your database details.

6. **Run migrations and seeders (if applicable):**
   ```bash
   php artisan migrate --seed
   ```

7. **Start the application:**
   ```bash
   php artisan serve
   ```

Your Laravel API will now be running locally at `http://127.0.0.1:8000`.

---

## API Documentation

### Base URL
```
https://basic-information-1bh3l.kinsta.app/api/
```

### Endpoints

#### Example: Fetch Basic Information
- **URL:** `/basic-information`
- **Method:** `GET`
- **Response Format:**
  ```json
  {
     "status": "Success",
     "email": "ayoemma188@gmail.com",
     "current_datetime": "2025-01-29T13:32:37+00:00",
    "github_url": "https://github.com/tomisin110/basic-information-api",
  }
  ```

---

## More Laravel Development Resources

For hiring Laravel developers, check out:
[Hire PHP Developers](https://hng.tech/hire/php-developers)

---

