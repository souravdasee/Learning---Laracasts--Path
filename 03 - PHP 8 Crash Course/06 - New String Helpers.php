<?php

#### str_starts_with
$id0 = 'inv_sdfsahdfb';

$result0 = str_starts_with($id0, 'inv_');

var_dump($result0);

#### str_ends_with
$id1 = 'asasdsdfdfad_ch';

$result1 = str_ends_with($id1, '_inv');

var_dump($result1);

#### str_contains
$url = 'https://example.com?foo=bar';

$result2 = str_contains($url, '?');

var_dump($result2);