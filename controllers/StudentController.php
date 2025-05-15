<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    public function index() {
        $students = Student::all();
        require __DIR__ . '/../views/students_view.php';
    }

    public function store() {
        $name = htmlspecialchars(trim($_POST['name']));
        $matric = htmlspecialchars(trim($_POST['matric_no']));

        if (empty($name) || empty($matric)) {
            $error = "Name and Matric No. are required.";
            $students = Student::all();
            require __DIR__ . '/../views/students_view.php';
            return;
        }

        Student::create($name, $matric);
        header("Location: /");
        exit;
    }

    public function delete($id) {
        Student::delete($id);
        header("Location: /");
        exit;
    }

    public function update($id) {
        $name = htmlspecialchars(trim($_POST['name']));
        $matric = htmlspecialchars(trim($_POST['matric_no']));

        if (empty($name) || empty($matric)) {
            $error = "All fields are required.";
            $students = Student::all();
            require __DIR__ . '/../views/students_view.php';
            return;
        }

        Student::update($id, $name, $matric);
        header("Location: /");
        exit;
    }
}
