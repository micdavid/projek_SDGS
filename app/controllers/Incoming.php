<?php
class Incoming extends Controller
{
    public function index()
    {
        $data['title'] = 'Detail Page';
        $data['cm'] = $this->model('CharityModel')->getAllCharity();
        $this->view('incoming/index', $data);
    }
}
