<option value="">Please select</option>
<?php foreach( $districtProvinces as $districtProvince ): ?>
<?php
echo "<option value=". $districtProvince['id']  .">".$districtProvince['name']."</option>";
?>
<?php endforeach; ?>