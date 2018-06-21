<?php
/**
 * Classe agente possui os atributos cod, nome, celular, telefone, email, região.
 * @author Telmo Ricardo
 */


class Agente {
    //atributos da classe agente
    
    private $cod;
    private $nome;
    private $email;
    private $celular;
    private $telefone;
    private $regiao;
    
    function getCod() {
        return $this->cod;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getCelular() {
        return $this->celular;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getRegiao() {
        return $this->regiao;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setRegiao($regiao) {
        $this->regiao = $regiao;
    }


    
}
