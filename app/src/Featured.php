<?php
    use SilverStripe\ORM\DataObject;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Assets\Image;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\AssetAdmin\Forms\UploadField;

    class Featured extends DataObject {
        private static $db = array (
            'Title' => 'Varchar',
            'Description' => 'Text',
        );

        private static $has_one = array (
            'Image' => Image::class,
            'HomePage' => HomePage::class
        );

        public function getCMSFields()
        {
            $fields = FieldList::create(
                TextField::create('Title'),
                TextareaField::create('Description'),
                $image = UploadField::create('Image'),
            );
                
            $image->setFolderName('featured-images');
            $image->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);
    
            return $fields;
        }
    }