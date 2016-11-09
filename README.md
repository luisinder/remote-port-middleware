# Client IP address middleware

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