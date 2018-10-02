# Instalação e configuração do Auth 

- Habilite a autenticação

```sh
php artisan make:auth
```

> Verificação de e-mail do usuário e ativação de conta no Laravel 5.6

- Gerar novo modelo e migração para o VerifyUser

```sh
php artisan make:model VerifyUser -m
```

- Modifique os arquivos de migração e migre as tabelas.

```sh
// Observe que `user_id` será a chave estrangeira da chave primária da tabela de usuários.

public function up()
    {
        Schema::create('verify_users', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('token');
            $table->timestamps();
        });
    }
```

```sh
// Além disso, modifique o arquivo de migração para a tabela de usuários para incluir um novo campo booleano para manter o status de verificação da conta.

$table->boolean('verified')->default(false);

// Depois de concluir a migração, você pode executar o comando migrate para criar/modificar suas tabelas de banco de dados.

php artisan migrate:refresh
```