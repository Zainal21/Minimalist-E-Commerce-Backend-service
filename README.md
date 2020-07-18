## Minimalist E-Commerce-Backend-service

Repo ini adalah Project(Latihan) untuk membuat API E-commerce Sederhana menggunakan laravel

## API DOC

### Registar

> endpoint : $baseurl/v1/regiter, method : 'POST'

Params.body:

| key         | value     | 
| ----------- | --------- | 
| name        | varchar   | 
| email       | email     | 
| password    | password  | 
| c_password  | password  | 

Response :

![alt text](https://raw.githubusercontent.com/Zainal21/Minimalist-E-Commerce-Backend-service/master/Apidoc/register.png)



## Authentication

> endpoint : $baseurl/v1/regiter, method : 'POST'

Params.body:

| key         | data_type | 
| ----------- | --------- | 
| email       | email     | 
| password    | password  | 

Response :

![alt text](https://raw.githubusercontent.com/Zainal21/Minimalist-E-Commerce-Backend-service/master/Apidoc/login.png)



## Fetch All Product

> endpoint : $baseurl/v1/product, method : 'GET'

Params.header:

| key                 | value                                 | 
| --------------------| --------------------------------------| 
| Content-Type        | application/x-www-form-urlencoded     | 
| Accept              | application/json                      | 
| Authorization       | Bearer (Token)                        | 

Response :

![alt text](https://raw.githubusercontent.com/Zainal21/Minimalist-E-Commerce-Backend-service/master/Apidoc/product.png)


## Checkout 

> endpoint : $baseurl/v1/checkout, method : 'POST'

Params.body, header:

header:

| key                 | value                                 | 
| --------------------| --------------------------------------| 
| Content-Type        | application/x-www-form-urlencoded     | 
| Accept              | application/json                      | 
| Authorization       | Bearer (Token)                        | 

body:

| key                 | datat_type | 
| -----------         | ---------  | 
| Nama_Pemesan        | String     | 
| Alamat              | String     | 
| Nama_Produk         | String     | 
| Jumlah              | Integer    | 
| Total_Bayar         | Integer    | 

Response :

![alt text](https://raw.githubusercontent.com/Zainal21/Minimalist-E-Commerce-Backend-service/master/Apidoc/checkout.png)





## Details Transaksi 

> endpoint : $baseurl/v1/transaction-details, method : 'GET'

Params.body, header:

header:

| key                 | value                                 | 
| --------------------| --------------------------------------| 
| Content-Type        | application/x-www-form-urlencoded     | 
| Accept              | application/json                      | 
| Authorization       | Bearer (Token)                        | 

Response :

![alt text](https://raw.githubusercontent.com/Zainal21/Minimalist-E-Commerce-Backend-service/master/Apidoc/detaills.png)




## Install

Download dari branch master

```
git clone https://github.com/Zainal21/laravel-project-starter-boilerplate
```

Install composer dependencies

```
composer install
```

Copy .env.example to .env

```
cp .env.example .env
```

Generate application key

```
php artisan key:generate
```

## Catatan
Untuk shopping cart API belum tersedia, untuk sementara di frontend bisa menggunakan localstorage

