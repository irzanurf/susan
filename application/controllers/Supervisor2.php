<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

class Supervisor2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('M_Login');
        $current_user=$this->M_Login->is_role();
        //cek session dan level user
        if($this->M_Login->is_role() != "6"){
            redirect("welcome/");
        }
        $this->load->helper('file');
        $this->load->model('M_Akun');
        $this->load->model('M_SK');
    }

    public function index(){
        redirect(base_url('supervisor2/daftar_sk'));
    }

    public function header(){
        $head['username'] = $this->session->userdata('username');
        $head['role'] = $this->session->userdata('role');
        $head['nama'] = $this->session->userdata('nama');
        $head['one1'] = $this->M_SK->get_count_sk();
        $head['one2'] = "Total diajukan";
        $head['one3'] = "supervisor2/all";
        $head['two1'] = $this->M_SK->get_count_sk_diproses(array("status"=>3));
        $head['two2'] = "Harus Segera diproses";
        $head['three1'] = $this->M_SK->get_count_sk_disetujui(array("status >"=>3));
        $head['three2'] = "Total disetujui";
        $head['three3'] = "supervisor2/total";
        $this->load->view('layout/header', $head);
    }

    public function daftar_sk()
    {
        $dep = [
            "status"=>3
            ];
        $data['view'] = $this->M_SK->get_SK($dep)->result();
        $data['url'] = "supervisor2/review";
        $data['val_stat'] = "3";
        $this->header();
        $this->load->view('daftar_sk', $data);
        $this->load->view('layout/footer');
    }

    public function total()
    {
        $dep = [
            "status >"=>3
            ];
        $data['view'] = $this->M_SK->get_SK($dep)->result();
        $data['url'] = "supervisor2/review";
        $data['val_stat'] = "3";
        $this->header();
        $this->load->view('total', $data);
        $this->load->view('layout/footer');
    }

    public function all(){
        $data['view'] = $this->M_SK->get_all()->result();
        $data['url'] = "supervisor2/review";
        $data['val_stat'] = "3";
        $this->header();
        $this->load->view('all', $data);
        $this->load->view('layout/footer');
    }

    public function review(){
        $id = $this->input->post('id');
        if (empty($id)){
            redirect(base_url('supervisor2/daftar_sk'));
        };
        $sent = ["tb_sk.id"=>$id];
        $id_sk = ["id_sk"=>$id];
        $data['menimbang'] = $this->M_SK->get_menimbang($id_sk)->result();
        $data['mengingat'] = $this->M_SK->get_mengingat($id_sk)->result();
        $data['menetapkan'] = $this->M_SK->get_menetapkan($id_sk)->result();
        $data['sk'] = $this->M_SK->get_SK($sent)->row();
        $data['url'] = "supervisor2/insert_review";
        $data['url_reject'] = "supervisor2/reject";
        $data['val_stat'] = "3";
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
            // $data['catatan']=$supervisor2->catatan;
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
        $this->load->view('review_sk', $data);
        $this->load->view('layout/footer');
    }

    public function insert_review(){
        $id = $this->input->post('id');
        $catatan = $this->input->post('catatan');
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
        $data_review = [
            "id_sk"=>$id,
            "catatan"=>"$catatan",
            "tgl"=>"$tgl",
            "ket"=>$this->session->userdata('id'),
        ];
        $stat = [
            "status"=>4
        ];
        $set = [
            "id_sk"=>$id
        ];
        //log data
        $round = $this->M_SK->get_round_log(array('id_sk'=>"$id",'next_user'=>4))->row()->round;
        $log = [
            "id_sk"=>$id,
            "user"=>4,
            "round"=>$round,
            "status"=>1,
            "next_user"=>5,
            "tgl"=>"$tgl"
        ];
        $log_cek = [
            "id_sk"=>$id,
            "user"=>4,
            "round"=>$round,
            "status"=>1,
            "next_user"=>5,
        ];
        $this->M_SK->log($log, $log_cek);
        $this->M_SK->update_sk($stat, $id);
        $this->M_SK->insert_spv2_rev($data_review, $set);
        $this->session->set_flashdata('info', '<div class="alert alert-success" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Draft berhasil disetujui, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url('supervisor/daftar_sk'));
    }
    
    public function reject(){
        $id = $this->input->post('id');
        $catatan = $this->input->post('catatan');
        $status = $this->input->post('status');
        $tgl = date('Y-m-d', strtotime(date('Y-m-d')));
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
        $this->M_SK->insert_spv2_rev($data_review, $set);
        //log data
        $round = $this->M_SK->get_round_log(array('id_sk'=>"$id",'next_user'=>4))->row()->round;
        $log = [
             "id_sk"=>$id,
             "user"=>4,
             "round"=>((int)$round)+1,
             "status"=>0,
             "next_user"=>((int)$status)+1,
             "tgl"=>"$tgl"
         ];
        $log_cek = [
             "id_sk"=>$id,
             "user"=>4,
             "round"=>((int)$round)+1,
             "status"=>0,
             "next_user"=>((int)$status)+1,
        ];
        $this->M_SK->log($log, $log_cek);
        $this->session->set_flashdata('info', '<div class="alert alert-info" style="margin-top: 3px">
        <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Draft berhasil ditolak, silahkan pilih "detail" untuk melihat progres</div></div>');
        redirect(base_url('supervisor/daftar_sk'));
    }
    
}