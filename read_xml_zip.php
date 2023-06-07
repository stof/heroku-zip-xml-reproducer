<?php

require __DIR__ . '/vendor/autoload.php';

$filePath = 'zip://' . __DIR__ . '/debug.xlsx#xl/sharedStrings.xml';

$reader = new XMLReader();
$reader->open($filePath, null, LIBXML_NONET);

libxml_clear_errors();
$initialUseInternalErrorsValue = libxml_use_internal_errors(true);

$status = $reader->next('sst');
var_dump($status);
var_dump(libxml_get_errors());
