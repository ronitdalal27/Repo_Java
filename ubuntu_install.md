# Ubuntu Setup for PHP Projects

## 1. Update Package Lists

Open a terminal and refresh the package index:

```bash
sudo apt update
```

## 2. Install PHP

Install PHP and common extensions (adjust as needed):

```bash
sudo apt install php php-cli php-common php-curl php-xml php-mbstring
```

To confirm the installation:

```bash
php -v
```

You should see the PHP version information.





## 5. Run the PHP Built-In Server

From the project’s `php` subdirectory:

```bash
php -S localhost:8000
```

- Keep this terminal window open; it will show log output.  
- Visit <http://localhost:8000/> in your browser to view the site.



git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/saadactin/php_portfolio.git
git push -u origin main