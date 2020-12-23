<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component "assignsubmission_mojec", language "en"
 *
 * @package   assignsubmission_mojec
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 //information about the plugin will be displayed through these strings
$string['pluginname'] = 'Web Application Assignment Corrector';  
$string["mowaac"] = "Web Application Assignment Corrector";
$string["mowaac_submissions_fa"] = "Web Application Assignment Corrector Submissions";
$string["mowaac_tests_fa"] = "Web Application Assignment Corrector Tests";
$string['enabled'] = "Web Application Assignment Corrector";
$string['enabled_help'] = "If enabled, students are able to link to their live web application and upload one ZIP file containing their Web application source code which will then be tested so that they fulfill the requirements the teacher specified.";
$string["setting_tests"] = "Tests";
$string["setting_tests_help"] = "A single ZIP file containg the requirements the students' submissions should be tested against.";
$string["wsbase_not_set"] = "The Web application assignment corrector's web service base URL is not configured.";
$string["unexpectederror"] = "An unexpected error occured.";
$string["badrequesterror"] = "The server could not process the request. Probably the submitted ZIP file is corrupted.";
$string["mojec_submission"] = "Excercise ZIP";
$string["mojec_submission_help"] = "A single ZIP file containing all the relevant files and resources for this exercise.";
$string["no_testfile_warning"] = "Submission type is \"Web Application Assignment Corrector\" but no testfiles are uploaded.";

// Admin Settings
$string["default"] = "Enabled by default";
$string["default_help"] = "If set, this submission method will be enabled by default for all new assignments.";
$string["wsbase"] = "Base URL to the web service";
$string["wsbase_help"] = "The base URL to the web service, where all the tests and submissions will be sent and evaluated.";