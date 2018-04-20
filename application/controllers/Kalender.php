<?php
class Kalender extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('KalenderModel');
                $this->load->helper('url_helper');
        }
        public function index(){
            $data['birthdays'] = $this->KalenderModel->allitems();
            $this->load->view('templates/header');
            $this->load->view('main/index', $data);
        }
        public function create()
        {
            $data['func'] = 'create';
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('person', 'naam', 'required');
            $this->form_validation->set_rules('day', 'dag', 'required');
            $this->form_validation->set_rules('month', 'maand', 'required');
            $this->form_validation->set_rules('year', 'jaar', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('main/create', $data);
            }
            else
            {
                $this->KalenderModel->create();
                $this->load->view('main/succes');
            }
        }
        public function delete($id){
            $this->KalenderModel->delete($id);
            $this->load->view('main/succes');
        }
        public function edit($id){
            $data['func'] = 'edit/'.$id;
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('person', 'naam', 'required');
            $this->form_validation->set_rules('day', 'dag', 'required');
            $this->form_validation->set_rules('month', 'maand', 'required');
            $this->form_validation->set_rules('year', 'jaar', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('main/create', $data);
            }
            else
            {
                $this->KalenderModel->edit($id);
                $this->load->view('main/succes');
            }
        }

         
}