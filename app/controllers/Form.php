<?php
class Form extends Controller
{
    public function index()
    {
        $data['title'] = 'Donasi Sekarang';
        $this->view('form/index', $data);
    }

    public function add()
    {
        
    }
}
