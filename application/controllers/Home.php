<?php

class Home extends CI_Controller{
    public function index(){

    	// $data['barang'] = $this->model_barang->tampil_data()->result();

    	$indo =json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'),true);
    	$indo_prov =json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/'),true);
    	$data= array(

    				'title' =>'kawalcorona',
    				'indo' => $indo,
    				'indo_prov' => $indo_prov,

    	);

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('v_home',$data);
        $this->load->view('templates/footer',$data);
        
    }


    public function global(){

    	$global =json_decode(file_get_contents('https://api.kawalcorona.com/'),true);
    	// $positif =json_decode(file_get_contents('https://api.kawalcorona.com/positif'),true);
    	$positif= json_decode(file_get_contents('https://api.kawalcorona.com/positif'),true);
    	$sembuh = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'),true);
    	$meninggal = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'),true);
    	$data= array(

    				'title' =>'Perkembangan covid 19 global',
    				'global' => $global,
    				'positif' => $positif,
    				'sembuh' => $sembuh,
    				'meninggal' => $meninggal,
    				// 'indo_prov' => $global_table,

    	);

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('v_global',$data);
        $this->load->view('templates/footer',$data);
    }

    public function pemetaan(){

    	$lokasi =json_decode(file_get_contents('https://api.kawalcorona.com/'),true);

    	$data= array(

    				'title' =>'Perkembangan covid 19 global',
    				'lokasi' => $lokasi,
    				// 'indo_prov' => $global_table,

    	);

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('v_pemetaan',$data);
        $this->load->view('templates/footer',$data);

    }
}
?>