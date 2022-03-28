<!DOCTYPE html>
<title>
Server <?php print exec('cat /run/hostname_server | awk -F \- \'{print $2}\' '); ?>
</title>
<style>
html { color-scheme: dark; }
body { width: 60em; margin: 0 auto;
font-family: Tahoma, Verdana, Arial, sans-serif; }
</style>
</head>
<body>
<p>Este ambiente possui um HA baseado em servidores rodando em nginx com um LB.</p>
<p>Este &eacute; o servidor:  </p>
<li><?php print exec('cat /run/hostname_server'); ?></li>
<h3>Estudos Linux</h3>
<details>
  <summary>Semana 01</summary>
<ol>
<li> Estrutura de diretório</li>
<ul>
<li>Função dos principais diretórios linux;</li>
<li>Ter noção de quais são, e principal função dos diretórios padrões;</li>
<li> Navegar sem problemas nos diretórios;                </li>
<li> Saber identificar diretórios de arquivos;            </li>
<li> Entender o conceito do user home.                    </li>
</ul>
<li> Edição/criação de arquivo e criação de diretórios    </li>
<ul>
<li> Criar diretórios e arquivos;                         </li>
<li> Ler e escrever dentro de arquivos.                   </li>
<li> Extra: Pesquisar como utilizar o vi / vim.            </li>
</ul>
<li> Layout de disco e partições</li>
<ul>
<li> Entender sobre consumo de disco</li><ul>
<li>Extra: Pesquisar sobre inodes.</li></ul>
<li> Identificar um ponto de montagem e entender como que isto fica dentro de uma estrutura de diretórios;  </li>
<li> Entender o processo de criação/formatação de um novo disco;                                            </li>
<li> Entender alocação de espaço raiz x alocação de espaço unidade montada;                                 </li>
<li> Compreender como que um disco é montado e como deixa-lo em caso de reboot.                             </li>
<li> Extra: Fazer o processo do disco com LVM.
</ul>                                                      </li>
<li>Adição de usuários/grupos                                           </li>
<ul>
<li>Ser apto a listar todos os usuários criados;                        </li>
<li>Criar e remover usuários;                                           </li>
<li>Consultar grupos pertencentes de um usuário;                        </li>
<li>Adicionar/remover um grupo de um usuário.                           </li>
</ul>
<li>Permissões de pastas (rwx)
<ul>
<li>Entendimento de permissão linux, significado e possíveis usos. (rwx)</li>
<li>Entender diferença do elemento "x" em pastas e arquivos.            </li>
</ul>
<ol>
<details>
<summary>DESAFIO 01</summary>
 <p><input type="checkbox">  Criar um novo disco com ao menos 10 MB. OPCIONAL: Criar um lvm chamado lv_disco; </p>
 <p><input type="checkbox">  Formatar o novo disco com ext4 e montar em /mnt/teste_deu_boa. Este ponto de montagem deve ser iniciado após um reboot. </p>
 <p><input type="checkbox">  Criar um novo usuário chamado tux e um novo grupo chamado de linux. </p>
 <p><input type="checkbox">  Tux deve ser membro de linux. </p>
 <p><input type="checkbox">  Alterar o diretório para que apenas o grupo linux possa gravar e ler e o owner deve ser root. Nenhum outro usuário deve ter acesso algum a esta pasta. </p>
 <p><input type="checkbox">  Criar as pastas dir1, dir2 e dir3 dentro de /mnt/teste_deu_boa </p>
 <p><input type="checkbox">  Estas pastas além da permissão de grupo, devem ter como owner o user tux;  </p>
 <p><input type="checkbox">  Com o usuário tux crie um arquivo dentro de dir2 chamado de run.sh e neste arquivo deve constar o conteudo abaixo. OBS: Teste o script para garantir que ele está rodando e trazendo a informação "Uhuul deu boa".: </p>
<textarea name="text" cols="25" rows="3">
#!/bin/bash
echo "Uhuul deu boa"
</textarea>
 <p><input type="checkbox">  Dentro de dir3 criar um arquivo chamado de lista_dir, com uma saida do comando ls /mnt/teste_deu_boa. OPCIONAL: Pesquisar sobre stdin, stdout, stderr. </p>
 <p><input type="checkbox">  Após ter rodado com sucesso remova o usuário tux do grupo linux. OBS: Garanta e entenda o motivo que o usuário tux não consegue mais entrar em /mnt/teste_deu_boa; </p>
</details>
</details>


<details>
  <summary>Semana 02</summary>
<ol>
<li>Processos/PID</li><ul>
<li>Entender como o linux organiza e identifica os processos;</li>
<li>Entender como encontrar o PID sobre um processo especifico;</li>
<li>Compreender como matar um processo;</li></ul>
<li>Gerenciador de pacotes</li><ul>
<li>Diferenciar arquivos .rpm e .deb e aonde são usados cada;</li>
<li>Entender como utilizar os gerenciadores de pacote para:</li>
<ul><li>Instalar determinado comando/serviço</li>
<li>Pesquisar qual é o pacote de determinado comando</li>
<li>Atualizar e voltar versão de determinado serviço/pacote</li></ul>
<li>Compreender como listar os pacotes e verificar se já possui instalado determinado pacote/serviço.</li></ul>
<li>Serviços</li><ul>
<li>Parar/inicar serviços</li>
<li>Analisar a porta que determinado serviço está utilizado (se o serviço possuir porta)</li>
<li>Ativar/desativar serviços no boot</li>
<li>Extra: Criar/personalizar um novo serviço com systemd.</li></ul>
<li>Localizando</li><ul>
<li>Como localizar o local de um arquivo que apenas possui o nome?</li>
<li>Como localizar um arquivo que você possui apenas ideia do que esteja escrito nele ?</li></ul>
<li>Análise de log</li><ul>
<li>Uso do journalctl para localizar logs de serviços</li>
<li>Identificar local padrão de logs do sistema operacional</li>
<li>Extra: Entendimento do serviço rsyslog</li></ul>
</ol>
<details>
<summary>DESAFIO 02</summary>
<p><input type="checkbox"> Instalar o pacote httpd; </p>
<p><input type="checkbox"> Iniciar o serviço (dexando ele ativo no boot); </p>
<p><input type="checkbox"> Verifique qual porta que o serviço iniciou; </p>
<p><input type="checkbox"> Realizar acesso no seu servidor e encontrar os logs de acesso; </p>
<p><input type="checkbox"> Encontrar o arquivo de conf httpd.conf utilizando os comandos visto no topico 4; </p>
<p><input type="checkbox"> Verifique quais PIDs estão atrelados para o serviço httpd. Realize um stop, valide novamente, e por fim, um start no serviço e compare os PIDs nestes 3 momentos; </p>
<p><input type="checkbox"> Personalize a sua página web com um arquivo index.html com a informação: </p>
<textarea name="text" cols="25" rows="3">
Meu primeiro webserver, deu boa
</textarea>
</details>
</details>


</body>
