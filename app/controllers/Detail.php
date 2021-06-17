<?php
class Detail extends Controller
{
    public function index()
    {
        $data['title'] = 'Detail Page';
        $data['cm'] = $this->model('CharityModel')->getAllCharity();
        $this->view('detail/index', $data);
    }
}
