<?php 

return [
    1 => [
        "id" => 1,
        "name" => "jobs",
        "pattern" => "/job_([\\d]+)/",
        "reverse" => "%prefix/job_%id",
        "module" => NULL,
        "controller" => "jobs",
        "action" => "detail",
        "variables" => "id",
        "defaults" => NULL,
        "siteId" => [

        ],
        "priority" => 1,
        "legacy" => FALSE,
        "creationDate" => 1538217301,
        "modificationDate" => 1538219956
    ]
];
