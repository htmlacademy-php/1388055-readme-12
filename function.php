<?php
namespace HexletBasics\Dates\Timestamp;
function  getTheNumberOfHours  (date)
{
const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;
function getYear($timestamp)
return 2019 + (int) floor($timestamp / SECONDS_IN_YEAR);
}
?>