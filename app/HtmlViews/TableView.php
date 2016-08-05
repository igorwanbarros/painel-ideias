<?php

namespace App\HtmlViews;

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


    public function render($template = null)
    {
        $this->collection = $this->collection->paginate(10);
        $paginator = view('html-element.paginator')->with('paginator', $this->collection);

        $this->setPaginator($paginator->render());

        return parent::render($template);
    }
}