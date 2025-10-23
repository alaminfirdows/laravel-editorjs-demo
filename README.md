# Laravel EditorJS Demo

A simple Laravel application that demonstrates how to use the [EditorJS](https://editorjs.io/) library to create a WYSIWYG editor. This application uses the [alaminfirdows/laravel-editorjs](https://packagist.org/packages/alaminfirdows/laravel-editorjs) package to handle the render the editor content.

To learn more about how to use the package, check out the [documentation](https://github.com/alaminfirdows/laravel-editorjs)

or intall the package via composer

```bash
composer require alaminfirdows/laravel-editorjs
```

## Installation

Step 1: Clone the repository

```bash
git clone git@github.com:alaminfirdows/laravel-editorjs-demo.git
```

Step 2: Install the package dependencies

```bash
composer install

yarn install && yarn run build
```

Step 3: Create a `.env` file

```bash
cp .env.example .env
```

Step 4: Generate an application key

```bash
php artisan key:generate
```

Step 5: Run the migrations

```bash
php artisan migrate --force
```

Step 6: Run the development server

```bash
php artisan serve
```

## Usage

Visit `http://localhost:8000` in your browser to see the editor in action.
