<?php

use Carbon\Carbon;


function presentDate($date)
{
    return Carbon::parse($date)->format('d.m.Y');
}