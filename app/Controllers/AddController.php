<?php

namespace journal\app\Controllers;

use journal\app\core\Controller;
use journal\app\Helpers\Functions;
use journal\app\Models\Student;

class AddController extends Controller
{
    public function __construct()
    {

        $this->students = new Student();
    }

    public function index()
    {
        return $this->renderOutput('add',[]);
    }

    public function add_student()
    {

        if ($_POST) {

            $validate = Functions::validate($_POST);

            if (!$validate) {

                $data['name']     = Functions::concatName([$_POST['last_name'],$_POST['first_name'],$_POST['middle_name']]);
                $data['birthday'] = strtotime($_POST['birthday']);

                Student::create([
                    'name'     => $data['name'],
                    'birthday' => $data['birthday'],
                ]);

                return $this->redirect('/');

            } else {

                print_r($validate);

            }

        } else {

            echo 'Ошибка добавления';

        }

    }

}