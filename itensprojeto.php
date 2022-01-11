<!DOCTYPE html>
<html lang="en">
    <cabeca>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="widtth = devide-width,initial-scale = 1.0" >
        <title >Processo</title>
        </cabeca>

        <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('imagens/logo.jpg'); 
            padding: 20%;
            width:30%;
        }
        .box{
            color: white;
            position: fixed;
            top: 1%;
            left: 35%;
            border-radius: 15px;
            width: 30%;
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

        } .inputcheckbox{
            background-color:#0A3B4A;
            border: none;
            /* border-bottom: 1px solid #FD3B00;  */
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
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
        $nomeprojeto = new projeto();
        
        $listanomeprojeto = $nomeprojeto->listar();
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
?>
<div class="box">
    <form action="insertitensprojeto.php" method ="POST">
    <fieldset>
<legend>Cadastro de Processos</legend>
<div class="inputBox">
                    <label for="codprojeto" class="labelInput">Projeto</label>
                  
                    <select class="inputUser" name="codprojeto">
                        <?php foreach ($listanomeprojeto as $linha) { ?>
                    <option value = <?php echo $linha ['codprojeto']?>>
                    <?php echo $linha['nomeprojeto']?>
                        </option>
                        <?php } ?>
                        </select>
                </div>
                <br><br>
                <div class="form-check">
    <input class="" type="checkbox" value="13" name="SAC">
    <label class="inputcheckbox" for="">SAC</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="17" name="WBI">
    <label class="inputcheckbox" for="">WBI</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="3" name="SETUP">
    <label class="inputcheckbox" for="">SETUP</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="4" name=" START">
    <label class="inputcheckbox" for="">START</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="1" name="COMERCIAL">
    <label class="inputcheckbox" for="">COMERCIAL</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="2" name="ADERÊNCIA">
    <label class="inputcheckbox" for="">ADERÊNCIA</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="12" name="RECEBÍVEIS">
    <label class="inputcheckbox" for="">RECEBÍVEIS</label>
</div>

<div class="form-check">
    <input class="" type="checkbox" value="5" name="VIABILIDADE">
    <label class="inputcheckbox" for="">VIABILIDADE</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="6" name="ORÇAMENTO">
    <label class="inputcheckbox" for="">ORÇAMENTO</label>
</div>

<div class="form-check">
    <input class="" type="checkbox" value="9" name="PATRIMONIO">
    <label class="inputcheckbox" for="">PATRIMONIO</label>
</div>

<div class="form-check">
    <input class="" type="checkbox" value="14" name="QUALIDADESGQ">
    <label class="inputcheckbox" for="">QUALIDADESGQ</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="15" name="ESCRITAFISCAL">
    <label class="inputcheckbox" for="">ESCRITAFISCAL</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="16" name="CONTABILIDADE">
    <label class="inputcheckbox" for="">CONTABILIDADE</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="10" name="CONTROLADORIA">
    <label class="inputcheckbox" for="">CONTROLADORIA</label>
</div>

<div class="form-check">
    <input class="" type="checkbox" value="7" name="GESTAODECUSTOS">
    <label class="inputcheckbox" for="">GESTAO DE CUSTOS</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="11" name="VENDAS">
    <label class="inputcheckbox" for="">COMERCIAL - VENDAS</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="8" name="FOLHADEPAGAMENTO">
    <label class="inputcheckbox" for="">FOLHA DE PAGAMENTO</label>
</div>
<div class="form-check">
    <input class="" type="checkbox" value="18" name="GERADORESRESULTADOS">
    <label class="inputcheckbox" for="">GERADORESRESULTADOS</label>
</div>
<BR>
<input type="submit" name="submit" id="submit">
            </fieldset>
</form>
</div>

</body>

</html>