<?php

class HomeModel extends CI_Model {

    function insert_found_details($itmCat,$itmSubCat,$itmOthersSpec,$itmName,$itmDay, $itmMonth, $itmYear, $itmDesc, $filename, $title, $founderName, $founderPhone) {

        //submited document details
        $details_found = array(
            'itemName' => $itmName,
            'itemDescription' => $itmDesc,
            'itemPhoto' => $filename,
            'pic_name' => $title,
            'itemCategory' => $itmCat,
            'item_sub_cat'=>$itmSubCat,
            'item_other_spec'=>$itmOthersSpec,
            'item_day'=>$itmDay,
            'item_month'=>$itmMonth,
            'item_year'=>$itmYear,
            'founderName' => $founderName,
            'founderNumber' => $founderPhone
        );
        //insert query
        $this->db->insert('found', $details_found);

        return $this->db->insert_id();
    }
    
    function insert_found_location($itmName,$itmCounty,$itmTwn,$itmAdd,$itmPostal,$itmSpecLoc){
        //submited location details
        $loc_found = array(
            'item_county' => $itmCounty,
            'item_twn' => $itmTwn,
            'item_address' => $itmAdd,
            'item_loc_postal' => $itmPostal,
            'item_loc_spec' => $itmSpecLoc,
            'itemName' => $itmName
        );
        //insert query
        $this->db->insert('location', $loc_found);
        return $this->db->insert_id();
    }

    function insert_tbl_lost($itmCat, $itmName, $itmDesc, $lostName, $lostPhone) {

        //submited details
        $details_lost = array(
            'itemCategory' => $itmCat,
            'itemName' => $itmName,
            'itemDescription' => $itmDesc,
            'lostName' => $lostName,
            'lostPhone' => $lostPhone
        );
        //insert query
        $lostTable = $this->db->insert('lost', $details_lost);

        return $lostTable;
    }

    //search function
    function search_all($pataCategory, $pataName) {

        //get db values
        $this->db->select('*');
        $this->db->where('itemCategory', $pataCategory);
        $this->db->where('itemName', $pataName);

        $found_result = $this->db->get('found');

        return $found_result->result();
    }
    //search the category to return
    function search_category($pataCategory){
            //get db values
            $this->db->select('*');
            $this->db->where('item_id', $pataCategory);

            $found_result = $this->db->get('itemCategory');

            return $found_result->result();
    }
    //search number of result function
    function num_search_all($itmCat, $itmName) {

        //get db number affected
        $this->db->where('itemCategory', $itmCat);
        $this->db->where('itemName', $itmName);

        $found_num = $this->db->count_all_results('found');

        return $found_num;
    }

    //search for details of the document
    function search_details($itmCat, $itmName) {
        //get values in found table
        $this->db->select('*');
        $this->db->where('itemName', $itmName);
        $this->db->where('itemCategory', $itmCat);

        $details = $this->db->get('found');

        return $details->result();
    }
    
    //search document found location
    function search_location($itmAdd,$itmSpecLoc,$itmName){
        //get values in location table
        $this->db->select('*');
        $this->db->where('item_address',$itmAdd);
        $this->db->where('item_loc_spec', $itmSpecLoc);
        $this->db->where('itemName', $itmName);
        
        $location = $this->db->get('location');

        return $location->result();
    }
    
    
    function getData() {
        $query = $this->db->get('found');
        return $query->result();
    }
    
    //autosearch 
    function autosearch($item_name){
        $this->db->like('itemName',$item_name,'both');
        return $this->db->get('found')->result();
    }

    //post recover stories
    function post_story($story){
        
        $post = array('posted_story' =>$story);
        //insert post
        $this->db->insert('postage', $post);
    }
    
    function get_story(){
        //get values in location table
        $this->db->select('*');     
        $story = $this->db->get('postage');

        return $story->result();
    }
    
    function get_story_all(){
        //find the count
        $found_num = $this->db->count_all_results('postage');

        return $found_num;
    }
    
    function get_tbl_lost($itmCat, $itmName){
        
        $this->db->select('*');
        $this->db->where('itemCategory', $itmCat);
        $this->db->where('itemName',$itmName);
        
        $lost_details = $this->db->get('lost');

        return $lost_details->result();
        
    }
}
