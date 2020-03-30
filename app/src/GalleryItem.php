<?php
    use SilverStripe\ORM\DataObject;
    use SilverStripe\Assets\Image;
    use SilverStripe\Assets\File;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Versioned\Versioned;

class GalleryItem extends DataObject
{

    private static $db = [
        'Title' => 'Varchar',
    ];

    private static $has_one = [
        'Image' => Image::class,
        'GalleryAlbum' => GalleryAlbum::class,
    ];

    private static $owns = [
        'Image',
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $summary_fields = array (
        'Title' => 'Title',
    );

    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title'),
            $image = UploadField::create('Image'),
        );

        $image->setFolderName('gallery-images');
        $image->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }
}