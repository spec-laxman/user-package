# Laravel Login and registartion

## This package will create login and registration in Laravel project

ENV configuration

- LOGIN_SUCESS_URL= specify url once your successfully login
- REGISTER_SUCESS_URL=redirect user after register

```p
LOGIN_SUCESS_URL=http://127.0.0.1:8000
REGISTER_SUCESS_URL=http://127.0.0.1:8000
```

- Create layouts folder and app.blade for your laravel project layout 
- Execute below commands

```p
php artisan migrate
php artisan vendor:publish
```
-- Select "SpecIndia\User\UserServiceProvider" when prompted to  Which provider or tag's files would you like to publish?

- You can access login form "http://yourhost/login"
- You can access register form "http://yourhost/register"
- Note: login and register routes are created by this package

Happy Coding :)

