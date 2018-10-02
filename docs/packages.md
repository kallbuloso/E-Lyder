# Instalação dos Packages

## [Instalar o LaravelCollective/html](https://github.com/LaravelCollective/html)

- [Documentação](https://laravelcollective.com/docs/master/html)

```sh
composer require laravelcollective/html
```

- Depois, adicionar o provider no array "providers" config/app.php:

```sh
  'providers' => [
    // ...
    Collective\Html\HtmlServiceProvider::class,
    // ...
  ],
```

- Por fim, adicione dois aliases de classe à aliases arrays de :config/app.php

```sh
  'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
    // ...
  ],
```

## [Instalar o hesto/multi-auth](https://github.com/Hesto/multi-auth) - Criador de multi-usuários

- [Documentação](https://github.com/Hesto/multi-auth)

```sh
composer require hesto/multi-auth
```

- Em `app/Providers/AppServiceProvider.php` adicione em register=>

``` shema
public function register()
{
  if ($this->app->environment() == 'local') {
    $this->app->register('Hesto\MultiAuth\MultiAuthServiceProvider');
  }
}
```

- Uso

```sh
// Aviso: Se você não fornecer -f sinalizador, não funcionará. É uma proteção contra ativação acidental.

php artisan multi-auth:install {singular_lowercase_name_of_guard} -f

// Examples
php artisan multi-auth:install admin -f
php artisan multi-auth:install employee -f
php artisan multi-auth:install customer -f
```

## [Instalar o nwidart/laravel-modules](https://github.com/nWidart/laravel-modules) - Criador de módulos

- [Documentação](https://nwidart.com/laravel-modules/v3/installation-and-setup)

```sh
composer require nwidart/laravel-modules
```

- Opcionalmente publique os packages

```sh
//publique o arquivo de configuração do pacote executando:

php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
```

- Por padrão, as classes do módulo não são carregadas automaticamente. Você pode carregar automaticamente seus módulos usando psr-4 em **composer.json**. Por exemplo =>

```sh
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}
```

- Dica: não se esqueça de correr composer `dump-autoload` depois =>

```sh
composer dump-autoload
```

- Criar um módulo é simples e direto. Execute o seguinte comando para criar um módulo.

```sh
php artisan module:make <module-name>

// Também é possível criar vários módulos em um comando.
php artisan module:make Blog User Auth
```

## [Instalar o CRUD Generator](https://github.com/appzcoder/crud-generator/tree/master/doc#readme) - Gerador do códigos

- Instalação

```sh
composer require appzcoder/crud-generator --dev
```

- Registrar o provider

```sh
php artisan vendor:publish --provider="Appzcoder\CrudGenerator\CrudGeneratorServiceProvider"
```

- Para versão mais antiga do Laravel (<5.5), basta adicionar manualmente o provedor ao arquivo `app/Providers/AppServiceProvider.php`.

```sh
//
public function register()
{
    if ($this->app->environment() == 'local') {
        $this->app->register('Appzcoder\CrudGenerator\CrudGeneratorServiceProvider');
    }
}
```

- E desde então, estamos usando `laravelcollective/html`como dependência, você deve adicionar seu provedor de serviços no arquivo `config/app.php`.

```sh
'providers' => [
    //...

    Collective\Html\HtmlServiceProvider::class,
],

'aliases' => [
    //...

    'Form' => Collective\Html\FormFacade::class,
    'HTML' => Collective\Html\HtmlFacade::class,
],
```
