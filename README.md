# FontAwesome plugin for CakePHP 3

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require patrickquijano/cakephp3-fontawesome:dev-master
```

Load the plugin by using the cake command:

```
$ bin/cake plugin load FontAwesome
```

Load the plugin by adding the following statement in your project's src/Application.php:

```
public function bootstrap() {
    parent::bootstrap();
    $this->addPlugin('FontAwesome');
}
```

Prior to 3.6.0:

```
Plugin::load('FontAwesome');
```

## Usage

Modify the AppView to use the helper:

```
namespace App\View;

use Cake\View\View;

class AppView extends View {

    public function initialize() {
        // other initialization here.
        $this->loadHelper('FontAwesome.FontAwesome');
        // other initialization here.
    }

}
```

Load the stylesheets and javascripts in your layouts using the helper:

```
<?= $this->FontAwesome->css(); ?>
// Your jQuery load script here
<?= $this->FontAwesome->script(); ?>
```

Make sure to load the jQuery before running the $this->FontAwesome->script().
