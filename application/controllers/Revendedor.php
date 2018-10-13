<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Revendedor extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Revendedor_model'); 
        $user = $this->session->userdata();  
        
       if($user==false){ 
        
            redirect('login');
        
        }
        
    } 

    /*
     * Listing of revendedores
     */
    function index()
    {
        $data['revendedores'] = $this->Revendedor_model->get_all_revendedores();
        $data['_view'] = 'revendedor/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new revendedor
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('limite','Limite','numeric');   
        $this->form_validation->set_rules('tabelaPreco','Tabela','required');   

        if($this->form_validation->run())        
        {   
             // Recebe os valores do para atualizar a tabela pessoa 
            $id = 2;
            $IDPessoa = $this->input->post('IDRevendedor');           
            
            
            $params = array(
                
				'IDRevendedor' => $this->input->post('IDRevendedor'),						
				'limite' => $this->input->post('limite'),
            );
            
            $revendedor_id = $this->Revendedor_model->add_revendedor($params);            
            
            $params = array(

                'IDPreco' => $this->input->post('tabelaPreco'),
                'IDPessoa' => $this->input->post('IDRevendedor'),

            );

            $this->load->model('Precopessoa_model');
            $precopessoa_id = $this->Precopessoa_model->add_precopessoa($params);
            
             //atualiza a tabela pessoa com o tipo de cadastro 

            $params = array(

                'IDTipoCadastro' =>  $id,                 
            );


            $this->load->model('Pessoa_model');
            $this->Pessoa_model->update_pessoa($IDPessoa,$params);  
            
            redirect('revendedor/index');
        }
        else
        {
            $this->load->model('Pessoa_model');
			  $data['all_pessoas'] = $this->Pessoa_model->get_pessoas_semCad();   
            
			$this->load->model('Preco_model');
			$data['all_precos'] = $this->Preco_model->get_all_precos();
            
            $data['_view'] = 'revendedor/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a revendedor
     */
    function edit($IDRevendedor)
    {   
        // check if the revendedor exists before trying to edit it
        $data['revendedor'] = $this->Revendedor_model->get_revendedor($IDRevendedor);
        
        if(isset($data['revendedor']['IDRevendedor']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
               if(!$this->input->post('limite')==null)
                   {
                       $params = array(

                           'limite' => $this->input->post('limite'),                    

                       );

                       $this->Revendedor_model->update_revendedor($IDRevendedor,$params); 
                   }

                   if(!$this->input->post('IDPreco')==null)
                      {
                          $params = array(

                              'IDPreco' => $this->input->post('IDPreco'),

                          );  

                          $this->load->model('Precopessoa_model');

                          $precopessoa_id = $this->Precopessoa_model->update_precopessoa($IDRevendedor,$params);
                      }

                redirect('revendedor/index');
            }
            else
            {   
                $this->load->model('Precopessoa_model');
                $data['pessoapreco'] = $this->Precopessoa_model->get_precopessoa($IDRevendedor);
                
				$this->load->model('Preco_model');
				$data['all_precos'] = $this->Preco_model->get_all_precos();
				
                $data['_view'] = 'revendedor/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The revendedor you are trying to edit does not exist.');
    } 

    /*
     * Deleting revendedor
     */
    function remove($IDRevendedor)
    {
        $revendedor = $this->Revendedor_model->get_revendedor($IDRevendedor);

        // check if the revendedor exists before trying to delete it
        if(isset($revendedor['IDRevendedor']))
        {
            $this->load->model('Precopessoa_model');
            $this->Precopessoa_model->delete_precopessoa($IDRevendedor);
            
            $this->Revendedor_model->delete_revendedor($IDRevendedor);
            
            $params = array(

                'IDTipoCadastro' =>  $id = 0,               
            );

            $this->load->model('Pessoa_model');
            $this->Pessoa_model->update_pessoa($IDRevendedor,$params);

            
            redirect('revendedor/index');
        }
        else
            show_error('The revendedor you are trying to delete does not exist.');
    }
    
}
