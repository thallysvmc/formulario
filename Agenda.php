<?php

if (ISSET($_POST['submit'])) 
{
 include_once ('config.php');

     $codConsultor = $_POST['codconsultor'];
     $codcliente = $_POST['codcliente'];
     $data_agen = $_POST['data_agen'];
     $horaent_am = $_POST['horaent_am'];
     $horasai_am = $_POST['horasai_am'];
     $horaent_pm = $_POST['horaent_pm'];
     $horasai_pm = $_POST['horasai_pm'];
     $codprojeto = $_POST['codprojeto'];
     $codmacroprocesso = $_POST['codmac_proc'];

     $result = mysqli_query ($conexao, "INSERT INTO tbagenda(codconsultor,
     data_agen,horaent_am,horasai_am,horaent_pm,horasai_pm,codcliente,codprojeto,codmac_proc) 
     VALUES('$codConsultor','$data_agen','$horaent_am',
     '$horasai_am','$horaent_pm','$horasai_pm','$codcliente','$codprojeto','$codmacroprocesso')");
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
            top: 15%;
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
    <body class='box'>

<?php require_once ('global.php');
        include_once('config.php'); ?>
<?php  try{
$codagenda = new agenda();

$listaagenda = $codagenda->listar1();
}catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>
    <h2>Agenda cadastrada com sucesso!</h2>
    <div class="">
                    <label for="codagenda"><b>Seu código de agenda é:</b></label>
                    
                    <labelInput class='inputUser' name='codagenda'>
                        <?php foreach ($listaagenda as $linha) { ?>
                    <option value = <?php echo $linha ['codagenda']?>>
                    <?php echo $linha['codagenda']?> 
                        </option>
                        <?php } ?>
                        </labelInput>
                </div><br>
    <a href="index.php">Cadastrar nova agenda</a>
    <br><br><br><br>
    <a href="Home.html">Sair</a>
</body>
</html>
