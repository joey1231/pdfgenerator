<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actions extends CI_Controller {

    function __construct(){
        parent::__construct();
        date_default_timezone_set('Pacific/Auckland');

        error_reporting(0);
    }

    public function cleanfiles(){
        /* $documents = array();
        $packages = array();

        $sql = "SELECT * FROM document AS d
                LEFT JOIN transaction AS t ON t.idtransaction = d.transaction_idtransaction";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0){
            foreach($query->result() as $r){
                $type = $r->type;

                if ($type == "FACT_FIND" or $type == "SOA"){
                    $documents[] = $r->actual_link;
                } else if ($type == "PACKAGE"){
                    $packages[] = $r->actual_link;
                }
            }
        }

        $url_prefix = base_url()."resource/";
        foreach($documents as $doc){

        } */

        $dir = new DirectoryIterator("resource/docs");
        foreach ($dir as $fileinfo) {
            if ($fileinfo->getExtension() == "pdf"){
                $filename = $fileinfo->getFilename();

                if (preg_match("/(document-[0-9\-]+)/", $filename)){
                    $sql = "SELECT * FROM document WHERE actual_link LIKE ?";
                    $query = $this->db->query($sql, array("%".$filename));
                    if ($query->num_rows() <= 0){
                        //echo $filename;
                        $filename = "resource/docs/".$filename;
                        unlink($filename);
                    }
                }
            }
        }


    }



}

?>
