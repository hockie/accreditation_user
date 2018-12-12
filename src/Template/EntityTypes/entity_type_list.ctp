<option value="">Please select</option>
<?php
foreach($entityTypes as $entityType):	

echo "<option value=". $entityType['id']  .">".$entityType['name']."</option>";

endforeach;

?>