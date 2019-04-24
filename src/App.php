<?php

namespace LeoBeal\Project;


use LeoBeal\Project\Services\FilterService;

class App
{
    public function boot(array $argv)
    {
        if (!isset($argv)) {
            echo "console arguments disabled";
            exit;
        }

        if (!isset($argv[1])) {
            echo "missing argument";
            exit;
        }

        switch ($argv[1]) {
            case 'price_filter':
                //json encode
                // need to implement JsonSerializable
                var_dump((new FilterService())->filter($argv[2]));
                break;

            default:
                echo "Not a valid input";
                break;
        }
    }
}