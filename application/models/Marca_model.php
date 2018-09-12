<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Marca_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get marca by IDMarcas
     */
    function get_marca($IDMarcas)
    {
        return $this->db->get_where('Marcas',array('IDMarcas'=>$IDMarcas))->row_array();
    }
        
    /*
     * Get all marcas
     */
    function get_all_marcas()
    {
        $this->db->order_by('IDMarcas', 'desc');
        return $this->db->get('Marcas')->result_array();
    }
        
    /*
     * function to add new marca
     */
    function add_marca($params)
    {
        $this->db->insert('Marcas',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update marca
     */
    function update_marca($IDMarcas,$params)
    {
        $this->db->where('IDMarcas',$IDMarcas);
        return $this->db->update('Marcas',$params);
    }
    
    /*
     * function to delete marca
     */
    function delete_marca($IDMarcas)
    {
        return $this->db->delete('Marcas',array('IDMarcas'=>$IDMarcas));
    }
}
