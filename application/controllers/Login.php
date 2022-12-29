<?php
defined('BASEPATH') or exit('No direct script access allowed');

// var_dump((new ReflectionClass(nepw User([])))->getProperties()[3]->getType()->getName());


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser', 'ModelUser');
    }

    public function index()
    {       
        load_types('RpsPelaksanaanPembelajaran');

        $this->load->view('_partials/form', [
            'action' => base_url('login/post')
        ]);
        $this->uiform->set_class(new RpsPelaksanaanPembelajaran([
            'waktu' => 100
        ]))->build($this->load);
        $this->load->view('_partials/endform');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        return redirect(base_url('login'));
    }

    
    public function auth1() {die('lllll');}    

    public function auth()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');

        $validasi_email = $this->ModelUser->query_validasi_email($email);

        if ($validasi_email->num_rows() > 0) {
            $validate_ps = $this->ModelUser->query_validasi_password($email, $password);
            if ($validate_ps->num_rows() > 0) {
                $x = $validate_ps->row_array();
                if ($x['status'] == '1') {
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', $email);
                    $id = $x['id'];
                    if ($x['akses'] == '1') { //Administrator
                        $name = $x['name'];
                        $this->session->set_userdata('access', 'Administrator');
                        ;
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        redirect(base_url('home'));
                    } else if ($x['akses'] == '2') { //Dosen
                        $name = $x['name'];
                        $this->session->set_userdata('access', 'Dosen');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        redirect(base_url('home'));
                    } else if ($x['akses'] == '3') { //Mahasiswa
                        $name = $x['name'];
                        $this->session->set_userdata('access', 'Mahasiswa');
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('name', $name);
                        redirect(base_url('home'));
                    }
                } else {
                    $url = base_url('login');
                    ;
                    echo $this->session->set_flashdata('msg', '<span
                    onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-displaytopright">&times;</span>
                        <h3>Uupps!</h3>
                        <p>Akun kamu telah di blokir. Silahkan hubungi operator.</p>');
                    redirect($url);
                }
            } else {
                $url = base_url('login');
                echo $this
                    ->session
                    ->set_flashdata(
                        'msg',
                        '<span 
                            onclick="this.parentElement.style.display=`none`" 
                            class="w3-button w3-large w3-displaytopright"
                        >
                            &times;
                        </span>
                        <h3>Uupps!</h3>
                        <p>Password yang kamu masukan salah jon.</p>'
                    );
                redirect($url);
            }
        } else {
            $url = base_url('login');
            echo $this
                ->session
                ->set_flashdata(
                    'msg',
                    '<span 
                            onclick="this.parentElement.style.display=`none`" 
                            class="w3-button w3-large w3-displaytopright"
                        >
                            &times;
                        </span>
                        <h3>Uupps!</h3>
                        <p>Password yang kamu masukan salah jon.</p>'
                );
            redirect($url);
        }
    }
}
