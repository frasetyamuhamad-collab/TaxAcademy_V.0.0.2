# Tax Academy UI MVP

## Setup

```bash
composer install
npm install
npm run dev
php artisan serve
```

Build production assets:

```bash
npm run build
```

## Scope

Phase 1 UI has been connected to a focused PRD 1 backend. The implementation includes authentication, training catalog data, learning progress, subscription packages, and editable member profile.

It still intentionally excludes PRD 2 items such as admin portal, payment gateway, realtime consultation chat, reporting, CMS, and audit logs.

## Backend Setup

```bash
php artisan migrate:fresh --seed
```

Demo member:

- Email: `alya.rahman@example.com`
- Password: `password`

## Folder Structure

- `app/Livewire`: page-level Livewire components.
- `app/Models`: user, training, lesson progress, and subscription models.
- `app/Support/ViewData.php`: maps Eloquent models into UI card arrays.
- `database/migrations`: PRD 1 schema.
- `database/seeders/DatabaseSeeder.php`: demo data.
- `resources/views/components`: reusable Blade components and layouts.
- `resources/views/livewire`: page templates.
- `routes/web.php`: public and member UI routes.

## Routes

- `/`
- `/training`
- `/training/{slug}`
- `/pricing`
- `/login`
- `/register`
- `/dashboard`
- `/learning`
- `/profile`
- `/subscription`

## Reusable Components

- `x-layouts.app`: base HTML layout with dark mode and public/member navigation.
- `x-public-nav`: public navbar.
- `x-dashboard-nav`: member sidebar and mobile member navigation.
- `x-button`: primary, secondary, and ghost buttons.
- `x-card`: bordered surface component.
- `x-badge`: status/category label.
- `x-form-input`: accessible labeled input.
- `x-progress-bar`: Tailwind-only progress display.
- `x-training-card`: reusable training summary card.
- `x-pricing-card`: reusable subscription package card.
- `x-icon`: local Heroicons-style outline SVG component.

## Backend Coverage

- Register, login, logout.
- Protected member routes: dashboard, learning, profile, subscription.
- Training categories, catalog search, training detail, lessons.
- Lesson progress completion through the learning page.
- Subscription package selection for authenticated members.
- Profile and password update.

## Design Notes

- TailwindCSS v4 is configured in `resources/css/app.css`.
- Dark mode uses a `.dark` class toggled from `resources/js/app.js`.
- Flowbite is installed and loaded for collapse/accordion interactions.
- UI is responsive for mobile, tablet, and desktop breakpoints.
