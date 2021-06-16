<?php
class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['cm'] = $this->model('CharityModel')->getAllCharity();
        $this->view('home/index', $data);
    }
}
