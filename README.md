<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/badge/Laravel-12.32.5-red?logo=laravel&logoColor=white" alt="Laravel Version"></a>
  <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-8.2-blue?logo=php&logoColor=white" alt="PHP Version"></a>
  <a href="https://www.mysql.com/"><img src="https://img.shields.io/badge/MySQL-8.0-blue?logo=mysql&logoColor=white" alt="MySQL Version"></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-brightgreen" alt="License"></a>
  <a href="https://github.com/yourusername/yourproject/actions"><img src="https://img.shields.io/github/workflow/status/yourusername/yourproject/CI?label=CI/CD&logo=github" alt="Build Status"></a>
</p>

# Můj první Laravel projekt

Tento projekt je **můj první projekt v Laravelu**, na kterém stále pracuji.  
Je zde mnoho funkcí, které je třeba dokončit a vylepšit.

Projekt byl vytvořen na základě tohoto tutoriálu:  
[YouTube Tutorial](https://www.youtube.com/watch?v=2PhUdGls2JY&t) – díky autorovi za skvělý návod!

## Funkce projektu
- Přehledná administrace přes Filament Admin Panel
- Možnost správy nemovitostí s obrázky a benefity
- Uživatelské rozhraní připravené pro další rozšíření
- MySQL databáze pro ukládání všech dat

---

## 🚀 Instalace a spuštění projektu

Toto je krok-za-krokem návod, jak nastavit a spustit tento Laravel projekt s MySQL databází.

```bash
1️⃣ Klonování repozitáře
git clone https://github.com/yourusername/yourproject.git
cd yourproject

2️⃣ Instalace závislostí
composer install

3️⃣ Vytvoření .env souboru
cp .env.example .env

4️⃣ Nastavení databáze

Otevři .env a uprav následující řádky podle své MySQL databáze:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

5️⃣ Vygenerování bezpečnostního klíče
php artisan key:generate

6️⃣ Spuštění migrací a seedů
php artisan migrate --seed


⚠️ Pokud se objeví chyba typu 'doesnt have a default value, zkontroluj migrace, že všechny required sloupce mají default nebo jsou nullable.'

7️⃣ Spuštění lokálního serveru
php artisan serve


Otevři prohlížeč na adrese:

http://127.0.0.1:8000

8️⃣ Přístup do admin panelu (Filament)

Pokud máš seedované uživatele, admin panel najdeš zde:

http://127.0.0.1:8000/admin


Přihlašovací údaje: podle UsersTableSeeder (např. admin@admin.com / password)

9️⃣ Hotovo!

Teď máš běžící projekt, propojený s MySQL, připravený na testování a další vývoj.
