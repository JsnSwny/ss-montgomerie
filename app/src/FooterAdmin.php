<?php
    use SilverStripe\Admin\ModelAdmin;
    
    class FooterAdmin extends ModelAdmin {
        private static $menu_title = 'Footer Content';
        
        private static $url_segment = 'footer';

        private static $managed_models = array (
            'OpeningTime'
        );

        private static $menu_icon_class = 'font-icon-columns';
    }