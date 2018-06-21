<?php

require_once 'Banco.php';

class usuarioDAO {

    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
    }

    /* CADASTRO DO USUARIO */
    public function Cadastrar(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario (nome, email, usuario,senha, permissao, status)
                              VALUES(:nome, :email, :usuario, :senha, :permissao, :status)";
            $param = array(
                ":nome" => $usuario->getNome(),
                ":email" => $usuario->getEmail(),
                ":usuario" => $usuario->getUsuario(),
                ":senha" => md5($usuario->getSenha()),
                ":permissao" => $usuario->getPermissao(),
                ":status" => $usuario->getStatus()
            );

            return $this->pdo->ExecuteNonQuery($sql, $param);
            
        } catch (PDOException $e) {
            echo 'Erro ' . $e->getLine();
        }
    }

    /* Autenticar usuario no painel */
   public function AutenticarUsuario($usu, $senha, $permissao) {
        try {

            if ($permissao == 1) {
                $sql = "SELECT cod, nome FROM usuario WHERE status = 1 AND permissao = :permissao AND usuario = :usuario AND senha = :senha";

                $param = array(
                    ":permissao" => $permissao,
                    ":usuario" => $usu,
                    ":senha" => $senha
                );
            } else {
                $sql = "SELECT cod, nome FROM usuario WHERE status = 1 AND usuario = :usuario AND senha = :senha";

                $param = array(
                    ":usuario" => $usu,
                    ":senha" => $senha
                );
            }

            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            if ($dt != null) {
                $usuario = new Usuario();
                $usuario->setCod($dt["cod"]);
                $usuario->setNome($dt["nome"]);

                return $usuario;
            } else {
                return null;
            }
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }
    
    /*verificar se o usuario esta logado*/
    public function IsLogginIn(){
        if(!isset($_SESSION['logado']) || $_SESSION['logado'] !== true){
            return false;
        }else{
            return true;
        }
    }
    

}
