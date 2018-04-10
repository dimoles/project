<!-- Insert values in XML's -->

<?php
function insert_in_xml($xml)
{
if(isset($_GET['insert']))
    {
        //Declarate values
         $date= date('Y-m-d');
         $b_author = $_GET['author'];
         $b_name =$_GET['name'];

        //Delete exist recors by author and name
         $xpath = new DOMXPATH($xml);
         foreach($xpath->query("/root/book[author = '$b_author']")  as $node )
            {
                foreach($xpath->query("/root/book[name = '$b_name']")  as $node )
                     {
                         $node->parentNode->removeChild($node);
                     }
            }
         $xml->formatoutput = true;

        // insert new record
         $rootTag = $xml->getElementsByTagname('root')->item(0);
            '<br>';
            $bookTag = $xml->createElement("book");
            '<br>';
                $authorTag = $xml->createElement("author",$b_author);
            '<br>';
                $nameTag = $xml->createElement("name",$b_name);
            '<br>';
                $dateTag = $xml->createElement('date', $date);

            $bookTag->appendChild($authorTag);
            $bookTag->appendChild($nameTag);
            $bookTag->appendChild($dateTag);

        $rootTag->appendChild($bookTag);
    }
}

