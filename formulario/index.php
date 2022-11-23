<?php

   if(isset($_POST['submit'])){
   // print_r('Nome: ' . $_POST['nome']);
   // print_r('<br>');
   // print_r('Email: ' . $_POST['email']);
   // print_r('<br>');
   // print_r('Telefone: ' . $_POST['telefone']);
   // print_r('<br>');
   // print_r('Sexo: ' . $_POST['sexo']);
   // print_r('<br>');
   // print_r('Data de Nascimento: ' . $_POST['data_Nasc']);
   // print_r('<br>');
   // print_r('Cidade: ' . $_POST['cidade']);
   // print_r('<br>');
   // print_r('Estado: ' . $_POST['estado']);
   // print_r('<br>');
   // print_r('Endereço: ' . $_POST['endereco']);
   // print_r('<br>');
   // print_r('Complemento: ' . $_POST['complemento']);


   include_once('config.php');
    
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $sexo = $_POST['sexo'];
   $data_Nasc = $_POST['data_Nasc'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $endereco = $_POST['endereco'];
   $complemento = $_POST['complemento'];

   $result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco,complemento) VALUES ('$nome','$email','$telefone','$sexo','$data_Nasc','$cidade','$estado','$endereco','$complemento')");

   }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Clientes</title>

<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right,
          #051937, #004d7a, #008793, #00bf72);
    }

    .box{
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.5);
        padding: 15px;
        border-radius: 15px;
        width: 20%; /*Largura 20 porcento*/ 
    }

    fieldset{
        border: 3px solid #008793;
    }

    legend{
        border: 1px solid #008793;
        padding: 6px;
        text-align: center;
        background-color: #008793;
        border-radius: 5px;
        color: white;                                                                                                                                         
    }

    .inputBox{
        position: relative;
    }

    .inputUser{
        color: white;
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none; /*tirar linha de fora*/
        font-size: 15px;
        width: 100%;
        
    }

    .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none; /*Qualquer lugar clicado dentro do input executara a funcao*/
        transition: .5s;
    }

    .inputUser:focus ~ .labelInput, /*Qnd focus no input ele ira executar uma funcao*/
    .inputUser:valid ~ .labelInput
    { 
        top: -18px;
        font-size: 11px;
        color: #008793;
    }

    #data_Nasc{ /*Os id's se chamam atraves do #*/
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
       
    }

    #submit{
        background-image: linear-gradient(
          #004d7a, #008793);
          width: 100%;
          border: none;
          padding: 15px;
          color: white;
          font-size: 15px;
          cursor: pointer;
          border-radius: 8px;
    }

    #submit:hover{
        background-image: linear-gradient(
          #023958, #025158);
    }

</style>

</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
<fieldset>
    <legend><b>Formulário de Clientes</b></legend>
    <br>
    <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser" required>
        <label class="labelInput" for="nome">Nome completo</label>
    </div>
    <br><br>
    <div class="inputBox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label class="labelInput" for="nome">Email</label>
    </div>
    <br><br>
    <div class="inputBox">
        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
        <label class="labelInput" for="telefone">Telefone</label>
    </div>
    <p>Sexo:</p>
    <input type="radio" id="feminino" name="sexo" value="feminino" required>
    <label for="feminino">Feminino</label>  <!-- "For" aumenta a area do click na label -->
    <br>
    <input type="radio" id="masculino" name="sexo" value="masculino" required>
    <label for="masculino">Masculino</label>
    <br>
    <input type="radio" id="outro" name="sexo" value="outro" required>
    <label for="outro">Outro</label>
    <br><br>
    
        <label for="data_Nasc"><b>Data de Nascimento:</b></label>
        <input type="date" name="data_Nasc" id="data_Nasc" required>

    <br><br>
    <div class="inputBox">
        <input type="text" name="cidade" id="cidade" class="inputUser" required>
        <label class="labelInput" for="cidade">Cidade</label>
    </div>
    <br><br>
    <div class="inputBox">
        <input type="text" name="estado" id="estado" class="inputUser" required>
        <label class="labelInput" for="estado">Estado</label>
    </div>
    <br><br>
    <div class="inputBox">
        <input type="text" name="endereco" id="endereco" class="inputUser" required>
        <label class="labelInput" for="endereco">Endereço</label>
    </div>
    <br><br>
    <div class="inputBox">
        <input type="text" name="complemento" id="complemento" class="inputUser" required>
        <label class="labelInput" for="complemento">Complemento</label>
    </div>
    <br><br>
    <input type="submit" name="submit" id="submit">

</fieldset>
        </form>
    </div>
</body>
</html>