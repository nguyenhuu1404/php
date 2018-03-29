<?php
$data = array( 
    array('id' => 11, 'parent' => 0), 
    array('id' => 22, 'parent' => 11), 
    array('id' => 33, 'parent' => 0), 
    array('id' => 44, 'parent' => 33), 
    array('id' => 14, 'parent' => 44), 
    array('id' => 13, 'parent' => 44), 
    array('id' => 12, 'parent' => 13), 
    array('id' => 10, 'parent' => 77), 
    array('id' => 77, 'parent' => 11), 
    array('id' => 88, 'parent' => 11), 
    array('id' => 99, 'parent' => 88), 
); 

// tree builder 
// build a tree structure from the list above 

function makeTree($data) { 
    $tree = array( 
        array('id' => 'root', 'parent' => -1, 'children' => array())); 
    $treePtr = array(0 => &$tree[0]); 
    foreach($data as $item){ 
        $children = &$treePtr[$item['parent']]['children']; 
        $c = count($children); 
        $children[$c] = $item; 
        $children[$c]['children'] = array(); 
        $treePtr[$item['id']] = &$children[$c]; 
    } 
    return $tree; 
} 

// node printer 
// put here whatever you want 

function printNode($node) { 
    print("<li>{$node['id']} is son of {$node['parent']}<ul>"); 
    foreach($node['children'] as $child) 
        printNode($child); 
    print("</ul></li>"); 
} 


// here we go 

$tree = makeTree($data); 

// to see what happened 
echo '<pre>'; print_r($tree);echo '</pre>'; 

printNode($tree[0]);