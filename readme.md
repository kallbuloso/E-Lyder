# Instalação do Laravel 5.6

- [Veja a documentação do Laravel 5.6](https://laravel.com/docs/5.6)

## Comandos iniciais no console para criar um projeto novo

``` bash
composer create-project --prefer-dist laravel/laravel NomeProjeto "5.6.*"
```

### Comandos no console para clonar um projeto do Github

``` bash
git clone git://github.com/kallbuloso/laravelmaster
```

### Configurações iniciais

> Configurações do arquivo `.env`

- Nome do app (caso haja espaço no nome, usar "aspas duplas")

- Alterar APP_URL =>
  1. `APP_URL_BASE=MeuSite.com.br`
  1. `APP_URL=http://www.${APP_URL_BASE}`

- Alterar DB

```sh
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=NomeDoDB
DB_USERNAME=root
DB_PASSWORD=
```

- Alterar MAIL

```sh
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=dca762c1da298c
MAIL_PASSWORD=fb64002b4f0676
MAIL_ENCRYPTION=null
```

> Configurações do config

1. Clonar este repositório na pasta `resources/lang/` do seu projeto

[Baixar o pacote de tradução para pt-BR](https://github.com/enniosousa/laravel-5.5-pt-BR-localization) e salvar em resources/lang na pasta **pt-BR**

***Instalação***

- Acesse o diretório

```sh
cd resources/lang/
```

- Clone o repositório pt-BR

```sh
git clone https://github.com/enniosousa/laravel-5.5-pt-BR-localization.git ./pt-BR
```

1. Configurar o Framework para utilizar 'pt-BR' como linguagem padrão em `config/app.php`

```sh
'locale' => 'pt-BR',
'timezone' => 'America/Sao_Paulo',
```

> Configurações do database

- `config/database.php`

```sh
'charset' => 'utf8',
'collation' => 'utf8_general_ci',
'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
```

- `app\Providers.php` adicionar =>

``` bash
use Illuminate\Support\Facades\Schema;
```

- Em boot adicionar =>

``` bash
Schema::defaultStringLength(191);
```

## [Instalação de Packages](docs/packages.md)

## [Configurações do Auth](docs/auth_instalacao.md)
