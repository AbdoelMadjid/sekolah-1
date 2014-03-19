<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

// Authentication
$current_user = kuser();

if (empty($current_user)) {
    redirect(site_url('user/login'));
}
