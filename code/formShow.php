<h1>Список объявлений</h1>
 <table>
     <tr>
         <th>Заголовок</th>
         <th>Описание</th>
         <th>Категория</th>
     </tr>
     <?php
     $dir = "./data/";
     $files = scandir($dir);
     foreach ($files as $file) {
         if ($file != "." && $file != "..") {
             $path = "./data/" . $file;
             $files2 = scandir($path);
             foreach ($files2 as $file2) {
                 if ($file2 != "." && $file2 != "..") {
                     $path2 = "./data/" . $file . "/" . $file2;
                     $file3 = fopen($path2, "r");
                     $text = fgets($file3);
                     $email = fgets($file3);
                     fclose($file3);
                     echo "<tr>";
                     echo "<td>" . substr($file2, 0, -4) . "</td>";
                     echo "<td>" . $text . "</td>";
                     echo "<td>" . $file . "</td>";
                     echo "</tr>";
                 }
             }
         }
     }
     ?>
 </table>
 <br>
 <br>