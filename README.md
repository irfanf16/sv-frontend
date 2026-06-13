# StaffViz — SaaS Marketing Website & Subscription Checkout

> **Laravel 10** marketing website and Stripe subscription checkout for the [StaffViz](https://www.staffviz.com) workforce management SaaS. Includes 15+ blog routes for SEO, 8 industry vertical pages, geo-based pricing (IP geolocation), GoHighLevel CRM webhook integration, Meta Pixel event firing, and a full Stripe subscription + coupon flow.

![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1-777BB4?style=flat-square&logo=php&logoColor=white)
![Stripe](https://img.shields.io/badge/Stripe-635BFF?style=flat-square&logo=stripe&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=flat-square&logo=docker&logoColor=white)

---

## Tech Stack

| Package | Version | Purpose |
|---|---|---|
| `laravel/framework` | ^10.0 | Core framework |
| `predis/predis` | ^2.2 | Redis caching (plan/pricing cache) |
| `stevebauman/location` | ^7.5 | IP-based geolocation for regional pricing |
| `guzzlehttp/guzzle` | ^7.2 | HTTP calls to internal API (Stripe flow) |
| Laravel Mix | (webpack.mix.js) | Asset bundling |

**CI/CD:** Bitbucket Pipelines → Docker build → push to Docker Hub → Kubernetes deploy + email notification.

---

## Route Groups

### Marketing Pages
| Route | Description |
|---|---|
| `GET /` | Homepage |
| `GET /features`, `/pricing-plans`, `/about-us`, `/partner-program` | Core pages |
| `GET /solutions`, `/integrations`, `/case-studies` | Product pages |
| `GET /industries/*` | 8 industry verticals: real estate, freelancing, healthcare, retail, law, etc. |
| `GET /features/*` | Feature-specific pages: time-tracking, project/task, HR, snapshots, monitoring |
| `GET /blogs/*` | 15+ individual SEO blog routes |
| `GET /blogs/compare/*` | Competitor comparison pages: vs Hubstaff, Clockify, TimeDoctour, Toggl Track |

### Subscription Checkout (Stripe)
| Route | Description |
|---|---|
| `POST /payment-card-intent` | Create Stripe PaymentIntent |
| `GET /subscribe-confirm-return` | Handle Stripe redirect confirmation |
| `POST /plan-add-without-card` | Free plan enrollment (no payment) |
| `POST /apply-coupon` | Validate + apply coupon to subscription |
| `POST /payment-confirm-from-old-card` | Charge existing saved Stripe card |

### Lead Capture & CRM
| Route | Description |
|---|---|
| `POST /subscribe` | Email subscribe |
| `POST /contact-us` | Contact form → GoHighLevel CRM |
| `POST /gitex-contact` | GITEX event lead form |
| `POST /affiliate-contact` | Affiliate program inquiry |
| `POST /chatbot/create-guest-client` | Chatbot lead capture |
| `POST /chatbot/rate` | Chatbot session rating |

### Meta Pixel & Tracking
| Route | Description |
|---|---|
| `POST /meta-pixel/track` | AJAX Meta Pixel event firing (server-side) |

### Admin (`/routes/admin/`)
Internal admin routes for platform management.

---

## Key Features

### Geo-Based Pricing
`stevebauman/location` reads client IP to determine country. Falls back to `ip-api.com` if needed. Regional pricing tiers configured per country code — customers in different regions see different plan prices.

### Stripe Subscription Flow
```
1. Customer selects plan on pricing page
2. POST /payment-card-intent
   -> Create Stripe PaymentIntent
   -> Return client_secret to frontend

3. Frontend completes Stripe.js payment form

4. GET /subscribe-confirm-return
   -> Confirm PaymentIntent
   -> Create/update subscription via internal API
   -> Redirect to success page

5. POST /apply-coupon
   -> Validate coupon against Stripe + internal DB
   -> Apply to active subscription

6. POST /payment-confirm-from-old-card
   -> Charge saved Stripe payment method directly (no new card input)
```

### GoHighLevel CRM Integration
Contact form + GITEX lead form POST data to GHL webhook. Lead is routed to different GHL pipelines based on the selected plan type — allowing sales team segmentation by tier.

### SEO Content Marketing
15+ hand-crafted blog post routes + competitor comparison pages (StaffViz vs Hubstaff, vs Clockify, etc.). Individual routes allow per-page SEO meta and custom content.

### Meta Pixel Server-Side Events
`MetaPixelController` fires Meta Pixel events server-side via Facebook Conversions API — captures events even when client-side tracking is blocked by ad blockers.

---

## Models

`Company`, `User`, `UserCompanies`, `Instance`, `Email_registration`

---

## Infrastructure

```dockerfile
# Docker multi-stage build
FROM php:8.1-fpm (base)
nginx reverse proxy
Apache (.htaccess + public-folder.htaccess)

# CI/CD: Bitbucket Pipelines
git push -> bitbucket-pipelines.yml
  -> npm install + npm run prod (Laravel Mix)
  -> composer install --optimize-autoloader
  -> Docker build + push to Docker Hub
  -> Kubernetes kustomization overlay update
  -> Email notification
```

**Cloud Dev:** `.gitpod.yml` for one-click Gitpod workspace.

---

## Getting Started

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```

## Related Repositories

| Repo | Purpose |
|---|---|
| `sv-admin-panel-api` | Laravel 10 back-office API (company management, Stripe billing) |
| `sv-angular-panel` | Angular 18 admin panel |
| `sv-user-panel` | Employee-facing panel |
