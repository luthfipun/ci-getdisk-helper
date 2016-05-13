<?php
$disk = "";

function get_freespace($disk){
  $free = disk_free_space($disk);
  $free_to_gb = $free / (1024*1024*1024);
  return floor($free_to_gb);
}

function get_totalspace($disk){
  $total = disk_total_space($disk);
  $total_to_gb = $total / (1024*1024*1024);
  return floor($total_to_gb);
}

/* End of file diskspace_helper.php */
/* Location: ./application/helpers/diskspace_helper.php */