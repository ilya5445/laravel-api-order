
# Laravel API

Установка
```
git clone https://github.com/ilya5445/laravel-api-order.git
cd /laravel-api-order
composer install
```

Запуск проекта

```
php artisan serve
```

## Методы API

- Получение списка заказов GET /api/orders/
- Получение конкретного заказа GET /api/orders/{id}
- Создание заказа POST /api/orders/
- Обновление заказа PUT /api/orders/{id}
- Удаление заказа DELETE /api/orders/{id}

## Параметры для создания или редактирования заказа
```
{
    "full_name": "Пономарёв Лазарь Петрович", 
    "total_sum": 3502, 
    "delivery_address": "640673, Челябинская область, город Орехово-Зуево, проезд 1905 года, 96"
}
```
