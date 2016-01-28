<?php

class Cars{

    public $mysql;

    public function __construct(Config $config){

        $this->mysql = $config->conn();

    }
    
    public function readMarcas($nome=null, $id=null){
        if(!empty($nome)) {
            $select = $this->mysql->prepare('SELECT * FROM marca WHERE marcaDsc = :nome;');
            $select->bindValue(':nome', $nome, PDO::PARAM_STR);
            $select->execute();
            return $select->fetch();
        } else if(!empty($id)) {
            $select = $this->mysql->prepare('SELECT * FROM marca WHERE id = :id;');
            $select->bindValue(':id', $id  , PDO::PARAM_INT);
            $select->execute();
            return $select->fetch();
        } else {
            $select = $this->mysql->prepare('SELECT * FROM marca;');
            $select->execute();
            return $select->fetchAll();
        }

        $select->execute();
        return $select->fetch();
    }
    
    public function searchMarca($marca) {
        $marca = $marca . '%';
        
        $stmt = $this->mysql->prepare("SELECT marcaDsc FROM marca WHERE marcaDsc LIKE :search ORDER BY marcaDsc");
        $stmt->bindValue(':search', $marca, PDO::PARAM_STR);

        $isQueryOk = $stmt->execute();
        $results = array();

        if ($isQueryOk) {
          $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
        } else {
            trigger_error('Erro ao executar.', E_USER_ERROR);
        }

        return $results;
    }
    
    public function readModelo($nome=null, $id=null){
        if(!empty($nome)) {
            $select = $this->mysql->prepare('SELECT * FROM marcamodelo WHERE marcaDsc = :nome;');
            $select->bindValue(':nome', $nome, PDO::PARAM_STR);
            $select->execute();
            return $select->fetch();
        } else if(!empty($id)) {
            $select = $this->mysql->prepare('SELECT * FROM marcamodelo WHERE id = :id;');
            $select->bindValue(':id', $id  , PDO::PARAM_INT);
            $select->execute();
            return $select->fetch();
        } else {
            $select = $this->mysql->prepare('SELECT * FROM marcamodelo;');
            $select->execute();
            return $select->fetchAll();
        }

        $select->execute();
        return $select->fetch();
    }
    
    public function searchModelo($id) {
        $stmt = $this->mysql->prepare("SELECT DISTINCT marcaModeloDsc FROM marcamodelo WHERE marcaModeloMarcaId = :id ORDER BY marcaModeloDsc");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);

        $isQueryOk = $stmt->execute();
        $results = array();

        if ($isQueryOk) {
          $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
        } else {
            //trigger_error('Erro ao executar.', E_USER_ERROR);
            echo 'deu ruim';
        }

