Para iniciar o programa, siga os passos abaixo:

Instale o Docker: https://www.docker.com/get-started

execute os seguintes comandos(montando imagem):
docker run --name sales_system -d mysql

docker ps -> para visualizar as configs

criando banco de dados:
docker exec -i sales_system-db-1 mysql -uroot -test </home/gmarques/projects/sales_system/config_db.sql

OBS. informe o caminho que esta o config_db.sql
Agora o banco de dados está criado.

agora digite http://localhost:8000/sistema_de_vendas.php no navegador para acessar o sistema de vendas