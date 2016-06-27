<?php


namespace App\HtmlViews\Forms;


use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Html;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Text;
use Igorwanbarros\ViewDevelopPhp\Form\Form;

class ColunasForm extends Form
{
    public function toStart()
    {
        $this->setMethod('POST')
            ->setAction(url('colunas/salvar'))
            ->addAttributes('class', 'ui form')
            ->setFront('semantic')
            ->addField(Hidden::source('id'))
            ->addField(Text::source('nome', 'Título')->setSize(9)->addAttributes('autofocus', ''))
            ->addField(Text::source('painel', 'Painel')->setSize(9))
            ->addField(Html::source('btn_salvar', 'button', '<div class="hidden content">Salvar</div><div class="visible content"><i class="save icon"></i></div>')
                ->addAttributes('class', 'ui vertical black animated button')
                ->addAttributes('type', 'submit')
                ->setSize(18)
            );

        return $this;
    }
}