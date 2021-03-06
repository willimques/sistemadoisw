<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Marca extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Marca_model');
        
        $user = $this->session->userdata(); 
        
       if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of marcas
     */
    function index()
    {
        $data['marcas'] = $this->Marca_model->get_all_marcas();
        
        $data['_view'] = 'marca/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new marca
     */
    function add()
    {   
        
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Descricao' => $this->input->post('Descricao'),
            );
            
            $marca_id = $this->Marca_model->add_marca($params);
            redirect('marca/index');
        }
        else
        {            
            $data['_view'] = 'marca/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a marca
     */
    function edit($IDMarcas)
    {   
        // check if the marca exists before trying to edit it
        $data['marca'] = $this->Marca_model->get_marca($IDMarcas);
        
        if(isset($data['marca']['IDMarcas']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Descricao' => $this->input->post('Descricao'),
                );

                $this->Marca_model->update_marca($IDMarcas,$params);            
                redirect('marca/index');
            }
            else
            {
                $data['_view'] = 'marca/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The marca you are trying to edit does not exist.');
    } 

    /*
     * Deleting marca
     */
    function remove($IDMarcas)
    {
        $marca = $this->Marca_model->get_marca($IDMarcas);

        // check if the marca exists before trying to delete it
        if(isset($marca['IDMarcas']))
        {
            $this->Marca_model->delete_marca($IDMarcas);
            redirect('marca/index');
        }
        else
            show_error('The marca you are trying to delete does not exist.');
    }
    
}
