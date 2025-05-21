
````markdown
# Contact Management with Livewire (Laravel)

This is a simple **Contact Management (CRUD)** app built using **Laravel Livewire**.  
Manage your contacts effortlessly — create, read, update, and delete all within a slick reactive interface powered by Livewire.

## Features
- Add new contacts
- Edit existing contacts
- Delete contacts
- Real-time UI updates without page reloads

## Installation

1. Clone the repo:  
```bash
git clone https://github.com/BAGOMBEKA-JOB-DEV/LIVE.git
cd LIVE
````

2. Install PHP dependencies:

```bash
composer install
```

3. Install Node dependencies and build assets:

```bash
npm install
npm run dev
```

4. Setup your `.env` file and generate app key:

```bash
cp .env.example .env
php artisan key:generate
```

5. Run database migrations:

```bash
php artisan migrate
```

6. Serve the app:

```bash
php artisan serve
```

Remove my server settings(please check vite.config.js) and then visit `http://localhost:8000` and start managing your contacts!

---

---

```