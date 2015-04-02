<?php
  class Result_model extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  function getList($registerType = 'all', $type = 'all'){
    if ($type == 'candidate') {
      $from = 0;
      $num = 14;
    }
    else if ($type == 'spare') {
      $from = 14;
      $num = 4;
    }
    $data = $this->db->select(
      'register.facebookID,'.
      'AVG(CASE WHEN q1 <> 0 THEN q1 ELSE NULL END) AS q1'.
      ',AVG(CASE WHEN q2 <> 0 THEN q2 ELSE NULL END) AS q2'.
      ',AVG(CASE WHEN q3 <> 0 THEN q3 ELSE NULL END) as q3'.
      ',AVG(CASE WHEN q4 <> 0 THEN q4 ELSE NULL END) AS q4'.
      ',AVG(CASE WHEN q5 <> 0 THEN q5 ELSE NULL END) AS q5,'. //Score
      'SUM(q1+q2)/COUNT(CASE WHEN q1 <> 0 THEN 1 ELSE NULL END) + SUM(q4+q5)/COUNT(CASE WHEN q4 <> 0 THEN 1 ELSE NULL END)'.
      ' AS sum,prefix,name,surname,registerType')
      ->from('register')
      ->join('homework_score', 'register.facebookID = homework_score.facebookID', 'left')
      ->where('status', 'Accepted')
      ->order_by('sum desc')
      ->group_by('register.facebookID');
    if ($registerType != 'all') {
      $data = $data->where('registerType', $registerType);
    }
    if ($type != 'all') {
      $data = $data->limit($num, $from);
    }
    return $data->get()->result_array();
  }
}
