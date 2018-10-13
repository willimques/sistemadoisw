<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pessoafisica_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pessoafisica by IDPessoaFisica
     */
    function get_pessoafisica($IDPessoa)
    {
        return $this->db->get_where('pessoafisica',array('IDPessoaFisica'=>$IDPessoa))->row_array();
    }
        
    /*
     * Get all pessoafisicas
     */
    function get_all_pessoafisicas()
    {
        $this->db->order_by('IDPessoaFisica', 'desc');
        return $this->db->get('pessoafisica')->result_array();
    }
        
    /*
     * function to add new pessoafisica
     */
    function add_pessoafisica($params)
    {
        $this->db->insert('pessoafisica',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pessoafisica
     */
    function update_pessoafisica($IDPessoaFisica,$params)
    {

        $this->db->where('IDPessoaFisica',$IDPessoaFisica);
        return $this->db->update('pessoafisica',$params);
    }
    
    /*
     * function to delete pessoafisica
     */
    function delete_pessoafisica($IDPessoaFisica)
    {
        return $this->db->delete('pessoafisica',array('IDPessoaFisica'=>$IDPessoaFisica));
    }
}
