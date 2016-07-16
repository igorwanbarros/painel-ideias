<?php


namespace App\HtmlViews\Forms;


use App\HtmlViews\Forms\Elements\SubmitButton;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Text;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;

class TagForm extends FormLumen
{
    public function toStart()
    {
        $this->setMethod('POST')
            ->setAction(url('tags/salvar'))
            ->addField(Hidden::source('id'))
            ->addField(Text::source('nome', 'Tag')->setSize(9)->addAttributes('autofocus', ''))
            ->addField(SubmitButton::source('salvar'));

        return $this;
    }
}