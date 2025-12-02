# CodeTalk — Phase 1 (Laravel Backend)

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Version](https://img.shields.io/badge/Phase-1-blue)](https://github.com/Zin-Mg-Nyunt/CodeTalk)


**Tech Stack:** Laravel 12, PHP 8.x, MySQL  
**Project Status:** Phase One Completed — Backend Foundation

---

## Overview

CodeTalk is a **multi-phase web application project** designed for learning and demonstrating full-stack development workflow.  

**Phase 1** focuses solely on the backend, building a clean and maintainable Laravel-based foundation.  

Future phases will integrate frontend frameworks and full-stack features.

---

## Features (Phase 1)

- Laravel project structure setup (routes, controllers, models)
- Database migrations and schema setup
- Basic CRUD functionality for posts/blogs (if implemented)
- Backend-only user authentication (if included)
- Ready for frontend integration in Phase 2

> ⚠️ **Note:** Phase 1 is backend-only; frontend UI will be implemented in Phase 2 (Vue + Firebase) and Phase 3 (Vue + Inertia + Laravel).

---

## Roadmap

| Phase | Tech Stack | Features |
|-------|------------|---------|
| **Phase 1** | Laravel Backend | Backend structure, routes, controllers, models, migrations, CRUD |
| **Phase 2** | Vue 3 + Firebase | Frontend UI, authentication, admin/user roles, client-side rendering |
| **Phase 3** | Vue 3 + Inertia + Laravel | Full-stack SPA, API-based communication, real-world workflow |


---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/Zin-Mg-Nyunt/CodeTalk.git
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
