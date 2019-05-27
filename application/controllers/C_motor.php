<?php
Class C_motor extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        //$this->API="http://localhost/mahasiswa/service/index.php";
        $this->API="https://api.akhmad.id/uaspromnet/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data mahasiswa
    function index(){
        $this->curl->http_header("X-Nim", "1701476");
        $data['user'] = json_decode($this->curl->simple_get($this->API.'/user'));
       // $this->curl->debug();


        $this->load->view('Vuser', $data);
    }

    function motor(){
        $this->curl->http_header("X-Nim", "1701476");
        $data['motor'] = json_decode($this->curl->simple_get($this->API.'/motor'))->data;
        //$this->curl->debug();

        $this->load->view('Vmotor', $data);
    }

    function cicil(){
        $this->curl->http_header("X-Nim", "1701476");
        $data['cicil'] = json_decode($this->curl->simple_get($this->API.'/cicil'))->data;
        //$this->curl->debug();

        $this->load->view('Vcicil', $data);
    }

    function uangmuka(){
        $this->curl->http_header("X-Nim", "1701476");
        $data['uang'] = json_decode($this->curl->simple_get($this->API.'/uangmuka'))->data;
        //$this->curl->debug();

        $this->load->view('Vuangmuka', $data);
    }

    function penjualan(){
        $this->curl->http_header("X-Nim", "1701476");
        $data['penjualan'] = json_decode($this->curl->simple_get($this->API.'/penjualan'));
       // $this->curl->debug();

        $this->load->view('Vpenjualan', $data);
    }

    function input(){
        $this->load->view('Vinput');
    }
    // insert data mahasiswa
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_motor'          => $this->input->post('id_motor'),
                'id_cicilan'        => $this->input->post('id_cicilan'),
                'id_uang_muka'      => $this->input->post('id_uang_muka'),
                'cicilan_pokok'     => $this->input->post('cicilan_pokok'),
                'cicilan_bunga'     => $this->input->post('cicilan_bunga'),
                'cicilan_total'     => $this->input->post('cicilan_total'),
            );

            $this->curl->http_header("X-Nim", "1701476");
            $insert =  $this->curl->simple_post($this->API.'/penjualan', $data, array(CURLOPT_BUFFERSIZE => 10)); 

            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }

            redirect('Mahasiswa');

        }else{
            $this->load->view('create');
        }
    }

    function update($id){
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa?id='.$id));
        $this->load->view('edit', $data);
    }

    // edit data mahasiswa
    function edit($id){
        if(empty($id)){
            redirect('Mahasiswa');
        }
        else{
            $data = array(
                'id'                => $this->input->post('id'),
                'nim'               => $this->input->post('nim'),
                'nama'              => $this->input->post('nama'),
                'jurusan'           => $this->input->post('jurusan'),
                'tempat_lahir'      => $this->input->post('tempat_lahir'),
                'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                'agama'             => $this->input->post('agama'),
                'alamat'            => $this->input->post('alamat'),
                'email'             => $this->input->post('email'),
                'no_telp'           => $this->input->post('no_telp')
            );

            $update =  $this->curl->simple_put($this->API.'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 

            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }

            redirect('Mahasiswa');

        }
    }

    // delete data mahasiswa
    function delete($id){
        if(empty($id)){
            redirect('mahasiswa');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/mahasiswa', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Mahasiswa');
        }
    }
}