<?php
    use SilverStripe\ORM\DataObject;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TimeField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TabSet;

    class OpeningTime extends DataObject {
        private static $db = array (
            'Day' => 'Varchar',
            'OpenTime' => 'Time',
            'CloseTime' => 'Time',
        );

        private static $summary_fields = array (
            'Day' => 'Day',
            'OpenTime' => 'Opening Time',
            'CloseTime' => 'Closing Time',     
        );

        public function getCMSFields()
        {
            $fields = FieldList::create(TabSet::create('Root'));
            $fields->addFieldsToTab('Root.OpeningTimes', array (
                TextField::create('Day'),
                TimeField::create('OpenTime', 'Opening Time'),
                TimeField::create('CloseTime', 'Closing Time')
            ));
            return $fields;
        }
    }