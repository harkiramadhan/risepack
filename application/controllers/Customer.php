<?php
use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\CodeigniterAdapter;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\IWriter;

class Customer extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('masuk') != TRUE)
            redirect('','refresh');
    }

    function detail($id){
        $customer = $this->db->select('c.*, ti.instansi tipe_instansi')
                            ->from('customer c')
                            ->join('tipe_instansi ti', 'c.instansi_id = ti.id')
                            ->where('c.id', $id)->get()->row();

        $orders = $this->db->select('o.*, os.keterangan')
                            ->from('orders o')
                            ->join('order_status os', 'o.order_status_id = os.id')
                            ->where([
                                'o.customer_id' => $id
                            ])->get()->result();
        $datas = [
            'title' => 'Detail Konsumen',
            'title_desc' => 'Overview dan summary penjualan',
            'page' => 'pages/customerDetail',
            'backUrl' => 'crm',
            'customer' => $customer,
            'orders' => $orders
        ];
        $this->load->view('template2', $datas);
    }

    function create(){
        $this->load->library('form_validation');
        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama Customer',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Customer Wajib Di Isi'
                ]
            ],[
                'field' => 'nohp',
                'label' => 'No HP',
                'rules' => 'required',
                'errors' => [
                    'required' => 'No HP Wajib Di Isi'
                ]
            ],[
                'field' => 'instansi',
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Instansi Wajib Di Isi'
                ]
            ],[
                'field' => 'instansi_id',
                'label' => 'Tipe Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tipe Instansi Wajib Di Isi'
                ]
            ],
        ];
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            $errors = [];
            $succ = [
                [
                    'field' => 'nama',
                    'value' => set_value('nama')
                ],[
                    'field' => 'nohp',
                    'value' => set_value('nohp')
                ],[
                    'field' => 'instansi_id',
                    'value' => set_value('instansi_id')
                ],[
                    'field' => 'instansi',
                    'value' => set_value('instansi')
                ]
            ];
            foreach($this->form_validation->error_array() as $key => $val){
                $arrErr = [
                    'field' => $key,
                    'message' => $val
                ];

                array_push($errors, $arrErr);
            }
            $err = [
                'status' => 400,
                'error' => $errors,
                'success'  => $succ
            ];
            $this->output->set_content_type('application/json')->set_output(json_encode($err));
                
        }else{
            $datas = [
                'nama' => $this->input->post('nama', TRUE),
                'nohp' => $this->input->post('nohp', TRUE),
                'instansi_id' => $this->input->post('instansi_id', TRUE),
                'instansi' => $this->input->post('instansi', TRUE)
            ];
            $this->db->insert('customer', $datas);
            if($this->db->affected_rows() > 0){
                $res = [
                    'status' => 200,
                    'message' => 'Success',
                    'success' => $datas
                ];
            }else{
                $res = [
                    'status' => 400,
                    'message' => 'Error',
                    'success' => $data
                ];
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($res));
        }
    }

    function edit(){
        $id = $this->input->post('id', TRUE);
        $this->load->library('form_validation');
        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama Customer',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Customer Wajib Di Isi'
                ]
            ],[
                'field' => 'nohp',
                'label' => 'No HP',
                'rules' => 'required',
                'errors' => [
                    'required' => 'No HP Wajib Di Isi'
                ]
            ],[
                'field' => 'instansi',
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Instansi Wajib Di Isi'
                ]
            ],[
                'field' => 'instansi_id',
                'label' => 'Tipe Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tipe Instansi Wajib Di Isi'
                ]
            ],
        ];
        if($id){
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == FALSE){
                $errors = [];
                $succ = [
                    [
                        'field' => 'nama',
                        'value' => set_value('nama')
                    ],[
                        'field' => 'nohp',
                        'value' => set_value('nohp')
                    ],[
                        'field' => 'instansi_id',
                        'value' => set_value('instansi_id')
                    ],[
                        'field' => 'instansi',
                        'value' => set_value('instansi')
                    ]
                ];
                foreach($this->form_validation->error_array() as $key => $val){
                    $arrErr = [
                        'field' => $key,
                        'message' => $val
                    ];
    
                    array_push($errors, $arrErr);
                }
                $err = [
                    'status' => 400,
                    'error' => $errors,
                    'success'  => $succ
                ];
                $this->output->set_content_type('application/json')->set_output(json_encode($err));
                    
            }else{
                $datas = [
                    'nama' => $this->input->post('nama', TRUE),
                    'nohp' => $this->input->post('nohp', TRUE),
                    'instansi_id' => $this->input->post('instansi_id', TRUE),
                    'instansi' => $this->input->post('instansi', TRUE)
                ];
                $this->db->where('id', $id)->update('customer', $datas);
                if($this->db->affected_rows() > 0){
                    $res = [
                        'status' => 200,
                        'message' => 'Success',
                        'success' => $datas
                    ];
                }else{
                    $res = [
                        'status' => 400,
                        'message' => 'Error',
                        'success' => $data
                    ];
                }
                $this->output->set_content_type('application/json')->set_output(json_encode($res));
            }
        }
    }

    function delete($id){
        $this->db->where('id', $id)->delete('customer');
        if($this->db->affected_rows() > 0){
            $res = [
                'status' => 200,
                'message' => "Success"
            ];
        }else{
            $res = [
                'status' => 400,
                'message' => "Error"
            ];
        }
    }
    

    /* Ajax */
    function datatable(){
        $datatables = new Datatables(new CodeigniterAdapter);
        $datatables->query("SELECT 
                            c.id, c.nama, c.nohp, c.timestamp, c.instansi, c.instansi_id, ti.instansi AS jenis_instansi
                            FROM customer AS c
                            JOIN tipe_instansi AS ti ON c.instansi_id = ti.id");
        echo $datatables->generate();
    }
    
    function getCustomer(){
        $get = $this->db->select('c.*, ti.instansi jenis_instansi')
                        ->from('customer c')
                        ->join('tipe_instansi ti', 'c.instansi_id = ti.id')
                        ->like('c.nama', $this->input->get("q", TRUE))
                        ->or_like('c.instansi', $this->input->get("q", TRUE))
                        ->order_by('c.nama', "ASC")->get()->result();

        $this->output->set_content_type('application/json')->set_output(json_encode($get));
    }

    function getLastCustomer(){
        $get = $this->db->limit(1)->order_by('kode', "DESC")->get('orders');
        if($get->num_rows() > 0){
            $order = sprintf("%03d", $get->row()->kode + 1);
        }else{
            $order = sprintf("%03d", 1);
        }
        echo $order;
    }


    /* Phpspreadsheet */
    function downloadFormat(){
        $tipeInstansi = $this->db->get('tipe_instansi');

        $spreadsheet = new Spreadsheet();  
        $Excel_writer = new Xlsx($spreadsheet);

        $spreadsheet->setActiveSheetIndex(0);
        $sheet = $spreadsheet->getActiveSheet();
        $styleBold = [
            'font' => [
                'bold' => true,
            ],
        ];

        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setWidth(30);
        $sheet->getColumnDimension('C')->setWidth(40);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);
        $sheet->getStyle('A:I')->getAlignment()->setHorizontal('center');
        $sheet->getStyle('A:I')->getAlignment()->setVertical('center');
        $sheet->getStyle('B1:I1')->applyFromArray($styleBold);

        $sheetStyle = $spreadsheet->getActiveSheet();

        $sheetStyle->setCellValue('B1','Nama');
        $sheetStyle->setCellValue('C1','No Hp');
        $sheetStyle->setCellValue('D1','Tipe Instansi');
        $sheetStyle->setCellValue('E1','Nama Instansi');
        $sheetStyle->setCellValue('G1','Kode Tipe Instansi Tersedia');

        $excel_row = 2;
        foreach($tipeInstansi->result() as $row){
            $spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->instansi);
            $sheet->getStyle('G' . $excel_row)->applyFromArray($styleBold);
            $sheet->getStyle('G' . $excel_row)->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setRGB('fffe00');
            $excel_row++;
        }

        ob_get_clean();
        header('Content-Type: application/vnd.ms-excel');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
        header('Content-Disposition: attachment;filename=Format Import Konsumen.Xlsx'); 
        header('Cache-Control: max-age=0');
        ob_end_clean();
        $Excel_writer->save('php://output');
        exit;

        redirect($_SERVER['HTTP_REFERER']);
    }

    function import(){
        $tipeInstansi = $this->db->get('tipe_instansi');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->do_upload('fileImport');

        $upload_data = $this->upload->data();
        $fileImport = $upload_data['file_name'];
        if(!$this->upload->do_upload('fileImport')){
            $this->session->set_flashdata('error', "File Belum Di Pilih");
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $newFileNames = explode('.',$fileImport);
            $fileType = ucfirst($newFileNames[1]);
            $path = './uploads/';
            $inputFileType = $fileType;
            $inputFileName = $path.$fileImport;
            $reader = IOFactory::createReader($inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load($inputFileName);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null,true,true,true);
            $import = [];

            for($row = 2; $row <= count($sheetData); $row++){
                $instansi = $this->db->get_where('tipe_instansi', ['instansi' => $sheetData[$row]['D']]);
                $instansi_id = ($instansi->num_rows() > 0) ? $instansi->row()->id : NULL;

                $data = [
                    'nama' => $sheetData[$row]['B'],
                    'nohp' => $sheetData[$row]['C'],
                    'instansi_id' => $instansi_id,                    
                    'instansi' => $sheetData[$row]['E']
                ]; 
                $this->db->insert('customer', $data);
                if($this->db->affected_rows() > 0){
                    $import[] = $data;
                }
            }

            if($spreadsheet == FALSE){
                $this->session->set_flashdata('error', "File Tidak Support !");
                redirect($_SERVER['HTTP_REFERER']);
            }

            if($import == NULL){
                $this->session->set_flashdata('error', "File Kosong !");
                redirect($_SERVER['HTTP_REFERER']);
            }

            $this->session->set_flashdata('success', "Data Berhasil Di Import");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}