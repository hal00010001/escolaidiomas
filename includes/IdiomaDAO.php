<?php

require_once './Conexao.php';
require_once '../pojo/PessoaPojo.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDO
 *
 * @author Almir
 */
class IdiomaDAO extends Conexao {   
    
    public function getSelectProfessor(){
        try {
            $sqlSelectProfessor = 'SELECT * FROM professor';
            $prepareSql = Conexao::getInstance()->prepare($sqlSelectProfessor);
            $prepareSql->execute();
            return $this->populaProfessor($prepareSql->fetch(PDO::FETCH_ASSOC));
            
        } catch (Exception $ex) {
            echo "Ocorreu um erro no getSelectProfessor: ".$ex->getMessage();            
        }        
    }
    public function populaProfessor($row){
        $pojo = new PessoaPojo();
        $pojo->setId($row['CodigoProfessor']);
        $pojo->setNome($row['Nome']);
        $pojo->setCpf($row['CPF']);
        $pojo->setEmail($row['Email']);
        return $pojo;
    }
}
