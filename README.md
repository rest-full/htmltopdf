# Rest-full Htmltopdf

## About Rest-full Htmltopdf

Rest-full Htmltopdf is a small part of the Rest-Full framework.

You can find the application at: [rest-full/app](https://github.com/rest-full/app) and you can also see the framework skeleton at: [rest-full/rest-full](https://github.com/rest-full/rest-full).

## Installation

* Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
* Run `php composer.phar require rest-full/htmltopdf` or composer installed globally `compser require rest-full/htmltopdf` or composer.json `"rest-full/htmltopdf": "1.0.0"` and install or update.

## Usage

This Html to PDF
```
<?php

require_once ROOT . '/vendor/autoload.php';
require_once __DIR__.'/../config/pathServer.php';

use Restfull\Htmltopdf\HtmlToPdf;

$pdf = new HtmlToPdf();
$pdf->validateHTML(
    '<html><head><title>teste pdf</title></head><body><h1>Teste executado com sucesso</h1></body></html>'
);
$pdf->gerarPDF(ROOT . '/example/test/example.pdf');
```
## License

The rest-full framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

