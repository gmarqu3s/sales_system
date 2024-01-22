Para iniciar o programa, siga os passos abaixo:

Instale o Docker: https://www.docker.com/get-started
ou vida wsl: sudo apt install -y docker.io

para dar start:
sudo service docker start

execute os seguintes comandos no diretório(montando imagem):

| sales_system-main/phpdocker/php-fpm$ docker run --name sales_system -d mysql | 

/sales_system-main/phpdocker/php-fpm$ docker-compose up -d | 

docker ps -a | 

para visualizar as configs |
criar o container 
| sales_system-main/phpdocker/php-fpm$ docker run -d --name sales_system-db-1 -e MYSQL_ROOT_PASSWORD=sua_senha -p 3306:3306 mysql:latest |

| acessar container | /sales_system-main/phpdocker/php-fpm$ docker exec -it sales_system-db-1 mysql -uroot -p |

criando banco de dados:
mysql> docker exec -i sales_system-db-1 mysql -uroot -psua_senha seu_banco_de_dados <\sales_system-main\config_db.sql;

| CASO NAO CONSIGA EXECUTAR O CONFIG_DB, ABRA O ARQUIVO E COPE E COLE AS QUERYS DENTRO DO CONTAINER. |
OBS. informe o caminho que esta o config_db.sql
Agora o banco de dados está criado.

agora digite http://localhost:8000/sistema_de_vendas.php no navegador para acessar o sistema de vendas
