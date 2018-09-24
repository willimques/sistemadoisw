<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Prazopagamento extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Prazopagamento_model');
    } 

    /*
     * Listing of prazopagamentos
     */
    function index()
    {
        $data['prazopagamentos'] = $this->Prazopagamento_model->get_all_prazopagamentos();

        $data['_view'] = 'prazopagamento/index';
        $this->load->view('layouts/main',$data);
    }

    function get_prazopagamento($id=null)
    {   
        if($id==null){

            $retorno = false;
            echo json_encode ($retorno);

        }else{
            $dados = $this->Prazopagamento_model->get_prazopagamento($id);

            echo json_encode($dados);

        }
    }

    /*
     * Adding a new prazopagamento
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'descricao' => $this->input->post('descricao'),
            );

            $prazopagamento_id = $this->Prazopagamento_model->add_prazopagamento($params);
            redirect('prazopagamento/index');
        }
        else
        {            
            $data['_view'] = 'prazopagamento/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a prazopagamento
     */
    function edit($IDPrazoPag)
    {   
        // check if the prazopagamento exists before trying to edit it
        $data['prazopagamento'] = $this->Prazopagamento_model->get_prazopagamento($IDPrazoPag);

        if(isset($data['prazopagamento']['IDPrazoPag']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'descricao' => $this->input->post('descricao'),
                );

                $this->Prazopagamento_model->update_prazopagamento($IDPrazoPag,$params);            
                redirect('prazopagamento/index');
            }
            else
            {
                $data['_view'] = 'prazopagamento/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The prazopagamento you are trying to edit does not exist.');
    } 

    /*
     * Deleting prazopagamento
     */
    function remove($IDPrazoPag)
    {
        $prazopagamento = $this->Prazopagamento_model->get_prazopagamento($IDPrazoPag);

        // check if the prazopagamento exists before trying to delete it
        if(isset($prazopagamento['IDPrazoPag']))
        {
            $this->Prazopagamento_model->delete_prazopagamento($IDPrazoPag);
            redirect('prazopagamento/index');
        }
        else
            show_error('The prazopagamento you are trying to delete does not exist.');
    }

}
