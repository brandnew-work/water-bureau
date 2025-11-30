<?php

function get_info($str = 'tel')
{
  return match ($str) {
    'tel'  => "0120-212-216",
    'line' => "#",
    default => null,
  };
}
