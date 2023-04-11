
# Movie Quotes

This Laravel project generates random quotes with images and movie names. When clicking on a movie name, it takes you to a second page where a list of quotes and pictures belonging to the film are shown. The project also has an admin panel where you can add, edit, and delete movies and quotes.


## Table of contents
- [Prerequisites](#prerequisites)
- [Tech Stack](#tech-stack)
- [Getting Started](#getting-started)
- [Migrations](#migrations)
- [Development](#development)
- [Database diagram](#database-diagram)

## Prerequisites
- PHP@7.2 and up
- MYSQL@8 and up
- npm@6 and up
- composer@2 and up

## Tech stack
- [Laravel@6.x](https://laravel.com/docs/6.x) - back-end framework
- [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

## Getting started

1.First of all, you need to clone repository    from GitHub:

```bash
  https://github.com/RedberryInternship/elene-javakhishvili-movie-quotes.git
```
2.Install dependencies:

```bash
composer install
```
3.After you have installed all the PHP dependencies, it's time to install all the JS dependencies:

```bash
npm install
```

and also:

```bash
npm run dev
```

4.Now we need to set our env file. Go to the root of your project and execute this command.

```bash
cp .env.example .env
```

Update the .env file with your database credentials:

MYSQL:

>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****

5.Generate a new application key

```bash
php artisan key:generate
```

## Migrations

if you've completed getting started section, then migrating database if fairly simple process, just execute:

```bash
php artisan migrate
```


## Development

You can run Laravel's built-in development server by executing:

```bash
  php artisan serve
```
```bash
  npm run dev
```
## Database diagram

![diagram](https://i.ibb.co/9qXSSBM/draw-SQL-random-movies-export-2023-04-11.png)


