<?php

namespace xuetang;

class Xuetang
{

    private $course;

    public function __construct($course)
    {
        $this->course = $course;
    }

    public function welcome()
    {

        echo '您好， 欢迎来到零一学堂， 学习本套' . $this->course . '课程~';

    }

}
