<?php

/**
 * Created by PhpStorm.
 * User: buthorokuntor
 * Date: 10/11/17
 * Time: 03:16
 */
class VideoConverter extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');
    }

    public function upload_video_to_WMV() {
        $this->load->view('/uploads/videoToWMV');
    }

    public function upload_video_to_MP4() {
        $this->load->view('/uploads/videoToMP4');
    }

    public function upload_video_to_MPEG() {
        $this->load->view('/uploads/videoToMPEG');
    }
}