<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
# **URL Shortener Service**

A simple URL shortening service built with **Laravel 11** that provides endpoints to encode long URLs into short URLs and decode short URLs back to their original form. The service uses caching for optimal performance and includes test cases for validation.

---

## **Requirements**

- **Docker** (for Laravel Sail)
- **PHP 8.2+**
- **Composer**
- **Redis** (for caching, configured within Sail)

---

## **Setup**

### **1. Clone the Repository**
```bash
git clone git@github.com:spiCkyyy1/url-shortner.git
cd <project-directory>
```

### **2. Install Dependencies**
```bash
sail composer install
```

### **3. Start Laravel Sail**
```bash
sail up -d
```

### **3. Testing Encode Functionality on Postman**
```bash
POST http://localhost/api/encode
BODY {
    "url": "https://example.com"
}
```

### **4. Testing Decode Functionality on Postman**
```bash
POST http://localhost/api/decode
BODY {
    "short_url": "http://localhost/n2xVDf"
}
```


### **5. Running Test Cases**
```bash
sail php artisan test
```
