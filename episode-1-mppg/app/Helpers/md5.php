<?php

/**
 * Convert any character string to mysql5 password hash (PASSWORD())
 * @param string $pass
 * @param boolean $hex
 * @return string
 */
function toMD5($pass, $hex = true)
{
  $pass_st1 = sha1($pass, true);
  $output = sha1($pass_st1, !$hex);
  return '*' . strtoupper($output);
}