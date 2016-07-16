<?php


namespace App\HtmlViews\Forms;


use App\HtmlViews\Forms\Elements\Slider;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Html;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Text;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\TextArea;

class NotasForm extends FormLumen
{
    public function toStart()
    {
        $this->setMethod('POST')
            ->setAction(url('notas/salvar'))
            ->addField(Hidden::source('id'))
            ->addField(Text::source('titulo', 'Título')->setSize(16)->addAttributes('autofocus', ''))
            ->addField(TextArea::source('descricao', 'Descrição')->setSize(16))
            ->addField(Slider::source('realizado', 'Realizado'))
            ->addField(Html::source('btn_salvar', 'button', '<div class="hidden content">Salvar</div><div class="visible content"><i class="save icon"></i></div>')
                ->addAttributes('class', 'ui vertical black animated button')
                ->addAttributes('type', 'submit')
                ->setSize(18)
            );

        return $this;
    }
}