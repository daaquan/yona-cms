<?php
 /**
 * @copyright Copyright (c) 2011 - 2014 Oleksandr Torosh (http://wezoom.net)
 * @author Oleksandr Torosh <web@wezoom.net>
 */

namespace Cms\Form;

use Application\Form\Form;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\Text;

class LanguageForm extends Form
{

    public function initialize()
    {
        $this->add((new Text('iso', array('data-description' => 'Код языка по стандарту ISO. Например: en', 'required' => true)))->setLabel('ISO'));
        $this->add((new Text('name', array('data-description' => 'Например: English', 'required' => true)))->setLabel('Имя'));
        $this->add((new Text('url', array('data-description' => 'Приставка в URL-строке страницы. Например: en', 'required' => true)))->setLabel('URL'));
        $this->add((new Text('sortorder'))->setLabel('Порядковый номер'));
        $this->add((new Check('primary'))->setLabel('Основной язык'));
    }

} 