<?php
class Sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('View-form-sepatu');
    }
    
    public function hasil()
    {
        $this->load->model(['ModelSepatu']);
        $data = [
            'pembeli' => $this->input->post('pembeli'),
            'nohp' => $this->input->post('nohp'),
            'merk' => $this->input->post('merk'),
            'ukuran'=>$this->input->post('ukuran'),
            'harga_sepatu'=>$this->ModelSepatu->getHarga($this->input->post('merk'))
        ];
        $this->load->view('view-data-sepatu', $data);
    }
}