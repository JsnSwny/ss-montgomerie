<?php
    use SilverStripe\Assets\Image;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use SilverStripe\Forms\TextareaField;

    class MenuPage extends Page {

        private static $description = "Page containg list of menus";

        private static $db = array (
            'HeaderTitle' => 'Varchar',
            'Subtitle' => 'Text'
        );

        private static $has_one = array (
            'Photo' => Image::class,
        );

        private static $has_many = [
            'Menus' => Menu::class,
        ];
    
        private static $owns = [
            'Menus',
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Menus', GridField::create(
                'Menus',
                'Menus on this page',
                $this->Menus(),
                GridFieldConfig_RecordEditor::create()
            ));

            $fields->addFieldToTab('Root.Main', TextField::create('HeaderTitle', 'Header Title'));
            $fields->addFieldToTab('Root.Main', TextareaField::create('Subtitle'));
            $fields->addFieldToTab('Root.Main', $photo = UploadField::create('Photo'));
            $photo->setFolderName('menu-photos');
            $photo->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);
            $fields->removeFieldFromTab('Root.Main','Content');
            return $fields;
        }
    
    }

    class MenuPageController extends PageController {
        
    }