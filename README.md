# Publicação e Moderação de Postagens

## Descrição
Sistema de publicação, moderação e exibição de mensagens postadas pelos usuários.

O usuário entra na página e se depara com uma mensagem aleatória já existente no banco de dados, e pode clicar no botão de "Próxima Mensagem" para conferir outra, e assim sucessivamente. Abaixo da exibição das mensagens existentes, o usuário têm a possibilidade de enviar uma mensagem também, algo engraçado ou alguma citação. O sistema não exige login do usuário, mas grava o endereço ip e bloqueia o usuário por várias horas se este enviar mais mensagens do que o permitido por hora.
Após o envio da mensagem, ela permanece esperando pela moderação do administrador na página de moderação. Quando o Administrador entra, se depara com as mensagens que esperam pela moderação, e pode clicar no link de aprovação da mensagem, ou de exclusão. A aprovação permite que a mensagem seja exibida com as outras na tela inicial, mas a exclusão a apaga permanentemente do banco de dados.
Só o Administrador têm acesso á página de moderação ("moderação.php"), pois todos os usuários que não estão com o id definido como "id_master", serão redirecionados para a página inicial.

## Aplicação em funcionamento: 

[`https://lietz.dev.br/feed.php`]https://lietz.dev.br/feed.php 

## Tecnologias
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)

## Telas 

### 📨 Envio da Mensagem

**Computador**  
<img src="https://lietz.dev.br/imagens.readme/envio_computador.png" width="500px">

**Dispositivo Móvel**  
<img src="https://lietz.dev.br/imagens.readme/envio_celular.png" width="250px">

---

### 🕵️‍♀️ Moderação da Mensagem

**Computador**  
<img src="https://lietz.dev.br/imagens.readme/moderacao_computador.png" width="500px">

**Dispositivo Móvel**  
<img src="https://lietz.dev.br/imagens.readme/moderacao_celular.png" width="250px">

---

### ✅ Exibição da Mensagem Aprovada

**Computador**  
<img src="https://lietz.dev.br/imagens.readme/aprovada_computador.png" width="500px">

**Dispositivo Móvel**  
<img src="https://lietz.dev.br/imagens.readme/aprovada_celular.png" width="250px">


## Instalação
 
### Atenção:
O código publicado em meu portfólio possui um sistema de segurança nas páginas de administração, como por exemplo a "moderacao.php". Não os incluí no código desse repositório, mas é fundamental que essas medidas de segurança sejam realizadas ao implementar páginas assim.  

## 🗄️ Banco de Dados

O projeto utiliza o banco de dados `moderador` com uma tabela chamada `mensagens`.

Você pode criar o banco e a tabela executando o seguinte arquivo:

[`database/moderador.sql`](./database/moderador.sql)

### 📦 Como importar:

Via terminal:
```bash
mysql -u seu_usuario -p < database/moderador.sql

