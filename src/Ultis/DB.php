<?php
namespace Ultis;

use \PDO;
use \PDOException;

class DB {

    protected $pdo;

    public function __construct() {
        
        try {
            $this -> pdo = new PDO("mysql:dbname=school;host:localhost", "phpuser", "kmt");
            $this -> pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die($e -> getMessage());
        } catch (Exception $e) {
            die($e -> getMessage());
        }

    }

    public function index() {
        $statement = $this -> pdo -> query("SELECT * FROM students ORDER BY id DESC");
        if($statement) {
            return $result = $statement -> fetchAll();    
        }
    }

    public function show($id) {
        $statement = $this -> pdo -> prepare("SELECT * FROM students WHERE id=:id");
        $statement -> bindParam(":id", $id);
        if($statement -> execute()) {
            return $statement = $statement -> fetch(PDO::FETCH_OBJ);
        } 
    }

    public function create($data) {
        $statement = $this -> pdo -> prepare("INSERT INTO students(name,email,gender,dob,age)VALUES(:name, :email, :gender, :dob, :age)");

        $statement -> bindParam("name", $data["name"]);
        $statement -> bindParam("email", $data["email"]);
        $statement -> bindParam("gender", $data["gender"]);
        $statement -> bindParam("dob", $data["dob"]);
        $statement -> bindParam("age", $data["age"]);

        if($statement -> execute()) {
            header("location: index.php");
        }
    }

    public function update($data) {
        $statement = $this -> pdo -> prepare("UPDATE students SET name=:name, email=:email, gender=:gender, dob=:dob, age=:age WHERE id=:id");
        $statement -> bindParam("id", $data["id"]);
        $statement -> bindParam("name", $data["name"]);
        $statement -> bindParam("email", $data["email"]);
        $statement -> bindParam("gender", $data["gender"]);
        $statement -> bindParam("dob", $data["dob"]);
        $statement -> bindParam("age", $data["age"]);

        if($statement -> execute()) {
            $statement = $this -> pdo -> lastInsertId();
            header("location: edit.php?id=".$data["id"]);
        }
    }

    public function delete($id) {
        $statement = $this -> pdo -> prepare("DELETE FROM students WHERE id=:id");
        $statement -> bindParam("id", $id);
        if($statement -> execute()) {
            header("location: index.php");
        }
    }
}