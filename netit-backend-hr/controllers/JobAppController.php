<?php


namespace controllers;


class JobAppController {

    public static function create() {

        \db\Database::getInstance()->query
                ("INSERT INTO mr.users"
                . "(user_id, post_id)"
                .  "VALUES('{user_id}', '{post_id}')");

        return \db\Database::getInstance()->
               lastInsertedId();
    }
}