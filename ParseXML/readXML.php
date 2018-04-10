<!-- Testing display XML  -->

<li style="list-style-type: none;"><a href="index.php"><---RETURN</a></li>

<?php
  $xml = simplexml_load_file('../file_tree/files/Books/book1.xml') or die("Error: Cannot create object");
?>
  <table border='1';>
    <thead>
      <tr>
        <th>Author</th>
        <th>Name</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>

<?php 
  foreach($xml ->book as $book){
?>
    <tr>
      <td><?php echo  $book -> author; ?></td>
      <td><?php echo  $book -> name; ?></td>
      <td><?php echo  $book -> date; ?></td>
    </tr>
<?php } ?>
    </tbody>
  </table>

 