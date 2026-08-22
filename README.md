<div align="center">

# Laravel Logistics & Parcel Courier Tracker

Logistics tracking system with parcel hub dispatching, delivery status webhooks, and SMS delivery OTP check.

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D8.2-blue?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
![laravel](https://img.shields.io/badge/laravel-2563EB?style=for-the-badge&logo=laravel&logoColor=white) ![logistics](https://img.shields.io/badge/logistics-2563EB?style=for-the-badge&logo=logistics&logoColor=white) ![courier](https://img.shields.io/badge/courier-2563EB?style=for-the-badge&logo=courier&logoColor=white) ![tracking](https://img.shields.io/badge/tracking-2563EB?style=for-the-badge&logo=tracking&logoColor=white)

</div>

---

## Key Features

- **Modern Architecture:** Built with clean OOP principles and modern PHP 8.2+ features (Typed properties, Match expressions, Enums, Readonly classes).
- **High Performance & Security:** Input sanitization, prepared statements, CSRF protection, and memory-safe design.
- **PSR Standards:** Complies with PSR-4 (Autoloading), PSR-7 / PSR-15 (HTTP Messages & Middleware), and PSR-12 (Coding Style).
- **Test-Driven:** Ready-to-run unit and integration test suite with PHPUnit.
- **Developer Friendly:** Comprehensive API documentation, typed methods, and instant Docker/Composer setup.

---

## Getting Started

### Requirements
- PHP >= 8.2
- Composer 2.x
- MySQL 8.0+ / SQLite / Redis

### Installation

`ash
# Clone the repository
git clone https://github.com/code-with-rifat/laravel-courier-tracking-api.git

# Navigate into project directory
cd laravel-courier-tracking-api

# Install dependencies via Composer
composer install

# Copy environment configuration
cp .env.example .env

# Run database migrations or initial seeders (if applicable)
php cli.php migrate
`

---

## Directory Structure

`	ext
|-- src/
|   |-- Controllers/        # Request Handlers & Business Controllers
|   |-- Models/             # Domain Entities & Database Wrappers
|   |-- Services/           # Reusable Application Services & Logic
|   |-- Middleware/         # HTTP Middleware & Request Filters
|   |-- Config/             # System Configuration & Database Connector
|-- config/                 # Environment and App Config Files
|-- tests/                  # PHPUnit Test Suite
|-- public/                 # Web Entry Point (index.php)
|-- .env.example            # Environment variables template
|-- composer.json           # Dependency & Autoload definitions
|-- README.md               # Documentation
`

---

## Running Tests

Run the test suite using PHPUnit:

`ash
./vendor/bin/phpunit
`

---

## Author

**Riazul Islam Rifat**
* GitHub: [@code-with-rifat](https://github.com/code-with-rifat)
* Email: [hriazul45@gmail.com](mailto:hriazul45@gmail.com)

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.