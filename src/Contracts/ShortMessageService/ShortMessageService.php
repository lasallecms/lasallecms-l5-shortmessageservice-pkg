<?php

namespace Lasallecms\Shortmessageservice\Contracts\ShortMessageService;

/**
 *
 * Twilio package for the LaSalle Content Management System, based on the Laravel 5 Framework
 * Copyright (C) 2015 - 2016  The South LaSalle Trading Corporation
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @package    Twilio package for the LaSalle Content Management System
 * @link       http://LaSalleCMS.com
 * @copyright  (c) 2015 - 2016, The South LaSalle Trading Corporation
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 * @author     The South LaSalle Trading Corporation
 * @email      info@southlasalle.com
 *
 */

interface ShortMessageService
{
    /**
     * Send text message
     *
     * @param string  $phoneCountryCode  The user's cell phone country code
     * @param string  $phoneNumber       The user's cell phone number
     * @param string  $message           The message to send via SMS
     * @return void
     */
    public function sendSMS($phoneCountryCode, $phoneNumber, $message);

    /**
     * The cell phone number to send the SMS, in the format the SMS provider requires
     *
     * @param string  $phoneCountryCode  The user's cell phone country code
     * @param string  $phoneNumber       The user's cell phone number
     * @return string
     */
    public function buildPhoneNumber($phoneCountryCode, $phoneNumber);
}