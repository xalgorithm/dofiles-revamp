<?php

$aliases['live'] = array (
  'remote-host' => 'server.westkingdom.org',
  'remote-user' => 'www-dev',
  'root' => '/srv/www/westkingdom.org/htdocs',
  'uri' => 'http://westkingdom.org',
);

$aliases['stage'] = array (
  'remote-host' => 'server.westkingdom.org',
  'remote-user' => 'www-dev',
  'root' => '/srv/www/stage.westkingdom.org/htdocs',
  'uri' => 'http://stage.westkingdom.org',
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

$aliases['dev'] = array (
  'root' => '/Users/xalg/Sites/dev.westkingdom.org/htdocs',
  'uri' => 'http://dev.westkingdom.org',
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
