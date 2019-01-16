<?php


class Configuration extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_configuration_data($where)
    {
        $query = $this->configuration->db->get_where('configuracion',$where,1);
        if( $this->db->count_all_results() )
            return $query->result();
        return FALSE;
    }

}