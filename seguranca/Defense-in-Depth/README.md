Defense in depth (defesa em camadas)

Para aumentar a segurança da aplicação.
Na arquitetura física, a Defesa em Camada envolve desde a segurança do servidor web, a segurana física, quem tem acesso ao código, ao banco de dados e informações armazenadas no servidor.
Antigamente usávamos muito empresas de hospedagem, mas hoje o mais máquinas virtuais (servidores na nuvem). Ex: Amazon, Digital Ocean, Google Cloud, Microsoft Azure, etc.

A máquina virtual pode ser escalável, pode dimensionar a sua aplicação para suportar muitos acessos de usuários sem ‘quebrar’. Desta forma pode usar conforma sua necessidade.
Na programação sempre deve criar mais de um nível de camada de autenticação.
DICA: jamais confie em um usuário somente com usuário e senha, e um cookie na máquina. Pois o usuário pode logar e permanecer logado através de cookie, hash no banco de dados, ou Local Storage. SEMPRE GERE MAIS DE UM MECANISMO DE AUTENTICAÇÃO.
Por SSL é outro meio de segurança, com sites HTTPS, ou seja, seguros. Se o seu site HTTP (não seguro) tem um formulário, automaticamente na URL o navegador já informa que o site não é seguro.
