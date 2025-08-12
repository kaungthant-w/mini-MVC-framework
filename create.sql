
-- many to many relationship
 CREATE TABLE `students`(`id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, `name` VARCHAR(200) NOT NULL, `email` VARCHAR(200) NOT NULL, `gender` VARCHAR(6) NOT NULL, `dob` DATE NOT NULL, `age` TINYINT UNSIGNED);

 CREATE TABLE `courses`(`id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,`name` VARCHAR(200) NOT NULL);

 CREATE TABLE `student_course`(`student_id` INT UNSIGNED NOT NULL, `course_id` INT UNSIGNED NOT NULL);

INSERT INTO `students`(`name`, `email`, `gender`, `dob`, `age`)VALUES("de de", "dede@gmail.com", "male", "2007-11-12", 18),("kyaw kyaw ", "kyawkyaw@gmail.com", "male", "2007-11-12", 18),("aung aung", "aungaung@gmail.com", "male", "1995-01-01", 30),("htet htet", "htethte@gmail.com", "female", "2007-11-12", 18),("hnin hnin","hininh@gmail.com", "female",  "2003-11-12", 22);

INSERT INTO `courses`(`name`)VALUES("C Programming"), ("GOLeng"), ("Java"), ("Kotlin"), ("PHP"),("Javascript"), ("Python"), ("Ruby");

INSERT INTO `student_course`(`student_id`, `course_id`)VALUES(1,3),(1,2),(1,8),(2,3),(3,8),(5,4),(6, 7),(7, 4),(8,2),(9,5),(10,6);


SELECT students.name, students.email, students.gender, courses.name AS course FROM `students` JOIN `student_course` ON students.id = student_course.student_id JOIN courses ON courses.id = student_course.course_id;


SELECT students.name, students.email, students.gender, courses.name AS course FROM `students` JOIN `student_course` ON students.id = student_course.student_id RIGHT JOIN courses ON courses.id = student_course.course_id;

