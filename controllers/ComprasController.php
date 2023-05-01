<?Php

//if (!isset($_SESSION['nome'])) {
//    $_SESSION["mensagem"] = "logue primeiro";
//    header('location:/');
//}

require "./models/Compras.php";

class ComprasController
{


    public function __construct()
    {


        if (isset($_POST['comprar']) && isset($_POST)) {

        


            $compras = new Compras();
            //$compras->setNomeProduto($_POST['pnome']);
            //$compras->setQuantidade($_POST['quantidade']);
           // $compras->setIdProduto($_POST['produtoid']);
           $compras->cadastrarCompra($_POST['quantidade'], $_POST['produtoid'], $_POST['pnome']);
           header('Location:/');
           $_SESSION['mensagem'] = "A compra foi efetivada";
   
           
        }
    }
   

    public static function listarCompras() {
        $instanciar = new Compras();
        $compras = $instanciar->listarCompras();
        require './views/compras_produtos.php';
      
    }



}
