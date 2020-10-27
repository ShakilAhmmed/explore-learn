<?php

namespace App\Strategy;

class Sorting
{
    private $sorting;

    public function __construct(SortingInterface $sorting)
    {
        $this->sorting = $sorting;
    }

    public function setStrategy(SortingInterface $sorting)
    {
        $this->sorting = $sorting;
    }

    public function sort(array $data)
    {
        print_r($this->sorting->sort($data));
    }
//    public function sort($type)
//    {
//        switch ($type) {
//            case "a":
//                echo "Sorting with a asort";
//                break;
//            case "r":
//                echo "Sorting with rsort";
//                break;
//            case "k":
//                echo "Sorting with ksort";
//                break;
//            case "ar":
//                echo "Sorting with arsort";
//                break;
//            case "kr":
//                echo "Sorting with krsort";
//                break;
//            default:
//                echo "normal sort";
//        }
//    }
}


