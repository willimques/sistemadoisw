<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fornecedor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }
    
    /*
     * Get fornecedor by IDFornecedor
     */
    function get_fornecedor($IDFornecedor)
    {
            $this->db->join('pessoa', 'pessoa.IDPessoa = fornecedor.IDFornecedor');
        return $this->db->get_where('fornecedor',array('IDFornecedor'=>$IDFornecedor))->row_array();
    }
        
    /*
     * Get all fornecedores
     */
    function get_all_fornecedores()
    {
        $this->db->join('pessoa', 'pessoa.IDPessoa = fornecedor.IDFornecedor');
        $this->db->order_by('IDFornecedor', 'desc');
        return $this->db->get('fornecedor')->result_array();
    }
        
    /*
     * function to add new fornecedor
     */
    function add_fornecedor($params)
    {
        $this->db->insert('fornecedor',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fornecedor
     */
    function update_fornecedor($IDFornecedor,$params)
    {
        $this->db->where('IDFornecedor',$IDFornecedor);
        return $this->db->update('fornecedor',$params);
    }
    
    /*
     * function to delete fornecedor
     */
    function delete_fornecedor($IDFornecedor)
    {
        return $this->db->delete('fornecedor',array('IDFornecedor'=>$IDFornecedor));
    }
}
