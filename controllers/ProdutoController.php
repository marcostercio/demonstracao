<?Php


require_once "app/models/Produto.php";

class ProdutoController
{
    private $nome;
    private $preco;
    private $tipo_id;


    public function __construct()
    {


        if (isset($_POST['produtos']) && isset($_POST)) {


            $this->nome = $_POST['nome'];
            $this->preco = $_POST['preco'];
            $this->tipo_id = $_POST['tipo_id'];

            $produto = new Produto();
            $produto->setNome($this->nome);
            $produto->setPreco($this->preco);
            $produto->setTipo($this->tipo_id);



            // salva o produto no banco de dados
            $produto->salvar();
            // código JavaScript para exibir o alerta
            session_start();
            $_SESSION['mensagem'] = "Produto salvo com sucesso!";
            
            header('Location:/');
        } else if (isset($_REQUEST['tipos']) && isset($_POST)) {
            $produto = new TipoProduto();
            $produto->setNome($_POST['tipo']);
            $produto->setImposto($_POST['imposto']);

            // salva o produto no banco de dados
            $produto->salvar();
            session_start();
            $_SESSION['mensagem'] = "Tipo de Produto salvo com sucesso!";
            header('Location:/');
        } 
    }
    public function cadastrarProduto(){
        $instancia = new TipoProduto();
        $dados = $instancia->listar();
        require './views/cadastro_produtos.php';
    }
    public function listarProduto(){
        $instanciaProduto = new Produto(); 
        $produtos = $instanciaProduto->listar();
        require './views/mostrar_produtos.php';


    }
}
