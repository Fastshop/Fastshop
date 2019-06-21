<?php
/** @var array $css */
if($last = $css['last']){
    unset($css['last']);
    $css = array_merge($css,(array) $last);
}
?>
@foreach($css as $c)
    <link rel="stylesheet" href="{{ admin_asset("$c") }}">
@endforeach
