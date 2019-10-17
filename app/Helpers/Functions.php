<?php

namespace journal\app\Helpers;

class Functions
{

    public static function getAge($birthday)
    {
        return date('Y',time()) - date('Y',$birthday);
    }

    public static function getName($name)
    {

        $name = explode(' ',$name);

        $res['first_name']   = $name[1];
        $res['last_name']    = $name[0];
        $res['middle_name']  = $name[2];

        return $res;
    }

    public static function concatName($arr)
    {
        return implode(' ',$arr);
    }

    public static function validate($data)
    {

        $validate_data = [
            'first_name'  => 'Имя',
            'middle_name' => 'Отчество',
            'last_name'   => 'Фамилия',
            'birthday'    => 'День рождения'
        ];

        $errors = [];

        foreach ($validate_data as $key_name => $v_data) {

            if (!isset($data[$key_name]) || empty($data[$key_name])) {

                $errors[] = 'Поле '.$v_data.' Обязательно для заполнения';

            }

        }

        if (strtotime($data['birthday']) >= time()) {

            $errors[] = 'День рождения не может быть больше текущей даты!';

        }

        return $errors;
    }

}