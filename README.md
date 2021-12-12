# Laravel Localization JS

Laravel localization for JavaScript

## Requirements

1. PHP 7.0 or higher
2. Laravel 6.0 or higher

## Installation

```
composer require thetminnhtun/laravel-localization-js
```

Include the asset
```
<html>

<body>

    ...

    <x-tmh::laravel-localization-js />

</body>

</html>
```

Publish the asset file

```
php artisan vendor:publish --tag=localization-js
```

## Usage

Create the language files what you want. For example, we will create `english` and `myanmar`.

```
/resources
    /lang
        en.json
        my.json
```

In `en.json`

```json
{
    "Welcome": "Welcome",
    "Hello": "Hello :name"
}
```

In `my.json`

```json
{
    "Welcome": "ကြိုဆိုပါတယ်။",
    "Hello": "မင်္ဂလာပါ :name။"
}
```

Getting a message from JavaScript

```js
// app.js
console.log(Lang.get('Welcome'));
console.log(Lang.get('Hello', {name: 'Mg Mg'}));
```

Ouput
```
// What if locale is `en`
Welcome
Hello Mg Mg

// or what if locale is `en`
ကြိုဆိုပါတယ်။
မင်္ဂလာပါ Mg Mg။
```

Avaliable another ways
```js
Lang.get('Welcome');
```

```js
__('Welcome');
```

```js
trans('Welcome');
```

## License

This package is open-sourced software licensed under the [MIT](https://opensource.org/licenses/MIT) license.
