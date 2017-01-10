# Swagger\Client\DefaultApi

All URIs are relative to *http://localhost:8090*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPrivilegeRequest**](DefaultApi.md#createPrivilegeRequest) | **POST** /privilege-validation | Create a request for consuming a privilege. Antes de llamar a este metodo hemos tenido que realizar una llamada a getPrivilege. Este metodo nos devuelve un transactionId que hay que pasar ha este metodo para confirmar que el privilegio devuelto se ha consumido.
[**getBestPrivilege**](DefaultApi.md#getBestPrivilege) | **GET** /privileges/bestPrivilege | Obtener el mejor privilegio para un nif y un importe desde un proveedor. Un proveedor consultará con sus credenciales los privilegioss que un cliente final puede disfrutar en su establecimiento para un importe de compra definido. Los datos del proveedor se obtienen del contexto de seguridad, mientras que los datos del beneficiario de los privilegios y el importe de la compra deben informarse en el Query String de la URL
[**getPrivilegeByToken**](DefaultApi.md#getPrivilegeByToken) | **GET** /privileges/token | Obtener el mejor privilegio para un token y un importe desde un proveedor. Un proveedor consultará con sus credenciales los privilegioss que un cliente final puede disfrutar en su establecimiento para un importe de compra definido. Los datos del proveedor se obtienen del contexto de seguridad, mientras que los datos del beneficiario de los privilegios y el importe de la compra deben informarse en el Query String de la URL
[**getPrivilegeValidations**](DefaultApi.md#getPrivilegeValidations) | **GET** /privilege-validation | Obtener una lista cronológica inversa de todos las solicitudes de privilegio realizadas a través del proveedor autorizado


# **createPrivilegeRequest**
> \Swagger\Client\Model\PrivilegeValidation createPrivilegeRequest($new_privilege_validation)

Create a request for consuming a privilege. Antes de llamar a este metodo hemos tenido que realizar una llamada a getPrivilege. Este metodo nos devuelve un transactionId que hay que pasar ha este metodo para confirmar que el privilegio devuelto se ha consumido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: client_credentials
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DefaultApi();
$new_privilege_validation = new \Swagger\Client\Model\NewPrivilegeValidation(); // \Swagger\Client\Model\NewPrivilegeValidation | The id of the privilege to retrieve.

try {
    $result = $api_instance->createPrivilegeRequest($new_privilege_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createPrivilegeRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_privilege_validation** | [**\Swagger\Client\Model\NewPrivilegeValidation**](../Model/\Swagger\Client\Model\NewPrivilegeValidation.md)| The id of the privilege to retrieve. |

### Return type

[**\Swagger\Client\Model\PrivilegeValidation**](../Model/PrivilegeValidation.md)

### Authorization

[client_credentials](../../README.md#client_credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBestPrivilege**
> \Swagger\Client\Model\Privilege getBestPrivilege($nif, $amount)

Obtener el mejor privilegio para un nif y un importe desde un proveedor. Un proveedor consultará con sus credenciales los privilegioss que un cliente final puede disfrutar en su establecimiento para un importe de compra definido. Los datos del proveedor se obtienen del contexto de seguridad, mientras que los datos del beneficiario de los privilegios y el importe de la compra deben informarse en el Query String de la URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: client_credentials
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DefaultApi();
$nif = "nif_example"; // string | El número de identificación fiscal del usuario
$amount = 1.2; // double | El valor de la compra

try {
    $result = $api_instance->getBestPrivilege($nif, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBestPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nif** | **string**| El número de identificación fiscal del usuario |
 **amount** | **double**| El valor de la compra |

### Return type

[**\Swagger\Client\Model\Privilege**](../Model/Privilege.md)

### Authorization

[client_credentials](../../README.md#client_credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrivilegeByToken**
> \Swagger\Client\Model\Privilege getPrivilegeByToken($token, $amount)

Obtener el mejor privilegio para un token y un importe desde un proveedor. Un proveedor consultará con sus credenciales los privilegioss que un cliente final puede disfrutar en su establecimiento para un importe de compra definido. Los datos del proveedor se obtienen del contexto de seguridad, mientras que los datos del beneficiario de los privilegios y el importe de la compra deben informarse en el Query String de la URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: client_credentials
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DefaultApi();
$token = "token_example"; // string | El token proporcionado por Privilegiis
$amount = 1.2; // double | El valor de la compra

try {
    $result = $api_instance->getPrivilegeByToken($token, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPrivilegeByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| El token proporcionado por Privilegiis |
 **amount** | **double**| El valor de la compra | [optional]

### Return type

[**\Swagger\Client\Model\Privilege**](../Model/Privilege.md)

### Authorization

[client_credentials](../../README.md#client_credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrivilegeValidations**
> \Swagger\Client\Model\PrivilegeValidations getPrivilegeValidations($page, $size)

Obtener una lista cronológica inversa de todos las solicitudes de privilegio realizadas a través del proveedor autorizado

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: client_credentials
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DefaultApi();
$page = 56; // int | Número de página
$size = 56; // int | Número de elementos por página

try {
    $result = $api_instance->getPrivilegeValidations($page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPrivilegeValidations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Número de página | [optional]
 **size** | **int**| Número de elementos por página | [optional]

### Return type

[**\Swagger\Client\Model\PrivilegeValidations**](../Model/PrivilegeValidations.md)

### Authorization

[client_credentials](../../README.md#client_credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

