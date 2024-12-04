<p style="text-align: center;"><img src="art/logo.svg" style="width: 200px"></p>

# Adreso SDK for PHP

With this SDK you can easily integrate Adreso within your PHP script or application.

For more information about Adreso, please checkout [adreso.nl](https://adreso.nl).

## Usage

```php
$adreso = new Adreso\Adreso('https://adreso.nl/api', 'your-bearer-token');

try {
    $result = $adreso->addressLookup(zipcode: '1234AB', homeNumber: '10', country: 'nl');
} catch (Exception $e) {
    //
}
```

## Contributors
* [Jeffrey van Rossum](https://github.com/jeffreyvr)
* [All contributors](https://github.com/jeffreyvr/adreso-php-sdk/graphs/contributors)

## License
MIT. Please see the [License File](/LICENSE) for more information.
