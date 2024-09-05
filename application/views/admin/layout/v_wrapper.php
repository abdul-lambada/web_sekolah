<?php

// Protecting against direct access
$this->user_login->cek_login();

// Menggabungkan seluruh file di v_wrapper
require_once('v_head.php');
require_once('v_header.php');
require_once('v_nav.php');
require_once('v_content.php');
require_once('v_footer.php');
