<?php
if(isset($_POST['submit']))
{
    //print_r('Nome:' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email:' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone:' . $_POST['telefone']);
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | RC</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image:linear-gradient(to right, deepskyblue, black);
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 400px;
            color: white;
           
        }

        fieldset{
            border: 3px solid dodgerblue ;
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;
            
        }

        .inputBox{
            position:relative;

        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;


        }

        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;

        }

        #submit{
            background-color:dodgerblue;
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 15px;
            color: white;
            font-size: 15px;
        }
        #submit:hover{
            background-color: white;
            color: black;
            cursor: pointer;
        }
    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    
<div class="box">
       <form action="formulario.php" method="POST">
        <fieldset>
            
            <legend><b>Fórmulario de Clientes</b></legend>
       
        <br>
        
        <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelinput">Nome Completo</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="text" name="email" id="email" class="inputUser" required>
            <label for="email" class="labelinput">E-mail</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required>
            <label for="senha" class="labelinput">Senha</label>
        </div>
        <br><br>
        <div class="inputBox">
            <input type="tel" name="telefone" id="telefone" class="inputUser" required>
            <label for="telefone" class="labelinput">Telefone</label>
        </div>
    
        <p>Sexo:</p>
        
        <input type="radio" name="genero" id="feminino" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" name="genero" id="masculino" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" name="genero" id="outro" value="outro" required>
        <label for="outro">Outro</label>
        <br><br>

        
            <label for="data_nascimento" ><b>Data de nascimento</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento"  required>
        
        <br><br><br>

        <div class="inputBox">
            <input type="text" name="cidade" id="cidade" class="inputUser" required>
            <label for="cidade" class="labelinput">Cidade</label>
        </div>
        <br><br>

        <div class="inputBox">
            <input type="text" name="estado" id="estado" class="inputUser" required>
            <label for="estado" class="labelinput">Estado</label>
        </div>
        <br><br>

        <div class="inputBox">
            <input type="text" name="endereco" id="endereco" class="inputUser" required>
            <label for="endereco" class="labelinput">Endereço</label>
        </div>
        <br><br>
        <input type="submit" name="submit" id="submit">


        </fieldset>
       </form> 

    </div>
</body>
</html>