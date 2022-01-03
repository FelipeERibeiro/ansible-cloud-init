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
<h1>Setup deu certo!</h1>
<p>Este ambiente possui um HA baseado em servidores rodando em nginx com um LB.</p>
<p>Este &eacute; o servidor:  </p>
<li><?php print exec('cat /run/hostname_server'); ?></li>
</body>
</html>
