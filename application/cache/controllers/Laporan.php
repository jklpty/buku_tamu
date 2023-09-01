<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['website'] = $this->m_admin->website();
        $data['data_tamu'] = $this->m_admin->data_tamu();
        $this->load->view('template/Header', $data);
        $this->load->view('Laporan', $data);
        $this->load->view('template/Footer');
        $this->load->view('template/Alert');
    }

    public function edit_data()
    {
        $nama           = $this->input->post('nama');
        $instansi       = $this->input->post('instansi');
        $Perihal        = $this->input->post('Perihal');
        $NomorTelepon   = $this->input->post('Nomor_telepon');
        $keperluan      = $this->input->post('keperluan');
        $keterangan     = $this->input->post('keterangan');


        $id             = $this->input->post('id');


        $this->db->set('nama_tamu', $nama);
        $this->db->set('instansi', $instansi);
        $this->db->set('Perihal', $Perihal);
        $this->db->set('Nomor_telepon', $NomorTelepon);
        $this->db->set('keperluan', $keperluan);
        $this->db->set('keterangan', $keterangan);
        $this->db->where('id', $id);
        $this->db->update('data_tamu');

        $this->session->set_flashdata('sukses', 'sukses');
        redirect('Laporan');
    }

    public function cetak()
    {
        $data['website'] = $this->m_admin->website();
        $data['data_tamu'] = $this->m_admin->data_tamu();
        $this->load->view('template/Header', $data);
        $this->load->view('Cetak', $data);
        $this->load->view('template/Footer');
        $this->load->view('template/Alert');
    }

    public function cetak_harian()
    {
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
            'required' => 'Wajib diisi'
        ]);

        $this->form_validation->set_rules('bulan', 'Bulan', 'required', [
            'required' => 'Wajib diisi'
        ]);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required', [
            'required' => 'Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('belum_lengkap', 'belum_lengkap');
            redirect('Laporan/cetak');
        } else {

            $tgl    = $this->input->post('tanggal');
            $bln    = $this->input->post('bulan');
            $thn    = $this->input->post('tahun');

            $data['website'] = $this->m_admin->website();

            $data['cetak_harian'] = $this->m_admin->cetak_harian($tgl, $bln, $thn);

            $this->load->view('Cetak_harian', $data);
        }
    }

    public function cetak_bulanan()
    {
        $this->form_validation->set_rules('bulan', 'Bulan', 'required', [
            'required' => 'Wajib diisi'
        ]);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required', [
            'required' => 'Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('belum_lengkap', 'belum_lengkap');
            redirect('Laporan/cetak');
        } else {

            $bln           = $this->input->post('bulan');
            $thn           = $this->input->post('tahun');


            $data['website'] = $this->m_admin->website();
            $data['data_tamu'] = $this->m_admin->data_tamu();
            $data['cetak_bulanan'] = $this->m_admin->cetak_bulanan($bln, $thn);

            $this->load->view('Cetak_bulanan', $data);
        }
    }

    public function cetak_tahunan()
    {

        $this->form_validation->set_rules('tahun', 'Tahun', 'required', [
            'required' => 'Wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('belum_lengkap', 'belum_lengkap');
            redirect('Laporan/cetak');
        } else {

            $thn           = $this->input->post('tahun');


            $data['website'] = $this->m_admin->website();
            $data['data_tamu'] = $this->m_admin->data_tamu();
            $data['cetak_tahunan'] = $this->m_admin->cetak_tahunan($thn);

            $this->load->view('Cetak_tahunan', $data);
        }
    }

    function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_admin->hapus_data($where, 'data_tamu');
        $this->session->set_flashdata('hapus', 'hapus');
        redirect('Laporan');
    }
}
