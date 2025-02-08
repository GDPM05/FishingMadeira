# Blog de Pesca
Bem-vindo ao nosso blog/wiki sobre pesca na Madeira.

# Como testar localmente (IMPORTANTE)

Os ficheiros: 
* app/Config/App.php
* env

DEVEM ser marcados com a flag --skip-worktree. Isto faz com que as configurações de desenvolvimento não sejam enviadas ao dar commit, para que o git tenha as configurações de produção e dê deploy delas para o servidor de produção, enquanto localmente as configurações de desenvolvimento sejam usadas para testar o projeto sem ter de dar sempre commit ao fazer uma alteração e ter de esperar a execução da pipeline toda.

Ao clonar, a configuração de produção vai ser trazida. O que deve ser feito é:
* Alterar o base_url em app/Config/App.php para, por exemplo, "http://localhost/blog-de-pesca", para poder usar o XAMPP ou AMPPS;
* Alterar CI_ENVIRONMENT para "development".

Após isso, os seguintes comandos devem ser executados:

```
git update-index --skip-worktree app/Config/App.php
git update-index --skip-worktree .env
```
E assim sucessivamente para os outros ficheiros que estejam na lista acima.
Não é possível fazer isto utilizando o .gitignore porque este ficheiro não funciona quando os ficheiros que estão listados nele já estão no repositório.
