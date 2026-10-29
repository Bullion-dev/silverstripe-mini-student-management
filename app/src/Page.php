<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [
            'Subtitle' => 'Varchar(255)'
        ];

        private static $has_one = [];
    }
}
