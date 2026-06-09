# StaffViz Marketing Website

Laravel 10 Blade marketing website, pricing pages, company registration wizard, and Stripe subscription checkout for the **StaffViz** SaaS platform.

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?style=flat&logo=mysql&logoColor=white)
![Stripe](https://img.shields.io/badge/Stripe-Subscriptions-635BFF?style=flat&logo=stripe&logoColor=white)
![Redis](https://img.shields.io/badge/Redis-Cache-DC382D?style=flat&logo=redis&logoColor=white)

## Features

**Public Pages:** Home, About, Features, Solutions, Integrations, Industries, Apps, Case Studies, Blog (15+ posts), Pricing, Contact, Privacy Policy, Terms & Conditions, Sitemap XML.

**Industry sub-pages:** Startups, Real Estate, Freelancing, Merchandising, Architects/Engineers, Law Firms, Wholesale, Healthcare, Retail, Accounting.

**Registration & Stripe Billing**
- Company registration wizard with email verification (`/company-register/{price_id}`)
- Stripe payment intent creation and 3DS return URL handling
- Subscription confirmation, payment from saved card
- Coupon validation (`/apply-coupon`)
- GoHighLevel (GHL) CRM webhook per plan tier

**Lead Capture**
- Newsletter, Contact form, GITEX-specific contact, VizBot email capture
- Meta Pixel AJAX endpoints (pricing page view, book-a-demo, app download, contact)

**Chatbot**
- Guest chatbot session tracking and rating collection

**Affiliates**
- Affiliate referral tracking (`/affiliate`)

## Database Schema

| Table | Key Columns | Purpose |
|---|---|---|
| `users` | `id`, `name`, `email`, `password`, `email_verified_at` | Admin/system users |
| `email_registration` | `id`, `name`, `email`, `domain`, `newsletter`, `type`, `visitor_ip` | Email sign-ups and contact submissions |
| `password_resets` | `email`, `token` | Password reset tokens |

> Company and subscription data live in the `sv-admin-panel-api` database.

## Architecture

```
Browser → sv-frontend (Laravel Blade)
               ├── sv-admin-panel-api  (company registration via Guzzle)
               ├── Stripe API          (payment intents, subscriptions)
               ├── GoHighLevel CRM     (webhooks per plan tier)
               ├── Redis               (sessions, cache)
               └── MySQL               (email leads)
```

## Getting Started

```bash
composer install && npm install && npm run dev
cp .env.example .env && php artisan key:generate
php artisan migrate && php artisan serve
```

## Environment Variables

| Variable | Purpose |
|---|---|
| `APP_URL` | Public URL |
| `DB_*` | MySQL connection |
| `REDIS_*` | Sessions and cache |
| `MAIL_*` | SMTP (Office 365 in staging) |
| `AWS_*` | S3 asset storage |
| `STRIPE_*` | Stripe keys |
| `PUSHER_*` | Real-time notifications |

## License
MIT
