<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemohon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemohon_model');
    }

    public function index()
    {
        $data['title'] = 'Pemohon';
        //$data['pemohon'] = $this->Pemohon_model->getAllPemohon();

        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/ptsp_jember/pemohon/index';
        $config['total_rows'] = $this->Pemohon_model->countAllPemohon();
        $config['per_page'] = 8;

        $config['full_tag_open'] = '<nav>
        <ul class="pagination justify-content-center ">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['First_link'] = 'First';
        $config['first_tag_open'] = ' <li class="page-item">';
        $config['first_tag_close'] = ' </li>';

        $config['next_link'] = ' &raquo';
        $config['next_tag_open'] = ' <li class="page-item">';
        $config['next_tag_close'] = ' </li>';

        $config['prev_link'] = ' &laquo';
        $config['prev_tag_open'] = ' <li class="page-item">';
        $config['prev_tag_close'] = ' </li>';

        $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = ' </a></li>';

        $config['num_tag_open'] = ' <li class="page-item ">';
        $config['num_tag_close'] = ' </li>';

        $config['attributes'] = array('class' => 'page-link');


        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['pemohon'] = $this->Pemohon_model->getPemohon($config['per_page'], $data['start']);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post('keyword')) {
            $data['pemohon'] = $this->Pemohon_model->cariDataPemohon();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pemohon/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function tambah()
    {
        $data['title'] = 'Form Pemohon';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('umur', 'Umur', 'required|numeric');
        $this->form_validation->set_rules('kebangsaan', 'Kebangsaan', 'required');
        $this->form_validation->set_rules('tempatTinggal', 'Tempat tinggal', 'required');

        // diubah


        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('statusPerkawinan', 'Status Perkawinan', 'required');
        $this->form_validation->set_rules('jenisKelamin', 'jenis Kelamin', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('noWA', 'Nomor Ponsel', 'required|numeric');

        // $this->form_validation->set_rules('aktaKelahiran', 'Akta Kelahiran', 'required');
        // $this->form_validation->set_rules('ijazah', 'Ijazah', 'required');
        // $this->form_validation->set_rules('ktp', 'KTP', 'required');
        // $this->form_validation->set_rules('kk', 'Kartu Keluarga', 'required');
        // $this->form_validation->set_rules('skbi', 'Surat Keterangan Beda Identitas', 'required');
        // $this->form_validation->set_rules('sktm', 'Surat Keterangan Tidak Mampu', 'required');




        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pemohon/templates/header', $data);
            $this->load->view('pemohon/templates/tambah', $data);
            $this->load->view('pemohon/templates/footer', $data);
        } else {
            $this->Pemohon_model->tambahDataPemohon();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $this->session->set_flashdata('pesan', 'Ditambahkan');




            redirect('pemohon/tambah', $data);
        }
    }
    public function hapus($id)
    {
        $this->Pemohon_model->hapusDataPemohon($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pemohon');
    }
    public function detail($id)
    {
        $data['title'] = 'Detail Data Pemohon';
        $data['pemohon'] = $this->Pemohon_model->getPemohonById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pemohon/detail', $data);
        $this->load->view('templates/footer', $data);
    }
    public function cetak($id)
    {
        $data['title'] = 'Cetak Data';
        $data['pemohon'] = $this->Pemohon_model->getPemohonById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('pemohon/cetak', $data);
    }
    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Pemohon';
        $data['pemohon'] = $this->Pemohon_model->getPemohonById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pemohon/ubah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Pemohon_model->ubahDataPemohon();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pemohon');
        }
    }
}
