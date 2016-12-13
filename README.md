# Client IP address middleware
[![Latest Stable Version](https://poser.pugx.org/luisinder/remote-port-middleware/v/stable)](https://packagist.org/packages/luisinder/remote-port-middleware)
[![Total Downloads](https://poser.pugx.org/luisinder/remote-port-middleware/downloads)](https://packagist.org/packages/luisinder/remote-port-middleware)

PSR-7 Middleware that determines the client remote port and stores it as an `ServerRequest` attribute called `remotePort`.


## Installation

`composer require luisinder/remote-port-middleware`

## Usage

In Slim 3:

```php
$app->add(new Luisinder\Middleware\RemotePort());

$app->get('/', function ($request, $response, $args) {
    $remotePort = $request->getAttribute('remotePort');

    return $response;
});
```