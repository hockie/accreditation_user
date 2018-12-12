<option value="">Please select</option>
<?php foreach( $municipalityCities as $municipalityCity ): ?>
<?php
echo "<option value=". $municipalityCity['id']  .">".$municipalityCity['name']."</option>";
?>
<?php endforeach; ?>
