<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lojas
 *
 * @author João Paulo
 */
class Lojas {
    //put your code here
    var $id;
    var $nome_da_loja;
    var $cnpj;
    var $tamanho;
    
    function salvar() {
        /**
         * 	Inserção de dados no SGBD.
         */
        $insert = "INSERT INTO tb_lojas (
                    nome_da_loja, cnpj
                )
                VALUES (
                '$this->nome_da_loja','$this->cnpj');";

        // Instacia a classe Banco de Dados
        $db = new BancoDeDados();

        // Executa a consulta no banco
        $db->consulta($insert);

        if ($db->query) {
            return true;
        } else {
            return false;
        }
    }
    
    function alterar($id) {
        /**
         * 	Inserção de dados no SGBD.
         */
        $update = "UPDATE  tb_lojas SET nome_da_loja = '$this->nome_da_loja', cnpj = '$this->cnpj' WHERE id = $id;";

        // Instacia a classe Banco de Dados
        $db = new BancoDeDados();

        // Executa a consulta no banco
        $db->consulta($update);

        if ($db->query) {
            return true;
        } else {
            return false;
        }
    }
    
    function excluir($id) {
        /**
         * 	Inserção de dados no SGBD.
         */
        $deletar = "DELETE FROM tb_lojas WHERE id = $id";

        // Instacia a classe Banco de Dados
        $db = new BancoDeDados();

        // Executa a consulta no banco
        $db->consulta($deletar);

        if ($db->query) {
            return true;
        } else {
            return false;
        }
    }
    
    function listar_lojas() {

        $db = new BancoDeDados();

        $select = "SELECT * FROM tb_lojas ORDER BY nome_da_loja ASC";

        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->tamanho = $db->linhas();
            return $resultados;
        } else {
            return 'vazio';
        }
    }
    
    function ver_lojas(){
        $db = new BancoDeDados();
        
        $select = "SELECT * FROM tb_lojas ORDER BY nome_da_loja";
        
        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->tamanho = $db->linhas();
            return $resultados;
        } else {
            return 'vazio';
        }
    }
    
    function importar($id){
        $db = new BancoDeDados();
        
        $select = "SELECT * FROM tb_lojas WHERE id = $id";
        
        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->id = $resultados[0]['id'];
            $this->nome_da_loja = $resultados[0]['nome_da_loja'];
            $this->cnpj = $resultados[0]['cnpj'];
            return true;
        } else {
            return false;
        }
    }
}
