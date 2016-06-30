<?php


namespace app\HtmlViews\Forms\Elements;


use Igorwanbarros\ViewDevelopPhp\Form\Field;

class Slider extends Field
{
    protected $type = 'checkbox';


    protected function _createFieldHtml()
    {
        $field = parent::_createFieldHtml()
            ->addAttributeRaw('tabindex', '0')
            ->addAttributeRaw('class', 'hidden');

        return $field;
    }


    public function render()
    {
        $field = parent::render();

        return "<div class=\"ui slider checkbox\">{$field}<label></label></div>";
    }
}