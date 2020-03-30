<?php
    use SilverStripe\Assets\Image;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Control\HTTPRequest;

    class GalleryPage extends Page {
        private static $description = "Gallery containing albums of images";
        private static $has_many = [
            'GalleryAlbum' => GalleryAlbum::class,
        ];
    
        private static $owns = [
            'GalleryAlbum',
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', GridField::create(
                'GalleryAlbum',
                'Add a Gallery Image',
                $this->GalleryAlbum(),
                GridFieldConfig_RecordEditor::create()
            ));
            return $fields;
        }
    
    }

    class GalleryPageController extends PageController {
        private static $allowed_actions = array (
            'album'
        );

        public function album(HTTPRequest $request) {
            $album = GalleryAlbum::get()->byID($request->param('ID'));
            if(!$album) {
                return $this->httpError(404, 'That album could not be found');
            }
 

            return array (
                'GalleryAlbum' => $album,
            );
        }


 
    }