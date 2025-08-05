 <!DOCTYPE html>
 <html>
   <head>
     <title>Investimento</title>
   </head>
   <body>
     <table border='1px'>
       <tr>
         <th>Tempo</th>
         <th>Montante</th>
        <th>Juros</th>
       </tr>
       <?php
$x = $_POST['capital'];
$y = $_POST['taxadjuros'];
$z = $_POST['tempo'];
$t = 0;

while ($t < $z):
    $js = $x * $y * ($z/100); ?>
       <tr>
         <td><?= $z ?></td>
         <td><?= $js ?></td>
        <td><?= $y ?></td>


       </tr>
       <?php
       $t++;
endwhile
?>
     </table>
   </body>
 </html>