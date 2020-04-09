# PHP Helpers: Numbers Functions

-   Version: v1.0.0
-   Date: April 09 2020
-   [Release notes](https://github.com/pointybeard/helpers-functions-numbers/blob/master/CHANGELOG.md)
-   [GitHub repository](https://github.com/pointybeard/helpers-functions-numbers)

A collection of functions for manipulating and formatting numbers

## Installation

This library is installed via [Composer](http://getcomposer.org/). To install, use `composer require pointybeard/helpers-functions-numbers` or add `"pointybeard/helpers-functions-numbers": "~1.0.0"` to your `composer.json` file.

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

### Requirements

There are no particuar requirements for this library other than PHP 7.2 or greater.

To include all the [PHP Helpers](https://github.com/pointybeard/helpers) packages on your project, use `composer require pointybeard/helpers` or add `"pointybeard/helpers": "~1.2.0"` to your composer file.

## Usage

This library is a collection convenience function for common tasks relating to number manipulation. They are included by the vendor autoloader automatically. The functions have a namespace of `pointybeard\Helpers\Functions\Numbers`

The following functions are provided:

-   `currency_format`

Example usage:

```php
<?php

declare(strict_types=1);

include __DIR__.'/vendor/autoload.php';

use pointybeard\Helpers\Functions\Numbers;

var_dump(Numbers\currency_format(11.234112));
//string(5) "11.23"

var_dump(Numbers\currency_format(984456.78135274694112, '.', ','));
//string(10) "984,456.78"

```

## Support

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/pointybeard/helpers-functions-numbers/issues),
or better yet, fork the library and submit a pull request.

## Contributing

We encourage you to contribute to this project. Please check out the [Contributing documentation](https://github.com/pointybeard/helpers-functions-numbers/blob/master/CONTRIBUTING.md) for guidelines about how to get involved.

## License

"PHP Helpers: Number Functions" is released under the [MIT License](http://www.opensource.org/licenses/MIT).
