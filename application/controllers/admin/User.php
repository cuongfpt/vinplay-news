<?php
Class User extends MY_Controller
{
    function index()
    {

        $this->data['temp'] = 'admin/user/index';
        $this->load->view('admin/main', $this->data);
    }


        function logout()
        {

            if ($this->session->userdata('user_adminnew_login')) {
                $this->session->unset_userdata('user_adminnew_login');
            }
            redirect(admin_url('login'));
        }

}