<?php
function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}
