<!DOCTYPE html>
<html>
<head>
<title>
Server <?php print exec('cat /run/hostname_server | awk -F \- \'{print $2}\' '); ?>
</title>
<style>
html { color-scheme: dark; }
body { width: 35em; margin: 0 auto;
font-family: Tahoma, Verdana, Arial, sans-serif; }
</style>
</head>
<body>
<p>Este ambiente possui um HA baseado em servidores rodando em nginx com um LB.</p>
<p>Este &eacute; o servidor:  </p>
<li><?php print exec('cat /run/hostname_server'); ?></li>
1 Linux
	Sistema Operacional
		- Estrutura de diretório
			- Função dos principais diretórios linux
				* Ter noção de quais são, e principal função dos diretórios padrões;
				* Navegar sem problemas nos diretórios;
				* Saber identificar diretórios de arquivos;
				* Entender o conceito do user home.
			- Edição/criação de arquivo e criação de diretórios
				* Criar diretórios e arquivos;
				* Ler e escrever dentro de arquivos.
					Extra: Pesquisar como utilizar o vi / vim.
			- Layout de disco e partições
				* Entender sobre consumo de disco;
					Extra: Pesquisar sobre inodes.
				* Identificar um ponto de montagem e entender como que isto fica dentro de uma estrutura de diretórios;
				* Entender o processo de criação/formatação de um novo disco;
				* Entender alocação de espaço raiz x alocação de espaço unidade montada;
					* Extra: Fazer o processo do disco com LVM.
				* Compreender como que um disco é montado e como deixa-lo em caso de reboot.
		- Usuário/Grupo
			- Adição de usuários/grupos
				* Ser apto a listar todos os usuários criados;
				* Criar e remover usuários;
				* Consultar grupos pertencentes de um usuário;
				* Adicionar/remover um grupo de um usuário.
			- Permissões de pastas (rwx)
				* Entendimento de permissão linux, significado e possíveis usos. (rwx)
				* Entender diferença do elemento "x" em pastas e arquivos.
----------------------------------------------------------------------------------------------------
	Desafio:
		[ ] Criar um novo disco com ao menos 10 MB;
			[ ] OPCIONAL: Criar um lvm chamado lv_disco;
		[ ] Formatar o novo disco com ext4 e montar em /mnt/teste_deu_boa;
			# OBS: Este ponto de montagem deve ser iniciado após um reboot.
		[ ] Criar um novo usuário chamado tux e um novo grupo chamado de linux.
		[ ] Tux deve ser membro de linux.
		[ ] Alterar o diretório para que apenas o grupo linux possa gravar e ler e o owner deve ser root. Nenhum outro usuário deve ter acesso algum a esta pasta.
		[ ] Criar as pastas dir1, dir2 e dir3 dentro de /mnt/teste_deu_boa
		[ ] Estas pastas além da permissão de grupo, devem ter como owner o user tux; 
		[ ] Com o usuário tux crie um arquivo dentro de dir2 chamado de run.sh e neste arquivo deve constar o seguinte conteudo:
			#!/bin/bash
			echo "Uhuul deu boa"
				# OBS: Teste o script para garantir que ele está rodando e trazendo a informação "Uhuul deu boa".
		[ ] Dentro de dir3 criar um arquivo chamado de lista_dir, com uma saida do comando ls /mnt/teste_deu_boa;
			OPCIONAL: Pesquisar sobre stdin, stdout, stderr.
		[ ] Após ter rodado com sucesso remova o usuário tux do grupo linux.
			OBS: Garanta e entenda o motivo que o usuário tux não consegue mais entrar em /mnt/teste_deu_boa;
----------------------------------------------------------------------------------------------------
</body>
</html>
