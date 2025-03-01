# fake-nz-generator

![Downloads](https://img.shields.io/packagist/dt/Oni4i/fake-nz-generator?style=for-the-badge)

Generator of New Zealand valid data like IP, zip code and city

`composer require oni4i/fake-nz-generator`

If you need fake, but valid data like IP, ZIP code and City you can use this PHP library.


<h3>Generate random city</h3>

```php
$cityGenerator = new CityGeneratorService();

//output "Ahaura"
$randCity1 = $cityGenerator->rand();

//output "Athol"
$randCity2 = $cityGenerator->rand();
```

<h3>Generate IPs</h3>

```php
$ipGenerator = new IPGeneratorService();

//output "14.1.32.0"
$firstIP = $ipGenerator->first();

//output "14.1.32.1"
$nextIP = $ipGenerator->next($firstIP);

//output "14.1.32.0"
$prevIP = $ipGenerator->prev($firstIP);

//output "14.1.95.255"
$randIP = $ipGenerator->rand();
```

<h3>Generate ZIP codes</h3>

```php
$zipGenerator = new ZipGeneratorService();

//output "7550"
$randZipCode = $zipGenerator->rand();

//output "9749"
$randZipCodeByCity = $zipGenerator->randByCity('Athol');
```

