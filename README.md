## LemonTree Purchase Order Software

![image](https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white)
![image](https://img.shields.io/badge/Vue%20js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D)
![image](https://img.shields.io/badge/Vite-B73BFE?style=for-the-badge&logo=vite&logoColor=FFD62E)
![image](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![image](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)

Please see the lemontree.drawio.png for detail overview of the application structure.

# Setup (Laravel Valet)

This guide will help you set up the Laravel project on your local machine using [Laravel Valet](https://laravel.com/docs/valet).

---

## 🚧 Requirements

Ensure you have the following installed on your machine:

- PHP >= 8.3
- Composer
- POSTRESQL
- Laravel Valet (Mac only)
- Node.js & NPM (for frontend assets)

---

## 🛠️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/AndreKendeck/lemontree.git
cd lemontree
cp .env.example .env
composer install -vvv
npm i
valet link
php artisan migrate:fresh --seed
```


### Routes
Most route just return a generic response.

```json 
[{"domain":null,"method":"GET|HEAD","uri":"\/","name":null,"action":"Closure","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"api\/enum\/{type}","name":null,"action":"App\\Http\\Controllers\\Api\\EnumController","middleware":["api"]},{"domain":null,"method":"GET|HEAD","uri":"api\/purchaseOrderProductId","name":"purchaseOrderProductId.index","action":"App\\Http\\Controllers\\Api\\PurchaseOrderProductController@index","middleware":["api"]},{"domain":null,"method":"POST","uri":"api\/purchaseOrderProductId","name":"purchaseOrderProductId.store","action":"App\\Http\\Controllers\\Api\\PurchaseOrderProductController@store","middleware":["api"]},{"domain":null,"method":"GET|HEAD","uri":"api\/purchaseOrderProductId\/{purchaseOrderProductId}","name":"purchaseOrderProductId.show","action":"App\\Http\\Controllers\\Api\\PurchaseOrderProductController@show","middleware":["api"]},{"domain":null,"method":"PUT|PATCH","uri":"api\/purchaseOrderProductId\/{purchaseOrderProductId}","name":"purchaseOrderProductId.update","action":"App\\Http\\Controllers\\Api\\PurchaseOrderProductController@update","middleware":["api"]},{"domain":null,"method":"DELETE","uri":"api\/purchaseOrderProductId\/{purchaseOrderProductId}","name":"purchaseOrderProductId.destroy","action":"App\\Http\\Controllers\\Api\\PurchaseOrderProductController@destroy","middleware":["api"]},{"domain":null,"method":"GET|HEAD","uri":"clients","name":"clients.index","action":"App\\Http\\Controllers\\ClientController@index","middleware":["web"]},{"domain":null,"method":"POST","uri":"clients","name":"clients.store","action":"App\\Http\\Controllers\\ClientController@store","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"clients\/create","name":"clients.create","action":"App\\Http\\Controllers\\ClientController@create","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"clients\/{client}","name":"clients.show","action":"App\\Http\\Controllers\\ClientController@show","middleware":["web"]},{"domain":null,"method":"PUT|PATCH","uri":"clients\/{client}","name":"clients.update","action":"App\\Http\\Controllers\\ClientController@update","middleware":["web"]},{"domain":null,"method":"DELETE","uri":"clients\/{client}","name":"clients.destroy","action":"App\\Http\\Controllers\\ClientController@destroy","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"clients\/{client}\/edit","name":"clients.edit","action":"App\\Http\\Controllers\\ClientController@edit","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"products","name":"products.index","action":"App\\Http\\Controllers\\ProductController@index","middleware":["web"]},{"domain":null,"method":"POST","uri":"products","name":"products.store","action":"App\\Http\\Controllers\\ProductController@store","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"products\/create","name":"products.create","action":"App\\Http\\Controllers\\ProductController@create","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"products\/{product}","name":"products.show","action":"App\\Http\\Controllers\\ProductController@show","middleware":["web"]},{"domain":null,"method":"PUT|PATCH","uri":"products\/{product}","name":"products.update","action":"App\\Http\\Controllers\\ProductController@update","middleware":["web"]},{"domain":null,"method":"DELETE","uri":"products\/{product}","name":"products.destroy","action":"App\\Http\\Controllers\\ProductController@destroy","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"products\/{product}\/edit","name":"products.edit","action":"App\\Http\\Controllers\\ProductController@edit","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"products\/{product}\/prices","name":"products.prices.index","action":"App\\Http\\Controllers\\ProductPriceController@index","middleware":["web"]},{"domain":null,"method":"POST","uri":"products\/{product}\/prices","name":"products.prices.store","action":"App\\Http\\Controllers\\ProductPriceController@store","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"products\/{product}\/prices\/create","name":"products.prices.create","action":"App\\Http\\Controllers\\ProductPriceController@create","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"products\/{product}\/prices\/{price}","name":"products.prices.show","action":"App\\Http\\Controllers\\ProductPriceController@show","middleware":["web"]},{"domain":null,"method":"PUT|PATCH","uri":"products\/{product}\/prices\/{price}","name":"products.prices.update","action":"App\\Http\\Controllers\\ProductPriceController@update","middleware":["web"]},{"domain":null,"method":"DELETE","uri":"products\/{product}\/prices\/{price}","name":"products.prices.destroy","action":"App\\Http\\Controllers\\ProductPriceController@destroy","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"products\/{product}\/prices\/{price}\/edit","name":"products.prices.edit","action":"App\\Http\\Controllers\\ProductPriceController@edit","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"purchase_orders","name":"purchase_orders.index","action":"App\\Http\\Controllers\\PurchaseOrderController@index","middleware":["web"]},{"domain":null,"method":"POST","uri":"purchase_orders","name":"purchase_orders.store","action":"App\\Http\\Controllers\\PurchaseOrderController@store","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"purchase_orders\/create","name":"purchase_orders.create","action":"App\\Http\\Controllers\\PurchaseOrderController@create","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"purchase_orders\/{purchase_order}","name":"purchase_orders.show","action":"App\\Http\\Controllers\\PurchaseOrderController@show","middleware":["web"]},{"domain":null,"method":"PUT|PATCH","uri":"purchase_orders\/{purchase_order}","name":"purchase_orders.update","action":"App\\Http\\Controllers\\PurchaseOrderController@update","middleware":["web"]},{"domain":null,"method":"DELETE","uri":"purchase_orders\/{purchase_order}","name":"purchase_orders.destroy","action":"App\\Http\\Controllers\\PurchaseOrderController@destroy","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"purchase_orders\/{purchase_order}\/edit","name":"purchase_orders.edit","action":"App\\Http\\Controllers\\PurchaseOrderController@edit","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"storage\/{path}","name":"storage.local","action":"Closure","middleware":[]},{"domain":null,"method":"GET|HEAD","uri":"up","name":null,"action":"Closure","middleware":[]},{"domain":null,"method":"GET|HEAD","uri":"users","name":"users.index","action":"App\\Http\\Controllers\\UserController@index","middleware":["web"]},{"domain":null,"method":"POST","uri":"users","name":"users.store","action":"App\\Http\\Controllers\\UserController@store","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"users\/create","name":"users.create","action":"App\\Http\\Controllers\\UserController@create","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"users\/{user}","name":"users.show","action":"App\\Http\\Controllers\\UserController@show","middleware":["web"]},{"domain":null,"method":"PUT|PATCH","uri":"users\/{user}","name":"users.update","action":"App\\Http\\Controllers\\UserController@update","middleware":["web"]},{"domain":null,"method":"DELETE","uri":"users\/{user}","name":"users.destroy","action":"App\\Http\\Controllers\\UserController@destroy","middleware":["web"]},{"domain":null,"method":"GET|HEAD","uri":"users\/{user}\/edit","name":"users.edit","action":"App\\Http\\Controllers\\UserController@edit","middleware":["web"]}]
```


