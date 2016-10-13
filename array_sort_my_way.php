<?php
$list = array(
    array(
        'group' => 1,
        'name' => 'asitha'
    ),
    array(
        'group' => 2,
        'name' => 'dulaj'
    ),
    array(
        'group' => 3,
        'name' => 'kusal'
    ),
    array(
        'group' => 1,
        'name' => 'charith'
    ),
    array(
        'group' => 3,
        'name' => 'nuwan'
    ),
    array(
        'group' => 3,
        'name' => 'lakshitha'
    )
);
?>
<pre>
   <?php
   $sorted_arr = array();
   $index_arr = array();
   for ($i = 0; $i < count($list); $i++) {
       if (in_array($list[$i]['group'], $index_arr)) {
       } else {
           array_push($index_arr, $list[$i]['group']);
           $key = array_search($list[$i]['group'], $index_arr);
           $sorted_arr[$key]['job'] = array();
           $sorted_arr[$key]['hospital'] = array();
       }
       $key = array_search($list[$i]['group'], $index_arr);
       array_push($sorted_arr[$key]['job'], $list[$i]);
   }
   print_r($sorted_arr);
   ?>
</pre>
