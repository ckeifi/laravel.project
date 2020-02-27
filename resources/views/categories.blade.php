<?php
           foreach ($categories as $category) {
           echo "<h2>".$category->name."</h2>";
           echo $category->description;

       }
?>