<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package AsdfCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//

define('ASDF_INSTALL_PATH', dirname(__FILE__));
define('ASDF_SITE_PATH', ASDF_INSTALL_PATH . '/site');

require(ASDF_INSTALL_PATH.'/src/bootstrap.php');

$asf = CAsdf::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$asf->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$asf->ThemeEngineRender();
