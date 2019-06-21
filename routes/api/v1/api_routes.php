<?php

ApiRoute::get('/version', function() {
    return ['version' => 1];
});
