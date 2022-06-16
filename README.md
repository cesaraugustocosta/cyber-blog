# Cyber Blog

## Projeto principal do blog, criado durante as Lives do canal da Satella Soft.

Para a utilização desse projeto se faz necessário algumas tecnologias,
dentre elas:

* PHP 7.2^
* Maria DB
* Composer
* Git

O projeto está em desenvolvimento e qualquer alteração pode acarretar em erros, aguarde a versão final.

# Configuração

O arquivo de configuração fica na pasta **app\config**, contendo o arquivo **config.php**
e uma subpasta chamada **env** contendo o arquivo final de configuração para ambiente local, qa e produção.

## Config.PHP
Faz uma validação através de uma variável para verificar qual arquivo será utilizado.

Mude o valor da variável **$prod** para true se quiser carregar os arquivos de configuração de prod, mas caso queira utilizar os arquivos de configurações locais, basta manter o valor da variável false.
