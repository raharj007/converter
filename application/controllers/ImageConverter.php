<?php

/**
 * Created by PhpStorm.
 * User: buthorokuntor
 * Date: 10/10/17
 * Time: 20:01
 */
class ImageConverter extends CI_Controller
{
    public function __construct() {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');
    }

    public function upload_image_to_png() {
        $this->load->view('/uploads/imageToPNG');
    }

    public function upload_image_to_jpg() {
        $this->load->view('/uploads/imageToJPG');
    }

    public function upload_image_to_gif() {
        $this->load->view('/uploads/imageToGIF');
    }

    public function save_temp_file_png() {
        define('UPLOAD_DIR', APPPATH . '../assets/img/');
        $url = $_POST['url'];
        copy($url, UPLOAD_DIR . 'downloaded.png');
    }

    public function download_png() {
        define('DOWNLOAD_DIR', APPPATH . '../assets/img/');
        $this->load->helper('download');
        $filename = 'downloaded.png';

        if (file_exists(DOWNLOAD_DIR . $filename)) {
            $datatarget = file_get_contents(DOWNLOAD_DIR . $filename);
            force_download($filename, $datatarget);
        }
    }

    public function save_temp_file_jpg() {
        define('UPLOAD_DIR', APPPATH . '../assets/img/');
        $url = $_POST['url'];
        copy($url, UPLOAD_DIR . 'downloaded.jpg');
    }

    public function download_jpg() {
        define('DOWNLOAD_DIR', APPPATH . '../assets/img/');
        $this->load->helper('download');
        $filename = 'downloaded.jpg';

        if (file_exists(DOWNLOAD_DIR . $filename)) {
            $datatarget = file_get_contents(DOWNLOAD_DIR . $filename);
            force_download($filename, $datatarget);
        }
    }

    public function save_temp_file_gif() {
        define('UPLOAD_DIR', APPPATH . '../assets/img/');
        $url = $_POST['url'];
        copy($url, UPLOAD_DIR . 'downloaded.gif');
    }

    public function download_gif() {
        define('DOWNLOAD_DIR', APPPATH . '../assets/img/');
        $this->load->helper('download');
        $filename = 'downloaded.gif';

        if (file_exists(DOWNLOAD_DIR . $filename)) {
            $datatarget = file_get_contents(DOWNLOAD_DIR . $filename);
            force_download($filename, $datatarget);
        }
    }
}