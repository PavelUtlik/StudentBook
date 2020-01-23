<?php

class StudentController extends Controller {

    public function __construct() {
        $this->model = new StudentModel();
        $this->view = new View();
    }

    public function add() {

        if (empty($_POST)) {

            $this->pageData['title'] = 'Adding a new student';
            $this->pageData['content'] = VIEW_PATH . 'student/add.php';
            $this->view->render($this->pageTpl, $this->pageData);

        } else {

            $first_name = $_POST['first_name'];
            $surname = $_POST['surname'];
            $middle_name = $_POST['middle_name'];
            $birthday = $_POST['birthday'];

            $student = new StudentModel($id = null, $first_name, $surname, $middle_name, $birthday);
            $this->model->addStudent($student);

            redirect('/');


        }

    }


    public function edit() {

        if (!empty($_GET) && empty($_POST)) {

            $id = $_GET['id'];
            $student = $this->model->getStudent($id);
            $this->pageData['title'] = 'Editing a student';
            $this->pageData['content'] = VIEW_PATH . 'student/edit.php';
            $this->pageData['student'] = $student;
            $this->view->render($this->pageTpl, $this->pageData);

        }


        if (!empty($_POST)) {

            $id = $_POST['id'];
            $first_name = $_POST['first_name'];
            $surname = $_POST['surname'];
            $middle_name = $_POST['middle_name'];
            $birthday = $_POST['birthday'];
            $student = new StudentModel($id, $first_name, $surname, $middle_name, $birthday);
            $this->model->updateStudent($student);
            redirect('/');

        }


    }


    public function delete() {

        $this->model->deleteStudent(trim($_GET['id']));
        redirect();

    }


}