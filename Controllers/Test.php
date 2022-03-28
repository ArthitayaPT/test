<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function test_input()
    {
        return view('v_test_input');
    }
    public function test_value()
    {
        $data['name_title'] = $this->request->getPost('name_title');
        $data['Fname'] = $this->request->getPost('Fname');
        $data['Lname'] = $this->request->getPost('Lname');

        return view('v_value',$data);
    }
}

