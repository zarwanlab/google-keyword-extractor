# Google Keyword Extractor - Laravel Version 🚀

A professional SEO-focused tool for layered Google Autocomplete keyword extraction, built with the Laravel framework.

[Persian Documentation (راهنمای فارسی)](./README-fa.md)

## 🌟 Features

- **Laravel Core:** Built on MVC architecture for easy development and customization.
- **Layered Extraction:** Discover Long-tail keywords with up to 10 levels of depth.
- **Live Translation:** Real-time translation of results to Persian for international queries.
- **Modern UI:** Beautiful interface using Tailwind CSS with smooth animations.
- **Versatile Export:** Bulk copy and download results as `.txt` files.

## 🚀 Installation & Setup

Follow these steps to run the project on your local machine:

### 1. Requirements
- PHP >= 8.2
- Composer
- Node.js & NPM (Optional for frontend development)

### 2. Install Dependencies
Install PHP dependencies using Composer:
```bash
composer install
```

### 3. Environment Configuration
Copy the example environment file:
```bash
cp .env.example .env
```
Generate the application key:
```bash
php artisan key:generate
```

### 4. Run the Application
Start the Laravel development server:
```bash
php artisan serve
```
You can now access the tool at `http://localhost:8000`.

### 5. File Permissions (If Needed)
If you encounter storage permission errors, run the following command (Linux/Mac):
```bash
chmod -R 775 storage bootstrap/cache
```

## 🛠 Project Structure
- **Controller:** `app/Http/Controllers/KeywordController.php`
- **View:** `resources/views/google_suggestion_tool.blade.php`
- **Routes:** `routes/web.php`

## 📝 License
This project is released under the **MIT** License.

---
Developed for SEO and Content Professionals 🇮🇷
