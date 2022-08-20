<?php 
use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\CodeigniterAdapter;

class Faw extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('masuk') != TRUE)
            redirect('','refresh');
    }

    /* Datables */
    function datatable(){
        $datatables = new Datatables(new CodeigniterAdapter);
        $datatables->query("SELECT 
                            o.kode_order, o.id, o.tanggal, o.deal_status_id, o.price, o.customer_id,
                            c.nama, c.instansi_id, 
                            p.nama AS nama_pic, 
                            s.sumber, 
                            ds.status AS deal_status, 
                            ds.badge_color AS deal_badge, 
                            os.keterangan AS order_status, 
                            os.badge_color AS order_badge, 
                            ti.instansi AS jenis_instansi

                            FROM orders AS o
                            JOIN customer AS c ON o.customer_id = c.id
                            JOIN pic AS p ON o.pic_id = p.id
                            JOIN sumber AS s ON o.sumber_id = s.id
                            JOIN deal_status AS ds ON o.deal_status_id = ds.id
                            JOIN order_status AS os ON o.order_status_id = os.id
                            JOIN tipe_instansi AS ti ON c.instansi_id = ti.id
                            ORDER BY o.tanggal DESC ");
        echo $datatables->generate();
    }
}