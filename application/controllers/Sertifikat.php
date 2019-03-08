<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller {
	public function index(){
        $data= $this->mod->GetTable('tb_sertifikat');
        $this->load->view('templates/header');
		$this->load->view('viewcrud', array('data'=>$data));
		$this->load->view('templates/footer');
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/Sertifikat/index/';

$this->pagination->initialize($config);

echo $this->pagination->create_links();


	}



	public function insert()
	{
		if(isset($_POST['submit'])){
		$this->form_validation->set_rules('judul','Judul Sertifikat','required');
        $this->form_validation->set_rules('event','Event Perlombaan','required');
        $this->form_validation->set_rules('tahun','Tahun Perlombaan','required');
	
			//mengambil post dr form
			$judul = $this->input->post('judul');
			$event = $this->input->post('event');
			$tahun = $this->input->post('tahun');

			$data = array('judul'=>$judul, 'event'=>$event,'tahun'=>$tahun); //data yang akan di insert

			$this->mod->InsertData('tb_sertifikat', $data);
			
			redirect('Sertifikat'); //
		}else{
			$this->load->view('insertcrud'); //menampilkan views insertcrud
		}
	}

	public function delete(){
        $id_sertifikat = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
        $this->mod->DeleteData('tb_sertifikat','id_sertifikat',$id_sertifikat); //menghapus data
        redirect('Sertifikat'); //mengalihkan ke tampbali
    }

    	public function update(){
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$judul = $this->input->post('judul');
			$event = $this->input->post('event');
			$tahun = $this->input->post('tahun');

			$data = array('judul'=>$judul, 'event'=>$event,'tahun'=>$tahun); //data yang akan di update

			$this->mod->UpdateData('tb_sertifikat', $data,'id_sertifikat',$id_sertifikat); //mengaupdate data melalui fungsi insertdata pad models mod.php
			redirect('Sertifikat'); //mengalihkan ke tampbali
		}else{
			$id_sertifikat = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
			$data = $this->mod->getByID('tb_sertifikat','id_sertifikat',$id_sertifikat)->row_array(); //menselect data yg akan di update
		
			$this->load->view('updatecrud',array('ayu'=>$data)); //menampilkan views updatecrud
		}
	}

    public function search()
    {
    	$keyword = $this->input->post('keyword');
    	$data['result'] = $this->mod->cariData($keyword);
    	$this->load->view('cari', $data);
    }



}
