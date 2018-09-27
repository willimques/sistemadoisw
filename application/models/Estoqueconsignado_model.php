<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Estoqueconsignado_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
      
        
    }
    
    /*
     * Get estoqueconsignado by IDEstoqueConsignado
     */
    function get_estoqueconsignado($IDPessoa)
    {
        $this->db->select ( '*' ); 
        $this->db->from ( 'estoqueconsignado' );             
        $this->db->join ( 'pessoa' , 'pessoa.IDPessoa = estoqueconsignado.IDPessoa' );  
        $this->db->where('estoqueconsignado.IDPessoa',$IDPessoa);  
        //$this->db->order_by('IDPessoa', 'desc');
        return $query=$this->db->get ()->result_array();        
        
    }
    
  
    function get_listcliente()
    {
        $this->db->select ( 'estoqueconsignado.IDPessoa,nome' ); 
        $this->db->distinct ( 'estoqueconsignado.IDPessoa' ); 
        $this->db->from ( 'estoqueconsignado' ); 
        $this->db->join ( 'pessoa' , 'pessoa.IDPessoa = estoqueconsignado.IDPessoa' );  
        $this->db->order_by('estoqueconsignado.IDPessoa', 'desc');
        return $query=$this->db->get ()->result_array();        
        
    }
    
        
    /*
     * Get all estoqueconsignado
     */
    function get_all_estoqueconsignado()
    {
        $this->db->join ( 'pessoa' ,  'Pessoa.IDPessoa = estoqueconsignado.IDPessoa' ); 
        $this->db->join ( 'produto' ,  'produto.IDProduto = estoqueconsignado.IDProduto' ); 
        $this->db->order_by('IDEstoqueConsignado', 'desc');
        return $this->db->get('EstoqueConsignado')->result_array();
    }
        
    /*
     * function to add new estoqueconsignado
     */
    function add_estoqueconsignado($params)
    {
        $this->db->insert('EstoqueConsignado',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update estoqueconsignado
     */
    function update_estoqueconsignado($IDEstoqueConsignado,$params)
    {
        $this->db->where('IDEstoqueConsignado',$IDEstoqueConsignado);
        return $this->db->update('EstoqueConsignado',$params);
    }
    
    /*
     * function to delete estoqueconsignado
     */
    function delete_estoqueconsignado($IDEstoqueConsignado)
    {
        return $this->db->delete('EstoqueConsignado',array('IDPedido'=>$IDEstoqueConsignado));
    }
}
