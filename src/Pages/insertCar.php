<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 07/09/15
 * Time: 19:17
*/

if($_SERVER['REQUEST_METHOD'] == 'POST'){

        switch(true) {

            case (empty($_POST['titulo'])):
                echo "<script>alert('O carro deve ter um título que vai aparecer em destaque!');</script>";
                echo "<script>history.go(-1);</script>";
                break;
            case (empty($_POST['valor'])):
                echo "<script>alert('O carro deve ter um valor!');</script>";
                echo "<script>history.go(-1);</script>";
                break;
            case (empty($_POST['carro'])):
                echo "<script>alert('O carro deve ter um modelo!');</script>";
                echo "<script>history.go(-1);</script>";
                break;
            case (empty($_POST['ano'])):
                echo "<script>alert('O carro deve ter um ano!');</script>";
                echo "<script>history.go(-1);</script>";
                break;
            case (empty($_POST['rodado'])):
                echo "<script>alert('Deve inserir a quilometragem do carro!');</script>";
                echo "<script>history.go(-1);</script>";
                break;
            case (empty($_POST['descricao'])):
                echo "<script>alert('O carro deve ter uma descrição!');</script>";
                echo "<script>history.go(-1);</script>";
                break;
            case (!empty($_POST['titulo'])):
            case (!empty($_POST['valor'])):
            case (!empty($_POST['carro'])):
            case (!empty($_POST['ano'])):
            case (!empty($_POST['rodado'])):
            case (!empty($_POST['descricao'])):

                $cars->cadastrarCar($_POST);
                header('Location:index.php?pages=carro');

                break;
            default:
                break;
        }
}
?>