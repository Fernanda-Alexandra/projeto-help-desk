<?php
defined('BASE_PATH') or define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . "/help-desk");
class UsuarioController extends GenericController {

    function __construct() {
        echo "TEM QUE APARECER";
        parent::__construct();
        $this->table = "usuarios";
        $this->repository = "teste";
        echo "VERIFICANDO CONSTRUTOR";
        var_dump($this->repository);
        //die();
        $this->getParams();
        echo "CHEGANDO NO AUTHENTICATE ";
    }
    function authenticate($user, $pass) {
        var_dump($this->repository);
        //die();

        return $this->repository->authenticate($user,$pass);


    }
    public function getParams()
    {
        $acao = isset($_GET['action']) ? $_GET['action'] : null;

        if($acao)
        {
            switch ($acao) {
                case "authenticate":
                $this->logIn();
                break;
                case "LOGOFF":
                $this->logOff();
                break;
                case "SALVAR":
                $this->salvar();
                break;
                case "NOVO":
                $this->redirecionarParaCadastro();
                break;

                default:
           //echo "<b>[WARNING] A ação solicitada não é reconhecida</b>";
            }

        }  
    }
    public  final function logIn()
    {
        $login = htmlspecialchars($_POST["usuario"]); 
        $senha = htmlspecialchars($_POST["senha"]); 
        $autenticado = $this->authenticate($login, $senha);
        if($autenticado)
        {
             //Salva os dados do usuario em sessao. Podera ser verificado depois 
            $_SESSION['userLogin'] = $login;
            $_SESSION['userId'] = $autenticado;
            $this->home();
        }else
        {   
            if(isset($_SESSION['userLogin']))
            {
                unset($_SESSION['userLogin']);
            }
            //Redireciona para a tela de erro ao logar.
        }        
    }
    public final function home(){
    //echo "<br>Implemente um metodo para redirecionar o usuario para a home da aplicacao";
    }
    public  final function logOff()
    {
        //Remove o usuario da sessao
        unset($_SESSION['userLogin']);
        unset($_SESSION['userId']);
   //Redireciona para a tela de login novamente
    }
    public  final function salvar()
    {    
        $smarty = new Smarty();

        if($this->loginExiste($login))
        {
            //Caso o login que o usuario esta tentando cadastrar ja exista, jogue para uma tela que informe isso ou exiba um alerta
        }else{
            $insertedId =  $this->usuarioRepository->save($login, $senha);
            //TODO: Trocar o ID hardcode pelo do usuario
            if($insertedId)
            {
// Joga o usuario para uma tela informando que o cadastro ocorreu com sucesso.
            }else
            {   
               //Caso contraŕio, jogue para uma tela informando que ocorreu erro no cadastro.
            }   
        }

    }
    public final function loginExiste($login)
    {
     return  $this->usuarioRepository->loginExiste($login);
 }
 public final function redirecionarParaCadastro()
 {
    //Redirecione o usuario com header para a tela de cadastro.
 }
}





