# PHP Boilerplate Project

This is a simple PHP boilerplate project to help you get started with building PHP applications quickly. It includes a basic structure, environment configuration using `vlucas/phpdotenv`, and a router setup using `nikic/fast-route`.

## Project Structure

```bash
php-boilerplate/
├── public/
│ ├── index.php # Entry point for the application
├── src/ # Place your application source files here
├── vendor/ # Composer dependencies
├── .env # Environment variables file
├── .gitignore # Git ignore file
├── composer.json # Composer configuration file
└── README.md # Project documentation
```

## Uses

- PHP 8.3.11
- Composer (for managing dependencies)

## Setup Instructions

1. **Clone the repository**:

```bash
git clone https://github.com/your-username/php-boilerplate.git
cd php-boilerplate
````

2. **Install Composer dependencies**:

```bash
composer install
```

3. **Set up environment variables**:

- Create a `.env` file in the root directory based on the example below:

```bash
APP_ENV=development
APP_DEBUG=true
APP_NAME="PHP Boilerplate"
```

4. **Run the application**:

```bash
php -S localhost:8000 -t public
```

   Open your browser and navigate to `http://localhost:8000`.

## Usage

- The project includes a basic router setup using `nikic/fast-route` for handling routes.
- Environment variables are loaded from the `.env` file using `vlucas/phpdotenv`. Make sure your `.env` file is correctly formatted, and values with spaces are enclosed in double quotes.

## Contributing

If you find any issues or want to contribute, feel free to create a pull request or open an issue.

## License

This project is open-source and available under the [MIT License](LICENSE).
