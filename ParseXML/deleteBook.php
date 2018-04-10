<!-- Delete function from xml -->
<?php

function delete_from_xml($xml)
{ 
    if(isset($_GET['delete']))
        {
            $b_name =$_GET['name'];
            
            $xpath = new DOMXPATH($xml);

            foreach($xpath->query("/root/book[name = '$b_name']") as $node)
                {
                    $node->parentNode->removeChild($node);
                }
            $xml->formatoutput = true;

        }   
}
?>


