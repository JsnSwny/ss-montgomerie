<?php
    use SilverStripe\ORM\DataObject;
    use SilverStripe\Assets\Image;
    use SilverStripe\Assets\File;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Versioned\Versioned;

class Menu extends DataObject
{

    private static $db = [
        'Title' => 'Varchar',
        'Subtext' => 'Text',
    ];

    private static $has_one = [
        'Photo' => Image::class,
        'MenuPage' => MenuPage::class,
        'MenuPDF' => File::class,
    ];

    private static $owns = [
        'Photo',
        'MenuPDF',
    ];

    private static $extensions = [
        Versioned::class,
    ];

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title'),
            TextareaField::create('Subtext'),
            $photo = UploadField::create('Photo'),
            $menu = UploadField::create('MenuPDF', 'Menu (PDF only)')
        );
            
        $menu
        ->setFolderName('menu-pdfs')
        ->getValidator()->setAllowedExtensions(array('pdf'));

        $photo->setFolderName('menu-photos');
        $photo->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }
}