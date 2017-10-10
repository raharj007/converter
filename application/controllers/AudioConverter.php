<?php

/**
 * Created by PhpStorm.
 * User: buthorokuntor
 * Date: 10/11/17
 * Time: 03:15
 */
class AudioConverter extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');
    }

    public function upload_audio_to_mp3() {
        $this->load->view('/uploads/audioToMP3');
    }

    public function upload_audio_to_wav() {
        $this->load->view('/uploads/audioToWAV');
    }

    public function upload_audio_to_aac() {
        $this->load->view('/uploads/audioToAAC');
    }
}