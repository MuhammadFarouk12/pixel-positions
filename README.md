# Pixel Positions

A job board web application built with Laravel. Employers can register, post job listings, and tag them. Visitors can browse featured and recent jobs, search by keyword, and filter by tags.

## Tech Stack

- **Backend:** Laravel 13.x, PHP ^8.3
- **Frontend:** Vite, Tailwind CSS 4.x
- **Database:** SQLite (default)
- **Testing:** Pest PHP
- **Queue/Cache/Session:** Database-driven

## Features

- Browse featured and recent job listings
- Search jobs by title keyword
- Filter jobs by tag
- Employer registration with logo upload
- Post new job listings with tags

## Setup

```bash
composer setup
```

This runs install, env setup, key generation, migrations, npm install, and asset build.

## Development

```bash
composer dev
```

Runs the Laravel dev server at `http://localhost:8000`, queue worker, log viewer, and Vite HMR concurrently.

## Testing

```bash
composer test
```

## Seed Data

```bash
php artisan db:seed
```

Creates a test user (`test@example.com`) and sample job listings with tags.
