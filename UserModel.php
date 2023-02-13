<?php


namespace boomee\phpmvc;


use boomee\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName();
}