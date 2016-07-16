<?php


namespace App\HtmlViews\Forms;


use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Form;

class FormLumen extends Form
{
    protected $enableToken = true;

    public function __construct($action = '', $method = 'GET', array $attributes = [])
    {
        parent::__construct($action, $method, $attributes);

        if ($this->enableToken) {
            $this->addField(Hidden::source('_token', '', csrf_token()));
        }

        $this->addAttributes('class', 'ui form')
            ->setFront('semantic');
    }
}