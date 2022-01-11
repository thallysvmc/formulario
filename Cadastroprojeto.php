<?php

if (ISSET($_POST['submit'])) 
{
 include_once ('config.php');

     $nomeprojeto = $_POST['nomeprojeto'];
     $codConsultor = $_POST['codConsultor'];
     $codcliente = $_POST['codcliente'];
     $codtipoprojeto = $_POST['codtipoprojeto'];
     $qdadehora_cont = $_POST['qdadehora_cont'];
     $valorhora_cont = $_POST['valorhora_cont'];
     $dataini_proj = $_POST['dataini_proj'];
     $dataterm_proj = $_POST['dataterm_proj'];

     $result = mysqli_query ($conexao, "INSERT INTO tbprojeto(nomeprojeto,codcliente,codtipoprojeto,
     qdadehora_cont,valorhora_cont,dataini_proj,dataterm_proj,codConsultor)
     VALUES('$nomeprojeto','$codcliente','$codtipoprojeto','$qdadehora_cont',
     '$valorhora_cont','$dataini_proj','$dataterm_proj','$codConsultor')");
}
?>

<!DOCTYPE html>
<html lang="en">
    <cabeca>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="widtth = devide-width,initial-scale = 1.0" >
        <title >Agenda</title>
    </cabeca>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        .box{
            color: white;
            position: fixed;
            top: 20%;
            left: 35%;
            /* transform: translate(-55%,-50%); */
            background-color: rgba(0, 0, 0, 0.6);
            padding: 55px;
            border-radius: 15px;
            width: 20%;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid #FD3B00;
            padding: 10px;
            border-radius: 10px;
            width: 10px;
        }

        #myVideo {
position: fixed; 
			right: 0; 
			bottom: 0;
			min-width: 100%; 
			min-height: 100%;
			width: auto; 
			height: auto; 
			z-index: -1000;
			background-size: cover; 
					
};

    </style>

<video autoplay muted loop id="myVideo">
    <source src="https://video.wixstatic.com/video/51f0fc_2e51ae98e46b47819d29186b3d9ac257/720p/mp4/file.mp4" type="video/mp4">
    </video>
    <body class="box">
    <h2>Projeto cadastrado com sucesso!</h2>
    <a href="itensprojeto.php">Cadastrar itens do projeto</a><br><br><br>
    <a href="Home.html">Voltar à pagina Home</a>
</body>
</html>