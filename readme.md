
Laravel SP Dojo Boilerplate
===========================

# [![laravelsp-logo](https://avatars2.githubusercontent.com/u/21955845?v=3&s=200)](http://www.meetup.com/pt-BR/Laravel-SP/)

Este repositório contém o código necessário para o [1º Coding Dojo do Laravel SP](http://www.meetup.com/pt-BR/Laravel-SP/events/233587687/).
Iremos utilizar [PHPUnit](https://phpunit.de/) e [Mockery](https://github.com/padraic/mockery), *que já vêm incluídos*, para fazermos o TDD.

## Instalação

Primeiro, no terminal, clone o projeto:

```bash
git clone git@github.com:laravelsp/dojo-boilerplate.git
```
Em seguida, entre no diretório:

```bash
cd dojo-boilerplate
```

Por fim, instale as dependências. Você vai precisar do [Composer](https://getcomposer.org/):

```bash
composer install
```

E é isso! Para verificar se tudo está correto, rode o comando abaixo:

```bash
vendor/bin/phpunit
```

Você deverá ver algo como:

```
PHPUnit 5.5.5 by Sebastian Bergmann and contributors.

..                                                                2 / 2 (100%)

Time: 33 ms, Memory: 4.00MB

OK (2 tests, 2 assertions)
```

E é isso, você está pronto para utilizar sua máquina durante o Dojo! :)
