<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

class Verifikator extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('M_Login');
        $current_user=$this->M_Login->is_role();
        //cek session dan level user
        if($this->M_Login->is_role() != "4"){
            redirect("welcome/");
        }
        $this->load->helper('file');
        $this->load->model('M_Akun');
        $this->load->model('M_SK');
    }

    public function index(){
        redirect(base_url('verifikator/daftar_sk'));
    }

    public function header(){
        $head['username'] = $this->session->userdata('username');
        $head['role'] = $this->session->userdata('role');
        $head['nama'] = $this->session->userdata('nama');
        $head['one1'] = $this->M_SK->get_count_sk();
        $head['one2'] = "Total diajukan";
        $head['one3'] = "verifikator/all";
        $head['two1'] = $this->M_SK->get_count_dep(array("status"=>1), array("status"=>8));
        $head['two2'] = "Harus Segera diproses";
        $head['three1'] = $this->M_SK->get_count_sk_disetujui(array("status >"=>1));
        $head['three2'] = "Total disetujui";
        $head['three3'] = "verifikator/total";
        $this->load->view('layout/header', $head);
    }

    public function daftar_sk()
    {
        $dep = [
            "status"=>1
            ];
        $or = [
                "status"=>8
            ];
        $data['view'] = $this->M_SK->get_SK_dep($dep,$or)->result();
        $data['url'] = "verifikator/review";
        $data['val_stat'] = "1";
        $this->header();
        $this->load->view('verifikator/daftar_sk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function total()
    {
        $dep = [
            "status >"=>1
            ];
        $data['view'] = $this->M_SK->get_SK($dep)->result();
        $data['url'] = "verifikator/review";
        $data['val_stat'] = "1";
        $this->header();
        $this->load->view('verifikator/total', $data);
        $this->load->view('layout/footer', $data);
    }

    public function all(){
        $data['view'] = $this->M_SK->get_all()->result();
        $data['url'] = "verifikator/review";
        $data['val_stat'] = "1";
        $this->header();
        $this->load->view('verifikator/all', $data);
        $this->load->view('layout/footer', $data);
    }

    public function review(){
        $id = $this->input->post('id');
        if (empty($id)){
            redirect(base_url('verifikator/daftar_sk'));
        };
        $sent = ["tb_sk.id"=>$id];
        $id_sk = ["id_sk"=>$id];
        $data['url_reject'] = "verifikator/reject";
        $data['menimbang'] = $this->M_SK->get_menimbang($id_sk)->result();
        $data['mengingat'] = $this->M_SK->get_mengingat($id_sk)->result();
        $data['menetapkan'] = $this->M_SK->get_menetapkan($id_sk)->result();
        $data['sk'] = $this->M_SK->get_SK($sent)->row();
        $data['url'] = "verifikator/insert_review";
        $data['val_stat'] = "1";
        $dep = $this->M_SK->get_note_dep($id_sk)->row();
        if (!empty($dep)){
            $data['dep']=$dep;
        };
        $kadep = $this->M_SK->get_note_kadep($id_sk)->result();
        if (!empty($kadep)){
            $data['kadep']=$kadep;
        };
        $verifikator = $this->M_SK->get_note_verifikator($id_sk)->result();
        if (!empty($verifikator)){
            $data['verifikator']=$verifikator;
            // $data['catatan']=$verifikator->catatan;
        };
        $supervisor = $this->M_SK->get_note_supervisor($id_sk)->result();
        if (!empty($supervisor)){
            $data['supervisor']=$supervisor;
        };
        $supervisor2 = $this->M_SK->get_note_supervisor2($id_sk)->result();
        if (!empty($supervisor2)){
            $data['supervisor2']=$supervisor2;
        };
        $manager = $this->M_SK->get_note_manager($id_sk)->result();
        if (!empty($manager)){
            $data['manager']=$manager;
        };
        $wadek1 = $this->M_SK->get_note_wadek1($id_sk)->result();
        if (!empty($wadek1)){
            $data['wadek1']=$wadek1;
        };
        $wadek2 = $this->M_SK->get_note_wadek2($id_sk)->result();
        if (!empty($wadek2)){
            $data['wadek2']=$wadek2;
        };
        $dekan = $this->M_SK->get_note_dekan($id_sk)->result();
        if (!empty($dekan)){
            $data['dekan']=$dekan;
        };
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
        $this->header();
        $this->load->view('verifikator/review_sk', $data);
        $this->load->view('layout/footer');
    }

    public function insert_review(){
        $id = $this->input->post('id');
        $catatan = $this->input->post('catatan');
        $spv = $this->input->post('spv');
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
        $data_review = [
            "id_sk"=>$id,
            "catatan"=>"$catatan",
            "tgl"=>"$tgl"
        ];
        if($spv=="s1"){
            $stat = [
                "status"=>2
            ];
            $next_user=3;
        }
        elseif($spv=="s2"){
            $stat = [
                "status"=>3
            ];
            $next_user=4;
        }
        $data_spv = [
            "spv"=>"$spv"
        ];
        $set = [
            "id_sk"=>$id
        ];
        $this->M_SK->update_sk($stat, $id);
        $this->M_SK->update_sk($data_spv, $id);
        $this->M_SK->insert_verifikator_rev($data_review,$set);
        //log data
        $round = $this->M_SK->get_round_log(array('id_sk'=>"$id",'next_user'=>2))->row()->round;
        $log = [
            "id_sk"=>$id,
            "user"=>2,
            "round"=>$round,
            "status"=>1,
            "next_user"=>"$next_user",
            "tgl"=>"$tgl"
        ];
        $log_cek = [
            "id_sk"=>$id,
            "user"=>2,
            "round"=>$round,
            "status"=>1,
            "next_user"=>"$next_user",
        ];
        $this->M_SK->log($log, $log_cek);
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Draft berhasil disetujui, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url('verifikator/daftar_sk'));
    }

    public function reject(){
        $id = $this->input->post('id');
        $catatan = $this->input->post('catatan');
        $status = $this->input->post('status');
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
        if($status=="draft"){
            $next_user="draft";
        }
        else {
            $next_user=0;
        }
        $data_review = [
            "id_sk"=>$id,
            "catatan"=>"$catatan",
            "tgl"=>"$tgl"
        ];
        $stat = [
            "status"=>$status
        ];
        $set = [
            "id_sk"=>$id
        ];
        $this->M_SK->update_sk($stat, $id);
        $this->M_SK->insert_verifikator_rev($data_review, $set);
        //log data
        $round = $this->M_SK->get_round_log(array('id_sk'=>"$id",'next_user'=>2))->row()->round;
        $log = [
             "id_sk"=>$id,
             "user"=>2,
             "round"=>((int)$round)+1,
             "status"=>0,
             "next_user"=>((int)$status)+1,
             "tgl"=>"$tgl"
         ];
        $log_cek = [
             "id_sk"=>$id,
             "user"=>2,
             "round"=>((int)$round)+1,
             "status"=>0,
             "next_user"=>((int)$status)+1,
        ];
        $this->M_SK->log($log, $log_cek);
        $this->session->set_flashdata('info', '<div class="alert alert-info" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Draft berhasil ditolak, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url('verifikator/daftar_sk'));
    }

    public function edit_sk(){
        $id = $this->input->post('id');
        if (empty($id)){
            redirect(base_url('verifikator/daftar_sk'));
        };
        $sent = ["tb_sk.id"=>$id];
        $id_sk = ["id_sk"=>$id];
        $data["id"] = $id;
        $data['menimbang'] = $this->M_SK->get_menimbang($id_sk)->result();
        $data['mengingat'] = $this->M_SK->get_mengingat($id_sk)->result();
        $data['menetapkan'] = $this->M_SK->get_menetapkan($id_sk)->result();
        $data['sk'] = $this->M_SK->get_SK($sent)->row();
        $dep = ["tb_sk.departemen"=>$this->session->userdata('id')];
        $dep = $this->M_SK->get_note_dep($id_sk)->row();
        if (!empty($dep)){
            $data['dep']=$dep;
        };
        $kadep = $this->M_SK->get_note_kadep($id_sk)->result();
        if (!empty($kadep)){
            $data['kadep']=$kadep;
        };
        $verifikator = $this->M_SK->get_note_verifikator($id_sk)->result();
        if (!empty($verifikator)){
            $data['verifikator']=$verifikator;
        };
        $supervisor = $this->M_SK->get_note_supervisor($id_sk)->result();
        if (!empty($supervisor)){
            $data['supervisor']=$supervisor;
        };
        $supervisor2 = $this->M_SK->get_note_supervisor2($id_sk)->result();
        if (!empty($supervisor2)){
            $data['supervisor2']=$supervisor2;
        };
        $manager = $this->M_SK->get_note_manager($id_sk)->result();
        if (!empty($manager)){
            $data['manager']=$manager;
        };
        $wadek1 = $this->M_SK->get_note_wadek1($id_sk)->result();
        if (!empty($wadek1)){
            $data['wadek1']=$wadek1;
        };
        $wadek2 = $this->M_SK->get_note_wadek2($id_sk)->result();
        if (!empty($wadek2)){
            $data['wadek2']=$wadek2;
        };
        $dekan = $this->M_SK->get_note_dekan($id_sk)->result();
        if (!empty($dekan)){
            $data['dekan']=$dekan;
        };
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
        $this->header();
        $this->load->view('verifikator/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update_pengajuan(){
        $id = $this->input->post('id');
        $departemen = $this->session->userdata('id');
        $judul = $this->input->post('judul');
        $catatan = $this->input->post('catatan');
        // $kategori = $this->input->post('kategori');
        $mengingat = $this->input->post('mengingat[]');
        $menimbang = $this->input->post('menimbang[]');
        $menetapkan = $this->input->post('menetapkan[]');
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
        $data = [
            // 'tgl'=>$tgl,
            'judul'=>$judul,
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
                $mengingat[$i] = str_replace('&nbsp;', ' ', $mengingat[$i]);
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
                $menimbang[$i] = str_replace('&nbsp;', ' ', $menimbang[$i]);
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
                $menetapkan[$i] = str_replace('&nbsp;', ' ', $menetapkan[$i]);
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
        
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Pengajuan berhasil ditambahkan, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url("common/create_sk/$id"));
        // print_r($mengingat);
    }
    
    public function delete_pengajuan(){
        $id = $this->input->post('id');
        $this->M_SK->del_mengingat(array("id_sk"=>$id));
        $this->M_SK->del_menimbang(array("id_sk"=>$id));
        $this->M_SK->del_menetapkan(array("id_sk"=>$id));
        $this->M_SK->del_sk(array("id"=>$id));
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Pengajuan berhasil dihapus</div></div>');
        redirect(base_url('verifikator/daftar_sk'));
    }

    public function update_status(){
        $id = $this->input->post("id");
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
        $status = $this->input->post("status");
        $stat = [
            "status"=>(int)$status
        ];
        $this->M_SK->update_sk($stat, $id);
        //log data
        $round = $this->M_SK->get_round_log(array('id_sk'=>"$id"))->row()->round;
        $log = [
             "id_sk"=>$id,
             "user"=>2,
             "round"=>((int)$round)+1,
             "status"=>0,
             "next_user"=>((int)$status)+1,
             "tgl"=>"$tgl"
         ];
        $log_cek = [
             "id_sk"=>$id,
             "user"=>2,
             "round"=>((int)$round)+1,
             "status"=>0,
             "next_user"=>((int)$status)+1,
        ];
        $this->M_SK->log($log, $log_cek);
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> <i>FORCE ACTION</i> berhasil dilakukan, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url('verifikator/daftar_sk'));
    }

    public function nomor(){
        $id = $this->input->post('id');
        if (empty($id)){
            redirect(base_url('/'));
        };
        $sent = ["tb_sk.id"=>$id];
        $id_sk = ["id_sk"=>$id];
        $data['menimbang'] = $this->M_SK->get_menimbang($id_sk)->result();
        $data['mengingat'] = $this->M_SK->get_mengingat($id_sk)->result();
        $data['menetapkan'] = $this->M_SK->get_menetapkan($id_sk)->result();
        $data['sk'] = $this->M_SK->get_SK($sent)->row();
        $dep = $this->M_SK->get_note_dep($id_sk)->row();
        if (!empty($dep)){
            $data['dep']=$dep;
        };
        $kadep = $this->M_SK->get_note_kadep($id_sk)->result();
        if (!empty($kadep)){
            $data['kadep']=$kadep;
        };
        $verifikator = $this->M_SK->get_note_verifikator($id_sk)->result();
        if (!empty($verifikator)){
            $data['verifikator']=$verifikator;
        };
        $supervisor = $this->M_SK->get_note_supervisor($id_sk)->result();
        if (!empty($supervisor)){
            $data['supervisor']=$supervisor;
        };
        $supervisor2 = $this->M_SK->get_note_supervisor2($id_sk)->result();
        if (!empty($supervisor2)){
            $data['supervisor2']=$supervisor2;
        };
        $manager = $this->M_SK->get_note_manager($id_sk)->result();
        if (!empty($manager)){
            $data['manager']=$manager;
        };
        $wadek1 = $this->M_SK->get_note_wadek1($id_sk)->result();
        if (!empty($wadek1)){
            $data['wadek1']=$wadek1;
        };
        $wadek2 = $this->M_SK->get_note_wadek2($id_sk)->result();
        if (!empty($wadek2)){
            $data['wadek2']=$wadek2;
        };
        $dekan = $this->M_SK->get_note_dekan($id_sk)->result();
        if (!empty($dekan)){
            $data['dekan']=$dekan;
        };
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
        // $head['cek'] = "cek";
        $data['id'] = $id;
        $this->header();
        $this->load->view('verifikator/no_sk', $data);
        $this->load->view('layout/footer');
    }

    public function update_no_sk(){
        $id = $this->input->post('id');
        $no_sk = $this->input->post('no_sk');
        $tgl_sk = $this->input->post('tgl_sk');
        $data = [
            'tgl_sk'=>$tgl_sk,
            'no_sk'=>$no_sk,
            'status'=>"9",
        ];
        $cond = ['id'=>$id];
        $this->M_SK->update_pengajuan($data, $cond);
        
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Nomor SK berhasil ditambahkan, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url('verifikator/daftar_sk'));
    }

    public function user(){
        $data['view'] = $this->M_Akun->get_user()->result();
        $this->header();
        $this->load->view('admin/user', $data);
        $this->load->view('layout/footer');
    }

    public function akun(){
        $username = $this->input->post('username');
        if (empty($username)){
            redirect(base_url('admin/user'));
        };
        $data['v'] = $this->M_Akun->getwhere_user($username)->row();
        $this->header();
        $this->load->view('admin/akun', $data);
        $this->load->view('layout/footer');
    }

    public function ganti_password(){
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $password = md5("$password");
        $data = [
            'password'=>"$password",
        ];
        $this->M_Akun->changePass($username, $data);
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Password berhasil diperbarui</div></div>');
        redirect(base_url('Verifikator/user'));
    }

    public function hapus_akun(){
        $username = $this->input->post('username');
        $data = [
            'stat'=>1,
        ];
        $this->M_Akun->changePass($username, $data);
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Akun berhasil dihapus</div></div>');
        redirect(base_url('Verifikator/user'));
    }

    public function insert_cek_100(){
        for($i=1; $i<=1000; $i++){
        $data = [
            'id_operator'=>9,
            'tgl'=>"2022-10-20",
            'judul'=>"coba$i",
            // 'kategori'=>$kategori,
            'departemen'=>6,
            'status'=>0,
        ];
        $this->M_SK->insert_pengajuan($data);
    }
    }

    public function tambah_user(){
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $departemen = $this->input->post('departemen');
        $password = md5("$username");
        $data = [
            'username'=>"$username",
            'password'=>"$password",
            'role'=>"2",
            'nama'=>"$nama",
            'departemen'=>"$departemen",
            'stat'=>"0",
        ];
        $this->M_Akun->insert_akun($data, $username);
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Data berhasil ditambahkan</div></div>');
        redirect(base_url('Verifikator/user'));
    }
}