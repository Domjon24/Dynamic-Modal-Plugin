<?php

add_shortcode('modal', 'show_modal');

function show_modal() {
   include MY_PLUGIN_PATH . 'modal-html.html';
}