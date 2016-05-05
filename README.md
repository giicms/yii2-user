yii2-user
=================

Forum

## Installation

The preferred way to install this extension is through composer.

Either run

```
php composer.phar require "giicms/yii2-user" "dev-master"
```
or add

```json
"giicms/yii2-user": "dev-master"
```

to the require section of your application's `composer.json` file.

## Usage Example
~~~php

 'modules' => [
        'user' => [
            'class' => 'giicms\user\Module',
        ],
  ],
~~~
