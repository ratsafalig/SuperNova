<?php

require_once('supernova.php');

require_once('db_mysql.php');
classSupernova::$db = new db_mysql();
classSupernova::init_main_db();

require_once('core_classes.php');
require_once('cache.php');
require_once('locale.php');
require_once('template.php');
require_once('functions_template.php');
require_once('module.php');
require_once('auth.php');
// require_once('auth_provider.php');
require_once('auth_basic.php');
require_once('sn_module_payment.php');
require_once('user_options.php');

