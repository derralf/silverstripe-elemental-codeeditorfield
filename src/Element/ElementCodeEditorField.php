<?php

namespace Derralf\Elements\CodeEditorField\Element;


use Derralf\Elements\ImageTeaser\Model\ElementImageTeaser;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Core\Config\Config;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldAddExistingAutocompleter;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\Tab;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\SSViewer;
use SwiftDevLabs\CodeEditorField\Forms\CodeEditorField;
use Symbiote\GridFieldExtensions\GridFieldAddExistingSearchButton;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

class ElementCodeEditorField extends BaseElement
{


    public function getType()
    {
        return self::$singular_name;
    }

    private static $icon = 'font-icon-block-content';

    private static $table_name = 'ElementCodeEditorField';

    private static $singular_name = 'CodeEditor-Field';
    private static $plural_name = 'CodeEditor-Fields';
    private static $description = '';

    private static $db = [
        'HTML'             => 'HTMLText'
    ];


    private static $has_one = [
    ];

    private static $has_many = [
    ];

    private static $many_many = [
    ];

    // this adds the SortOrder field to the relation table.
    private static $many_many_extraFields = [
    ];

    private static $belongs_many_many = [];

    private static $owns = [
        //'Teasers'
    ];

    private static $inline_editable = false;

    private static $defaults = [
    ];

    private static $colors = [];


    private static $field_labels = [
        'Title' => 'Titel',
        'Sort' 	=>	'Sortierung'
    ];

    public function updateFieldLabels(&$labels)
    {
        parent::updateFieldLabels($labels);
        $labels['HTML'] = _t(__CLASS__ . '.ContentLabel', 'Content');
    }

    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function ($fields) {


            // Style: Description for default style (describes Layout thats used, when no special style is selected)
            $Style = $fields->dataFieldByName('Style');
            $StyleDefaultDescription = $this->owner->config()->get('styles_default_description', Config::UNINHERITED);
            if ($Style && $StyleDefaultDescription) {
                $Style->setDescription($StyleDefaultDescription);
            }

            $CodeEditorField = new CodeEditorField('HTML', 'Code');
            $code_mode = ($this->config()->get('defaultProgrammingLanguageMode')) ? $this->config()->get('defaultProgrammingLanguageMode') : 'ace/mode/html';
            $myCodeEditorField->setMode($code_mode);
            $fields->replaceField('HTML', $CodeEditorField);



        });
        $fields = parent::getCMSFields();

        return $fields;
    }
















}
