<?php


namespace App\HtmlViews\Forms;


use Igorwanbarros\ViewDevelopPhp\Form\Fields\Html;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Text;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\TextArea;

class IdeiasForm extends FormLumen
{
    public function toStart()
    {
        $this->setAction(url('ideias/salvar'))
            ->setMethod('POST')
            ->addField(Html::source('meu_titulo', 'h3', 'Titulo Bla')
                ->addAttributes('class', 'ui dividing header')
                ->setSize(16)
            )
            ->addField(Hidden::source('id'))
            ->addField(Text::source('nome', 'Nome')->setSize(16))
            ->addField(TextArea::source('descricao', 'Descrição')->setSize(16))
            ->addField(Html::source('btn_salvar', 'button', '<div class="hidden content">Salvar</div><div class="visible content"><i class="save icon"></i></div>')
                ->addAttributes('class', 'ui vertical black animated button')
                ->addAttributes('type', 'submit')
                ->setSize(18)
            );

        return $this;
    }
}