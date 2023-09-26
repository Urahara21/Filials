<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Запуск проекта

1. Установить Docker;
2. Клонировать текущий репозиторий в папку;
3. Перейти в папку с проектом;
4. Выполнить команду `composer install` для установки зависимостей;
5. Выполнить команду `docker compose up -d` для установки нужных образов и запуска проекта;
6. Выполнить команду `docker compose exec -it laravel.test sh -c "php artisan migrate"` для запуска миграций;
7. Выполнить команду `docker compose exec -it laravel.test sh -c "php artisan db:seed --class=StateSeeder"` для создания записей с состояниями;
8. Открыть сайт `http://127.0.0.1/`


### Маршруты:

1. Список филиалов - http://127.0.0.1/
2. Добавление филиала - http://127.0.0.1/create
3. Удаление филиала - http://127.0.0.1/delete/{filial}
4. API Список филиалов - http://127.0.0.1/api/filials
5. API Информация о филиале - http://127.0.0.1/api/filials/{filial}

`{filial}` - Идентификатор филиала
