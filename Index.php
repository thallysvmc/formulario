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
            background-image: url('imagens/logo.jpg'); 
            padding: 20%;
            width:50%;
        }
        .box{
            color: white;
            position: fixed;
            top: 1%;
            left: 25%;
            border-radius: 15px;
            width: 50%;
        }
        fieldset{
            border: 2px solid #FD3B00;
        }
        legend{
            border: 1px solid #0A3B4A;
            padding: 10px;
            text-align: center;
            background-color: #FD3B00;
            border-radius: 8px;
        }
        .inputBox{
            
            position: relative;
        }
        .inputUser{
            background-color:  #0A3B4A;
            border: none;
            border-bottom: 1px solid #FD3B00; 
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            
            position: relative;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .data_agen{ 
            border: none;
            padding: 5px;
            outline: none;
            font-size: 15px;
            cursor: text;
        }
        .data{
            text-align: center;
            background-color: #0A3B4A;
            color: white;
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            cursor: text;
        } 
        .hora{
            text-align: center;
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            cursor: text;
        }
        #submit{
            background-color:#FD3B00;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-color: white;
            color: #0A3B4A;
        }
  

    </style> 

<body>
<?php require_once ('global.php'); ?>

<?php
    try{
        $nomeConsultor = new consultor();
        $nomecliente = new cliente();
        $nomeprojeto = new projeto();
        $nomemac_proc = new processo();

        $listaconsultor = $nomeConsultor->listar(); 
        $listacliente = $nomecliente->listar(); 
        $listaprojeto = $nomeprojeto->listar();
        $listamac_proc = $nomemac_proc->listar();
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>
    <div class="box">
        <form action="Agenda.php" method ="POST">
            <fieldset>
                <legend><b>Agenda</b></legend>
                <br>
                <div class="inputBox">
                    <label for="codconsultor" class="labelInput">Consultor</label>
                  
                    <select class='inputUser' name="codconsultor">
                        <?php foreach ($listaconsultor as $linha) { ?>
                    <option value = <?php echo $linha ['codConsultor']?>>
                    <?php echo $linha['nomeConsultor']?>
                        </option>
                        <?php } ?>
                        </select>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="codcliente" class="labelInput">Cliente</label>
                    
                    <select class='inputUser' name='codcliente'>
                        <?php foreach ($listacliente as $linha) { ?>
                    <option value = <?php echo $linha ['codcliente']?>>
                    <?php echo $linha['nomecliente']?>
                        </option>
                        <?php } ?>
                        </select>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="codprojeto" class="labelInput">Projeto</label>
                    <select class='inputUser' name='codprojeto'>
                        <?php foreach ($listaprojeto as $linha) { ?>
                    <option value = <?php echo $linha ['codprojeto']?>>
                    <?php echo $linha['nomeprojeto']?>
                        </option>
                        <?php } ?>
                        </select>
                </div>
                <br><br>
                <label for="processo"><b>Processo:</b><br></label>
                <select class='inputUser' name='codmac_proc'>
                        <?php foreach ($listamac_proc as $linha) { ?>
                    <option value = <?php echo $linha ['codmac_proc']?>>
                    <?php echo $linha['nomemac_proc']?>
                        </option>
                        <?php } ?>
                        </select>

                        <br><br>
                        <div class="data_agen">
                <label for="data_agen"><b>Agenda:</b></label>
                <input class="data" type="date" name="data_agen" id="data_agen" required>
                </div>
                            
                 <div class="hora">
                 <label for="horaent_am"><b>Manhã:</b><br></label>
                <input class="hora" type="text"  value= "00:00" name="horaent_am" id="hora_ent" required>
                <input class="hora" type="text" value= "00:00" name="horasai_am" id="horasai_am" required>
                </div>
                <div class="hora">
                 <label for="horaent_pm"><b>Tarde:</b><br></label>
                <input class="hora" type="text" value= "00:00" name="horaent_pm" id="horaent_pm" required>
                <input class="hora" type="text" value= "00:00" name="horasai_pm" id="horasai_pm" required>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>