# ISRC Class

The ISRC class is a PHP class that represents an International Standard Recording Code (ISRC). It provides methods to manipulate ISRC codes by parsing, retrieving components, and generating new codes.

## Installation

You can include the ISRC class in your project by requiring it through Composer:

```
composer require bmt/isrc
```

## Usage

Instantiate the ISRC class by providing the necessary parameters: country code, registrant code, year, and designation code. You can then use various methods to interact with the ISRC object.

### Creating an ISRC Object

```php
use Bmt\ISRC\ISRC;

$isrc = new ISRC("US", "ABC", "21", "12345");
```

### Retrieving ISRC Components

You can retrieve individual components of the ISRC code:

```php
$countryCode = $isrc->getCountryCode(); // Returns the country code (e.g., "US")
$registrantCode = $isrc->getRegistrantCode(); // Returns the registrant code (e.g., "ABC")
$year = $isrc->getYear(); // Returns the year (e.g., "21")
$designationCode = $isrc->getDesignationCode(); // Returns the designation code (e.g., "12345")
```

### Generating a Complete ISRC Code

Generate a complete ISRC code based on the stored components:

```php
$newIsrcCode = $isrc->generateISRC(); // Returns a new ISRC code (e.g., "USABC2112345")
```

### Converting to String

You can also convert the ISRC object to a string, which returns the generated ISRC code:

```php
$isrcString = (string)$isrc; // Returns the ISRC code as a string (e.g., "USABC2112345")
```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
```

Feel free to modify and customize the README file to fit your specific project needs.