<?php

namespace App\Views;

use Igorwanbarros\ViewDevelopPhp\Table\TableView as Table;

class TableView extends Table
{
    protected $template = 'templates/semantic/table.php';

    public function __construct(array $headers, $collection = null)
    {
        parent::__construct($headers, $collection);

        $this->classTable   = 'ui selectable striped table';
        $this->classTd      = 'center aligned';
        $this->classThead   = 'center aligned';
        $this->classTfooter = 'center aligned';
    }
}