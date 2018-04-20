<?php
class kalenderModel extends CI_Model{
    public function __construct()
    {
            $this->load->database();
    }
    public function allitems()
    {
        $this->db->order_by('day', 'ASC');
        $query = $this->db->get('birthdays');

        return $query->result_array();
    }
    public function create(){
        $this->load->helper('url');

        $data = array(
            'person' => $this->input->post('person'),
            'day' => $this->input->post('day'),
            'month' => $this->input->post('month'),
            'year' => $this->input->post('year'),
        );

        return $this->db->insert('birthdays', $data);
    }

    public function delete($id){
        $this->db->delete('birthdays', array('id' => $id));  
    }
    public function edit($id){
        $this->load->helper('url');

        $data = array(
            'person' => $this->input->post('person'),
            'day' => $this->input->post('day'),
            'month' => $this->input->post('month'),
            'year' => $this->input->post('year'),
        );

        $this->db->where('id', $id);
        $this->db->update('birthdays', $data);
    }
}