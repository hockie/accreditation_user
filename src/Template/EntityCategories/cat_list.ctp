<option value="empty">Please select</option>
<?php
foreach($entityCategories as $entityCategory):	

echo "<option value=". $entityCategory['id']  .">".$entityCategory['name']."</option>";

endforeach;

?>