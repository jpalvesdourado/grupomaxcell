<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of produtos
 *
 * @author João Paulo
 */
class Produtos {
    //put your code here
    var $id;
    var $id_loja;
    var $nome;
    var $unidade;
    var $quantidade;
    var $valor;
    var $tipo;
    var $tamanho;
    
    function salvar() {
        /**
         * 	Inserção de dados no SGBD.
         */
        $insert = "INSERT INTO tb_produtos (
                    id_loja, nome, unidade, quantidade, valor, tipo
                )
                VALUES (
                '$this->id_loja','$this->nome','$this->unidade','$this->quantidade','$this->valor','$this->tipo');";

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
        $update = "UPDATE  tb_produtos SET id_loja = '$this->id_loja', nome = '$this->nome', unidade = '$this->unidade', quantidade = '$this->quantidade', valor = '$this->valor', tipo = '$this->tipo' WHERE id = $id;";

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
        $deletar = "DELETE FROM tb_produtos WHERE id = $id";

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
    
    function listar_produtos() {

        $db = new BancoDeDados();

        $select = "SELECT tb_produtos.*, tb_categorias.descricao AS 'categoria' FROM 'tb_produtos' INNER JOIN tb_categorias ON tb_produtos.id_categoria = tb_categorias.id ORDER BY tb_produtos.descricao;";

        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->tamanho = $db->linhas();
            return $resultados;
        } else {
            return 'vazio';
        }
    }
    
    function ver_produtos(){
        $db = new BancoDeDados();
        
        $select = "SELECT * FROM tb_produtos ORDER BY descricao";
        
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
        
        $select = "SELECT * FROM tb_produtos WHERE id = $id";
        
        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->id = $resultados[0]['id'];
            $this->id_loja = $resultados[0]['id_loja'];
            $this->id_categoria = $resultados[0]['id_categoria'];
            $this->descricao = $resultados[0]['descricao'];
            $this->quant = $resultados[0]['quant'];
            $this->valor = $resultados[0]['valor'];
            $this->max_desconto = $resultados[0]['max_desconto'];
            return true;
        } else {
            return false;
        }
    }
}
