<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Precoproduto extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Precoproduto_model');
         $user = $this->session->userdata();  
        
      if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of precoprodutos
     */
    function index()
    {
        $data['precoprodutos'] = $this->Precoproduto_model->get_all_precoprodutos();
        
        $data['_view'] = 'precoproduto/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new precoproduto
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'IDPreco' => $this->input->post('IDPreco'),
				'IDProduto' => $this->input->post('IDProduto'),
				'valor' => $this->input->post('valor'),
            );
            
            $precoproduto_id = $this->Precoproduto_model->add_precoproduto($params);
            redirect('precoproduto/index');
        }
        else
        {    
            $this->load->model('Preco_model');
            $data['all_tabelas'] = $this->Preco_model->get_all_precos();
            $this->load->model('Produto_model');
            $data['all_produtos'] = $this->Produto_model->get_all_produtos();
                
            
            $data['_view'] = 'precoproduto/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a precoproduto
     */
    function edit($IDPreco)
    {   
        // check if the precoproduto exists before trying to edit it
        $data['precoproduto'] = $this->Precoproduto_model->get_precoproduto($IDPreco);
        
        if(isset($data['precoproduto']['IDPreco']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'valor' => $this->input->post('valor'),
                );

                $this->Precoproduto_model->update_precoproduto($IDPreco,$params);            
                redirect('precoproduto/index');
            }
            else
            {
                $data['_view'] = 'precoproduto/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The precoproduto you are trying to edit does not exist.');
    } 

    /*
     * Deleting precoproduto
     */
    function remove($IDPreco)
    {
        $precoproduto = $this->Precoproduto_model->get_precoproduto($IDPreco);

        // check if the precoproduto exists before trying to delete it
        if(isset($precoproduto['IDPreco']))
        {
            $this->Precoproduto_model->delete_precoproduto($IDPreco);
            redirect('precoproduto/index');
        }
        else
            show_error('The precoproduto you are trying to delete does not exist.');
    }
    
}
