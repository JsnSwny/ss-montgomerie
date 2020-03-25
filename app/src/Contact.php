<?php
    use SilverStripe\ORM\DataObject;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TabSet;
    use SilverStripe\Forms\ReadonlyField;

    class Contact extends DataObject {
        private static $db = array (
            'SentFromName' => 'Varchar',
            'SentFromEmail' => 'Varchar',
            'Message' => 'Text'
        );

        private static $default_sort = 'Created DESC';

        private static $summary_fields = array (
            'Created.Nice' => 'Sent At',
            'SentFromName' => 'Name',
            'SentFromEmail' => 'Email',
            'Message.FirstSentence' => 'Message'
            
        );

        public function getCMSFields()
        {
            $fields = FieldList::create(TabSet::create('Root'));
            $fields->addFieldsToTab('Root.Main', array (
                ReadonlyField::create('SentFromName'),
                ReadonlyField::create('SentFromEmail'),
                ReadonlyField::create('Message')
            ));
            return $fields;
        }
    }

