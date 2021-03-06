<?php

namespace VetScan\Models\LabResults;

use VetScan\Models\IModel;

class LabResultItems implements IModel
{
    public $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function addItem(LabResultItem $item)
    {
        $this->items[] = $item;
    }
}