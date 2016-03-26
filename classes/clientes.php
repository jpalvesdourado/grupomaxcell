<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientes
 *
 * @author João Paulo
 */
class Clientes {
    var $id;
    var $nome;
    var $cpf;
    var $rg;
    var $org_exp;
    var $uf_exp;
    var $email;
    var $data_nascimento;
    var $data_cadastro;
    var $endereco;
    var $num;
    var $complemento;
    var $bairro;
    var $cidade;
    var $uf;
    var $status;
    var $tamanho;
    
    function salvar() {
        /**
         * 	Inserção de dados no SGBD.
         */
        $date = DateTime::createFromFormat('d/m/Y', $this->data_nascimento);
        $this->data_nascimento = $date->format('Y-m-d');
        
        $insert = "INSERT INTO tb_clientes (nome, cpf, rg, org_exp, uf_exp, email, data_nascimento, data_cadastro, endereco, num, complemento, bairro, cidade, uf, status) VALUES ('$this->nome','$this->cpf','$this->rg','$this->org_exp','$this->uf_exp','$this->email','$this->data_nascimento','$this->data_cadastro','$this->endereco','$this->num','$this->complemento','$this->bairro','$this->cidade','$this->uf','$this->status');";

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
        $update = "UPDATE  tb_clientes SET nome = '$this->nome', cpf = '$this->cpf', rg = '$this->rg', org_exp = '$this->uf_exp', email = '$this->email', data_nascimento = '$this->data_nascimento', data_cadastro = '$this->data_cadastro', endereco = '$this->endereco', num = '$this->num', complemento = '$this->complemento', bairro = '$this->bairro', cidade = '$this->cidade', uf = '$this->uf', status = '$this->status' WHERE id = $id;";

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
        $deletar = "DELETE FROM tb_clientes WHERE id = $id";

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
    
    function listar_clientes() {

        $db = new BancoDeDados();

        $select = "SELECT * FROM tb_clientes ORDER BY nome ASC";

        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->tamanho = $db->linhas();
            return $resultados;
        } else {
            return 'vazio';
        }
    }
    
    function ver_clientes(){
        $db = new BancoDeDados();
        
        $select = "SELECT * FROM tb_clientes ORDER BY nome";
        
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
        
        $select = "SELECT * FROM tb_clientes WHERE id = $id";
        
        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->id = $resultados[0]['id'];
            $this->nome = $resultados[0]['nome'];
            $this->cpf = $resultados[0]['cpf'];
            $this->rg = $resultados[0]['rg'];
            $this->org_exp = $resultados[0]['org_exp'];
            $this->uf_exp = $resultados[0]['uf_exp'];
            $this->email = $resultados[0]['email'];
            $this->data_nascimento = $resultados[0]['data_nascimento'];
            $this->data_cadastro = $resultados[0]['data_cadastro'];
            $this->endereco = $resultados[0]['endereco'];
            $this->num = $resultados[0]['num'];
            $this->complemento = $resultados[0]['complemento'];
            $this->bairro = $resultados[0]['bairro'];
            $this->cidade = $resultados[0]['cidade'];
            $this->uf = $resultados[0]['uf'];
            $this->status = $resultados[0]['status'];
            return true;
        } else {
            return false;
        }
    }
}
