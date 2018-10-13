<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pedidoitem extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pedidoitem_model');
        
         
        $user = $this->session->userdata();  
        
      if($user==false){ 
        
            redirect('login');
        
        }
        
    } 

    /*
     * Listing of pedidoitens
     */
    function index()
    {
        $data['pedidoitens'] = $this->Pedidoitem_model->get_all_pedidoitens();
        
        $data['_view'] = 'pedidoitem/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pedidoitem
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'dataVenda' => $this->input->post('dataVenda'),
				'quantidade' => $this->input->post('quantidade'),
				'precoUnitario' => $this->input->post('precoUnitario'),
				'precoTotal' => $this->input->post('precoTotal'),
				'descontoUnitario' => $this->input->post('descontoUnitario'),
				'descontoTotal' => $this->input->post('descontoTotal'),
            );
            
            $pedidoitem_id = $this->Pedidoitem_model->add_pedidoitem($params);
            redirect('pedidoitem/index');
        }
        else
        {            
            $data['_view'] = 'pedidoitem/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pedidoitem
     */
    function edit($IDPedidoItens)
    {   
        // check if the pedidoitem exists before trying to edit it
        $data['pedidoitem'] = $this->Pedidoitem_model->get_pedidoitem($IDPedidoItens);
        
        if(isset($data['pedidoitem']['IDPedidoItens']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'dataVenda' => $this->input->post('dataVenda'),
					'quantidade' => $this->input->post('quantidade'),
					'precoUnitario' => $this->input->post('precoUnitario'),
					'precoTotal' => $this->input->post('precoTotal'),
					'descontoUnitario' => $this->input->post('descontoUnitario'),
					'descontoTotal' => $this->input->post('descontoTotal'),
                );

                $this->Pedidoitem_model->update_pedidoitem($IDPedidoItens,$params);            
                redirect('pedidoitem/index');
            }
            else
            {
                $data['_view'] = 'pedidoitem/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pedidoitem you are trying to edit does not exist.');
    } 

    /*
     * Deleting pedidoitem
     */
    function remove($IDPedidoItens)
    {
        $pedidoitem = $this->Pedidoitem_model->get_pedidoitem($IDPedidoItens);

        // check if the pedidoitem exists before trying to delete it
        if(isset($pedidoitem['IDPedidoItens']))
        {
            $this->Pedidoitem_model->delete_pedidoitem($IDPedidoItens);
            redirect('pedidoitem/index');
        }
        else
            show_error('The pedidoitem you are trying to delete does not exist.');
    }
    
}
