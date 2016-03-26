<?php

/*
  |-------------------------------------------------------------------
  |	CLASSE BANCO DE DADOS
  |-------------------------------------------------------------------
  |	por			: João Paulo
  |	em			: 30/01/2015
  |	versão		: 1.2
  |	descricao	: Uma classe de onde na qual define todos os atributos, funções de usuarios no sistema.
  |
 */
 
 class Usuarios {
	
	//Os dados dos usuários são:
	var $id;
	var $nome;
	var $email;
	var $senha;
	var $tipo_usuario;
        var $id_loja;
	var $ult_acesso;
	var $status;
        var $tamanho;
	
	function logar($email, $senha) {
        $this->email = $email;
        $this->senha = md5($senha);

        /**
         * 	Busca de dados no SGBD.
         */
        $select = "SELECT * FROM tb_usuarios WHERE email='$this->email' AND senha='$this->senha' AND status=1";

        // Instacia a classe Banco de Dados
        $db = new BancoDeDados();


        // Executa a consulta no banco
        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultado = $db->resultado_array();
            $id = $resultado[0]['id'];
            $data = date("Y-m-d H:i:s");
			$this->id = $resultado[0]['id'];
			$this->nome = $resultado[0]['nome'];
			$this->email = $resultado[0]['email'];
			$this->senha = $resultado[0]['senha'];
			$this->tipo_usuario = $resultado[0]['tipo_usuario'];
                        $this->id_loja = $resultado[0]['id_loja'];
			$this->ult_acesso = $resultado[0]['ult_acesso'];
			$this->status = $resultado[0]['status'];
            $update = "UPDATE  tb_usuarios SET  ult_acesso = '$data' WHERE  id = $id ";
            $db->consulta($update);
            return true;
        } else {
            return false;
        }
    }
    
    function salvar() {
        /**
         * 	Inserção de dados no SGBD.
         */
        
        $this->senha = md5($this->senha);
        
        $insert = "INSERT INTO tb_usuarios (
                    nome,
                    email,
                    senha,
                    tipo_usuario,
                    id_loja,
                    status
                )
                VALUES ('$this->nome','$this->email','$this->telefone','$this->senha',$this->nivel,$this->status);";

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
    
    function excluir($id) {
        /**
         * 	Exclusão de dados no SGBD.
         */
        $deletar = "DELETE FROM tb_usuarios WHERE id = $id";

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
    
    function alterar($id) {
        /**
         * 	Inserção de dados no SGBD.
         */
        
        $update = "UPDATE  tb_usuarios SET nome = '$this->nome', email = '$this->email', tipo_usuario = '$this->tipo_usuario', id_loja = '$this->id_loja', status = '$this->status' WHERE id = $id;";

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
    
    function alterar_senha($id) {
        /**
         * 	Inserção de dados no SGBD.
         */
        
        $this->senha = md5($this->senha);
        
        $update = "UPDATE  tb_usuarios SET senha = '$this->senha' WHERE id = $id;";

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
    
    function listar_usuarios() {

        $db = new BancoDeDados();

        $select = "SELECT * FROM tb_usuarios;";

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
        
        $select = "SELECT * FROM tb_usuarios WHERE id = $id";
        
        $db->consulta($select);

        if ($db->linhas() > 0) {
            $resultados = $db->resultado_array();
            $this->nome = $resultados[0]['nome'];
            return true;
        } else {
            return false;
        }
    }
 }