<?php

namespace App;
use Illuminate\Database\Capsule\Manager as DB;
use App\Ultis\Student;


class Database 
{
	protected $db;
	public function __construct()
	{
		$db = new DB;

		$db->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'school',
            'username' => 'phpuser',
            'password' => 'kmt',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);


        // Make this Capsule instance available globally via static methods... (optional)
        $db->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $db->bootEloquent();
		
	}

	public function index() {
		$students = DB::table("students")->get();
		return $students;
	}

	public function show($id) {
		$student = DB::table("students")->where("id", $id) -> first();
		return $student;
	}

	public function update($data) {
		$studentUpdate = DB::table("students")
			-> where("id", $data['id'])
			-> update([
				'name' => $data['name'],
				'email' => $data['email'],
				'gender' => $data['gender'],
				'dob' => $data['dob'],
				'age' => $data['age']
			]);

			if($studentUpdate) {
				header('Location: index.php');
			} else {
				echo "something wrong";
			}
	}

	public function delete($id) {
		$student = DB::table("students")->where("id", $id) -> delete();
		if($student) {
			header("Location: index.php");
		}
	}

	public function insert($data) {
		$studentInsert = DB::table("students") -> insert([
			'name' => $data['name'],
			'email' => $data['email'],
			'gender' => $data['gender'],
			'dob' => $data['dob'],
			'age' => $data['age']
		]);

		if($studentInsert) {
			header("Location: index.php");
		}
	}

}