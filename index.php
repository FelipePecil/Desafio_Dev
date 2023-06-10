<?php
        include('conexao.php');
        $sql = "SELECT * FROM dados";
        $result = $con->query($sql);
            
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Cálculo de IMC</title>
</head>
<body>
<div class="container">
        <h1 class="text-center"><strong>Cálculo de IMC</strong></h1>
        <form>
        <div class="form-group">
            <label for="colFormLabelLg" class="col-sm-1 col-form-label col-form-label-lg"><strong>Nome:</strong></label>
            <div class="col-sm-12">
            <input type="text" name="nome" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group">
            <label for="colFormLabelLg" class="col-sm-1 col-form-label col-form-label-lg"><strong>Altura:</strong></label>
            <div class="col-sm-12">
            <input type="double" name="altura" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="form-group">
            <label for="colFormLabelLg" class="col-sm-1 col-form-label col-form-label-lg"><strong>Peso:</strong></label>
            <div class="col-sm-12">
            <input type="double" name="peso" class="form-control form-control-lg" id="colFormLabelLg" required>
            </div>
        </div>
        <div class="text-center">
            <br>
            <button type="submit" value="Calcular" class="btn btn-info mb-4 btn-lg "><strong>Calcular IMC</strong></button>
            <br>
        </div>
        </form>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">IMC</th>
                <th scope="col">Resultado</th>
                <th scope="col">Exclusão</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('body.php');
                ?>
            </tbody>
        </table>
</div>
</body>
</html>