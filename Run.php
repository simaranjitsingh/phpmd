<?php
include('vendor/autoload.php');

require_once 'PHPMD/AbstractRule.php';

class Com_Example_Rule_NoFunctions extends \PHPMD\AbstractRule
{
    public function apply(\PHPMD\AbstractNode $node)
    {
        echo 'xxx'; exit;
        // Check constraints against the given node instance
    }
}

