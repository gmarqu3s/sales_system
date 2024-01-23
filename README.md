Para iniciar o programa, siga os passos abaixo:

Instale o Docker: https://www.docker.com/get-started
ou vida wsl: sudo apt install -y docker.io

para dar start:
sudo service docker start

execute os seguintes comandos no diretório(montando imagem):
1 - docker run --name sales_system -d mysql
2 - docker compose up -d
  2.2 - docker ps (para visualizar status e configs)

Criando banco de dados(O comando deve ser executado no mesmo diretório do arquivo config_db.sql):
1 - docker exec -i (nome do container do banco) mysql -uroot -ptest < config_db.sql

Acessar container
1 - docker exec -it sales_system-db-1 mysql -uroot -ptest

(CASO NAO CONSIGA EXECUTAR O CONFIG_DB, ABRA O ARQUIVO E COPIE E COLE AS QUERYS DO CONFIG_DB DENTRO DO CONTAINER.)

Informe a seguir o link para acessar o sistema: http://localhost:8000/sistema_de_vendas.php

Descrição dos arquivos/pastas:

Em phpdocker, estão os arquivos de configuração de imagem, conexão necessários para subir o docker.

Em public, temos CSS com arquivos do bootstrap para mexer com o front-end da pagina.
Temos ainda a pasta js(javaScript) temos o arquivo custom que gerencia os botões da pagina, faz a chamada no link do viacep e devolve os dados de endereço.

ainda em public, temos:
Arquivo - Connection_db - Faz a conexão com o banco de dados criado no docker
Arquivo - helper - um arquivo que ajuda o arquivo products a fazer os selects no banco de dados(que são os filtros da pagina)
Arquivo - index - Onde está toda configuração da pagina, nele é feito o front em bootstrap, criação dos botões campos de input e output.
