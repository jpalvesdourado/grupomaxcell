<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categorias
 *
 * @author Terminal 08
 */
class Categorias {
    //put your code here
    var $id;
    var $descricao;
    var $valor_comissao;
    var $tamanho;
    
    function salvar() {
        /**
         * 	Inserção de dados no SGBD.
         */
        $insert = "INSERT INTO tb_categorias (
                    descricao,valor_comissao
                )
                VALUES (
                '$this->descricao','$this->valor_comissao');";

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
        $update = "UPDATE  tb_categorias SET descricao = '$this->descricao', valor_comissao = '$this->valor_comissao' WHERE id = $id;";

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
        $deletar = "DELETE FROM tb_categorias WHERE id = $id";

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
    
    function listar_categorias() {

        $db = new BancoDeDados();

        $select = "SELECT * FROM tb_categorias ORDER BY descricao ASC";

        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->tamanho = $db->linhas();
            return $resultados;
        } else {
            return 'vazio';
        }
    }
    
    function ver_categorias(){
        $db = new BancoDeDados();
        
        $select = "SELECT * FROM tb_categorias ORDER BY descricao";
        
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
        
        $select = "SELECT * FROM tb_categorias WHERE id = $id";
        
        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->descricao = $resultados[0]['descricao'];
            $this->valor_comissao = $resultados[0]['valor_comissao'];
            return true;
        } else {
            return false;
        }
    }
}
