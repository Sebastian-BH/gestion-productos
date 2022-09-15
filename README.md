# gestion-productos

### General Info
***
Requisitos: php 7.4

Para realizar la adecuada ejecución se debe hacer lo siguiente
1. tener composer instalado en tu computador
2. crear base de datos Mysql con el nombre cafeteria
3. abrir la consola ubicarse en la carpeta raiz del proyecto y ejecutar los siguientes comandos . 

```
composer update
composer install
php artisan key:generate
php artisan migrate
php artisan serve

copias la direccion y la pegas en tu navegador y listo

sentencias sql

sentencia para conocer cuál es el producto que más stock tiene.
SELECT * from products WHERE products.stock = (SELECT MAX(products.stock) FROM products)

sentencia para conocer cuál es el producto más vendido.
SELECT SUM(cant), products.name FROM `sales` JOIN products ON sales.product = products.id GROUP BY product ORDER BY product limit 1

```

