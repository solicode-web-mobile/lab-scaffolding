# Lab - Scaffolding

Installing into existing Laravel Projects

## Références
- Documentation 
  - https://infyom.com/open-source/laravelgenerator/docs/8.0/installation




## Création du projet laravel

- infyom.com est compatible avec laravel version 9

```bash
composer create-project --prefer-dist laravel/laravel:^9.0 project-manager
php artisan serve
```

## Add Packages

Add following packages into composer.json while using it with Laravel 9.

```json
 "require": {
     "infyomlabs/laravel-generator": "^5.0",
     "infyomlabs/adminlte-templates": "^5.0",
     "doctrine/dbal": "~2.3"
 }  
 ```
## Composer Update

 ```bash
composer update
```

## Publish Vendor

```bash
php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
```

## Publish

```bash
php artisan infyom:publish --localized
```

fixe error at RouteServiceProvider file 


```bash
composer require infyomlabs/laravel-ui-adminlte
```

```bash
php artisan ui adminlte --auth
```

```bash
npm install
npm install laravel-mix --save-dev # fixe error
npm run dev
# npm install && npm install laravel-mix --save-dev && npm run dev
```

## Create Exemple 

```bash
php artisan make:migration create_projects_table
```

```bash
php artisan migrate
```

```bash
php artisan infyom:scaffold Project --fromTable --table=projects
```
 
## Références 
- https://github.com/InfyOmLabs/laravel-generator