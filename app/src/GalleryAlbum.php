<?php
    use SilverStripe\ORM\DataObject;
    use SilverStripe\Assets\Image;
    use SilverStripe\Assets\File;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Versioned\Versioned;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class GalleryAlbum extends DataObject
{

    private static $db = [
        'AlbumTitle' => 'Varchar',
    ];

    private static $has_one = [
        'GalleryPage' => GalleryPage::class,
    ];

    private static $has_many = [
        'GalleryItem' => GalleryItem::class,
    ];

    private static $owns = [
        'Image',
        'GalleryItem'
    ];

    private static $extensions = [
        Versioned::class,
    ];

    private static $summary_fields = array (
        'AlbumTitle' => 'Title',
    );



    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TextField::create('AlbumTitle'));

        $fields->addFieldToTab('Root.Main', GridField::create(
            'GalleryItem',
            'Add an Image to the Gallery',
            $this->GalleryItem(),
            GridFieldConfig_RecordEditor::create()
        ));

        

        return $fields;
    }

    public function FirstPicture() {
        if($this->GalleryItem()[0]->Image) {
            return $this->GalleryItem()[0]->Image;
        }
    }

    public function goBack() {
        return $this->GalleryPage()->Link();
    }

    public function Link() {
        return $this->GalleryPage()->Link('album/'.$this->ID);
    }

}