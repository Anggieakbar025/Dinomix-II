<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_barang extends CI_Model {
    
        public function getbarang(){

            $this->db->select('*, penjual.nama as nama_penjual, barang.nama as nama_barang');
            $this->db->from('barang');
            $this->db->join('penjual', 'barang.id_penjual = penjual.id_penjual');
			return $this->db->get()->result();
        }

        public function getTransaksi()
        {
            $this->db->select('*, pembeli.nama as nama_pembeli, barang.nama as nama_barang, penjual.nama as nama_penjual, kurir.nama as nama_kurir');
            $this->db->from('transaksi');
            $this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
            $this->db->join('pembeli', 'transaksi.id_pembeli = pembeli.id_pembeli');
            $this->db->join('barang', 'detail_transaksi.id_barang = barang.id_barang');
            $this->db->join('penjual', 'barang.id_penjual = penjual.id_penjual');
            $this->db->join('kurir', 'transaksi.id_kurir = kurir.id_kurir');
            $this->db->join('pembayaran', 'transaksi.id_pembayaran = pembayaran.id_pembayaran');
            $this->db->where('transaksi.id_pembeli', $_SESSION['id_pembeli']);
            $this->db->order_by('tanggal', 'desc');
            
            return $this->db->get()->result_array();
        }

        public function updateStatus($id)
        {
            $data = array(
                'status' => $this->input->post('status')
            );
            $this->db->where('id_transaksi', $id);
            $this->db->update('transaksi', $data);
            
        }

        public function getKurir()
        {
            return $this->db->get('kurir')->result_array();
        }

        public function getPembayaran()
        {
            return $this->db->get('pembayaran')->result_array();
        }

        public function getbarangCart($id_barang){

            $result = $this->db->where('id_barang',$id_barang )
                                ->limit('1') ->get('barang');
            if($result->num_rows()>0){
                 return $result->row();
            } else {
                return array();
            }
        
        }

        public function tambahTransaksi()
        {
            $transaksi = array(
                'id_pembeli' => $this->input->post('id_pembeli'),
                'id_kurir' => $this->input->post('id_kurir'),
                'id_pembayaran' => $this->input->post('id_pembayaran'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'status' => 1,
                'tanggal' => time()
                
            );
            $this->db->insert('transaksi', $transaksi);
            $last_insert_id = $this->db->insert_id();

            $total = $this->cart->total() + 20000;
            
            foreach ($this->cart->contents() as $items) {
                $detail = array(
                    'id_barang' => $items['id'],
                    'id_transaksi' => $last_insert_id,
                    'jumlah' => $items['qty'],
                    'total' => $total
                );
                $this->db->insert('detail_transaksi', $detail);
            }
            $this->cart->destroy();
            //hapus cart
        }



        // TOPONE
        // public function getdetailCart(Type $var = null)
        // {
        //     # code...
        // }
        // //get data di cart
        // public function	get_data_cart($trx_id)
        // {
        //     return $this->db->where('id_transaksi', $trx_id)
        //                     ->get('cart')
        //                     ->result();							
        // }

        // //insert ke pembayaran
        // public function add_transaksi($data_cart)
        // {
        //     $data = array(
        //             'id_user' => $this->session->userdata('id_user')
        //     );

        //     $this->db->insert('transaksi', $data);
        //     $last_insert_id = $this->db->insert_id();



        //     if($this->db->affected_rows() > 0){
        //         $i = 0;
        //         foreach ($data_cart as $cart) {
        //             $datas = array(
        //                 'id_transaksi' => $last_insert_id,
        //                 'id_produk' => $data_cart[$i]->id_produk,
        //                 'qty'		=> $data_cart[$i]->qty
        //                 );

        //             $this->db->insert('detail_transaksi', $datas);

        //             $i++;
        //         }

        //         //hapus cart
        //         $this->db->where('random_id', $this->session->userdata('random_id'))->delete('cart');

        //         return TRUE;
        //     } else {
        //         return FALSE;
        //     }
        // }
    }
    
    /* End of file m_barang.php */
    

?>