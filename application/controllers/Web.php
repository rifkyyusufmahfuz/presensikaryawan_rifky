<!-- Nama : RIFKY YUSUF MAHFUZ
     NPM : 2019320006 -->
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
    }

    public function index()
    {
        $data['judul'] = "Aplikasi Kehadiran Karyawan";
        $data['judul2'] = "PT. RYM Express Tbk.";
        $data['presensikaryawan_rifky'] = $this->app_model->tampil_data()->result();
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function tambah()
    {
        $data['judul'] = "Isi Kehadiran Karyawan";
        $data['judul2'] = "PT. RYM Express Tbk.";
        $this->load->view('v_header', $data);
        $this->load->view('v_tambah', $data);
        $this->load->view('v_footer', $data);
    }

    public function Insert()
    {
        $data = array(
            'nip' => $this->input->post('nip', true),
            'namakaryawan' => $this->input->post('namakaryawan', true),
            'kehadiran' => $this->input->post('kehadiran', true),
            'tanggal' => $this->input->post('tanggal', true),
            'jammasuk' => $this->input->post('jammasuk', true),
            'keterangan' => $this->input->post('keterangan', true));
        $insert = $this->app_model->Prosesinsert('presensikaryawan_rifky', $data);
        if ($insert > 0) {
            redirect('web/index');
        } else {
            echo "Gagal Menyimpan.. Silahkan Cek Data Kembali";
        }
    }

    public function hapus($nip)
    {
        $this->app_model->M_hapus($nip);
        redirect('web/index');
    }

    public function edit($nip) // METHOD UNTUK EDIT DATA DARI TABLE presensikaryawan_rifky
    {
        $where = array('nip'=> $nip);
        $data['judul'] = " Update Data Kehadiran";
        $data['judul2'] = "PT. RYM Xpress Tbk.";
        $data['presensikaryawan_rifky'] = $this->app_model->ubah_data($where, 'presensikaryawan_rifky')->result();
        $this->load->view('v_header', $data);
        $this->load->view('edit_data', $data);
        $this->load->view('v_footer', $data);
    }

    public function update() // METHOD UNTUK UPDATE DATA PADA TABLE presensikaryawan_rifky
    {
        $nip = $this->input->post('nip');
        $namakaryawan = $this->input->post('namakaryawan');
        $kehadiran = $this->input->post('kehadiran');
        $tanggal = $this->input->post('tanggal');
        $jammasuk = $this->input->post('jammasuk');
        $keterangan = $this->input->post('keterangan');

        $data = array('namakaryawan'=>$namakaryawan, 'kehadiran'=>$kehadiran, 'tanggal'=>$tanggal, 'jammasuk'=>$jammasuk, 'keterangan'=>$keterangan );
        $where = array('nip'=> $nip);
        $this->app_model->update_data($where,$data,'presensikaryawan_rifky');
        redirect('web/index');
    }
}
