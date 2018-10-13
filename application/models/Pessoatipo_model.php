<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pessoatipo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pessoatipo by IDPessoaTipo
     */
    function get_pessoatipo($IDPessoaTipo)
    {
        return $this->db->get_where('pessoatipo',array('IDPessoaTipo'=>$IDPessoaTipo))->row_array();
    }
        
    /*
     * Get all pessoatipos
     */
    function get_all_pessoatipos()
    {
        $this->db->order_by('IDPessoaTipo', 'desc');
        return $this->db->get('pessoatipo')->result_array();
    }
        
    /*
     * function to add new pessoatipo
     */
    function add_pessoatipo($params)
    {
        $this->db->insert('pessoatipo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pessoatipo
     */
    function update_pessoatipo($IDPessoaTipo,$params)
    {
        $this->db->where('IDPessoaTipo',$IDPessoaTipo);
        return $this->db->update('pessoatipo',$params);
    }
    
    /*
     * function to delete pessoatipo
     */
    function delete_pessoatipo($IDPessoaTipo)
    {
        return $this->db->delete('pessoatipo',array('IDPessoaTipo'=>$IDPessoaTipo));
    }
}
