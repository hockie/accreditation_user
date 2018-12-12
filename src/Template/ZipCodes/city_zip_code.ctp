<!-- <option value="">Please select</option> -->
<?php foreach( $zipCodes as $zipCode ): ?>
<?php
echo "<option value=". $zipCode['id']  .">".$zipCode['zip_code']."</option>";
?>
<?php endforeach; ?>