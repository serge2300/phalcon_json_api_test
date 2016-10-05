<?php

use Phalcon\Db\Column as Column;
use Phalcon\Db\Index as Index;
use Phalcon\Mvc\Model\Migration;

class RobotsMigration_100 extends Migration
{
    public function up()
    {
        $this->morphTable(
            "robots",
            [
                "columns" => [
                    new Column(
                        "id",
                        [
                            "type"          => Column::TYPE_INTEGER,
                            "size"          => 11,
                            "unsigned"      => true,
                            "notNull"       => true,
                            "autoIncrement" => true,
                            "first"         => true,
                        ]
                    ),
                    new Column(
                        "name",
                        [
                            "type"    => Column::TYPE_VARCHAR,
                            "size"    => 70,
                            "notNull" => true,
                        ]
                    ),
                    new Column(
                        "type",
                        [
                            "type"    => Column::TYPE_VARCHAR,
                            "size"    => 70,
                            "notNull" => true,
                        ]
                    ),
                    new Column(
                        "year",
                        [
                            "type"    => Column::TYPE_INTEGER,
                            "size"    => 4,
                            "notNull" => true,
                        ]
                    ),
                ],
                "indexes" => [
                    new Index(
                        "PRIMARY",
                        [
                            "id",
                        ]
                    ),
                ],
                "options" => [
                    "TABLE_TYPE"      => "BASE TABLE",
                    "ENGINE"          => "InnoDB",
                    "TABLE_COLLATION" => "utf8_general_ci",
                ],
            ]
        );
    }
}