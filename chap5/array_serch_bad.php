<?php

$data = ['PHP', ''=>'JavaScript', 'PHP', 'Java', 'C#', '15'];
var_dump(array_search('PHP', $data)); #int(0)
if (!in_array('Ruby', $data)) {
    print '見つかりませんでした！';
}
