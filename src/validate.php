<?php
declare(strict_types=1);

/**
 * ITCS333 A4 — pure validation functions.
 * Unit-tested by tests/UnitTest.php.
 */

function validate_required(string $v): bool
{
    return trim($v) !== '';
}

function validate_email(string $v): bool
{
    return filter_var($v, FILTER_VALIDATE_EMAIL) !== false;
}

function validate_length(string $v, int $min, int $max): bool
{
    $len = mb_strlen($v, 'UTF-8');
    return $len >= $min && $len <= $max;
}