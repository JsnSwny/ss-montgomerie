<?php
    use SilverStripe\Assets\Image;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FieldList;

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

        public function getCMSFields() {
            $fields = FieldList::create(
                TextField::create('Restaurant'),
                TextField::create('Subtext'),
                TextField::create('CTAName', 'Home Button Name'),
                TextField::create('CTALink', 'Home Button Link'),

                $hero = UploadField::create('Hero')
            );
            $hero->setFolderName('hero-image');
            return $fields;
        }
    }

    class HomePageController extends PageController {
        
    }