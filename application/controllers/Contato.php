<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Contato extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Contato_model');
        
        $user = $this->session->userdata();  
     
       if($user==false){ 
        
            redirect('login');
        
        }
    } 

    /*
     * Listing of contatos
     */
    function index()
    {
        $data['contatos'] = $this->Contato_model->get_all_contatos();
        
        $data['_view'] = 'contato/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new contato
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nome','Nome','max_length[45]');
		$this->form_validation->set_rules('email','Email','max_length[45]|valid_email');
		$this->form_validation->set_rules('telRes','TelRes','max_length[45]');
		$this->form_validation->set_rules('telCom','TelCom','max_length[45]');
		$this->form_validation->set_rules('telCel','TelCel','max_length[45]');
		$this->form_validation->set_rules('operadora','Operadora','max_length[45]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'telRes' => $this->input->post('telRes'),
				'telCom' => $this->input->post('telCom'),
				'telCel' => $this->input->post('telCel'),
				'operadora' => $this->input->post('operadora'),
            );
            
            $contato_id = $this->Contato_model->add_contato($params);
            redirect('contato/index');
        }
        else
        {            
            $data['_view'] = 'contato/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a contato
     */
    function edit($IDContato)
    {   
        // check if the contato exists before trying to edit it
        $data['contato'] = $this->Contato_model->get_contato($IDContato);
        
        if(isset($data['contato']['IDContato']))
        {
            $this->load->library('form_validation');

			if($this->form_validation->run())     
            {   
                $params = array(
					'nome' => $this->input->post('nome'),
					'email' => $this->input->post('email'),
					'telRes' => $this->input->post('telRes'),
					'telCom' => $this->input->post('telCom'),
					'telCel' => $this->input->post('telCel'),
					'operadora' => $this->input->post('operadora'),
                );

                $this->Contato_model->update_contato($IDContato,$params);            
                redirect('contato/index');
            }
            else
            {
                $data['_view'] = 'contato/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The contato you are trying to edit does not exist.');
    } 

    /*
     * Deleting contato
     */
    function remove($IDContato)
    {
        $contato = $this->Contato_model->get_contato($IDContato);

        // check if the contato exists before trying to delete it
        if(isset($contato['IDContato']))
        {
            $this->Contato_model->delete_contato($IDContato);
            redirect('contato/index');
        }
        else
            show_error('The contato you are trying to delete does not exist.');
    }
    
}
