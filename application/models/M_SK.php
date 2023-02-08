<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_SK extends CI_Model
{
    public function get_SK($dep)
    {
        $query = $this->db->select('tb_sk.*, tb_departemen.departemen, tb_users.nama')
        ->from('tb_sk')
        ->join('tb_departemen','tb_sk.departemen=tb_departemen.id','inner')
        ->join('tb_users','tb_sk.id_operator=tb_users.id','inner')
        ->where($dep)
        ->order_by('tgl','desc')
        ->get();
        return $query;
    }

    public function get_SK_dup($dep)
    {
        $query = $this->db->select('tb_sk.id, tb_sk.judul, tb_sk.tgl, tb_departemen.departemen, tb_users.nama')
        ->from('tb_sk')
        ->join('tb_departemen','tb_sk.departemen=tb_departemen.id','inner')
        ->join('tb_users','tb_sk.id_operator=tb_users.id','inner')
        ->where($dep)
        ->order_by('tgl','desc')
        ->get();
        return $query;
    }

    public function get_SK_dep($dep,$or)
    {
        $query = $this->db->select('tb_sk.*, tb_departemen.departemen, tb_users.nama')
        ->from('tb_sk')
        ->join('tb_departemen','tb_sk.departemen=tb_departemen.id','inner')
        ->join('tb_users','tb_sk.id_operator=tb_users.id','inner')
        ->where($dep)
        ->or_where($or)
        ->order_by('tgl','desc')
        ->get();
        return $query;
    }

    public function get_all()
    {
        $query = $this->db->select('tb_sk.*, tb_departemen.departemen, tb_users.nama')
        ->from('tb_sk')
        ->join('tb_departemen','tb_sk.departemen=tb_departemen.id','inner')
        ->join('tb_users','tb_sk.id_operator=tb_users.id','inner')
        ->order_by('tgl','desc')
        ->get();
        return $query;
    }

    public function get_log(array $data){
        $query = $this->db->select('*')
        ->from('tb_log_data')
        ->where($data)
        ->order_by('round','asc')
        ->get();
        return $query;
    }

    public function get_round_log(array $data){
        $query = $this->db->select('*')
        ->from('tb_log_data')
        ->where($data)
        ->order_by('round','desc')
        ->limit(1)
        ->get();
        return $query;
    }

    public function get_all_sk($stat)
    {
        $query = $this->db->select('tb_sk.*, tb_departemen.departemen, tb_users.nama')
        ->from('tb_sk')
        ->join('tb_departemen','tb_sk.departemen=tb_departemen.id','inner')
        ->join('tb_users','tb_sk.id_operator=tb_users.id','inner')
        ->where('status >=', $stat)
        ->order_by('tgl','desc')
        ->get();
        return $query;
    }

    public function get_menimbang($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_menimbang')
        ->where($id_sk)
        ->order_by('id','asc')
        ->get();
        return $query;
    }

    public function get_mengingat($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_mengingat')
        ->where($id_sk)
        ->order_by('id','asc')
        ->get();
        return $query;
    }

    public function get_menetapkan($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_menetapkan')
        ->where($id_sk)
        ->order_by('id','asc')
        ->get();
        return $query;
    }

    public function insert_pengajuan($data)
    {
        $this->db->insert('tb_sk',$data);
        return $this->db->insert_id();
    }

    public function update_pengajuan($data, $cond)
    {
        $this->db->where($cond);
        $this->db->update('tb_sk', $data);
    }

    public function del_sk($id_sk)
    {
        $this->db->where($id_sk);
        $this->db->delete('tb_sk');
    }

    public function del_mengingat($id_sk)
    {
        $this->db->where($id_sk);
        $this->db->delete('tb_mengingat');
    }

    public function del_menimbang($id_sk)
    {
        $this->db->where($id_sk);
        $this->db->delete('tb_menimbang');
    }

    public function del_menetapkan($id_sk)
    {
        $this->db->where($id_sk);
        $this->db->delete('tb_menetapkan');
    }

    public function mengingat($data_mengingat)
    {
        $this->db->insert('tb_mengingat', $data_mengingat);
    }
    
    public function menimbang($data_menimbang)
    {
        $this->db->insert('tb_menimbang', $data_menimbang);
    }

    public function menetapkan($data_menetapkan)
    {
        $this->db->insert('tb_menetapkan', $data_menetapkan);
    }

    public function update_sk($stat, $id){
        $this->db->where('id',"$id");
        $this->db->update('tb_sk', $stat);
    }

    public function insert_dep_cat($data_review, $set){
        // $this->db->insert('tb_note_kadep',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_dep')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_dep',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_dep',$data_review);
        }   
    }

    public function insert_kadep_rev($data_review, $set){
        // $this->db->insert('tb_note_kadep',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_kadep')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_kadep',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_kadep',$data_review);
        }   
    }

    public function insert_verifikator_rev($data_review, $set){
        // $this->db->insert('tb_note_verifikator',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_verifikator')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_verifikator',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_verifikator',$data_review);
        }   
    }

    public function insert_spv_rev($data_review, $set){
        // $this->db->insert('tb_note_verifikator',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_spv')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_spv',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_spv',$data_review);
        }   
    }

    public function insert_spv2_rev($data_review, $set){
        // $this->db->insert('tb_note_verifikator',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_spv2')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_spv2',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_spv2',$data_review);
        }   
    }

    public function log($log, $log_cek){
        $query = $this->db->select('*')
        ->from('tb_log_data')
        ->where($log_cek)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_log_data',$log);
        }
        else{
            $this->db->where($log_cek);
            $this->db->update('tb_log_data',$log);
        }   
    }

    public function insert_manager_rev($data_review, $set){
        // $this->db->insert('tb_note_verifikator',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_manager')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_manager',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_manager',$data_review);
        }   
    }

    public function insert_wadek1_rev($data_review, $set){
        // $this->db->insert('tb_note_verifikator',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_wadek1')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_wadek1',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_wadek1',$data_review);
        }   
    }

    public function insert_wadek2_rev($data_review, $set){
        // $this->db->insert('tb_note_verifikator',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_wadek2')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_wadek2',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_wadek2',$data_review);
        }   
    }

    public function insert_dekan_rev($data_review, $set){
        // $this->db->insert('tb_note_verifikator',$data_review);
        $query = $this->db->select('*')
        ->from('tb_note_dekan')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_note_dekan',$data_review);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_note_dekan',$data_review);
        }   
    }

    public function get_note_dep($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_dep')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_note_kadep($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_kadep')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_note_verifikator($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_verifikator')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_note_supervisor($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_spv')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_note_supervisor2($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_spv2')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_note_manager($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_manager')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_note_wadek1($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_wadek1')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_note_wadek2($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_wadek2')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_note_dekan($id_sk)
    {
        $query = $this->db->select('*')
        ->from('tb_note_dekan')
        ->where($id_sk)
        ->get();
        return $query;
    }

    public function get_count_sk_dep($dep){
        $query = $this->db->select('*')
        ->from('tb_sk')
        ->where($dep)
        ->count_all_results();
        return $query;
    }

    public function get_count_sk_diproses_dep($dep){
        $query = $this->db->select('*')
        ->from('tb_sk')
        ->where($dep)
        ->where("status <", 7)
        ->count_all_results();
        return $query;
    }

    public function get_count_sk_disetujui_dep($dep){
        $query = $this->db->select('*')
        ->from('tb_sk')
        ->where($dep)
        ->where("status", 7)
        ->count_all_results();
        return $query;
    }

    public function get_count_sk(){
        $query = $this->db->select('*')
        ->from('tb_sk')
        ->count_all_results();
        return $query;
    }

    public function get_count_sk_diproses($data){
        $query = $this->db->select('*')
        ->from('tb_sk')
        ->where($data)
        ->count_all_results();
        return $query;
    }

    public function get_count_sk_disetujui($data){
        $query = $this->db->select('*')
        ->from('tb_sk')
        ->where($data)
        ->count_all_results();
        return $query;
    }

    public function get_count_dep($dep,$or)
    {
        $query = $this->db->select('tb_sk.*, tb_departemen.departemen')
        ->from('tb_sk')
        ->join('tb_departemen','tb_sk.departemen=tb_departemen.id','inner')
        ->where($dep)
        ->or_where($or)
        ->count_all_results();
        return $query;
    }
}