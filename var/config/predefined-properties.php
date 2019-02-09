<?php 

return [
    1 => [
        "id" => 1,
        "name" => "Header Image",
        "description" => NULL,
        "key" => "headerImage",
        "type" => "asset",
        "data" => "",
        "config" => "",
        "ctype" => "document",
        "inheritable" => FALSE,
        "creationDate" => 1536935744,
        "modificationDate" => 1549667533
    ],
    3 => [
        "id" => 3,
        "name" => "Header Size",
        "description" => NULL,
        "key" => "headerSize",
        "type" => "select",
        "data" => NULL,
        "config" => "min,70vh,100vh",
        "ctype" => "document",
        "inheritable" => FALSE,
        "creationDate" => 1536943653,
        "modificationDate" => 1549667534
    ],
    4 => [
        "id" => 4,
        "name" => "Disable Headline",
        "description" => "",
        "key" => "disableHeadline",
        "type" => "bool",
        "data" => "",
        "config" => "",
        "ctype" => "document",
        "inheritable" => FALSE,
        "creationDate" => 1536943748,
        "modificationDate" => 1549659579
    ],
    5 => [
        "id" => 5,
        "name" => "Mail: Use custom template fields layout",
        "description" => "If the mail_disable_default_mail_body property is defined and checked, you need to add your own data to the mail template. You can use all the field names as placeholder.",
        "key" => "mail_disable_default_mail_body",
        "type" => "bool",
        "data" => NULL,
        "config" => "",
        "ctype" => "document",
        "inheritable" => FALSE,
        "creationDate" => 1537393052,
        "modificationDate" => 1549659201
    ],
    6 => [
        "id" => 6,
        "name" => "Mail: Message after Submit",
        "description" => "Use the mail_successfully_sent property to define a message after the form has been successfully sent. There are three options: \"String\", \"Snippet\", \"Dokument\"",
        "key" => "mail_successfully_sent",
        "type" => "document",
        "data" => NULL,
        "config" => NULL,
        "ctype" => "document",
        "inheritable" => FALSE,
        "creationDate" => 1537393052,
        "modificationDate" => 1537393052
    ],
    7 => [
        "id" => 7,
        "name" => "Mail: Flash Message after Success-Redirect",
        "description" => "Define a flash message which should show up after a form has been successfully submitted. Note: This only works if \"mail_successfully_sent\" property is a document.",
        "key" => "mail_successfully_sent_flash_message",
        "type" => "text",
        "data" => NULL,
        "config" => NULL,
        "ctype" => "document",
        "inheritable" => FALSE,
        "creationDate" => 1537393052,
        "modificationDate" => 1537393052
    ],
    8 => [
        "id" => 8,
        "name" => "Mail: Ignored Fields in Email",
        "description" => "In some cases, you don't want to send specific fields via mail. Add one or multiple (comma separated) fields as string.",
        "key" => "mail_ignore_fields",
        "type" => "text",
        "data" => NULL,
        "config" => NULL,
        "ctype" => "document",
        "inheritable" => FALSE,
        "creationDate" => 1537393052,
        "modificationDate" => 1537393052
    ]
];
