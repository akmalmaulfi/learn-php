<?php 

class About extends Controller {

    public function index($nama = 'Akmal', $pekerjaan = 'Mahasiswa', $umur = 21) {
        $data['judul'] = 'About Index';
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        $data['judul'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}