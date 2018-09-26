<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categoria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Categoria_model');
        
        $user = $this->session->userdata();  
        
        $row = count($user);      
              
        if($row==1){   
            
            redirect('login');
        }
    } 

    /*
     * Listing of categorias
     */
    function index()
    {
        $data['categorias'] = $this->Categoria_model->get_all_categorias();
        
        $data['_view'] = 'categoria/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new categoria
     */
    function add()
    {   
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-success" role="alert">','</div>');        

		$this->form_validation->set_rules('descricao','Descricao','max_length[45]','require');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'descricao' => $this->input->post('descricao'),
            );
            
            $categoria_id = $this->Categoria_model->add_categoria($params);
            redirect('categoria/index');
        }
        else
        {            
            $data['_view'] = 'categoria/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a categoria
     */
    function edit($IDCategoria)
    {   
        // check if the categoria exists before trying to edit it
        $data['categoria'] = $this->Categoria_model->get_categoria($IDCategoria);
        
        if(isset($data['categoria']['IDCategoria']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('descricao','Descricao','max_length[45]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'descricao' => $this->input->post('descricao'),
                );

                $this->Categoria_model->update_categoria($IDCategoria,$params);            
                redirect('categoria/index');
            }
            else
            {
                $data['_view'] = 'categoria/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The categoria you are trying to edit does not exist.');
    } 

    /*
     * Deleting categoria
     */
    function remove($IDCategoria)
    {
        $categoria = $this->Categoria_model->get_categoria($IDCategoria);

        // check if the categoria exists before trying to delete it
        if(isset($categoria['IDCategoria']))
        {
            $this->Categoria_model->delete_categoria($IDCategoria);
            redirect('categoria/index');
        }
        else
            show_error('The categoria you are trying to delete does not exist.');
    }
    
}
