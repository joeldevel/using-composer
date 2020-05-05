<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Using composer</title>
  </head>
  <body>
    <h1>Composer autoload</h1>
<?php
// following example from https://getcomposer.org/doc/01-basic-usage.md
require __DIR__ . '/vendor/autoload.php';

use MyClasses\CustomNamesPace\Trivial;
use MyClasses\CustomNamesPace\AnotherClass;

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('This warning must be ...');

// Use your custom class
$myObject = new Trivial();
echo "<br>";
$anotherObject = new AnotherClass("Message from a class");
echo $anotherObject->getValue();

?>
</body>
</html>
