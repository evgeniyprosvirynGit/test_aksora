<?php

namespace journal\app\Controllers;

use journal\app\core\Controller;
use journal\app\Models\Student;
use journal\app\Helpers\Functions;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->students = new Student();
    }

    public function index()
    {

        $students = $this->students->select('*')->where('deleted_at','=',null)->get()->sortBy('name')->toArray();
        $table    = 'Нет данных';

        if (!empty($students)) {

            $tr = '';

            foreach ($students as $student) {

                $tr .= $this->view('table/inc/tr',[
                    'name'     => $student['name'],
                    'birthday' => date('d.m.Y',$student['birthday']),
                    'age'      => Functions::getAge($student['birthday']),
                    'id'       => $student['id'],
                ]);

            }

            $table = $this->view('table/table',[
                'tr' => $tr,
            ]);

        }

        return $this->renderOutput('index',[
            'table' => $table,
        ]);

    }

    public function delete()
    {

        $status = 304;

        if ($_POST['delete_id']) {

            $student = Student::find($_POST['delete_id']);

            if ($student) {

                $student->update(['deleted_at' => time()]);
                $status = 200;

            }

        }

        echo json_encode(['status'=> $status],JSON_UNESCAPED_UNICODE);

    }

}