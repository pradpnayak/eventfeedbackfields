<?php

require_once 'eventfeedbackfields.civix.php';
// phpcs:disable
use CRM_Eventfeedbackfields_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function eventfeedbackfields_civicrm_config(&$config) {
  _eventfeedbackfields_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function eventfeedbackfields_civicrm_xmlMenu(&$files) {
  _eventfeedbackfields_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function eventfeedbackfields_civicrm_install() {
  _eventfeedbackfields_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function eventfeedbackfields_civicrm_postInstall() {
  _eventfeedbackfields_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function eventfeedbackfields_civicrm_uninstall() {
  _eventfeedbackfields_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function eventfeedbackfields_civicrm_enable() {
  _eventfeedbackfields_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function eventfeedbackfields_civicrm_disable() {
  _eventfeedbackfields_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function eventfeedbackfields_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _eventfeedbackfields_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function eventfeedbackfields_civicrm_managed(&$entities) {
  _eventfeedbackfields_civix_civicrm_managed($entities);
  $entities[] = [
    'module' => CRM_Eventfeedbackfields_ExtensionUtil::LONG_NAME,
    'name' => 'eventfeedbackfields_og_event',
    'entity' => 'OptionGroup',
    'update' => 'never',
    'params' => [
      'title' => ts('Registered Events'),
      'name' => 'eventfeedbackfields_og_event',
      'options' => ['match' => ['name']],
      'is_active' => 1,
      'is_reserved' => TRUE,
      'version' => 3,
    ],
  ];
  $entities[] = [
    'module' => CRM_Eventfeedbackfields_ExtensionUtil::LONG_NAME,
    'name' => 'eventfeedbackfields_cg_event',
    'entity' => 'CustomGroup',
    'update' => 'never',
    'params' => [
      'version' => 3,
      'name' => 'eventfeedbackfields_cg_event',
      'title' => ts('Event Feedback'),
      'extends' => 'Contact',
      'style' => 'Tab with table',
      'is_active' => TRUE,
      'is_multiple' => TRUE,
    ],
  ];
  $entities[] = [
    'module' => CRM_Eventfeedbackfields_ExtensionUtil::LONG_NAME,
    'name' => 'eventfeedbackfields_cf_event',
    'entity' => 'CustomField',
    'update' => 'never',
    'params' => [
      'version' => 3,
      'name' => 'eventfeedbackfields_cf_event',
      'label' => ts('Event'),
      'data_type' => 'String',
      'html_type' => 'Select',
      'is_active' => TRUE,
      'in_selector' => TRUE,
      'text_length' => 255,
      'weight' => 1,
      'option_type' => 0,
      'option_group_id' => 'eventfeedbackfields_og_event',
      'custom_group_id' => 'eventfeedbackfields_cg_event',
    ],
  ];
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function eventfeedbackfields_civicrm_caseTypes(&$caseTypes) {
  _eventfeedbackfields_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function eventfeedbackfields_civicrm_angularModules(&$angularModules) {
  _eventfeedbackfields_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function eventfeedbackfields_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _eventfeedbackfields_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function eventfeedbackfields_civicrm_entityTypes(&$entityTypes) {
  _eventfeedbackfields_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function eventfeedbackfields_civicrm_themes(&$themes) {
  _eventfeedbackfields_civix_civicrm_themes($themes);
}

function eventfeedbackfields_civicrm_preProcess($formName, &$form) {
  $contactId = NULL;
  switch ($formName) {
    case 'CRM_Profile_Form_Edit' :
      $contactId = $form->getVar('_id');
      break;
    case 'CRM_Contact_Form_CustomData' :
      $contactId = $form->_entityId;
      break;
  }

  if ($contactId) {
    Civi::$statics[CRM_Eventfeedbackfields_ExtensionUtil::LONG_NAME]['contactId'] = $contactId;
  }
}

/**
 * Implements hook_civicrm_fieldOptions().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_fieldOptions
 */
function eventfeedbackfields_civicrm_fieldOptions($entity, $field, &$options, $params) {
  if ($entity == 'Contact' && strpos($field, 'custom_') !== FALSE) {
    $customfieldId = civicrm_api3('CustomField', 'getvalue', [
      'return' => 'id',
      'custom_group_id' => 'eventfeedbackfields_cg_event',
      'name' => 'eventfeedbackfields_cf_event',
    ]);
    if ("custom_{$customfieldId}" == $field) {
      $contactId = _eventfeedbackfields_civicrm_getContactID();
      if (empty($contactId)) {
        return;
      }
      $query = "
        SELECT e.id, e.title
        FROM civicrm_event e
        INNER JOIN civicrm_participant cp
          ON cp.event_id = e.id
        INNER JOIN civicrm_participant_status_type cpst
          ON cpst.id = cp.status_id
        WHERE cp.contact_id = %1 AND cpst.name = 'Registered'
        AND e.is_active = 1
        GROUP BY e.id
        ORDER BY e.title;
      ";
      $dao = CRM_Core_DAO::executeQuery($query, [1 => [$contactId, 'Integer']]);
      $options = [];
      while ($dao->fetch()) {
        $options[$dao->id] = $dao->title;
      }
    }
  }
}

function _eventfeedbackfields_civicrm_getContactID() {
  $cid = CRM_Utils_Request::retrieve('cid', 'Positive');
  if (!empty($cid)) {
    return $cid;
  }
  return Civi::$statics[CRM_Eventfeedbackfields_ExtensionUtil::LONG_NAME]['contactId'] ?? NULL;
}

function eventfeedbackfields_civicrm_alterCustomFieldDisplayValue(&$displayValue, $value, $entityId, $fieldInfo) {
  if ($fieldInfo['name'] == 'eventfeedbackfields_cf_event' && $value) {
    try {
      $displayValue = civicrm_api3('Event', 'getvalue', [
        'return' => "title",
        'id' => $value,
      ]);
    }
    catch (Exception $e) {
    }
  }
}
