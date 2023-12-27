# Laravel Shop Project  

## О проекте
Интернет магазин по продаже косметики.

## Требования  
- Наличие установленного ```Docker``` и ```Docker Compose```  
- Желательно утилита ```make```

## Запуск dev сервера  
```make init```  
```docker exec php php artisan migrate:fresh --seed```  
```docker exec php php artisan storage:link```  
```docker exec php php artisan key:generate```

## Альтернативный запуск dev сервера  
```docker-compose up -d --build```  
```docker exec php composer install```  
```docker exec node npm install```  
```docker exec php php artisan migrate:fresh --seed```  
```docker exec php php artisan storage:link```  
```docker exec php php artisan key:generate```  

## Вход в командную строку PHP  
```make exec-php```  
или  
```docker exec -it php sh```  

## Вход в командную строку Node.js  
```make exec-node```  
или  
```docker exec -it node sh```  

## WEB  
Адрес: ```http://localhost```

## Admin Panel
Адрес: ```http://localhost/admin```  
Логин: ```admin@example.com```  
Пароль: ```admin```  

## PHPMyAdmin  
Адрес: ```http://localhost:8080```  
Логин: ```root```  
Пароль: ```root```  

## MailHog
Адрес: ```http://localhost:8025```  
UI для электронной почты






