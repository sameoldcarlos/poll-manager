# Poll Manager - Sistema de criação e gerenciamento de enquetes
Esta aplicação foi criada como parte do teste para a vaga de Desenvolvedor da PONTEON - Soluções Digitais Integradas.

## Funcionalidades
Na versão atual, as seguintes funções estão disponíveis:
- Registrar-se e fazer login no sistema;
- Votar em enquetes previamente criadas;
- Visualizar o resultado das enquetes;
- Criar novas enquetes (necessário estar logado);
- Remover enquetes (necessário estar logado)

## Credenciais para teste
Um usuário foi criado para que seja possível o teste da aplicação. Suas credenciais são:
- E-mail => tester@example.com
- Senha => 98765432

Uma vez logado, o usuário terá acesso a todas as enquetes que criou e poderá removê-las caso queira. Também poderá criar novas enquetes.

## Tecnologias Utilizadas
Para a criação do projeto, foi utilizado o framework PHP Laravel, bem como as tecnologias disponíveis no ambiente do mesmo:
- Blade template
- Vue.js
- Bootstrap

O deploy do sistema foi feito no ambiente do Heroku, disponível através deste [link](https://poll-manager-test.herokuapp.com/).

O banco de dados foi criado utilizando MySQL, através do phpMyAdmin, porém posteriormente optei pelo PostgreSQL, uma vez que é o gerenciador disponibilizado pelo Heroku.
