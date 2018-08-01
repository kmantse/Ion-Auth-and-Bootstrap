<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller {
		public function __construct(){
			parent::__construct();
            if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
                        

		}

		public function index(){
            $admin = $this->ion_auth->user()->row();
            $data['admin']= $admin;
            $data['view'] = 'admin/dashboard/index';
            $this->load->view('admin/layout', $data);
		}

		public function index2(){
            $admin = $this->ion_auth->user()->row();
            $data['admin']= $admin;
			$data['view'] = 'admin/dashboard/index2';
			$this->load->view('admin/layout', $data);
		}
        function profile()
        {

            $admin = $this->ion_auth->user()->row();
            $data['admin']= $admin;
            $data['title'] = 'User Profile';
            $data['view'] = "profile";
            $this->load->view('admin/layout', $data);


        }

        function profile_pic(){

            $config['upload_path']          = './admin/uploads/images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 500;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['file_name']            = rand(100,10000).'profile_pic'.$this->ion_auth->user()->row()->id;
            $config['overwrite'] 			= TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('profile_pic') && $this->ion_auth->is_admin()){
                $data['error'] = array('error' => $this->upload->display_errors('<p class="text-red">', '</p>'));
                $admin = $this->ion_auth->user()->row();
                $data['admin']= $admin;
                $data['view'] = "profile";
                $this->load->view('admin/layout', $data);

            }else{
                //successfully uploaded image
                $data = array('upload_data' => $this->upload->data());

                $upload_data = $data['upload_data'];
                $file_name = $upload_data['file_name'];

                $admin = $this->ion_auth->user()->row();
                //update database
                $update_data['profile_pic'] = $file_name;
                $this->_updatePic($admin->id, $update_data);

                redirect('profile', 'refresh');

            }
        }

        private function _updatePic($id, $data)
        {
            $this->load->model("User_model");
            $this->User_model->_update($id, $data);
        }


    }

?>	