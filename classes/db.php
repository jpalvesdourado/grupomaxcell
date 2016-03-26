<?php

/*
  |-------------------------------------------------------------------
  |	CLASSE BANCO DE DADOS
  |-------------------------------------------------------------------
  |	por			: João Paulo
  |	em			: 30/01/2015
  |	versão		: 1.2
  |	descricao	: Uma classe de conexão com o banco de dados e
  |				  orientada a objetos.
  |
 */

class BancoDeDados {

    // Dados do servidor de banco de dados
    private $host = 'localhost';
    private $user = 'root';
    private $pw = '13561405';
    private $database = 'maxcell';
    public $query;
    public $ordem;
    public $mysqli;
    public $result_array = array();

    // metodo construtor
    function __construct() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pw, $this->database);
        $this->mysqli->set_charset("utf8");
        $this->ordem = true;

        if (mysqli_connect_errno()) {
            printf("Falha na conexão com o banco de Dados.", mysqli_connect_error());
        }
    }

    function consulta($query) {
        // funcao que executa a query.
        $this->query = $this->mysqli->query($query);
    }

    function resultado_array() {
        // Pega todos os resultados e joga em uma array
        while ($dados = $this->query->fetch_array()) {
            $this->result_array[] = $dados;
        }
        // retorna a array.
        return $this->result_array;
    }

    function linhas() {
        // um simples método para contar as linhas
        return $this->query->num_rows;
    }

}

?>