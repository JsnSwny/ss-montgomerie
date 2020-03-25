<?php
    use SilverStripe\Admin\ModelAdmin;
    class ContactAdmin extends ModelAdmin {
        private static $menu_title = 'Contact Submissions';
        
        private static $url_segment = 'contact';

        private static $managed_models = array (
            'Contact'
        );

        private static $menu_icon_class = 'font-icon-p-mail';
    }