<?php

require_once 'activityreport.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function activityreport_civicrm_config(&$config) {
  _activityreport_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function activityreport_civicrm_xmlMenu(&$files) {
  _activityreport_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function activityreport_civicrm_install() {
  _activityreport_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function activityreport_civicrm_uninstall() {
  _activityreport_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function activityreport_civicrm_enable() {
  _activityreport_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function activityreport_civicrm_disable() {
  _activityreport_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function activityreport_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _activityreport_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function activityreport_civicrm_managed(&$entities) {
  _activityreport_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function activityreport_civicrm_caseTypes(&$caseTypes) {
  _activityreport_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function activityreport_civicrm_angularModules(&$angularModules) {
_activityreport_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function activityreport_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _activityreport_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implementation of hook_civicrm_pageRun
 */
function activityreport_civicrm_pageRun($page) {
  if (get_class($page) === 'CRM_Activityreport_Page_PivotReport') {
    CRM_Core_Resources::singleton()
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'packages/d3/d3.min.js', 1, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'packages/c3/c3.min.js', 1, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'packages/pivottable/pivot.min.js', 1, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'packages/pivottable/c3_renderers.min.js', 2, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'packages/pivottable-cc/export_renderers.js', 2, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'packages/moment.js/moment.min.js', 2, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'packages/bootstrap-sweetalert/sweetalert.min.js', 3, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'js/PivotReport.Filter.js', 4, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'js/PivotReport.Config.js', 5, 'html-header')
      ->addScriptFile('uk.co.compucorp.civicrm.activityreport', 'js/PivotReport.PivotTable.js', 6, 'html-header');
    CRM_Core_Resources::singleton()
      ->addStyleFile('uk.co.compucorp.civicrm.activityreport', 'packages/c3/c3.min.css', 1)
      ->addStyleFile('uk.co.compucorp.civicrm.activityreport', 'packages/pivottable/pivot.min.css', 2)
      ->addStyleFile('uk.co.compucorp.civicrm.activityreport', 'packages/bootstrap-sweetalert/sweetalert.min.css', 3)
      ->addStyleFile('uk.co.compucorp.civicrm.activityreport', 'css/style.css', 3);
  }
}

/**
 * Implementation of hook_civicrm_permission
 *
 * @param array $permissions
 * @return void
 */
function activityreport_civicrm_permission(&$permissions) {
  $prefix = ts('CiviCRM Reports') . ': '; // name of extension or module
  $permissions += array(
    'access CiviCRM pivot table reports' => $prefix . ts('access CiviCRM pivot table reports'),
  );
}

/**
 * Implements hook_civicrm_entityTypes().
 */
function activityreport_civicrm_entityTypes(&$entityTypes) {
  $entityTypes[] = [
    'name'  => 'ActivityReportConfig',
    'class' => 'CRM_Activityreport_DAO_ActivityReportConfig',
    'table' => 'civicrm_pivotreport_config',
  ];
}
