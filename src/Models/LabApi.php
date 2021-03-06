<?php

namespace VetScan\Models;

class LabApi implements IModel
{
    public $links;

    public function __construct($links = [])
    {
        $this->links = $links;
    }

    public function addLink(Link $link)
    {
        $this->links[] = $link;
    }
}