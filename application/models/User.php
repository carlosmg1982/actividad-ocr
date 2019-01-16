<?php


class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user_data($where)
    {
        $query = "SELECT a.id,a.nombre,a.apellidos,a.dni,ao.nota,ao.comentarios FROM alumnos a INNER JOIN alumnos_ocr ao ON (ao.alumnos_id=a.id)";
        if(count($where)>0) {
            $query .= " WHERE ";
            foreach($where as $key=>$value) {
                $query .= " $key = '".mysql_escape_string($value)."'";
            }
        }
        $query .= " LIMIT 1";
        $usuario_query = $this->db->query($query);
        if( $this->db->count_all_results() )
            return $usuario_query->result_array();
        return FALSE;
    }
	
	public function get_commnents_data($where)
    {
        $query = $this->user->db->get_where('notas_alumnos_ocr',$where);
        if( $this->db->count_all_results() )
            return $query->result();
        return FALSE;
    }

}