<?php
class Pemohon_model extends CI_Model
{
    public function getAllPemohon()
    {
        return $query = $this->db->get('Pemohon_model')->result_array();
    }

    public function getPemohon($limit, $start)
    {

        return $this->db->get('pemohon', $limit, $start)->result_array();
    }

    public function countAllPemohon()
    {
        return $this->db->get('pemohon')->num_rows();
    }
    public function tambahDataPemohon()
    {
        $this->load->library('upload');
        $config['upload_path'] = './assets/file';
        $config['allowed_types'] = 'doc|docx|pdf';
        $config['overwrite'] = false;
        $config['max_size'] = 5000;
        $media = $this->upload->data();
        $inputFileName = '.assets/file' . $media['file_name'];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('aktaKelahiran')) {
            // echo "Upload gagal";
            // die();
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_userdata($error);
            // $this->load->$this->session->set_flashdata('error', 'Wajib Ditambahkan');
            // $this->session->set_flashdata('pGagal', 'Wajib Ditambahkan');
            redirect('pemohon/tambah');
        } else {
            $this->load->library('upload');
            $config['upload_path'] = './assets/file';
            $config['allowed_types'] = 'doc|docx|pdf';
            $config['overwrite'] = false;
            $config['max_size'] = 5000;
            $media1 = $this->upload->data();
            $inputFileName = '.assets/file' . $media1['file_name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('ijazah')) {
                // echo "Upload gagal";
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata($error);
                // die();

                $this->session->set_flashdata('pGagal', 'Wajib Ditambahkan');
                redirect('pemohon/tambah');
            } else {
                $this->load->library('upload');
                $config['upload_path'] = './assets/file';
                $config['allowed_types'] = 'doc|docx|pdf';
                $config['overwrite'] = false;
                $config['max_size'] = 5000;
                $media2 = $this->upload->data();
                $inputFileName = '.assets/file' . $media2['file_name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('ktp')) {
                    // echo "Upload gagal";
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_userdata($error);
                    // die();
                    redirect('pemohon/tambah');
                    $this->session->set_flashdata('pGagal', 'Wajib Ditambahkan');
                } else {
                    $this->load->library('upload');
                    $config['upload_path'] = './assets/file';
                    $config['allowed_types'] = 'doc|docx|pdf';
                    $config['overwrite'] = false;
                    $config['max_size'] = 5000;
                    $media3 = $this->upload->data();
                    $inputFileName = '.assets/file' . $media3['file_name'];
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('kk')) {
                        // echo "data gagal";
                        $error = array('error' => $this->upload->display_errors());
                        $this->session->set_userdata($error);
                        // die();
                        redirect('pemohon/tambah');
                        $this->session->set_flashdata('pGagal', 'Wajib Ditambahkan');
                    } else {
                        $this->load->library('upload');
                        $config['upload_path'] = './assets/file';
                        $config['allowed_types'] = 'doc|docx|pdf';
                        $config['overwrite'] = false;
                        $config['max_size'] = 5000;
                        $media4 = $this->upload->data();
                        $inputFileName = '.assets/file' . $media4['file_name'];
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if (!$this->upload->do_upload('skbi')) {
                            // echo "data gagal";
                            $error = array('error' => $this->upload->display_errors());
                            $this->session->set_userdata($error);
                            // die();
                            redirect('pemohon/tambah');
                            $this->session->set_flashdata('pGagal', 'Wajib Ditambahkan');
                        } else {
                            $this->load->library('upload');
                            $config['upload_path'] = './assets/file';
                            $config['allowed_types'] = 'doc|docx|pdf';
                            $config['overwrite'] = false;
                            $config['max_size'] = 5000;
                            $media5 = $this->upload->data();
                            $inputFileName = '.assets/file' . $media5['file_name'];
                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);
                            if (!$this->upload->do_upload('sktm')) {
                                // echo "data gagal";
                                $error = array('error' => $this->upload->display_errors());
                                $this->session->set_userdata($error);
                                // die();
                                redirect('pemohon/tambah');
                                $this->session->set_flashdata('pGagal', 'Wajib Ditambahkan');
                            } else {
                                $media5 = $this->upload->data();
                                $inputFileName = '.assets/file' . $media5['file_name'];
                                $data = array(
                                    'nama' => $this->input->post('nama', true),
                                    'nik' => $this->input->post('nik'),
                                    'umur' => $this->input->post('umur'),
                                    'kebangsaan' => $this->input->post('kebangsaan'),
                                    'tempat_tinggal' => $this->input->post('tempatTinggal'),
                                    'agama' => $this->input->post('agama'),
                                    'pekerjaan' => $this->input->post('pekerjaan'),
                                    'status_perkawinan' => $this->input->post('statusPerkawinan'),
                                    'jenis_kelamin' => $this->input->post('jenisKelamin'),
                                    'pendidikan' => $this->input->post('pendidikan'),
                                    'no_wa' => $this->input->post('noWA'),
                                    'perkara' => $this->input->post('perkara'),
                                    "akta_kelahiran" => $media1['file_name'],
                                    "ijazah" => $media2['file_name'],
                                    "ktp" => $media3['file_name'],
                                    "kk" => $media4['file_name'],
                                    "skbi" => $media5['file_name'],
                                    "sktm" => $media5['file_name']
                                );
                                $res = $this->db->insert('pemohon', $data);
                                if ($res > 0) {
                                    echo "data berhasil ditambahkan";
                                } else {
                                    $error = array('error' => $this->upload->display_errors());
                                    $this->session->set_userdata($error);
                                    redirect('pemohon/tambah');
                                    // $this->session->set_flashdata('pGagal', 'wajib Ditambahkan');
                                    // echo "data gagal";
                                    // die();

                                    // echo ("Selamat datang di tutorial Javascript");
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function ubahDataPemohon()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'umur' => $this->input->post('umur'),
            'kebangsaan' => $this->input->post('kebangsaan'),
            'tempat_tinggal' => $this->input->post('tempatTinggal'),
            'agama' => $this->input->post('agama'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'status_perkawinan' => $this->input->post('statusPerkawinan'),
            'jenis_kelamin' => $this->input->post('jenisKelamin'),
            'pendidikan' => $this->input->post('pendidikan'),
            'no_wa' => $this->input->post('noWA'),
            'perkara' => $this->input->post('perkara'),

        );




        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pemohon', $data);
        // if ($res > 0) {
        //     echo "data berhasil ditambahkan";
        // } else {
        //     echo "data gagal";
        // }

    }





    public function hapusDataPemohon($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('pemohon');
    }
    public function getPemohonById($id)
    {
        return $this->db->get_where('pemohon', ['id' => $id])->row_array();
    }
    public function cariDataPemohon()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nik', $keyword);
        $this->db->or_like('tempat_tinggal', $keyword);
        $this->db->or_like('kebangsaan', $keyword);
        return $this->db->get('pemohon')->result_array();
    }
}
