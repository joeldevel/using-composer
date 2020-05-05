# composer
## How to use autoload
Create a composer.json file and include some library e.g. monolog:

`{
  "require": {
    "monolog/monolog": "1.0.*"
  }
}`

After that run `composer install` inside the project root

Now you can include the autoload file wherever you need it, just put the following at the beginning of the php file
 `require __DIR__ . '/vendor/autoload.php';`

## How to include your own classes in the autoload file

Create an `src` directory and put your classes inside

Use a `namespace` e.g. `CustomNamesPace`

Just included the path in the composer.json:

`{
  "autoload":{
    "psr-4": {"CustomNamesPace\\":"src/"}
    }
}`

run `composer dumpautoload -o`

Include this line in your php file:
`require __DIR__ . '/vendor/autoload.php';`
