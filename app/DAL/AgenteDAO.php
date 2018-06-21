<?php

require_once ('Banco.php');

class AgenteDAO {

    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function Cadastrar(Agente $agente) {
        try {
            
            $sql = "INSERT INTO agente (nome, email, celular, telefone, regiao) VALUES (:nome, :email, :celular, :telefone, :regiao)";
            $param = array(
                ":nome" => $agente->getNome(),
                ":email" => $agente->getEmail(),
                ":celular" => $agente->getCelular(),
                ":telefone" => $agente->getTelefone(),
                ":regiao" => $agente->getRegiao()
               
            );

            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }    

    public function listarAgente() {
        try {
            $sql = "SELECT * FROM agente ORDER BY codAgente DESC";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaAgente = [];
            foreach ($dt as $pts) {
                $agente = new Agente();
                $agente->setCod($pts['codAgente']);
                $agente->setNome($pts['nome']);
                $agente->setEmail($pts['email']);
                $agente->setRegiao($pts['regiao']);
                $agente->setCelular($pts['celular']);
                $agente->setTelefone($pts['telefone']);
                
                $listaAgente[] = $agente;
            }
            return $listaAgente;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function listaCorretorR($regiao) {
        try {
            $sql = "SELECT a.codAgente, a.nome, a.regiao, a.telefone, a.email, i.cod, i.agente FROM agente as a INNER JOIN imovel as i ON a.codAgente = i.agente WHERE a.regiao = :regiao GROUP BY a.nome";
            $param = array(               
                ":regiao" => $regiao
                    );
            //Data Table
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaCorretor = [];
            foreach ($dt as $pts) {
                $agente = new Agente();
                $agente->setCod($pts['cod']);                
                $agente->setNome($pts['nome']);                
                $agente->setTelefone($pts['telefone']);                
                $agente->setRegiao($pts['regiao']);                
                $agente->setEmail($pts['email']);              
               
                
                $listaCorretor[] = $agente;
            }
            return $listaCorretor;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
   
    
    
}
