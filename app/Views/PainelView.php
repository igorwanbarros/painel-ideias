<?php

namespace App\Views;


use Igorwanbarros\ViewDevelopPhp\Panel\PanelView;

class PainelView extends PanelView
{
    protected $template = 'templates/semantic/panel.php';

    public function __construct($title = null, $body = null, $footer = null)
    {
        parent::__construct($title, $body, $footer);
        $this->boxToolsCollapse = true;
    }
}