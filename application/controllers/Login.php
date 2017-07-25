<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    //load the login file
    public function index() {
        $this->login_view();
    }

    //Login Page
    function login_view() {
        $message = array(
            'message_error' => '',
            'message_hd' => 'hidden'
        );
        $this->load->view('backend/login', $message);
    }

    //verify validate data
    function auth_login() {
        $this->form_validation->set_rules('admin_email', 'Email', 'trim|required');
        $this->form_validation->set_rules('admin_password', 'Password', 'trim|required|callback_check_login_data');

        if ($this->form_validation->run() == FALSE) {
            //login failed redirect back to login page
            $message = array(
                'message_error' => 'Wrong email or password or inactive account',
                'message_hd' => 'visible'
            );

            redirect('login', $message);
        } else {
            //Go to admin dashboard-area
            redirect('dash');
            //$this->load->view('backend/dashboard');
        }
    }

    //Verify login details
    function check_login_data($admin_pass) {
        //Field validation succeeded validate against database
        $admin_email = $this->input->post('admin_email');

        //query the operator database
        $queryResult = $this->AdminModel->login($admin_email, $admin_pass);
        if ($queryResult) {
            $session_array = array();
            foreach ($queryResult as $row) {
                $session_array = array(
                    'admin_id' => $row->admin_id
                );
                $this->session->set_userdata('logged_in', $session_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_login_data', 'Wrong email or password or inactive account');
            return false;
        }
    }

    //login on activation
    function verification_login() {

        $loginData = array(
            'activationMessage' => "Verification successful. Now login",
            'hd' => 'visible',
            'hderror' => 'hidden'
        );

        $this->load->view('backend/login', $loginData);
    }

    //logout function
    function signout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        //Go to login area
        $this->login_view();
    }

    //FUNCTION ADMINS
    //load the dashboard
    function admin_dash_() {
//        if ($this->session->userdata('logged_in')) {
//            $session_data = $this->session->userdata('logged_in');
//        } else {
//            //If no session, redirect to login page
//            $this->login();
//        }
        $this->load->view('backend/admin/dashboard');
    }

    //ADD ADMIN PAGE
    function add_admin_() {
        $this->load->view('backend/admin/add_admin');
    }

    //LIST ADMIN PAGE
    function list_admin_() {
        $this->load->view('backend/admin/list_admin');
    }

    //MONITOR ADMIN'S WORK PAGE
    function monitor_admin_() {
        $this->load->view('backend/admin/monitor_admin');
    }

    //FOUND DATABASE PAGE
    function found_admin_() {
        $this->load->view('backend/admin/found_db');
    }

    //LOST DATABASE PAGE
    function lost_db_() {
        $this->load->view('backend/admin/lost_db');
    }

    //OTHERS DATABSE PAGE
    function others_db() {
        $this->load->view('backend/admin/others_db');
    }

    //OUTPUT VAIOUS REPORTS PAGE
    function reports_() {
        $this->load->view('backend/admin/reports');
    }

    function analytics_() {
        $this->load->view('backend/admin/analytics');
    }

}
