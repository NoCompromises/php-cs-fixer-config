# No Compromises PHP CS Fixer config

The standard PHP CS Fixer config for No Compromises projects

## Usage

Install this package as a dev dependency:
`composer require --dev nocompromises/php-cs-fixer-config`

Create a `.php-cs-fixer.php` in the root of your project with the following contents:

```php
<?php

declare(strict_types=1);

return NoCompromises\PhpCsFixer\Config\Factory::create(__DIR__);
```
