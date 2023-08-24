<?php
/**
 * Countries list example - https://iso3166.thephpleague.com/ 
 * 
 * Install with 'composer require league/iso3166'
 * 
 * Run with 'php -S localhost:4242'
 * 
 * Example country:
 *            'name' => 'Afghanistan',
 *            'alpha2' => 'AF',
 *            'alpha3' => 'AFG',
 *            'numeric' => '004',
 *            'currency' => [
 *                'AFN',
 *            ],
 * 
 */
require_once 'vendor/autoload.php';

$countries = (new League\ISO3166\ISO3166)->all();
echo "<pre>";
// var_dump($countries);

foreach ($countries as $country) {
    // echo "{$country['name']} - {$country['alpha2']}  <br>";
    // echo "Name - {$country['name']}; Alpha2 code - {$country['alpha2']}  <br>";
    
}
echo "</pre>";
$currentCountry = "BV";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th {
            border: 1px solid;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <th>Coutnry</th>
        <th>Code</th>
    </thead>
    <?php foreach ($countries as $country) : ?>
    <tr>
        <td><?= $country['name'] ?><?php if ($country['alpha2'] === $currentCountry) {
            echo " SELECTED";
        }?></td>
        <td><?= $country['alpha2'] ?></td>
    </tr>
    <?php endforeach; ?>
    </table>    
</body>
</html>