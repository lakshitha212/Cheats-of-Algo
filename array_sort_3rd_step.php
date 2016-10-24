<?php
$list = array(
    array(
        'parent_id' => 0,
        'parent_name' => 'Parent 1',
        'child_id' => 1,
        'child_name' => 'Asitha',
        'child_grade' => 'A'
    ),
    array(
        'parent_id' => 0,
        'parent_name' => 'Parent 1',
        'child_id' => 2,
        'child_name' => 'Dulaj',
        'child_grade' => 'B'
    ),
    array(
        'parent_id' => 0,
        'parent_name' => 'Parent 1',
        'child_id' => 3,
        'child_name' => 'Kusal',
        'child_grade' => 'C'
    ),
    array(
        'parent_id' => 0,
        'parent_name' => 'Parent 1',
        'child_id' => 4,
        'child_name' => 'Charith',
        'child_grade' => 'D'
    ),
    array(
        'parent_id' => 1,
        'parent_name' => 'Asitha',
        'child_id' => 5,
        'child_name' => 'Nuwan',
        'child_grade' => 'E'
    ),
    array(
        'parent_id' => 1,
        'parent_name' => 'Asitha',
        'child_id' => 6,
        'child_name' => 'Lakshitha',
        'child_grade' => 'F'
    ),
    array(
        'parent_id' => 5,
        'parent_name' => 'Nuwan',
        'child_id' => 7,
        'child_name' => 'Supun',
        'child_grade' => 'G'
    ),
    array(
        'parent_id' => 5,
        'parent_name' => 'Nuwan',
        'child_id' => 8,
        'child_name' => 'Chamara',
        'child_grade' => 'H'
    ),
    array(
        'parent_id' => 7,
        'parent_name' => 'Supun',
        'child_id' => 9,
        'child_name' => 'Dasith',
        'child_grade' => 'I'
    ),
    array(
        'parent_id' => 9,
        'parent_name' => 'Dasith',
        'child_id' => 10,
        'child_name' => 'Buddhima',
        'child_grade' => 'J'
    ),
    array(
        'parent_id' => 9,
        'parent_name' => 'Dasith',
        'child_id' => 11,
        'child_name' => 'Minura',
        'child_grade' => 'K'
    )
);
$sorted_arr = array();
echo '<pre>';
treeSort($list);
function treeSort($list)
{
    foreach ($list as $item) {
        $sorted_arr[$item['parent_id']][] = array(
            'parent_id' => $item['parent_id'],
            'parent_name' => $item['parent_name'],
            'child_id' => $item['child_id'],
            'child_name' => $item['child_name'],
            'child_grade' => $item['child_grade'],
        );
    }
    $tree = sortList($sorted_arr, $sorted_arr[$list[0]['parent_id']]);
    print_r($tree);
}

function sortList($list, $parent)
{
    $tree = array();
    foreach ($parent as $k => $child) {
        if (isset($list[$child['child_id']])) {
            $child['children'] = sortList($list, $list[$child['child_id']]);
        }
        $tree[] = $child;
    }
    return $tree;
}

echo '</pre>';
