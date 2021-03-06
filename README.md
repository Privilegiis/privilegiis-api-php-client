# SwaggerClient-php
No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build date: 2016-11-24T17:29:34.050+01:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
ini_set('display_errors', 'On');
// Configure OAuth2 access token for authorization: client_credentials
$configuration = Swagger\Client\Configuration::getDefaultConfiguration();
//Descomentar en caso de hacer las pruebas en Windows
//$configuration->setSSLVerification(false);
$configuration->setOauthBasePath(OAUTH_SERVER_BASEPATH);
$configuration->setHost(YOUR_API_BASEPATH);
$configuration->clientCredentialsAuth(YOUR_CLIENT_ID, YOUR_CLIENT_SECRET);
$api_instance = new Swagger\Client\Api\DefaultApi();
$nif = "HASH_DNI_EJEMPLO_PROPORCIONADO_PRIVILEGIIS"; // string | El número de identificación fiscal del usuario
$amount = 1.2; // double | El valor de la compra
try {
    $result = $api_instance->getBestPrivilege($nif, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBestPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>

```

## Documentation for API Endpoints

All URIs are relative to *URL_API_BASE* , provided by Privilegiis

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**createPrivilegeRequest**](docs/Api/DefaultApi.md#createprivilegerequest) | **POST** /privilege-validation | Create a request for consuming a privilege. Antes de llamar a este metodo hemos tenido que realizar una llamada a getPrivilege. Este metodo nos devuelve un transactionId que hay que pasar ha este metodo para confirmar que el privilegio devuelto se ha consumido.
*DefaultApi* | [**getBestPrivilege**](docs/Api/DefaultApi.md#getbestprivilege) | **GET** /privileges/bestPrivilege | Obtener el mejor privilegio para un nif y un importe desde un proveedor. Un proveedor consultará con sus credenciales los privilegioss que un cliente final puede disfrutar en su establecimiento para un importe de compra definido. Los datos del proveedor se obtienen del contexto de seguridad, mientras que los datos del beneficiario de los privilegios y el importe de la compra deben informarse en el Query String de la URL
*DefaultApi* | [**getPrivilegeByToken**](docs/Api/DefaultApi.md#getprivilegebytoken) | **GET** /privileges/token | Obtener el mejor privilegio para un token y un importe desde un proveedor. Un proveedor consultará con sus credenciales los privilegioss que un cliente final puede disfrutar en su establecimiento para un importe de compra definido. Los datos del proveedor se obtienen del contexto de seguridad, mientras que los datos del beneficiario de los privilegios y el importe de la compra deben informarse en el Query String de la URL
*DefaultApi* | [**getPrivilegeValidations**](docs/Api/DefaultApi.md#getprivilegevalidations) | **GET** /privilege-validation | Obtener una lista cronológica inversa de todos las solicitudes de privilegio realizadas a través del proveedor autorizado


## Documentation For Models

 - [Error](docs/Model/Error.md)
 - [NewPrivilegeValidation](docs/Model/NewPrivilegeValidation.md)
 - [Privilege](docs/Model/Privilege.md)
 - [PrivilegeValidation](docs/Model/PrivilegeValidation.md)
 - [PrivilegeValidations](docs/Model/PrivilegeValidations.md)
 - [Privileges](docs/Model/Privileges.md)


## Documentation For Authorization


## client_credentials

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **trust**: trusted scope


## Author




