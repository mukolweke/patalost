<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index() {
        //get saved success stories onload
        $yourstory = array(
            'returnStory' => $this->HomeModel->get_story(),
            'search_result' => $this->HomeModel->get_story_all()
        );
        $this->load->view('backend/index', $yourstory);
    }

    function index_() {
        //get saved success stories onload
        $story = $_POST['recoveryStory'];

        $insertStory = $this->HomeModel->post_story($story);

        $yourstory = array(
            'returnStory' => $this->HomeModel->get_story(),
            'returnStory' => $this->HomeModel->get_story()
        );

        $this->load->view('backend/index', $yourstory);
    }

    function autosearch_() {
        if (isset($_GET['term'])) {
            $result = $this->HomeModel->autosearch($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $res) {
                    $arr_resp[] = $res->itemName;
                }
                echo json_encode($arr_resp);
            }
        }
    }

    function found_() {
        $this->load->view('backend/found/found');
    }

    function lost_() {
        $this->load->view('backend/lost/lost');
    }

    function lostSearch_() {
        $data = array(
            'input_search' => '',
            'num_search_result' => 0
        );
        $this->load->view('backend/lost/lostSearch', $data);
    }

    function lostSearchRefresh_() {
        $pataCategory = $_GET['itemCategory'];
        $pataName = $_GET['inputSearch'];

        $searchData = array(
            'item_category' => $pataCategory,
            'input_search' => $pataName,
            'search_result' => $this->HomeModel->search_all($pataCategory, $pataName),
            'search_category' => $this->HomeModel->search_category($pataCategory),
            'num_search_result' => $this->HomeModel->num_search_all($pataCategory, $pataName)
        );

        $this->load->view('backend/lost/lostSearch', $searchData);
    }

    function search_found_() {

        $this->load->view('backend/found/search_found');
    }

    //*****FOUND STARTS*******
    function found_form_() {
        //doc details inputs
        $itmCat = $_POST['itemCategory'];
        $itmSubCat = $_POST['item_sub_category'];
        $itmOthersSpec = $_POST['item_others'];
        $itmName = $_POST['itemName'];
        $itmDate = $_POST['item_date'];
        $itmDesc = $_POST['itemDesc'];
        $founderName = $_POST['founderName'];
        $founderPhone = $_POST['founderPhone'];

        //doc location inputs
        $itmCounty = $_POST['item_county'];
        $itmTwn = $_POST['item_twn'];
        $itmAdd = $_POST['item_address'];
        $itmPostal = $_POST['item_loc_postal'];
        $itmSpecLoc = $_POST['item_loc_spec'];

        //error messages
        $status = "";
        $msg = "";
        $filename = "itemPhoto";
        $title = $_POST['itemName'];

        if (empty($_POST['itemName'])) {
            $status = "error";
            $msg = "Please provide a name.";
        }

        if ($status != "error") {
            $config['upload_path'] = "includes/fileUploads/";
            $config['allowed_types'] = "gif|png|jpg|jpeg";
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($filename)) {
                $status = "error";
                $msg = $this->upload->display_errors('', '');
            } else {
                $data = $this->upload->data();
                //insert into database
                $file_id_inserted = array(
                    $this->HomeModel->insert_found_details($itmCat, $itmSubCat, $itmOthersSpec, $itmName, $itmDay, $itmMonth, $itmYear, $itmDesc, $data['file_name'], $title, $founderName, $founderPhone),
                    $this->HomeModel->insert_found_location($itmName, $itmCounty, $itmTwn, $itmAdd, $itmPostal, $itmSpecLoc)
                );

                //search details to display
                $data_res = array(
                    'find_details' => $this->HomeModel->search_details($itmCat, $itmName),
                    'find_location' => $this->HomeModel->search_location($itmAdd, $itmSpecLoc, $itmName)
                );
                if ($file_id_inserted) {
                    $this->load->view('backend/found/found_fin', $data_res);
                } else {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Please try Again";
                }
            }
            @unlink($_FILES[$filename]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }

    function lost_form_() {
        $itmCat = $_POST['itemCategory'];
        $itmName = $_POST['itemName'];
        $itmDesc = $_POST['itemDesc'];
        $lostName = $_POST['lostName'];
        $lostPhone = $_POST['lostPhone'];

//insert data to database
        $insert_data_db = $this->HomeModel->insert_tbl_lost($itmCat, $itmName, $itmDesc, $lostName, $lostPhone);

        //get the data 
        $get_data_db = array(
            'lost_details' => $this->HomeModel->get_tbl_lost($itmCat, $itmName)
        );
//redirect  to...
        if ($insert_data_db) {
            $this->load->view('backend/lost/lost_reward', $get_data_db);
        } else {
            echo "error in inserting data in database";
        }
    }
    
    //get the subcategory file
    function get_subs(){
        $this->load->view('backend/includes/get_sub_categories');
    }

    function contact_() {
        $this->load->view('backend/documents/contact');
    }

    function faqs_() {
        $this->load->view('backend/documents/faqs');
    }

    function lost_reward_() {
        $this->load->view('backend/lost/lost_reward');
    }

    function lost_fin() {
        $this->load->view('backend/lost/lost_fin');
    }

    //modals
    function modal_found_search_() {
        $this->load->view('backend/popups/modal_found_search');
    }

}

//END