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

	// public function index() {
	// 	return Student::get();
	// }

	// public function show($id) {
	// 	return Student::find($id);
	// }

	// public function update($data) {
	// 	$studentUpdate = Student::where("id", $data["id"])->update($data);

	// 		if($studentUpdate) {
	// 			header('Location: index.php');
	// 		} else {
	// 			echo "something wrong";
	// 		}
	// }

	// public function delete($id) {
	// 	$student = Student::destroy($id);
	// 	if($student) {
	// 		header("Location: index.php");
	// 	}
	// }

	// public function insert($data) {
	// 	$studentInsert = Student::create($data);

	// 	if($studentInsert) {
	// 		header("Location: index.php");
	// 	}
	// }

}