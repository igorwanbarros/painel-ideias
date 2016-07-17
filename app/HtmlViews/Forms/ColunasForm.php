<?php


namespace App\HtmlViews\Forms;


use App\HtmlViews\Forms\Elements\SubmitButton;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Text;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Select;

class ColunasForm extends FormLumen
{
    public function toStart()
    {
        $this->setMethod('POST')
            ->setAction(url('colunas/salvar'))
            ->addField(Hidden::source('id'))
            ->addField(
                Text::source('nome', 'Título')
                    ->setSize(8)
                    ->addAttributes('autofocus', 'autofocus')
            )
            ->addField(
                Select::source('painel', 'Painel')
                    ->setSize(8)
                    ->addOptions(['NOTAS' => 'Notas'])
            )
            ->addField(SubmitButton::source('salvar'));

        return $this;
    }
}