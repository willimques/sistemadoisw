<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Revendedor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get revendedor by IDRevendedor
     */
    function get_revendedor($IDRevendedor)
    {
        return $this->db->get_where('Revendedor',array('IDRevendedor'=>$IDRevendedor))->row_array();
    }
        
    /*
     * Get all revendedores
     */
    function get_all_revendedores()
    {
        $this->db->order_by('IDRevendedor', 'desc');
        return $this->db->get('Revendedor')->result_array();
    }
        
    /*
     * function to add new revendedor
     */
    function add_revendedor($params)
    {
        $this->db->insert('Revendedor',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update revendedor
     */
    function update_revendedor($IDRevendedor,$params)
    {
        $this->db->where('IDRevendedor',$IDRevendedor);
        return $this->db->update('Revendedor',$params);
    }
    
    /*
     * function to delete revendedor
     */
    function delete_revendedor($IDRevendedor)
    {
        return $this->db->delete('Revendedor',array('IDRevendedor'=>$IDRevendedor));
    }
}
