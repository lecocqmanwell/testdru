<?php
//BEGIN Ansible Task: Enable verbose PHP error reporting
error_reporting(E_ALL);
ini_set('display_startup_errors', TRUE);
ini_set('display_errors', TRUE);
//END Ansible Task: Enable verbose PHP error reporting

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt files in the "core" directory.
 */

use Drupal\Core\DrupalKernel;
use Symfony\Component\HttpFoundation\Request;

$autoloader = require_once 'autoload.php';

$kernel = new DrupalKernel('dev', $autoloader);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
