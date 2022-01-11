<!DOCTYPE html>
<html lang="en">
    <cabeca>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="widtth = devide-width,initial-scale = 1.0" >
        <title >Cadastro de Projetos</title>
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
            font-size: 15px;
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
        $nometipoprojeto = new tipoprojeto();
        
        $listaconsultor = $nomeConsultor->listar(); 
        $listacliente = $nomecliente->listar(); 
        $listatipoprojeto = $nometipoprojeto->listar();
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>
    <div class="box">
        <form action="Cadastroprojeto.php" method ="POST">
            <fieldset>
                <legend><b>Cadastro de projetos</b></legend>
                <br>
                <div class="inputBox">
                    <label for="codConsultor" class="labelInput"><b>Consultor Responsável</b></label>
                  
                    <select class='inputUser' name="codConsultor">
                        <?php foreach ($listaconsultor as $linha) { ?>
                    <option value = <?php echo $linha ['codConsultor']?>>
                    <?php echo $linha['nomeConsultor']?>
                        </option>
                        <?php } ?>
                        </select>
                </div>
                <br>
                <div class="inputBox">
                    <label for="codcliente" class="labelInput"><b>Cliente</b></label>
                    
                    <select class='inputUser' name='codcliente'>
                        <?php foreach ($listacliente as $linha) { ?>
                    <option value = <?php echo $linha ['codcliente']?>>
                    <?php echo $linha['nomecliente']?>
                        </option>
                        <?php } ?>
                        </select>
                </div>
                <br>
                <div class="InputUser">
                <label for="nomeprojeto"><b>Nome do Projeto:</b></label>
                <input class='inputUser' type="text" name="nomeprojeto" id="nomeprojeto" required>
                </div>
<br>
                <div class="inputBox">
                    <label for="codtipoprojeto" class="labelInput"><b>Tipo de Projeto:</b></label>
                    <select  class='inputUser' name='codtipoprojeto'>
                        <?php foreach ($listatipoprojeto as $linha) { ?>
                    <option value = <?php echo $linha ['codtipoprojeto']?>>
                    <?php echo $linha['nometipoprojeto']?>
                        </option>
                        <?php } ?>
                        </select>
                </div>
                 <br>
                <div class="data_agen">
                <label for="dataini_proj"><b>Data de Início do Projeto:</b></label><br><br>
                <input class="data" type="date" name="dataini_proj" id="dataini_proj" required>
                </div>
                 <div class="data_agen">
                <label for="dataterm_proj"><b>Data de Término do Projeto:</b></label><br><br>
                <input class="data" type="date" name="dataterm_proj" id="dataterm_proj" required>
                </div>
                 <br>
                            
                 <div class="hora">
                 <label for="qdadehora_cont"><b>Quantidade de horas contratadas:</b><br></label>
                <input class='inputUser' type="int"  name="qdadehora_cont" id="qdadehora_cont" required>
                </div>
               
                <div class="hora">
                 <label for="valorhora_cont"><b>Valor da Hora Contratada:</b><br></label>
                <input class='inputUser' type="int"  name="valorhora_cont" id="valorhora_cont" required>
                </div>

                <input type="submit" name="submit" id="submit" >
            </fieldset>
        </form>
    </div>
</body>
</html>