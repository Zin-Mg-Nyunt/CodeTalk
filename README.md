# CodeTalk

A backend-focused Laravel project designed as **Phase One** of a multi-phase full‑stack learning journey. This project demonstrates clean backend architecture, authentication, role-based Tech Stack

**Backend Framework**: Laravel 12
**Language**: PHP 8.4
**Database**: MySQL
**Authentication**: Laravel Breeze
**File Storage**: AWS S3 (with `s3` disk configuration)
**Image Handling**: Laravel File Upload
**Routing & Controllers**: RESTful structure
**Security**: CSRF protection, middleware-based authorization

Features, blog management, and modern Laravel practices.

One of the key technical improvements in this project is the transition from **local file storage** to **AWS S3 cloud storage**, allowing the application to handle images more reliably and professionally.

---

## 🚀 Project Overview

CodeTalk is a blog and discussion platform built using **Laravel**. It focuses heavily on backend logic, clean architecture, and real-world development practices.

**Key features include:**

* User authentication (register/login/logout)
* Blog CRUD operations
* Request validation
* Route Model Binding
* Policies for authorization
* Image file upload
* Cloud-based image storage using AWS S3
* Eloquent relationships

---

## ☁️ AWS S3 Integration (Important Update)

To make this project production-ready, all uploaded images (blog thumbnails) are now stored on **AWS S3** instead of the local `storage/app/public` directory.

This provides several real-world benefits:

* Faster and scalable image delivery
* No need to manage storage on server
* Works well across multiple deployments or servers
* Prevents broken images when cloning the project
* Professional-grade file management like real industry projects

### How it works

When creating a blog, if a thumbnail is uploaded:

* The file is uploaded to S3 (`blog/thumbnails/...`)
* The database stores the **public S3 URL**
* The app displays images directly from Amazon S3

If no image is uploaded, the thumbnail column stores `null`.

---

## 🔧 Setup Instructions

### 1. Clone the Repository

```
git clone https://github.com/Zin-Mg-Nyunt/CodeTalk.git
cd CodeTalk
```

### 2. Install Dependencies

```
composer install
npm install
npm run dev
```

### 3. Configure Environment

Copy `.env.example` to `.env`:

```
cp .env.example .env
```

Set up your database credentials.

### 4. Configure AWS S3

Inside `.env`:

```
FILESYSTEM_DISK=s3
AWS_ACCESS_KEY_ID=your-key
AWS_SECRET_ACCESS_KEY=your-secret
AWS_DEFAULT_REGION=your-region
AWS_BUCKET=your-s3-bucket
AWS_URL=https://your-bucket.s3.amazonaws.com
```

### 5. Generate Key

```
php artisan key:generate
```

### 6. Run Migrations

```
php artisan migrate
```

---

## 🧪 Testing Optional Image Upload

Blog creation supports both cases:

* With thumbnail upload → stored in S3
* Without thumbnail → saved as `null`

This prevents errors and allows flexible usage.

---
