# mod-exchange1c

Module for PIXELION CMS

[![Latest Stable Version](https://poser.pugx.org/panix/mod-exchange1c/v/stable)](https://packagist.org/packages/panix/mod-exchange1c) [![Total Downloads](https://poser.pugx.org/panix/mod-exchange1c/downloads)](https://packagist.org/packages/panix/mod-exchange1c) [![Monthly Downloads](https://poser.pugx.org/panix/mod-exchange1c/d/monthly)](https://packagist.org/packages/panix/mod-exchange1c) [![Daily Downloads](https://poser.pugx.org/panix/mod-exchange1c/d/daily)](https://packagist.org/packages/panix/mod-exchange1c) [![Latest Unstable Version](https://poser.pugx.org/panix/mod-exchange1c/v/unstable)](https://packagist.org/packages/panix/mod-exchange1c) [![License](https://poser.pugx.org/panix/mod-exchange1c/license)](https://packagist.org/packages/panix/mod-exchange1c)


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

#### Either run

```
php composer.phar require --prefer-dist panix/mod-exchange1c "*"
```

or add

```
"panix/mod-exchange1c": "*"
```

to the require section of your `composer.json` file.


#### Add to web config.
```
    'modules' => [
        'exchange1c' => ['class' => 'panix\mod\exchange1c\Module'],
    ],
```
#### Migrate
```
php yii migrate --migrationPath=vendor/panix/mod-exchange1c/migrations
```
