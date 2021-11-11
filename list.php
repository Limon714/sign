
<?php

$books = [
          [1,"bangla", 100],
          [2,"English", 100],
          [3,"Math", 100]

];
 echo "<table border ='2px' cellpadding= '5px'>
 <tr>
      <th>Serial No.</th>
      <th>Subject</th>
      <th>Marks</th>
 </tr>";
  

foreach($books as list($serial, $book_name, $marks)){

    echo "<tr style = 'text-align: center'>
    <td> $serial </td> 
   <td> $book_name </td> 
   <td> $marks </td> 
    </tr>";
}
echo "</table>";
?>