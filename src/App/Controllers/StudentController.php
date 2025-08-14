<?php

    namespace App\Controllers;
    use App\Models\Student;
    use Symfony\Component\HttpFoundation\Request;
    // use App\Database;



    class StudentController 
    {

        private $query, $post;
        public function __construct()
        {
            $request = Request::createFromGlobals();
            $this -> query = $request -> query;
            $this -> post = $request -> request;
        }

        
        public function index()
        {
            $students = Student::get();
            view("index.php", ["students" => $students]);
        }

        public function show()
        {
            $student = Student::find($this -> query -> get('id'));
            view("show.php", ["student" => $student]);
        }

        public function store() {
            view("store.php");
        }


        public function create() {
            $student = Student::create($this -> post -> all());

            if($student) {
                header("location: edit?id={$student->id}");
            }

            
        }

        public function edit()
        {
            $student = Student::find($this->query->get("id"));
            view("edit.php", ["student" => $student]);
        }

        public function update() 
        {
            $result = Student::where("id", $this -> post -> get("id"))-> update($this -> post -> all());
            if($result) {
                header("location: /index");
            }
        }

        public function delete()
        {
            $result = Student::destroy($this->query->get("id"));
            if($result) {
                header("Location:/index");
            }
        }
    }


?>