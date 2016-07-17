<?php


namespace App\HtmlViews\Forms;


use Igorwanbarros\ViewDevelopPhp\Form\Field;
use Igorwanbarros\ViewDevelopPhp\Form\Fields\Hidden;
use Igorwanbarros\ViewDevelopPhp\Form\Form;

class FormLumen extends Form
{

    protected $template     = 'templates/form-semantic.php';
    protected $enableToken  = true;
    protected $rules        = [];
    protected $errors;


    public function __construct($action = '', $method = 'GET', array $attributes = [])
    {
        parent::__construct($action, $method, $attributes);

        if ($this->enableToken) {
            $this->addField(Hidden::source('_token', '', csrf_token()));
        }

        $this->addAttribute('class', 'ui form')
            ->setFront('semantic')
            ->setBasePath(base_path('app/HtmlViews/Forms/'));
    }


    public function setAction($action)
    {
        $this->action = url($action);

        return $this;
    }


    public function addField(Field $fields)
    {
        parent::addField($fields);

        if ('_token' != $fields->getName()) {
            $this->rules[$fields->getName()] = '';
        }

        if ($fields->getRules()) {
            $this->addRules($fields->getName(), $fields->getRules());
        }

        return $this;
    }


    public function getRules()
    {
        return $this->rules;
    }


    public function addRules($field, $rules)
    {
        if (array_key_exists($field, $this->rules)) {
            $this->rules[$field] .= (strpos($rules, '|') !== false ? '' : '|') . $rules;
        }

        return $this;
    }


    public function getErrors()
    {
        return $this->errors;
    }


    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }
}