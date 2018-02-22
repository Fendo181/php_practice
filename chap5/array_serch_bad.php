<?php

$data = ['PHP', ''=>'JavaScript', 'PHP', 'Java', 'C#', '15'];
var_dump(array_search('PHP', $data)); #int(0)
if(!array_search('PHP',$data)){
    print '見つかりませんでした！';
}
