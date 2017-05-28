<?php

function active($link)
{
    return Request::is($link) ? 'active' : '';
}