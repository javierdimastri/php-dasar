<?php

function otherFileFunction (string $name, string $otherName): string
{
    return "Hello $name and $otherName" . PHP_EOL;
}

function otherAnonFunction (string $type): string
{
    return "Anon type is $type" . PHP_EOL;
};