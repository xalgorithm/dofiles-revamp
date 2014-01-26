<?php

$aliases['live'] = array (
  'remote-host' => 'www.xalg.im',
  'remote-user' => 'x.algorithm',
  'root' => '/var/www/xalg/htdocs',
  'uri' => 'http://xalg.im',
);

$aliases['dev'] = array (
  'root' => '/Users/xalg/Sites/newXsite',
  'uri' => 'http://newxsite',
  'target-command-specific' => array(
    'sql-sync' => array(
      'no-cache' => TRUE,
      'enable' => array('devel', 'stage_file_proxy'),
      'permission' => array(
        'authenticated user' => array(
          'add' => array('access devel information', 'access environment indicator'),
        ),
        'anonymous user' => array(
          'add' => 'access environment indicator',
        ),
      ),
    ),
  ),
);
