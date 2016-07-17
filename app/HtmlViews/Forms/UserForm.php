<?php


namespace App\HtmlViews\Forms;

use App\HtmlViews\Forms\Elements\SubmitButton;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Text;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Password;


class UserForm extends FormLumen
{
    public function toStart()
    {
        $this->setAction('usuario/salvar')
            ->setMethod('POST')
            ->addField(Hidden::source('id'))
            ->addField(
                Text::source('name', 'Nome')
                    ->addAttributes('autofocus', 'autofocus')
                    ->setSize(8)
                    ->addRule('required|max:255')
            )
            ->addField(
                Text::source('email', 'Email')
                    ->setSize(8)
                    ->addRule('required|max:255|email')
            )
            ->addField(
                Password::source('password', 'Senha')
                    ->addRule('required_with:re_password|same:password')
            )
            ->addField(
                Password::source('re_password', 'Redigite sua Senha')
                    ->addRule('required_with:password|same:password')
            )
            ->addField(SubmitButton::source('salvar'));

        return $this;
    }


    public function fill($data)
    {
        if (isset($data->password)) {
            $data->password = '';
        }
        if (isset($data['password'])) {
            $data['password'] = '';
        }
        if (isset($data->re_password)) {
            $data->re_password = '';
        }
        if (isset($data['re_password'])) {
            $data['re_password'] = '';
        }

        return parent::fill($data);
    }
}