<?php

   $dbHost = 'Localhost'; //variaveis php
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'formulario';

   $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);//variavel conexao vai verificar todos os requisitios acima e fazer a conexao com o banco de dados
   
   //if($conexao->connect_errno){
    //echo "Erro";
   //}else{
    //echo "Conexao efetuada com sucesso!";
   //}
?>

<?php

   if(isset($_POST['submit'])){ 
   //if = se, isset = verifica a existencia de uma variavel e retorna um valor boleano (true or false)!, ou seja o isset verifica se existe uma variavel submit
   //$_POST['submit'] acessa um parâmetro enviado com a chave = 'submit'.
   //Ao realizar a requisição você pode envia-la para outras páginas PHP ou então para a mesma página. Isso torna o fluxo de páginas e lógica muito simples.

   include_once('config.php');//inclui e avalia o arquivo informado durante a execução do script, se o código do arquivo já foi incluído, não o fará novamente, e o include_once retornará true.
    
   $nome = $_POST['nome'];//variavel "nome" é igual ao nome inserido no input 
   $email = $_POST['email'];//variavel "email" é igual ao email inserido no input 
   $telefone = $_POST['telefone'];//variavel "telefone" é igual ao telefone inserido no input 
   $sexo = $_POST['sexo'];//variavel "sexo" é igual ao sexo inserido no input 
   $data_Nasc = $_POST['data_Nasc'];//variavel "data_Nasc" é igual ao data_Nasc inserido no input 
   $cidade = $_POST['cidade'];//variavel "cidade" é igual ao cidade inserido no input 
   $estado = $_POST['estado'];//variavel "estado" é igual ao estado inserido no input 
   $endereco = $_POST['endereco'];//variavel "endereco" é igual ao endereco inserido no input 
   $complemento = $_POST['complemento'];//variavel "complemento" é igual ao complemento inserido no input 

   $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco,complemento) VALUES ('$nome','$email','$telefone','$sexo','$data_Nasc','$cidade','$estado','$endereco','$complemento')");
   }
   //vai inserir os dados inserido nos input e armazenados nas variáveis dentro dos valores da tabela clientes do banco de dados.
   //$conexao é a variavel de conexao com o banco de dados 
?>