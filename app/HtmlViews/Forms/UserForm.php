<?php


namespace App\HtmlViews\Forms;

use App\HtmlViews\Forms\Elements\SubmitButton;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Text;


class UserForm extends FormLumen
{
    public function toStart()
    {
        $this->setAction('usuario/salvar')
            ->setMethod('POST')
            ->addField(Hidden::source('id'))
            ->addField(Text::source('name', 'Nome')->addAttributes('autofocus', 'autofocus'))
            ->addField(Text::source('email', 'Email'))
            ->addField(SubmitButton::source('salvar'))
            ->addRules('name', 'required|max:255')
            ->addRules('email', 'required|max:255|email')
        ;

        return $this;
    }
}