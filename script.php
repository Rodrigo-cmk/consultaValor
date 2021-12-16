<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rodrigo Alves">
    <meta name="description" content="Exercício 'Consulta Valor'">
    <meta name="keywords" content="PHP, Consulta Valor, Web">

    <title> Consulta Valor </title>
</head>

<body>

    <form>
        <span> - Insira Aqui...: </span>
        <input type="number" name="insereValor">
        <button type="submit"> Enviar </button>
    </form>

    <?php               // Utilizando laços aninhados para definir condições...

    if(isset($_GET['insereValor'])){

        if ($_GET['insereValor'] > 0) {
            echo "<b> Valor Positivo </b>";
        } 
        elseif ($_GET['insereValor'] < 0) {
            
            if(empty($_GET['insereValor']) || $_GET['insereValor'] = ""){
                echo "<b> Insira um valor <b>";
            }
            else{
                echo "<b> Valor Negativo </b>";
            }
        }   
        else {
            echo "<b> Igual a Zero </b>";
        }
        
    }
    else{
            echo "<b> Insira um valor <b>";
    }

    ?>

</body>

</html>