<?php

use DBA\AgentBinary;
use DBA\QueryFilter;

require_once(dirname(__FILE__) . "/../../inc/load.php");

echo "Apply updates...\n";

echo "Create new permissions... ";
// TODO: update columns and create default no-rights group to put all other users there
// Maybe have some default permissions groups
echo "OK\n";

echo "Update complete!\n";
