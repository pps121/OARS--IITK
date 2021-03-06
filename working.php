<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */

/**
 * Root directory of Drupal installation.
 */
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';

drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
$results = module_invoke_all('helloworld');
var_dump($results);

###menu_execute_active_handler();


echo '<p>Done! This is a Working php file</p>';
echo '<p>Difference => FunctionCall : functionName() </p>';
echo '<p>and for calling a hook : module_invole_all(functionName) </p>';
