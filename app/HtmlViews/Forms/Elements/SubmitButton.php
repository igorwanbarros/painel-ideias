<?php


namespace App\HtmlViews\Forms\Elements;


use Igorwanbarros\ViewDevelopPhp\Form\Fields\Button;

class SubmitButton extends Button
{

    public function __construct($name = 'salvar', $type = null, $value = null)
    {
        parent::__construct($name, $type, $value);

        if (strpos($name, 'salvar') !== false) {
            $this->value = '<div class="hidden content">Salvar</div><div class="visible content"><i class="save icon"></i></div>';
        }


        $this->addAttributes('class', 'ui vertical black animated button')
            ->addAttributes('type', 'submit')
            ->setSize(16);
    }
}