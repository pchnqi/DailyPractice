<?php

// @function: filter_list
$filters = filter_list();
foreach ($filters as $filter_name) {
    echo $filter_name.': '.filter_id($filter_name).'<br>';
}

// @function: filter_has_var
$_GET['test'] = '1';
echo filter_has_var(INPUT_GET, 'test') ? 'Found test' : 'Not fount test';
