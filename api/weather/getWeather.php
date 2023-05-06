<?php
$xml = simplexml_load_file('../../data.xml');
foreach($xml->entry as $entry){
    foreach($entry->title as $title){
        if($title=="府県週間天気予報"){
            foreach($entry->author as $author){
                if($author->name=="佐賀地方気象台"){
                    header('Content-Type: application/json; charset=UTF-8');
                    echo(json_encode(array("title"=>(string)$entry->content,"file"=>(string)$entry->link["href"]),JSON_UNESCAPED_UNICODE));
                    exit();
                }
            }
        }
    }
}
?>