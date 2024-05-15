## laravel-generate-ppt

 - **Chinese**
    一个用于生成PPT文档的Laravel插件。

 - **English**
    A Laravel Plugin For Generating PPT Documents.

----------

### Requirement

 - PHP >= 7.4
 - phpoffice/phppresentation

----------

### Installation

 - installing plugins package

```shell
composer require "zxf5115/laravel-generate-ppt"
```

- generate configuration file

```php
php artisan vendor:publish
```


### Usage

基本使用（以服务端为例）:

```php
<?php
use zxf5115\Upload\File;

$category = $request->category ?? 'file';

$response = File::file('file', $category);
```
