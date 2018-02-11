<?php
$_SERVER["DOCUMENT_ROOT"] = '/home/bitrix/www';
define("NOT_CHECK_PERMISSIONS",true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

Bitrix\Main\Loader::includeSharewareModule("bxup.productioncalendar");

$result = (new BxUp\ProductionCalendar)
	->setYear(date('Y'))
	->setMonth(date('m'))
	->getWorkingDays(1, date('d'))
	->count('work');

echo "<pre>"; print_r($result); echo "</pre>";

