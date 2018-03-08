<?php
class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('datalogin');
    }
 
    function index()
    {

        $this->load->view('login');
    }
 
    function check()
    {
        $username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_petugas = $this->datalogin->auth_petugas($username,$password);
        $cek_anggotaklp = $this->datalogin->auth_anggotaklp($username,$password);
 
        if($cek_petugas->num_rows() > 0) //jika login sebagai Petugas
        {
            $data=$cek_petugas->row_array();
            $this->session->set_userdata('masuk',TRUE);
            if($data['level']=='1')//Akses Pimpinan
            {
                $this->session->set_userdata('level','1');
                $this->session->set_userdata($data);
                redirect('petugas/daftar');
            }
            else if($data['level']=='2')//Akses Master Costumer Service
            {
                $this->session->set_userdata('level','2');
                $this->session->set_userdata($data);
                redirect('home/coba');
            }
            else if($data['level']=='3')//Akses Costumer Service
            {
                $this->session->set_userdata('level','3');
                $this->session->set_userdata($data);
                redirect('home/coba');
            }
            else if($data['level']=='4')//Akses Master Produksi
            {
                $this->session->set_userdata('level','4');
                $this->session->set_userdata($data);
                redirect('home/coba');
            }
            else if($data['level']=='5')//Akses Produksi Umum
            {
                $this->session->set_userdata('level','5');
                $this->session->set_userdata($data);
                redirect('home/coba');
            }
            else if($data['level']=='6')//Akses Keuangan
            {
                $this->session->set_userdata('level','6');
                $this->session->set_userdata($data);
                redirect('home/coba');
            }
            else if($data['level']=='7')//Akses Desainer
            {
                $this->session->set_userdata('level','7');
                $this->session->set_userdata($data);
                redirect('home/coba');
            }
            else if($data['level']=='8')//Akses Packing
            {
                $this->session->set_userdata('level','8');
                $this->session->set_userdata($data);
                redirect('packing/coba');
            }
            else if($data['level']=='9')//Akses Lipat1
            {
                $this->session->set_userdata('level','9');
                $this->session->set_userdata($data);
                redirect('masterlipat1/daftar');
            }
            else if($data['level']=='10')//Akses Lipat2
            {
                $this->session->set_userdata('level','10');
                $this->session->set_userdata($data);
                redirect('masterlipat2/daftaranggota');
            }
            else if($data['level']=='11')//Akses Lipat3
            {
                $this->session->set_userdata('level','11');
                $this->session->set_userdata($data);
                redirect('masterlipat3/daftaranggota');
            }
            else if($data['level']=='12')//Akses Lipat4
            {
                $this->session->set_userdata('level','12');
                $this->session->set_userdata($data);
                redirect('masterlipat4/daftaranggota');
            }
            else if($data['level']=='13')//Akses Lipat5
            {
                $this->session->set_userdata('level','13');
                $this->session->set_userdata($data);
                redirect('masterlipat5/daftaranggota');
            }
            else if($data['level']=='14')//Akses Administrator
            {
                $this->session->set_userdata('level','14');
                $this->session->set_userdata($data);
                redirect('admin/home');
            }
            else
            {
                redirect('login/logout');
            }

        }
        elseif($cek_anggotaklp->num_rows() > 0)
        {
            $data=$cek_anggotaklp->row_array();
            $this->session->set_userdata('masuk',TRUE);
            if($data['kdklp']=='KLP01')//Akses Pimpinan
            {
                $this->session->set_userdata('kdklp','1');
                $this->session->set_userdata($data);
                redirect('lipat1/listbrg');
            }
            elseif($data['kdklp']=='KLP02')//Akses Master Costumer Service
            {
                $this->session->set_userdata('kdklp','2');
                $this->session->set_userdata($data);
                redirect('lipat2/home');
            }
            elseif($data['kdklp']=='KLP03')//Akses Master Costumer Service
            {
                $this->session->set_userdata('kdklp','3');
                $this->session->set_userdata($data);
                redirect('lipat3/home');
            }
            elseif($data['kdklp']=='KLP04')//Akses Master Costumer Service
            {
                $this->session->set_userdata('kdklp','4');
                $this->session->set_userdata($data);
                redirect('lipat4/home');
            }
            elseif($data['kdklp']=='KLP05')//Akses Master Costumer Service
            {
                $this->session->set_userdata('kdklp','5');
                $this->session->set_userdata($data);
                redirect('lipat5/home');
            }
        }
        else
        {
            $data["salah"] = 'not'; //agar attribut "hidden" tidak bekerja ex="nothidden" (digabung)
        	$this->load->view('login',$data);
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}