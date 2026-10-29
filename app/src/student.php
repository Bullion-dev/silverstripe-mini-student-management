<?php

namespace {

use SilverStripe\ORM\DataObject;

class Student extends DataObject
{
    private static $db = [
'Name' => 'Varchar(255)',
'Email' => 'Varchar(255)',
'Age' => 'Int',
];

private static $table_name = 'Student';
}


}