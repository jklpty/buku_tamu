<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ubah_password extends CI_Controller
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
        $data['login'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();

        $data['website'] = $this->m_admin->website();
        $data['data_tamu'] = $this->m_admin->data_tamu();
        $this->load->view('template/Header', $data);
        $this->load->view('Ubah_pass', $data);
        $this->load->view('template/Footer');
        $this->load->view('template/Alert');
    }
    public function update_pass()
    {
        $data['login'] = $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('password_sekarang', 'Password sekarang', 'requaired|trim');
        $this->form_validation->set_rules('password_baru1', 'Password baru1', 'requaired|trim|min_length[5]');


        if ($this->form_validation->run() == false) {

            $password_sekarang = $this->input->post('password_sekarang');
            $password_baru = $this->input->post('password_baru1');

            if (!password_verify($password_sekarang, $data['login']['password'])) {
                $this->session->set_flashdata('pas_salah', 'pas_salah');
                redirect('Ubah_password');
            } else {
                if ($password_sekarang == $password_baru) {
                    $this->session->set_flashdata('pas_sama', 'pas_sama');
                    redirect('Ubah_password');
                } else {
                    //password suda ok!
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('login');
                    $this->session->set_flashdata('pas_sukses', 'pas_sukses');

                    redirect('Login/ubah_pass');
                }
            }
        } else {
            $this->session->set_flashdata('pas_kosong', 'pas_kosong');

            redirect('Ubah_password');
        }
    }
}
