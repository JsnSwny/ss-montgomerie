<?php
    use SilverStripe\Assets\Image;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FieldList;

    class HomePage extends Page {

        private static $db = array (
            'Featured_1_Title' => 'Varchar',
            'Featured_1_Description' => 'Text',
            'Featured_2_Title' => 'Varchar',
            'Featured_2_Description' => 'Text',


            'Restaurant' => 'Varchar',
            'Subtext' => 'Varchar',
            'CTAName' => 'Varchar',
            'CTALink' => 'Varchar',
        );

        private static $has_one = array (
            'Hero' => Image::class,
            'Featured_1_Image' => Image::class,
            'Featured_2_Image' => Image::class,
        );

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Featured', TextField::create('Featured_1_Title', 'Featured #1 Title'));
            $fields->addFieldToTab('Root.Featured', TextField::create('Featured_1_Description', 'Featured #1 Description'));
            $fields->addFieldToTab('Root.Featured', UploadField::create('Featured_1_Image', 'Featured #1 Image'));
            
            $fields->addFieldToTab('Root.Featured', TextField::create('Featured_2_Title', 'Featured #2 Title'));
            $fields->addFieldToTab('Root.Featured', TextField::create('Featured_2_Description', 'Featured #2 Description'));
            $fields->addFieldToTab('Root.Featured', UploadField::create('Featured_2_Image', 'Featured #2 Image'));

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