        return $results;
    }
    
    public function searchFoto($id) {
        $stmt = $this->mysql->prepare("SELECT local FROM fotos WHERE id_pai = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    
    public function searchGhostFotos($id) {
        //SELECT f.id_pai, c.id FROM fotos f LEFT JOIN carros c ON f.id_pai != c.id WHERE f.id_pai is not NULL
        $stmt = $this->mysql->prepare("SELECT local FROM fotos WHERE id_pai = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    
    public function cadastrarFoto($nome, $id=null){
        
        if(empty($id)) {
            $stmt = $this->mysql->prepare("SELECT id FROM carros ORDER BY id DESC LIMIT 1");
            $stmt->execute();
            $result = $stmt->fetch();

            $id = $result['id'] + 1;
        } 
        
        $cadastra = $this->mysql->prepare('INSERT into fotos (id_pai, local, inclusao) VALUES (:id_pai, :local, :inclusao);');
        $cadastra->bindValue(':id_pai', $id, PDO::PARAM_STR);
        $cadastra->bindValue(':local', $nome, PDO::PARAM_STR);
        $cadastra->bindValue(':inclusao', date('Y-m-d'), PDO::PARAM_STR);
        $cadastra->execute();

    }
    
    

    //CRUD

    public function cadastrarCar($dados){

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $cadastra = $this->mysql->prepare('INSERT into carros (titulo, valor, modelo, ano, rodado, combustivel, placa, cambio, cor, portas, descricao, inclusao, ativ) VALUES (:titulo, :valor, :modelo, :ano, :rodado, :combustivel, :placa, :cambio, :cor, :portas, :descricao, :inclusao, 1);');
            $cadastra->bindValue(':titulo', $dados['titulo'], PDO::PARAM_STR);
            $cadastra->bindValue(':valor', $dados['valor'], PDO::PARAM_STR);
            $cadastra->bindValue(':modelo', $dados['carro'], PDO::PARAM_STR);
            $cadastra->bindValue(':ano', $dados['ano'], PDO::PARAM_STR);
            $cadastra->bindValue(':rodado', $dados['rodado'], PDO::PARAM_INT);
            $cadastra->bindValue(':combustivel', $dados['combustivel'], PDO::PARAM_STR);
            $cadastra->bindValue(':placa', $dados['placa'], PDO::PARAM_INT);
            $cadastra->bindValue(':cambio', $dados['cambio'], PDO::PARAM_STR);
            $cadastra->bindValue(':cor', $dados['cor'], PDO::PARAM_STR);
            $cadastra->bindValue(':portas', $dados['portas'], PDO::PARAM_INT);
            $cadastra->bindValue(':descricao', $dados['descricao'], PDO::PARAM_STR);
            $cadastra->bindValue(':inclusao', date('Y-m-d'), PDO::PARAM_STR);
            $cadastra->execute();
            header('Location:index.php?pages=carro');
        }
    }

    public function readCar($nome=null, $id=null){
        if(!empty($nome)) {
            $select = $this->mysql->prepare('SELECT * FROM carros WHERE nome = :nome AND ativ = 1;');
            $select->bindValue(':nome', $nome, PDO::PARAM_STR);
            $select->execute();
            return $select->fetch();
        } else if(!empty($id)) {
            $select = $this->mysql->prepare('SELECT * FROM carros WHERE id = :id AND ativ = 1;');
            $select->bindValue(':id', $id  , PDO::PARAM_INT);
            $select->execute();
            return $select->fetch();
        } else {
            $select = $this->mysql->prepare('SELECT * FROM carros WHERE ativ = 1;');
            $select->execute();
            return $select->fetchAll();
        }

        $select->execute();
        return $select->fetch();
    }
    
    //readAllCars existe para ler até os carros inativos
    public function readAllCars($nome=null, $id=null){
        if(!empty($nome)) {
            $select = $this->mysql->prepare('SELECT * FROM carros WHERE nome = :nome;');
            $select->bindValue(':nome', $nome, PDO::PARAM_STR);
            $select->execute();
            return $select->fetch();
        } else if(!empty($id)) {
            $select = $this->mysql->prepare('SELECT * FROM carros WHERE id = :id;');
            $select->bindValue(':id', $id  , PDO::PARAM_INT);
            $select->execute();
            return $select->fetch();
        } else {
            $select = $this->mysql->prepare('SELECT * FROM carros;');
            $select->execute();
            return $select->fetchAll();
        }

        $select->execute();
        return $select->fetch();
    }


    public function updateUsuario($dados, $id){
        $update = $this->mysql->prepare('UPDATE usuarios SET nome = :nome, email = :email, usuario = :usuario, senha = :senha WHERE id = :id;');
        $update->bindValue(':nome', $dados['nome'], PDO::PARAM_STR);
        $update->bindValue(':email', $dados['email'], PDO::PARAM_STR);
        $update->bindValue(':usuario', $dados['usuario'], PDO::PARAM_STR);
        $update->bindValue(':senha', $this->hash($dados['senha']), PDO::PARAM_STR);
        $update->bindValue(':id', $id, PDO::PARAM_INT);
        return $update->execute();
    }

    public function deleteCar($id){
        $delete = $this->mysql->prepare('UPDATE carros SET ativ = 0 WHERE id = :id;');
        $delete->bindValue(':id', $id, PDO::PARAM_INT);
        $delete->execute();
        
        $foto = $this->searchFoto($id);
        foreach($foto as $fotos){ unlink($fotos['local']); }

        $deletef = $this->mysql->prepare('DELETE FROM fotos WHERE id_pai = :id;');
        $deletef->bindValue(':id', $id, PDO::PARAM_INT);
        $deletef->execute();
    }


}