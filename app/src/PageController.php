<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;
    class PageController extends ContentController
    {
        public function OpeningTimes() {
            return OpeningTime::get();
        }
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            Requirements::css("css/style.css");
            Requirements::css("css/contact.css");
            Requirements::css("css/menu.css");
            Requirements::css("https://unpkg.com/aos@next/dist/aos.css");
            Requirements::javascript("https://unpkg.com/aos@next/dist/aos.js");
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        }
    }
}
