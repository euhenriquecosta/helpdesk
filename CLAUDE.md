# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

HelpDesk — a Laravel 12 ticket management system with role-based access (admin, client, technician), Blade component UI, and Tailwind CSS v4 styling.

## Common Commands

```bash
# Full project setup (install deps, generate key, migrate, build assets)
composer setup

# Start dev environment (server + queue + logs + Vite concurrently)
composer dev

# Run tests
composer test
php artisan test --filter=TestName   # single test

# Static analysis (PHPStan level 3)
./vendor/bin/phpstan analyse

# Code formatting
./vendor/bin/pint

# Generate IDE helper files
composer ide-helper

# Database
php artisan migrate
php artisan migrate:fresh --seed     # reset with seeders
php artisan db:seed
```

## Architecture

### Backend
- **Laravel 12** on PHP 8.2+, SQLite database (default)
- **Models:** `User` (with role enum: admin/client/technician), `Ticket` (status enum: open/in_progress/closed, linked to client and technician users)
- **Auth:** Custom `LoginController`/`RegisterController` with form request validation (`MakeLoginRequest`, `MakeRegisterRequest`), session-based
- **Authorization:** `TicketPolicy` for ticket access control
- **Controllers:** Resource-style (`TicketController`, `ClientsController`)
- **Routes:** `routes/web.php` (main + middleware groups), `routes/auth.php` (auth routes). Guest middleware for login/register, auth middleware for dashboard

### Frontend
- **Blade components** in `resources/views/components/` — layouts (`layout.app`, `layout.dashboard`), form inputs, buttons, cards, nav items, ticket-specific components (table, status-badge, avatar)
- **Tailwind CSS v4** with custom theme colors defined in `resources/css/app.css` (blue-dark/base/light, grays, feedback colors for status)
- **Vite 7** for asset bundling (`vite.config.js`)
- **Icons:** Lucide icons via `blade-lucide-icons` package (`x-icon:name="lucide-{icon}"`)
- **Font:** Lato (Google Fonts)

### Database Schema
- `users`: name, email, password, role (enum)
- `tickets`: title, description, category, status (enum), client_id (FK→users), technician_id (FK→users)
- Sessions, cache, and jobs tables use database driver

### Testing
- PHPUnit with in-memory SQLite, array session/cache drivers
- Test suites: `tests/Unit/`, `tests/Feature/`

## Conventions

- Resource controllers follow Laravel conventions
- Views organized by route: `dashboard/tickets/`, `auth/`, etc.
- Blade components use kebab-case naming (`status-badge`, `nav-item`)
- PHP 8.2+ features: match expressions, typed properties, union types
- Code style: Laravel Pint (PSR-12)
- `AppServiceProvider` auto-generates IDE helper files on migration
