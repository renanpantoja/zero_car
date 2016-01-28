<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 07/09/15
 * Time: 19:17
 */

class Pages {
    public $conn;

    public function __construct(Config $config){
        $this->conn = $config->conn();
    }

    //CRUD

    public function create($dados){
        $insert = $this->conn->prepare('INSERT INTO task (title, body, slug, time) VALUES (:title, :body, :slug, :time);');
        $insert->bindValue(':title', $dados['title'], PDO::PARAM_STR);
        $insert->bindValue(':body', $dados['body'], PDO::PARAM_STR);
        $insert->bindValue(':slug', $this->slug($dados['title']), PDO::PARAM_STR);
        $insert->bindValue(':time', $this->time($dados['time']), PDO::PARAM_STR);
        return $insert->execute();
    }
    public function read($slug=null, $id=null){
        if(!empty($slug)) {
            $select = $this->conn->prepare('SELECT * FROM task WHERE slug = :slug;');
            $select->bindValue(':slug', $slug, PDO::PARAM_STR);
            $select->execute();
            return $select->fetch();
        } else if(!empty($id)) {
            $select = $this->conn->prepare('SELECT * FROM task WHERE id = :id;');
            $select->bindValue(':id', $id  , PDO::PARAM_INT);
            $select->execute();
            return $select->fetch();
        } else {
            $select = $this->conn->prepare('SELECT * FROM task;');
            $select->execute();
            return $select->fetchAll();
        }

        $select->execute();
        return $select->fetch();
    }
    public function update($dados, $id){
        $update = $this->conn->prepare('UPDATE task SET title = :title, body = :body, slug = :slug, time = :time WHERE id = :id;');
        $update->bindValue(':title', $dados['title'], PDO::PARAM_STR);
        $update->bindValue(':body', $dados['body'], PDO::PARAM_STR);
        $update->bindValue(':slug', $dados['slug'], PDO::PARAM_STR);
        $update->bindValue(':time', $this->time($dados['time']), PDO::PARAM_STR);
        $update->bindValue(':id', $id, PDO::PARAM_INT);
        return $update->execute();
    }
    public function delete($id){
        $delete = $this->conn->prepare('DELETE FROM task WHERE id = :id;');
        $delete->bindValue(':id', $id, PDO::PARAM_INT);
        return $delete->execute();
    }

    //END CRUD

    public function slug($title){
        $slug = strtolower($title);
        $slug = preg_replace('/[^a-z0-9]\ -/', '', $slug);
        $slug = preg_replace('/[ ]\ -/', '-', $slug);
        return $slug;
    }
    public function time($t){
        $t = (strlen($t) < 2) ? '0'.$t.':00' : $t.':00' ;
        return $t;
    }
}
