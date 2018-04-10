<?php

include 'deleteBook.php';

//XML directory - project/file_tree/files
$xml1 = new DomDocument("1.0","UTF-8");

$xml1 -> load('../file_tree/files/book.xml');
  delete_from_xml($xml1);
$xml1->save('../file_tree/files/book.xml');

//XML directory - project/file_tree/files/Books

$xml2 = new DomDocument("1.0","UTF-8");

$xml2 -> load('../file_tree/files/Books/book1.xml');
 delete_from_xml($xml2);
$xml2->save('../file_tree/files/Books/book1.xml');

//XML directory - project/file_tree/files/Books/Book2

$xml3 = new DomDocument("1.0","UTF-8");

$xml3 -> load('../file_tree/files/Books/Book2/book2.xml');
 delete_from_xml($xml3);
$xml3->save('../file_tree/files/Books/Book2/book2.xml');

//XML directory - project/file_tree/files/Books/Book2/Book3

$xml4 = new DomDocument("1.0","UTF-8");

$xml4 -> load('../file_tree/files/Books/Book2/Book3/book3.xml');
 delete_from_xml($xml4);
$xml4->save('../file_tree/files/Books/Book2/Book3/book3.xml');