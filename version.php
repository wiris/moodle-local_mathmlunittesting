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
 * Version details for MathML unit testing local plugin.
 * This plugin tests the Moodle HTML purifier in order to check whether it filters out MathML or not.
 *
 * @package    local
 * @subpackage mathmlunittesting
 * @copyright  WIRIS Europe (Maths for more S.L)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2018091700;
$plugin->release = '1.0';
$plugin->requires = 2011060313;
$plugin->maturity = MATURITY_ALPHA;
$plugin->component = 'local_mathmlunittesting';
