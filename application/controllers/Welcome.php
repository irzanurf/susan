<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('M_Login');
    }

    public function index()
	{
        $this->session->set_flashdata('message','');
        
		if($this->M_Login->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                //redirect berdasarkan level user
                if($this->session->userdata("role") == "1"){
                    redirect('Admin');
                }else if($this->session->userdata("role") == "2"){
                    redirect('departemen');
                }
                else if($this->session->userdata("role") == "3"){
                    redirect("kadep");
                }
                else if($this->session->userdata("role") == "4"){
                    redirect("verifikator");
                }
                else if($this->session->userdata("role") == "5"){
                    redirect("supervisor");
                }
                else if($this->session->userdata("role") == "6"){
                    redirect("supervisor2");
                }
                else if($this->session->userdata("role") == "7"){
                    redirect("manager");
                }
                else if($this->session->userdata("role") == "8"){
                    redirect("wadek1");
                }
                else if($this->session->userdata("role") == "9"){
                    redirect("wadek2");
                }
                else if($this->session->userdata("role") == "10"){
                    redirect("dekan");
                }

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'username', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->M_Login->check_login('tb_users', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id'   => $apps->departemen,
                            'operator'   => $apps->id,
                            'username' => $apps->username,
                            'pass' => $apps->password,
                            'role'      => $apps->role,
                            'nama' => $apps->nama
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("role") == "1"){
                            redirect('Admin');
                        }else if($this->session->userdata("role") == "2"){
                            redirect('departemen');
                        }
                        else if($this->session->userdata("role") == "3"){
                            redirect("kadep");
                        }
                        else if($this->session->userdata("role") == "4"){
                            redirect("verifikator");
                        }
                        else if($this->session->userdata("role") == "5"){
                            redirect("supervisor");
                        }
                        else if($this->session->userdata("role") == "6"){
                            redirect("supervisor2");
                        }
                        else if($this->session->userdata("role") == "7"){
                            redirect("manager");
                        }
                        else if($this->session->userdata("role") == "8"){
                            redirect("wadek1");
                        }
                        else if($this->session->userdata("role") == "9"){
                            redirect("wadek2");
                        }
                        else if($this->session->userdata("role") == "10"){
                            redirect("dekan");
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{

                
            }

        }
        
        // $this->load->view('layout/header');
        $this->load->view('login');
        // $this->load->view('layout/footer');
    }

    public function changePass()
    {
     $this->form_validation->set_rules('new','New','required|alpha_numeric');
     $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
     $user = $this->session->userdata('username');
     $pass = md5($this->input->post('new'));
     $new = [
        "password" => $pass
     ];
       if($this->form_validation->run() == FALSE)
     {
      $this->load->view('change_pass');
     }else{
      $cek_old = $this->M_Login->cek_old();
      if ($cek_old == False){
       $this->session->set_flashdata('error','Kata sandi lama salah!' );
       $this->load->view('change_pass');
      }else{
       $this->M_Login->save($user,$new);
       $this->session->sess_destroy();
       $this->session->set_flashdata('message','<div class="alert alert-success" style="margin-top: 3px">
       <div class="header"><b><i class="fa fa-exclamation-circle"></i> SUCCESS</b> Your password success to change, please relogin!</div></div>' );
       $this->load->view('login');
      }//end if valid_user
     }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome');
    }
}