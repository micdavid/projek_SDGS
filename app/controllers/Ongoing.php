<?php
class Ongoing extends Controller
{
    public function index()
    {
        $data['title'] = 'Detail Page';
        $data['cm'] = $this->model('CharityModel')->getAllCharity();
        $this->view('ongoing/index', $data);
    }
}
