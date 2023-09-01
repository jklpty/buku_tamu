<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_tamu extends CI_Controller
{
    public function index()
    {

        $hari = date('l');

        if ($hari == "Monday") {
            $hariindo = "Senin";
        } else if ($hari == "Tuesday") {
            $hariindo = "Selasa";
        } else if ($hari == "Wednesday") {
            $hariindo = "Rabu";
        } else if ($hari == "Thursday") {
            $hariindo = "Kamis";
        } else if ($hari == "Friday") {
            $hariindo = "Jumat";
        } else if ($hari == "Friday") {
            $hariindo = "Sabtu";
        } else {
            $hariindo = "Minggu";
        }
        $data['hari'] = $hariindo;

        $data['website'] = $this->m_admin->website();
        $this->load->view('Buku_tamu', $data);
        $this->load->view('template/Alert');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'NAMA', 'required', [
            'required' => 'Wajib diisi'
        ]);

        $this->form_validation->set_rules('instansi', 'INSTANSI', 'required', [
            'required' => 'Wajib diisi'
        ]);

        $this->form_validation->set_rules('Perihal', 'Perihal', 'required', [
            'required' => 'Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('belum_lengkap', 'belum_lengkap');
            redirect('Buku_tamu');
        } else {

            $nama               = $this->input->post('nama');
            $instansi           = $this->input->post('instansi');
            $Perihal            = $this->input->post('Perihal');
            $NomorTelepon       = $this->input->post('Nomor_Telepon');
            $keperluan          = $this->input->post('keperluan');
            $keterangan         = $this->input->post('keterangan');
            $hari               = date('l');


            if ($hari == "Monday") {
                $hariindo = "Senin";
            } else if ($hari == "Tuesday") {
                $hariindo = "Selasa";
            } else if ($hari == "Wednesday") {
                $hariindo = "Rabu";
            } else if ($hari == "Thursday") {
                $hariindo = "Kamis";
            } else if ($hari == "Friday") {
                $hariindo = "Jumat";
            } else if ($hari == "Friday") {
                $hariindo = "Sabtu";
            } else {
                $hariindo = "Minggu";
            }

            $data = array(
                'nama_tamu'     => $nama,
                'instansi'      => $instansi,
                'Perihal'       => $Perihal,
                'Nomor_Telepon' => $NomorTelepon,
                'keperluan'     => $keperluan,
                'keterangan'    => $keterangan,
                'tgl'           => date('d'),
                'hari'           => $hariindo,
                'bln'           => date('m'),
                'thn'           => date('Y'),
                'jam'           => date('H:i')

            );

            $this->db->insert('data_tamu', $data);
            $this->session->set_flashdata('sukses', 'sukses');
            redirect('Buku_tamu');
        }
    }
}
