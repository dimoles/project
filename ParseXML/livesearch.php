<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load('../file_tree/files/Books/book1.xml'); // load xml

$x=$xmlDoc->getElementsByTagName('book');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('author');
    $z=$x->item($i)->getElementsByTagName('name');
    $j=$x->item($i)->getElementsByTagName('date');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<br> Author: " . 
          $y->item(0)->childNodes->item(0)->nodeValue . 
          "<br> Name: " . 
          $z->item(0)->childNodes->item(0)->nodeValue .
          "<br> Date: " .
          $j->item(0)->childNodes->item(0)->nodeValue . "</a><hr>";
        
          
        } else {
          $hint=$hint . "<br /> Author:".
          $y->item(0)->childNodes->item(0)->nodeValue . 
          "<br> Name: " . 
          $z->item(0)->childNodes->item(0)->nodeValue .
          "<br> Date: " .
          $j->item(0)->childNodes->item(0)->nodeValue . "</a><hr>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") 
  {
    $response="no suggestion";
  } else {
    $response=$hint;
  }

//output the response
  echo $response;
?>