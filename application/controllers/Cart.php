<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Cart extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_barang');

            // if($this->session->userdata('id_trx') == NULL){
			// 	$array = array(
			// 		'id_trx' => random_string($type='numeric' , 20)
			// 	);
				
			// 	$this->session->set_userdata( $array );
			// }
            
        }

        public function index()
        {
            $data['konten']='v_cart';
            $this->load->view('template',$data);
            
        }
        
       public function tambahCart($id_barang)
       {
          
            $barang = $this->m_barang->getbarangCart($id_barang);

			$data = array(
				'id'      => $barang->id_barang,
				'qty'     => 1,
				'price'   => $barang->harga,
                'name'    => $barang->nama,
                'gambar'  => $barang->gambar,
                'id_penjual' => $barang->id_penjual,
                'id_transaksi' => $this->session->userdata('id_trx')
                );
                
                //function insert e langsung ? insert ke db ne ?iya , belum , iku cuma insert nde keranjang
			$this->cart->insert($data);
			redirect('Shop','refresh');

        }

        public function checkout()
        {
            $session = $this->session->userdata('login');
            if($session == true){
                //get data semua di cart
                $data_cart = $this->m_barang->get_data_cart($this->session->userdata('id_trx'));
                if($this->m_barang-->add_transaksi($data_cart) == TRUE){
                    redirect('cart');
                }
            }else{
                //kalo belum login redirect ke login
                redirect('login','refresh');
            }
        }
        
        

        public function detailCart($id_barang)
        {
                $data['barang'] = $this->m_barang->detail_brg($id_brg);
        }
       
    }  
  
    
    
    /* End of file Controllername.php */
    

?>