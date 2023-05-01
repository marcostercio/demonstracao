# Demonstracao
Sistema de demonstração para vaga

Este guia tem como objetivo fornecer instruções passo a passo para a instalação do PHP e a liberação de acesso ao PostgreSQL.

Instalação do PHP

 * Faça o download da versão mais recente do PHP no site oficial: https://www.php.net/downloads.
 * Descompacte o arquivo baixado em um diretório de sua escolha. Por exemplo, se você estiver usando o Windows e descompactar o arquivo em C:\, o diretório será C:\php.
 * Adicione o diretório php ao seu PATH de sistema:
 * No Windows:
 * Abra o Painel de Controle e acesse "Sistema".
 * Clique em "Configurações avançadas do sistema".
 * Clique em "Variáveis de ambiente".
 * Em "Variáveis do sistema", selecione a variável "Path" e clique em "Editar".
 * Adicione o caminho para o diretório php ao final da variável "Path". Por exemplo: ;C:\php.
No Linux:
 * Edite o arquivo /etc/environment e adicione o caminho para o diretório php ao final da variável PATH. Por exemplo: :/usr/local/php.
 * Reinicie seu terminal ou abra um novo terminal para que as mudanças sejam aplicadas.

Liberando o acesso ao PostgreSQL no PHP.ini

Este guia tem como objetivo fornecer instruções passo a passo para liberar o acesso ao PostgreSQL no arquivo php.ini.

Localizando o arquivo php.ini
* Abra o arquivo php.ini com um editor de texto.
* Localize a linha ;extension=pgsql e remova o ponto e vírgula ";" para habilitar a extensão do PostgreSQL.

Instalando o Composer
 * Baixe o instalador do Composer a partir do site oficial do Composer: https://getcomposer.org/download/
 * Execute o instalador baixado e siga as instruções do assistente de instalação.
 * Quando solicitado a fornecer o caminho para o arquivo php.exe, forneça o caminho completo para o executável do PHP em seu sistema. O caminho padrão do executável do PHP no Windows é C:\xampp\php\php.exe.
 * Se solicitado a adicionar o caminho do diretório do Composer às variáveis de ambiente, marque a caixa de seleção correspondente e prossiga com a instalação.
 * Após a conclusão da instalação, você pode verificar se o Composer está funcionando corretamente executando o seguinte comando no Prompt de 
 Comando do Windows:
 * composer --version
 * Se o Composer estiver instalado corretamente, o comando exibirá a versão do Composer instalada em seu sistema.

 Iniciar o php com : php -S localhost:8080

 Intalar as dependências com 
 * php composer install

 //Este projeto utilizou apenas PHP puro, Jquery, Postgres e bootstrap
 //login do sistema login: admin senha:admin
 //conexão em models conexao