<?php
    use SilverStripe\Assets\Image;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

    class HomePage extends Page {

        private static $db = array (
            'Restaurant' => 'Varchar',
            'Subtext' => 'Varchar',
            'CTAName' => 'Varchar',
            'CTALink' => 'Varchar',
        );

        private static $has_one = array (
            'Hero' => Image::class,
        );

        private static $has_many = [
            'Featured' => Featured::class,
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            
            $fields->addFieldToTab('Root.Featured', GridField::create(
                'Featured',
                'Feature on Home Page',
                $this->Featured(),
                GridFieldConfig_RecordEditor::create()
            ));

            $fields->addFieldToTab('Root.Main', TextField::create('Restaurant'));
            $fields->addFieldToTab('Root.Main', TextField::create('Subtext'));
            $fields->addFieldToTab('Root.Main', TextField::create('CTAName', 'Home Button Name'));
            $fields->addFieldToTab('Root.Main', TextField::create('CTALink', 'Home Button Link'));
            $fields->addFieldToTab('Root.Main', TextField::create('CTALink', 'Home Button Link'));
            $fields->removeFieldFromTab('Root.Main','Content');
            $fields->addFieldToTab('Root.Main', $hero = UploadField::create('Hero'));
            $hero->setFolderName('hero-image');


            return $fields;
        }
    }

    class HomePageController extends PageController {

    }