<?php
use SilverStripe\Admin\ModelAdmin;

class MyAdmin extends ModelAdmin{
    private static $managed_models = [
        'SkippitSigndb'
    ];
    private static $url_segment = 'skippit-db';
    private static $menu_title = 'SkippitDB';
    public function getEditForm($id = null, $fields = null){
        $form = parent::getEditForm($id, $fields);
        $gridField = $form->Fields()->fieldByName($this->sanitiseClassName($this->modelClass));
        $gridField->getConfig()->removeComponentsByType('GridFieldAddNewButton');
        $gridField->getConfig()->removeComponentsByType('GridFieldEditButton');
        return $form;
    }
}