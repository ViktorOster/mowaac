<?php

/**
 * This file defines the admin settings for this plugin
 *
 * @package   assignsubmission_mowaac
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$settings->add(new admin_setting_configcheckbox("assignsubmission_mowaac/default",
    new lang_string("default", "assignsubmission_mowaac"),
    new lang_string("default_help", "assignsubmission_mowaac"), 0));

$settings->add(new admin_setting_configtext("assignsubmission_mowaac/wsbase",
    new lang_string("wsbase", "assignsubmission_mowaac"),
    new lang_string("wsbase_help", "assignsubmission_mowaac"), ""));
