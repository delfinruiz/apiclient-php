<?php

namespace Voximplant\Resources\Params;

class DelUserParams
{
	/** @var intlist The user ID list separated by the ';' symbol or the 'all' value. */
	public $user_id;

	/** @var stringlist The user name list separated by the ';' symbol that can be used instead of user_id. */
	public $user_name;

	/** @var number Delete the specified users bound to the application ID. It is required if the user_name is specified. */
	public $application_id;

	/** @var string Delete the specified users bound to the application name. Could be used instead of the application_id parameter. */
	public $application_name;
}