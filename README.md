# API-PHP-NOTE :notebook: :pencil2:

Link recomendado para teste:
Link: http://resttesttest.com/

API REST feita em PHP estrutural de maneira simples.

 **(O Objetivo do Projeto é demonstrar habilidades com PHP na criação uso de APIs.)**
# Ferramentas:
* PHP 7
* Mysql
* VS Code
# Endpoints :
* 1 /api-php-note/api/getall.php (Return: * 'id')  **Method GET
* 2 /api-php-note/api/get.php (Parameter: id) (Return: 'id' 'title' 'body') **Method GET
* 3 /api-php-note/api/insert.php (Parameter: title, body ) (Return: 'id' 'title' 'body') **Method POST
* 4 /api-php-note/api/update.php (Parameter: id, title, body ) (Return: 'id' 'title' 'body') **Method PUT
* 5 /api-php-note/api/delete.php (Parameter: id) (Return: '{"error":" "} **Method DELETE

# Base de Dados 
Tabela 'notes'
'id'
'title'
'body'
