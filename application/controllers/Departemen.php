<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

class Departemen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('M_Login');
        $current_user=$this->M_Login->is_role();
        //cek session dan level user
        if($this->M_Login->is_role() != "2"){
            redirect("welcome/");
        }
        $this->load->helper('file');
        $this->load->model('M_Akun');
        $this->load->model('M_SK');
    }

    public function index(){
        redirect(base_url('departemen/daftar_sk'));
    }

    public function header(){
        $daftar_sk = ["tb_sk.departemen"=>$this->session->userdata('id'), 
                "status"=>"draft", 
                "tb_sk.id_operator"=>$this->session->userdata('operator'),];
        $total = [
                "status"=>9,
                "tb_sk.departemen"=>$this->session->userdata('id'),
                "tb_sk.id_operator"=>$this->session->userdata('operator'),
                ];
        $all = [
                // "status"=>9,
                "tb_sk.departemen"=>$this->session->userdata('id'),
                "tb_sk.id_operator"=>$this->session->userdata('operator'),
                ];
        $head['username'] = $this->session->userdata('username');
        $head['role'] = $this->session->userdata('role');
        $head['nama'] = $this->session->userdata('nama');
        $head['one1'] = $this->M_SK->get_count_sk_diproses($all);
        $head['one2'] = "Total diajukan";
        $head['one3'] = "departemen/all";
        $head['two1'] = $this->M_SK->get_count_sk_diproses($daftar_sk);
        $head['two2'] = "Total SK draft";
        $head['three1'] = $this->M_SK->get_count_sk_disetujui($total);
        $head['three2'] = "Total disetujui";
        $head['three3'] = "departemen/total";
        $this->load->view('layout/header', $head);
    }

    public function daftar_sk()
    {
        $dep = ["tb_sk.departemen"=>$this->session->userdata('id'), 
                "status"=>"draft", 
                "tb_sk.id_operator"=>$this->session->userdata('operator'),];
        $data['view'] = $this->M_SK->get_SK($dep)->result();
        // print_r ($dep);
        $this->header();
        $this->load->view('departemen/daftar_sk', $data);
        $this->load->view('layout/footer');
    }

    public function total()
    {
        $dep = [
            "status"=>9,
            "tb_sk.departemen"=>$this->session->userdata('id'),
            "tb_sk.id_operator"=>$this->session->userdata('operator'),
            ];
        $data['view'] = $this->M_SK->get_SK($dep)->result();
        $data['val_stat'] = "draft";
        $this->header();
        $this->load->view('departemen/all', $data);
        $this->load->view('layout/footer');
    }

    public function all(){
        $dep = [
            // "status"=>9,
            "tb_sk.departemen"=>$this->session->userdata('id'),
            "tb_sk.id_operator"=>$this->session->userdata('operator'),
            ];
        $data['view'] = $this->M_SK->get_SK($dep)->result();
        // $data['url'] = "kadep/review";
        $data['val_stat'] = "draft";
        $this->header();
        $this->load->view('departemen/all', $data);
        $this->load->view('layout/footer');
    }

    public function pengajuan_sk(){
        $this->header();
        $dep = ["tb_sk.departemen"=>$this->session->userdata('id'),
                "tb_sk.id_operator"=>$this->session->userdata('operator'),];
        $data['sk'] = $this->M_SK->get_SK_dup($dep)->result();
        $this->load->view('departemen/pengajuan_sk',$data);
        $this->load->view('layout/footer');
    }

    public function duplicate_sk(){
        $id = $this->input->post('id_sk');
        if (empty($id)){
            redirect(base_url('departemen/daftar_sk'));
        };
        $data["id"] = $id;
        $sent = ["tb_sk.id"=>$id];
        $id_sk = ["id_sk"=>$id];
        $data['menimbang'] = $this->M_SK->get_menimbang($id_sk)->result();
        $data['mengingat'] = $this->M_SK->get_mengingat($id_sk)->result();
        $data['menetapkan'] = $this->M_SK->get_menetapkan($id_sk)->result();
        $data['sk'] = $this->M_SK->get_SK($sent)->row();
        $this->header();
        $this->load->view('departemen/duplicate', $data);
        $this->load->view('layout/footer');
    }

    public function edit_sk(){
        $id = $this->input->post('id');
        if (empty($id)){
            redirect(base_url('departemen/daftar_sk'));
        };
        $data["id"] = $id;
        $sent = ["tb_sk.id"=>$id];
        $id_sk = ["id_sk"=>$id];
        $data['menimbang'] = $this->M_SK->get_menimbang($id_sk)->result();
        $data['mengingat'] = $this->M_SK->get_mengingat($id_sk)->result();
        $data['menetapkan'] = $this->M_SK->get_menetapkan($id_sk)->result();
        $data['sk'] = $this->M_SK->get_SK($sent)->row();
        $dep = ["tb_sk.departemen"=>$this->session->userdata('id')];
        $log_dep = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>0))->result();
        $log_kadep = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>1))->result();
        $log_ver = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>2))->result();
        $log_sup = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>3))->result();
        $log_sup2 = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>4))->result();
        $log_man = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>5))->result();
        $log_wad1 = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>6))->result();
        $log_wad2 = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>7))->result();
        $log_dekan = $this->M_SK->get_log(array("id_sk"=>$id, "user"=>8))->result();
        $log_finish = $this->M_SK->get_log(array("id_sk"=>$id, "next_user"=>9))->result();
        $data['log_finish'] = $log_finish;
        $data['log_departemen'] = $log_dep;
        $data['log_kadep'] = $log_kadep;
        $data['log_verifikator'] = $log_ver;
        $data['log_supervisor'] = $log_sup;
        $data['log_supervisor2'] = $log_sup2;
        $data['log_manager'] = $log_man;
        $data['log_wadek1'] = $log_wad1;
        $data['log_wadek2'] = $log_wad2;
        $data['log_dekan'] = $log_dekan;
        $dep = $this->M_SK->get_note_dep($id_sk)->row();
        if (!empty($dep)){
            $data['dep']=$dep;
        };
        $this->header();
        $this->load->view('departemen/edit', $data);
        $this->load->view('layout/footer');
    }

    public function insert_pengajuan(){
        $departemen = $this->session->userdata('id');
        $judul = $this->input->post('judul');
        $catatan = $this->input->post('catatan');
        $status = $this->input->post('status');
        // $kategori = $this->input->post('kategori');
        $mengingat = $this->input->post('mengingat[]');
        $menimbang = $this->input->post('menimbang[]');
        $menetapkan = $this->input->post('menetapkan[]');
        // print_r($mengingat);
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
        $data = [
            'id_operator'=>$this->session->userdata('operator'),
            'tgl'=>$tgl,
            'judul'=>$judul,
            // 'kategori'=>$kategori,
            'departemen'=>$departemen,
            'status'=>"$status",
        ];
        $id = $this->M_SK->insert_pengajuan($data);
        $cond = ['id'=>$id];
        $data_review = [
            "id_sk"=>$id,
            "catatan"=>"$catatan",
            "tgl"=>"$tgl"
        ];
        $this->M_SK->insert_dep_cat($data_review, $cond);

        // $data_mengingat = array();
        for($i=0; $i<count($mengingat)-1; $i++)
        {
            // print_r($mengingat);
            // echo $mengingat[0];
            if($mengingat[$i]!=""||$mengingat[$i]!=null||$mengingat[$i]!=0){
                $data_mengingat[$i] = [
                    'id_sk' => $id,
                    'mengingat' => $mengingat[$i],
                ];
                $this->M_SK->mengingat($data_mengingat[$i]);
            }
            else{
            
            }
        }
        

        // $data_menimbang = array();
        for($i=0; $i<count($menimbang)-1; $i++)
        {
            if($menimbang[$i]!=""||$menimbang[$i]!=null||$menimbang[$i]!=0){
                $data_menimbang[$i] = [
                    'id_sk' => $id,
                    'menimbang' => $menimbang[$i],
                ];
                $this->M_SK->menimbang($data_menimbang[$i]);
            }
            else{
            }
        }
        

        // $data_menetapkan = array();
        for($i=0; $i<count($menetapkan)-1; $i++)
        {
            if($menetapkan[$i]!=""||$menetapkan[$i]!=null||$menetapkan[$i]!=0){
                $data_menetapkan[$i] = [
                    'id_sk' => $id,
                    'menetapkan' => $menetapkan[$i],
                ];
                $this->M_SK->menetapkan($data_menetapkan[$i]);

            }
            else{
                
            }
        }

        $file = $_FILES['file'];
        if(empty($file['name'])){}
            else{
            $config['upload_path'] = './assets/lampiran';
            $config['encrypt_name'] = TRUE;
            $config['allowed_types'] = '*';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('file')){
                echo "Upload Gagal"; die();
            } else {
                $file=$this->upload->data('file_name');
            }
            $datafile = [
            "lamp"=>$file,];
            // $this->M_Pengaduan->update_pengaduan($datafile,$id);
            $this->M_SK->update_pengajuan($datafile, $cond);
        }

        $file2 = $_FILES['file2'];
        if(empty($file2['name'])){}
            else{
            $config2['upload_path'] = './assets/lampiran';
            $config2['encrypt_name'] = TRUE;
            $config2['allowed_types'] = '*';

            $this->load->library('upload',$config2);
            if(!$this->upload->do_upload('file2')){
                echo "Upload Gagal"; die();
            } else {
                $file2=$this->upload->data('file_name');
            }
            $datafile = [
            "lamp2"=>$file2,];
            // $this->M_Pengaduan->update_pengaduan($datafile,$id);
            $this->M_SK->update_pengajuan($datafile, $cond);
        }

        $file3 = $_FILES['file3'];
        if(empty($file3['name'])){}
            else{
            $config3['upload_path'] = './assets/lampiran';
            $config3['encrypt_name'] = TRUE;
            $config3['allowed_types'] = '*';

            $this->load->library('upload',$config3);
            if(!$this->upload->do_upload('file3')){
                echo "Upload Gagal"; die();
            } else {
                $file3=$this->upload->data('file_name');
            }
            $datafile = [
            "lamp3"=>$file3,];
            // $this->M_Pengaduan->update_pengaduan($datafile,$id);
            $this->M_SK->update_pengajuan($datafile, $cond);
        }

        //log data
        if($status!="draft"){
            $log = [
                "id_sk"=>$id,
                "user"=>0,
                "round"=>0,
                "next_user"=>1,
                "status"=>1,
                "tgl"=>"$tgl"
            ];
            $log_cek = [
                "id_sk"=>$id,
                "user"=>0,
                "round"=>0,
                "next_user"=>1,
                "status"=>1,
                "round"=>0,
            ];
            $this->M_SK->log($log, $log_cek);
        }
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Pengajuan berhasil ditambahkan, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url("common/create_sk/$id"));
    }

    public function update_pengajuan(){
        $id = $this->input->post('id');
        $departemen = $this->session->userdata('id');
        $judul = $this->input->post('judul');
        $catatan = $this->input->post('catatan');
        $status = $this->input->post('status');
        // $kategori = $this->input->post('kategori');
        $mengingat = $this->input->post('mengingat[]');
        $menimbang = $this->input->post('menimbang[]');
        $menetapkan = $this->input->post('menetapkan[]');
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
        $data = [
            'tgl'=>$tgl,
            'judul'=>$judul,
            // 'kategori'=>$kategori,
            'departemen'=>$departemen,
            'status'=>"$status",
        ];
        $cond = ['id'=>$id];
        $id_sk = ['id_sk'=>$id];
        $this->M_SK->update_pengajuan($data, $cond);

        $data_review = [
            "id_sk"=>$id,
            "catatan"=>"$catatan",
            "tgl"=>"$tgl"
        ];
        $this->M_SK->insert_dep_cat($data_review, $cond);

        $this->M_SK->del_mengingat($id_sk);
        // $data_mengingat = array();
        for($i=0; $i<count($mengingat)-1; $i++)
        {
            if($mengingat[$i]!=""||$mengingat[$i]!=null||$mengingat[$i]!=0){
                $data_mengingat[$i] = [
                    'id_sk' => $id,
                    'mengingat' => $mengingat[$i],
                ];
                $this->M_SK->mengingat($data_mengingat[$i]);

            }
            else{
            }
        }
        

        $this->M_SK->del_menimbang($id_sk);
        // $data_menimbang = array();
        for($i=0; $i<count($menimbang)-1; $i++)
        {
            if($menimbang[$i]!=""||$menimbang[$i]!=null||$menimbang[$i]!=0){
                $data_menimbang[$i] = [
                    'id_sk' => $id,
                    'menimbang' => $menimbang[$i],
                ];
                $this->M_SK->menimbang($data_menimbang[$i]);

            }
            else{
        }
        }
       

        $this->M_SK->del_menetapkan($id_sk);
        // $data_menetapkan = array();
        for($i=0; $i<count($menetapkan)-1; $i++)
        {
            if($menetapkan[$i]!=""||$menetapkan[$i]!=null||$menetapkan[$i]!=0){
                $data_menetapkan[$i] = [
                    'id_sk' => $id,
                    'menetapkan' => $menetapkan[$i],
                ];
                $this->M_SK->menetapkan($data_menetapkan[$i]);

            }
            else{
        }
        }

        $file = $_FILES['file'];
        if(empty($file['name'])){}
            else{
            $config['upload_path'] = './assets/lampiran';
            $config['encrypt_name'] = TRUE;
            $config['allowed_types'] = '*';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('file')){
                echo "Upload Gagal"; die();
            } else {
                $file=$this->upload->data('file_name');
            }
            $datafile = [
            "lamp"=>$file,];
            // $this->M_Pengaduan->update_pengaduan($datafile,$id);
            $this->M_SK->update_pengajuan($datafile, $cond);
        }

        $file2 = $_FILES['file2'];
        if(empty($file2['name'])){}
            else{
            $config2['upload_path'] = './assets/lampiran';
            $config2['encrypt_name'] = TRUE;
            $config2['allowed_types'] = '*';

            $this->load->library('upload',$config2);
            if(!$this->upload->do_upload('file2')){
                echo "Upload Gagal"; die();
            } else {
                $file2=$this->upload->data('file_name');
            }
            $datafile = [
            "lamp2"=>$file2,];
            // $this->M_Pengaduan->update_pengaduan($datafile,$id);
            $this->M_SK->update_pengajuan($datafile, $cond);
        }

        $file3 = $_FILES['file3'];
        if(empty($file3['name'])){}
            else{
            $config3['upload_path'] = './assets/lampiran';
            $config3['encrypt_name'] = TRUE;
            $config3['allowed_types'] = '*';

            $this->load->library('upload',$config3);
            if(!$this->upload->do_upload('file3')){
                echo "Upload Gagal"; die();
            } else {
                $file3=$this->upload->data('file_name');
            }
            $datafile = [
            "lamp3"=>$file3,];
            // $this->M_Pengaduan->update_pengaduan($datafile,$id);
            $this->M_SK->update_pengajuan($datafile, $cond);
        }
        //log data
        if($status!="draft"){
            $log = [
                "id_sk"=>$id,
                "user"=>0,
                "round"=>0,
                "next_user"=>1,
                "status"=>1,
                "tgl"=>"$tgl"
            ];
            $log_cek = [
                "id_sk"=>$id,
                "user"=>0,
                "round"=>0,
                "next_user"=>1,
                "status"=>1,
                "round"=>0,
            ];
            $this->M_SK->log($log, $log_cek);
        }
        
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Pengajuan berhasil ditambahkan, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url("common/create_sk/$id"));
    }

    public function delete_pengajuan(){
        $id = $this->input->post('id');
        $this->M_SK->del_mengingat(array("id_sk"=>$id));
        $this->M_SK->del_menimbang(array("id_sk"=>$id));
        $this->M_SK->del_menetapkan(array("id_sk"=>$id));
        $this->M_SK->del_sk(array("id"=>$id));
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Pengajuan berhasil dihapus</div></div>');
        redirect(base_url('departemen/daftar_sk'));
    }

    public function ajukan(){
        $id = $this->input->post('id');
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
        $data = [
            'tgl'=>$tgl,
            'status'=>0,
        ];
        $cond = ['id'=>$id];
        $id_sk = ['id_sk'=>$id];
        $log = [
            "id_sk"=>$id,
            "user"=>0,
            "round"=>0,
            "next_user"=>1,
            "status"=>1,
            "tgl"=>"$tgl"
        ];
        $log_cek = [
            "id_sk"=>$id,
            "user"=>0,
            "round"=>0,
            "next_user"=>1,
            "status"=>1,
            "round"=>0,
        ];
        $this->M_SK->log($log, $log_cek);
        $this->M_SK->update_pengajuan($data, $cond);

        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Draft berhasil diajukan</div></div>');
        redirect(base_url('departemen/daftar_sk'));
    }
}