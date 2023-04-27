# Utility Components made in PHP
This repo contains various components to help make a fully functional website with PHP

## Index
- [Login System](#login-system)

## Login System
- Simple authentication system using username and password
- Uses multiple pages to process authentication
- Backend validation for empty fields
- PHP injection secured

### Working
- `__head__.php` works as base `<head>` component for all other files.
- Every files can inherit the same `script` and `style` and other meta elements.
- Altough each page share same `<head>`, each page can have its own `title` because of `set_title()` function.
- `index.php` will be in accessible untill authenticated.
- If tried to access `index.php`, user will be redirected to `login.php`
- `login.php` has *username* and *password* fields to be authenticated
- If left blank, backend will not process
- When both fields filled, it will be authenticated with SQL Database
- Once authenticated, user will be redirected to `index.php`
- If tried to access `login.php` while authenticated, user will be redirected to `index.php`
- `logout.php` deletes all session variables and destroys session.