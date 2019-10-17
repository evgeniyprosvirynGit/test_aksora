<?php

namespace journal\app\Controllers;

use journal\app\core\Controller;
use journal\app\Models\Student;
use journal\app\Helpers\Functions;

class EditController extends Controller
{
    public function __construct()
    {
        $this->students   = new Student();
        $this->student_id = (isset($_GET['id'])) ? $_GET['id'] : null;
    }

    public function index()
    {

        $student = Student::find($this->student_id);

        if ($student && !is_null($this->student_id)) {

            $student      = $student->toArray();
            $explode_name = Functions::getName($student['name']);

            return $this->renderOutput('edit',array_merge([
                'name'       => $student['name'],
                'id'         => $this->student_id,
                'birthday'   => date('d.m.Y',$student['birthday']),
            ],$explode_name));

        } else {

            echo 'Студента не существует';

        }

    }

    public function edit_student()
    {

        if ($_POST) {

            $validate = Functions::validate($_POST);

            if (!$validate) {

                $data['name']     = Functions::concatName([$_POST['last_name'],$_POST['first_name'],$_POST['middle_name']]);
                $data['birthday'] = strtotime($_POST['birthday']);

                Student::find($_POST['id'])->update(['name' => $data['name'],'birthday' => $data['birthday']]);

                return $this->redirect('/');

            } else {

                print_r($validate);

            }

        } else {

            echo 'Ошибка редактирования';

        }

    }

}