<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Estoquemovimentado_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get estoquemovimentado by IDEstoqueMovimentado
     */
    function get_estoquemovimentado($IDEstoqueMovimentado)
    {
        return $this->db->get_where('EstoqueMovimentado',array('IDEstoqueMovimentado'=>$IDEstoqueMovimentado))->row_array();
    }
        
    /*
     * Get all estoquemovimentado
     */
    function get_all_estoquemovimentado()
    {
        $this->db->order_by('IDEstoqueMovimentado', 'desc');
        return $this->db->get('EstoqueMovimentado')->result_array();
    }
        
    /*
     * function to add new estoquemovimentado
     */
    function add_estoquemovimentado($params)
    {
        $this->db->insert('EstoqueMovimentado',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update estoquemovimentado
     */
    function update_estoquemovimentado($IDEstoqueMovimentado,$params)
    {
        $this->db->where('IDEstoqueMovimentado',$IDEstoqueMovimentado);
        return $this->db->update('EstoqueMovimentado',$params);
    }
    
    /*
     * function to delete estoquemovimentado
     */
    function delete_estoquemovimentado($IDEstoqueMovimentado)
    {
        return $this->db->delete('EstoqueMovimentado',array('IDEstoqueMovimentado'=>$IDEstoqueMovimentado));
    }
}
