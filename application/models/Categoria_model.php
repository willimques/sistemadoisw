<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categoria_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }
    
    /*
     * Get categoria by IDCategoria
     */
    function get_categoria($IDCategoria)
    {
        return $this->db->get_where('Categoria',array('IDCategoria'=>$IDCategoria))->row_array();
    }
        
    /*
     * Get all categorias
     */
    function get_all_categorias()
    {
        $this->db->order_by('IDCategoria', 'desc');
        return $this->db->get('Categoria')->result_array();
    }
        
    /*
     * function to add new categoria
     */
    function add_categoria($params)
    {
        $this->db->insert('Categoria',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update categoria
     */
    function update_categoria($IDCategoria,$params)
    {
        $this->db->where('IDCategoria',$IDCategoria);
        return $this->db->update('Categoria',$params);
    }
    
    /*
     * function to delete categoria
     */
    function delete_categoria($IDCategoria)
    {
        return $this->db->delete('Categoria',array('IDCategoria'=>$IDCategoria));
    }
}
