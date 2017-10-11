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
        require_once (APPPATH . "../vendor/autoload.php");
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

    public function moving_file($file) {
        define('UPLOAD_DIR', APPPATH . '../assets/audio/');
        if (!empty($file)) {
            $myFile = $file;

            if ($myFile['error']!==UPLOAD_ERR_OK) {
                redirect(site_url());
            }

            $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile['name']);

            $i = 0;
            $parts = pathinfo($name);
            while (file_exists(UPLOAD_DIR . $name)) {
                $i++;
                $name = $parts['filename'] . '-' . $i . '.' . $parts['extension'];
            }

            $success = move_uploaded_file($myFile['tmp_name'], UPLOAD_DIR . $name);
            if (!$success) {
                redirect(site_url());
            }

            chmod(UPLOAD_DIR . $name, 0644);
            $newFile = UPLOAD_DIR . $name;

            return $newFile;
        }
    }

    public function destroy_file($file) {
        if (file_exists($file)) {
            unlink($file);
        }
    }

    public function export_mp3() {
        $fileUploaded = $_FILES['file'];
        $newFile = $this->moving_file($fileUploaded);
        $bitrate = $_POST['bitrate']; $sampling = $_POST['sampling']; $channel = $_POST['channel'];
        $bitrate = (int)$bitrate;
        $sampling = (int)$sampling;
        $channel = (int)$channel;

        $filename = APPPATH . '..\vendor\ffmpeg-bin\bin\ffmpeg.exe';
        if (file_exists($filename)) {
            echo "The file $filename exists";
        } else {
            echo "The file $filename does not exist";
        }

        $ffmpeg = FFMpeg\FFMpeg::create(array(
            'ffmpeg.binaries'  => APPPATH . '..\vendor\ffmpeg-bin\bin\ffmpeg.exe',
            'ffprobe.binaries' => APPPATH . '..\vendor\ffmpeg-bin\bin\ffprobe.exe'));
        $file=$ffmpeg->open($newFile);

        $file->filters()->resample($sampling);
        $mp3 = new FFMpeg\Format\Audio\Mp3();

        $mp3->on('progress', function($audio, $format, $percentage){
            echo "$percentage % transcoded";
        });

        $mp3
            ->setAudioChannels($channel)
            ->setAudioKiloBitrate($bitrate);

        if ($file->save($mp3, APPPATH . '../assets/audio/trackwav.mp3')){
            $this->destroy_file($newFile);
            $this->load->view('/download/audioToMP3.php');
        }
    }

    public function download_mp3() {
        define('DOWNLOAD_DIR', APPPATH . '../assets/audio/');
        $this->load->helper('download');
        $filename = 'trackwav.mp3';

        if (file_exists(DOWNLOAD_DIR . $filename)) {
            $datatarget = file_get_contents(DOWNLOAD_DIR . $filename);
            force_download($filename, $datatarget);
        }
    }

    public function export_aac() {
        $fileUploaded = $_FILES['file'];
        $newFile = $this->moving_file($fileUploaded);
        $bitrate = $_POST['bitrate']; $sampling = $_POST['sampling']; $channel = $_POST['channel'];
        $bitrate = (int)$bitrate;
        $sampling = (int)$sampling;
        $channel = (int)$channel;

        $filename = APPPATH . '..\vendor\ffmpeg-bin\bin\ffmpeg.exe';
        if (file_exists($filename)) {
            echo "The file $filename exists";
        } else {
            echo "The file $filename does not exist";
        }

        $ffmpeg = FFMpeg\FFMpeg::create(array(
            'ffmpeg.binaries'  => APPPATH . '..\vendor\ffmpeg-bin\bin\ffmpeg.exe',
            'ffprobe.binaries' => APPPATH . '..\vendor\ffmpeg-bin\bin\ffprobe.exe'));
        $file=$ffmpeg->open($newFile);

        $file->filters()->resample($sampling);
        $aac = new FFMpeg\Format\Audio\Flac();

        $aac->on('progress', function($audio, $format, $percentage){
            echo "$percentage % transcoded";
        });
        $aac
            ->setAudioChannels($channel)
            ->setAudioKiloBitrate($bitrate);

        if ($file->save($aac, APPPATH . '../assets/audio/trackwav.flac')) {
            $this->destroy_file($newFile);
            $this->load->view('/download/audioToAAC.php');
        }
    }

    public function download_aac() {
        define('DOWNLOAD_DIR', APPPATH . '../assets/audio/');
        $this->load->helper('download');
        $filename = 'trackwav.flac';

        if (file_exists(DOWNLOAD_DIR . $filename)) {
            $datatarget = file_get_contents(DOWNLOAD_DIR . $filename);
            force_download($filename, $datatarget);
        }
    }

    public function export_wav() {
        $fileUploaded = $_FILES['file'];
        $bitrate = $_POST['bitrate']; $sampling = $_POST['sampling']; $channel = $_POST['channel'];
        $bitrate = (int)$bitrate;
        $sampling = (int)$sampling;
        $channel = (int)$channel;

        $newFile = $this->moving_file($fileUploaded);

        $filename = APPPATH . '..\vendor\ffmpeg-bin\bin\ffmpeg.exe';
        if (file_exists($filename)) {
            echo "The file $filename exists";
        } else {
            echo "The file $filename does not exist";
        }

        $ffmpeg = FFMpeg\FFMpeg::create(array(
            'ffmpeg.binaries'  => APPPATH . '..\vendor\ffmpeg-bin\bin\ffmpeg.exe',
            'ffprobe.binaries' => APPPATH . '..\vendor\ffmpeg-bin\bin\ffprobe.exe'));
        $file=$ffmpeg->open($newFile);

        $file->filters()->resample($sampling);

        $wav = new FFMpeg\Format\Audio\Wav();

        $wav->on('progress', function($audio, $format, $percentage){
            echo "$percentage % transcoded";
        });
        $wav
            ->setAudioChannels($channel)
            ->setAudioKiloBitrate($bitrate);

        if ($file->save($wav, APPPATH . '../assets/audio/trackwav.wav')) {
            $this->destroy_file($newFile);
            $this->load->view('/download/audioToWAV.php');
        }
    }

    public function download_wav() {
        define('DOWNLOAD_DIR', APPPATH . '../assets/audio/');
        $this->load->helper('download');
        $filename = 'trackwav.wav';

        if (file_exists(DOWNLOAD_DIR . $filename)) {
            $datatarget = file_get_contents(DOWNLOAD_DIR . $filename);
            force_download($filename, $datatarget);
        }
    }
}