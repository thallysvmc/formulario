<!DOCTYPE html>
<html lang="en">
    <cabeca>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="widtth = devide-width,initial-scale = 1.0" >
        <title >Formulário</title>
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
            top: 0.3%;
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
        /* .labelInput{
            
            position: relative;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        } */
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
</head>
<body>
<?php require_once ('global.php');
        include_once('config.php'); ?>

<?php
    try{
        $nomeConsultor = new consultor();
        $nomecliente = new cliente();
        $nomeprojeto = new projeto();
        $nomemac_proc = new processo();
        $nome_proc = new processo();
        $codagenda = new agenda();

        $listaconsultor = $nomeConsultor->listar(); 
        $listacliente = $nomecliente->listar(); 
        $listaprojeto = $nomeprojeto->listar();
        $listamac_proc = $nomemac_proc->listar();
        $lista_proc = $nome_proc->listarproc();
        $listaagenda = $codagenda->listar();
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>
    <div class="box">
        <form action="medição.php" method ="POST">
            <fieldset>
                <legend><b>Fórmulário de Medição</b></legend>
                
                <div class="inputBox">
                    <label for="codconsultor" class="labelInput"><b>Consultor</b></label>
                  
                    <select class='inputUser' name="codconsultor">
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

                 <div class="">
                    <label for="codprojeto"><b>Projeto</b></label>
                    <select class='inputUser' name='codprojeto'>
                        <?php foreach ($listaprojeto as $linha) { ?>
                    <option value = <?php echo $linha ['codprojeto']?>>
                    <?php echo $linha['nomeprojeto']?>
                        </option>
                        <?php } ?>
                        </select>
                </div><br>
                <div class="">
                    <label for="codagenda"><b>Código da agenda</b></label>
                    <select class='inputUser' name='codagenda'>
                        <?php foreach ($listaagenda as $linha) { ?>
                    <option value = <?php echo $linha ['codagenda']?>>
                    <?php echo $linha['codagenda']?>
                        </option>
                        <?php } ?>
                        </select>
                </div>
                <br>
                <label for="processo"><b>Macro Processo:</b><br></label>
                <select class='inputUser' name='codmac_proc'>
                        <?php foreach ($listamac_proc as $linha) { ?>
                    <option value = <?php echo $linha ['codmac_proc']?>>
                    <?php echo $linha['nomemac_proc']?>
                        </option>
                        <?php } ?>
                        </select>
                 <br><br>

                 <label for="cod_proc"><b>Processo:</b><br></label>
                <select class='inputUser' name='cod_proc'>
                        <?php foreach ($lista_proc as $lista) { ?>
                    <option value = <?php echo $lista ['cod_proc']?>>
                    <?php echo $lista['nome_proc']?> 
                        </option>
                        <?php } ?>
                        </select>
                 <br><br>

                <div class="inputBox">
                <label for="obs" class="labelInput"><b>Observação:</b></label>
                    <input type="text" name="obs" id="obs" class="inputUser" required>

                </div>
                <br>
                <div class="">
                <label  for="qdadehora_proc" ><b>Quantidade de horas medidas:</b></label>
             <input class="inputUser" type="number" name="qdadehora_proc" id="qdadehora_proc"  required>
                </div>
                
                <p>Hora Medida:</p>
                <input type="radio" id="sim" name="hmedida" value="1" required>
                <label for="sim">Sim</label>
                <input type="radio" id="nao" name="hmedida" value="0" required>
                <label for="nao">Não</label>
                <br><br>
               
               
                <label class="data_agen" for="data_med"><b>Data da Medição:</b></label>
                <input class="data" type="date" name="data_med" id="data_med" required>
                 <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>