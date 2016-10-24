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
$sorted_arr = array();
echo '<pre>';
foreach ($list as $item) {
    $sorted_arr[$item['group']][] = array(
        'group' => $item['group'],
        'name' => $item['name']
    );
}
print_r($sorted_arr);
echo '</pre>';
