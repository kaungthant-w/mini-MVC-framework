<?php

    namespace App\Controllers;
    use App\Models\Student;
    use Symfony\Component\HttpFoundation\Request;

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
            return view("index.php", ["students" => $students]);
        }

        public function show($id)
        {
            $student = Student::find($id);
            return view("show.php", ["student" => $student]);
        }
        
        public function store() {
            return view("store.php");
        }


        public function create(Request $request) {
            $student = Student::create($request -> request -> all());

            if($student) {
                header("location: /students");
            }

            
        }

        public function edit($id)
        {
            $student = Student::find($id);
            return view("edit.php", ["student" => $student]);
        }

        public function update(Request $request) 
        {
            $result = Student::where("id", $request -> request -> get("id"))-> update($request -> request -> all());
            if($result) {
                header("location: /students");
            }
        }

        public function delete($id)
        {
            $result = Student::destroy($id);
            if($result) {
                header("Location:/students");
            }
        }
    }

?>