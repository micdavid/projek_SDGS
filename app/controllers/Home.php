<?php
class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('index/index', $data);
    }
}
