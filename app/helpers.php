<?php

use Carbon\Carbon;

function carbonFormat($string)
{
    return Carbon::parse($string);
}