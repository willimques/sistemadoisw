<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Estoqueconsignado extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Estoqueconsignado_model');
    } 

    /*
     * Listing of estoqueconsignado
     */
    function index()
    {
        $data['estoqueconsignado'] = $this->Estoqueconsignado_model->get_all_estoqueconsignado();
        
        $data['_view'] = 'estoqueconsignado/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new estoqueconsignado
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'IDProduto' => $this->input->post('IDProduto'),
				'IDFilial' => $this->input->post('IDFilial'),
				'IDPessoa' => $this->input->post('IDPessoa'),
				'quantidade' => $this->input->post('quantidade'),
				'movimento' => $this->input->post('movimento'),
            );
            
            $estoqueconsignado_id = $this->Estoqueconsignado_model->add_estoqueconsignado($params);
            redirect('estoqueconsignado/index');
        }
        else
        {
			$this->load->model('Produto_model');
			$data['all_produtos'] = $this->Produto_model->get_all_produtos();

			$this->load->model('Filial_model');
			$data['all_filiais'] = $this->Filial_model->get_all_filiais();

			$this->load->model('Pessoa_model');
			$data['all_pessoas'] = $this->Pessoa_model->get_all_pessoas();
            
            $data['_view'] = 'estoqueconsignado/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a estoqueconsignado
     */
    function edit($IDEstoqueConsignado)
    {   
        // check if the estoqueconsignado exists before trying to edit it
        $data['estoqueconsignado'] = $this->Estoqueconsignado_model->get_estoqueconsignado($IDEstoqueConsignado);
        
        if(isset($data['estoqueconsignado']['IDEstoqueConsignado']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'IDProduto' => $this->input->post('IDProduto'),
					'IDFilial' => $this->input->post('IDFilial'),
					'IDPessoa' => $this->input->post('IDPessoa'),
					'quantidade' => $this->input->post('quantidade'),
					'movimento' => $this->input->post('movimento'),
                );

                $this->Estoqueconsignado_model->update_estoqueconsignado($IDEstoqueConsignado,$params);            
                redirect('estoqueconsignado/index');
            }
            else
            {
				$this->load->model('Produto_model');
				$data['all_produtos'] = $this->Produto_model->get_all_produtos();

				$this->load->model('Filial_model');
				$data['all_filiais'] = $this->Filial_model->get_all_filiais();

				$this->load->model('Pessoa_model');
				$data['all_pessoas'] = $this->Pessoa_model->get_all_pessoas();

                $data['_view'] = 'estoqueconsignado/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The estoqueconsignado you are trying to edit does not exist.');
    } 

    /*
     * Deleting estoqueconsignado
     */
    function remove($IDEstoqueConsignado)
    {
        $estoqueconsignado = $this->Estoqueconsignado_model->get_estoqueconsignado($IDEstoqueConsignado);

        // check if the estoqueconsignado exists before trying to delete it
        if(isset($estoqueconsignado['IDEstoqueConsignado']))
        {
            $this->Estoqueconsignado_model->delete_estoqueconsignado($IDEstoqueConsignado);
            redirect('estoqueconsignado/index');
        }
        else
            show_error('The estoqueconsignado you are trying to delete does not exist.');
    }
    
}
