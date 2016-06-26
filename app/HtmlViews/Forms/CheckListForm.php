<?php

namespace App\HtmlViews\Forms;


use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Html;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Text;
use Igorwanbarros\ViewDevelopPhp\Form\Form;

class CheckListForm extends Form
{
    public function toStart()
    {
        $this->setAction(url('check-list/salvar'))
            ->setMethod('POST')
            ->setFront('semantic')
            ->addAttributes('class', 'ui form')
            ->addField(Hidden::source('id'))
            ->addField(Text::source('titulo', 'Titulo')->setSize(9))
            ->addField(Text::source('descricao', 'Descrição')->setSize(9))
            ->addField(Html::source('btn_salvar', 'button', '<div class="hidden content">Salvar</div><div class="visible content"><i class="save icon"></i></div>')
                ->addAttributes('class', 'ui vertical black animated button')
                ->addAttributes('type', 'submit')
                ->setSize(18)
            );
    }
}