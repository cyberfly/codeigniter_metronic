<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {


   public function is_unique($str, $field)
   {

      if (substr_count($field, '.')==3)
      {
         list($table,$field,$id_field,$id_val) = explode('.', $field);

         $query = $this->CI->db->limit(1)->where($field,$str)->where($id_field.' != ',$id_val)->get($table);

      } else {

         list($table, $field)=explode('.', $field);
         $query = $this->CI->db->limit(1)->get_where($table, array($field => $str));
      }

      return $query->num_rows() === 0;

   }

   public function alpha_dash_space($str)
   {
      return ( ! preg_match("/^([-a-z0-9_ ])+$/i", $str)) ? FALSE : TRUE;
   }

   public function alpha_space($str)
   {
      return ( ! preg_match("/^([a-z ])+$/i", $str)) ? FALSE : TRUE;
   }

   public function is_money($str)
   {
      //strip comma from string

      $str = str_replace(',', '', $str);

      return (bool)preg_match( '/^[\-+]?[0-9]*\.?[0-9]+$/', $str);
   }



}

// END MY Form Validation Class



/* End of file MY_Form_validation.php */

/* Location: ./application/libraries/MY_Form_validation.php */