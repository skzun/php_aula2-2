 <!DOCTYPE html>
 <html>
   <head>
     <title>Quadrados</title>
   </head>
   <body>
     <table border='1px'>
       <tr>
         <th>Número</th>
         <th>Quadrado</th>
       </tr>
       <?php
$numero = 1;
while ($numero <= 10):
    $quadrado = $numero * $numero; ?>
       <tr>
         <td><?= $numero ?></td>
         <td><?= $quadrado ?></td>
       </tr>
       <?php
       $numero++;
endwhile
?>
     </table>
   </body>
 </html>