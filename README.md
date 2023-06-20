<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
Crud Operations with Laravel Rest API.
</p>

## About This Project

Here, I built a Rest API through a Laravel application with Sanctum authentication. I used Composer and Postman tool for testing the Rest API.


## Methods and Responses of Rest API

- Post method:<br>
    - register: For a user registration an API has to be called through postman.<br>
    **API call:** `../api/register`<br>
    resposne: If the credentials `name`, `email`, `password` and `confirme_password`is correct then postman will show success. If the credentials are wrong postman will show fail response.<br>
    - login: After registration user needs to login to the system.<br>
    **API call:** `../api/login`<br>
     If the credentials `email` and `password` are correct postman will show `success` response. If the credentials are wrong, postman will show `fail` response.
    - Add Product: Products can be added to the database.<br>
    **API call:** `../api/products`<br>
    Credentials are `name` and `descriptions`.


    
- Get method: <br>
    - Show all products: This API will show all the products of the database.<br>
    **API call:** `../api/products`
    - Show products with id: This API will show individual product with unique id.<br>
    **API call:** `../api/products/2`
    - Logout: User can logout through this API.
    **API call:** `../api/logout`

- Put method: <br>
    - Update products: Through this API product's name or description can be updated.<br>
    **API call:** `../api/products/1`
- Delete method: <br>
    - Delete products: Any products can be deleted through this API. <br>
    **API call:** `../api/products/2`<br>
    If any id is given that is not in the database it will show "Product not found".


## Project Installation:

In order to run this project you need to run the certain commands in your terminal:

```
composer install
```
```
cp .env.example .env
```
Set up your MySQL server and settings, as well as the database, in the.env file. Then run the project.
```
php artisan migrate
```
```
php artisan serve
```



