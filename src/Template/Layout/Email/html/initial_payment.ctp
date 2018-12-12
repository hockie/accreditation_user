<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>
</head>
<body>
<div style="width: 800px;margin: auto;background: #272668;padding: 20px;">
        <div>
            <img src="http://www.tourism.gov.ph/images/TQS.png" alt="" style="width: 50px; float: left;">
            <p style="font-size: 50px;margin: 0;color: white;font-family: sans-serif;"> &nbsp; Tourism Online Accreditation</p>
        </div>
    </div>
     <?= $this->fetch('content') ?>
	 
	  <div style="width: 800px;margin: auto;background: #272668;padding: 20px;">
        <div>
            <center><p style="margin: 0;color: white;">www.tourism.gov.ph<br />The New DOT Bldg. , 351 Sen. Gil Puyat Ave. Makati City, Philippines<br />Tel.No.: (632) 459-5200 to 459-5230 loc 224</p></center>
        </div>
    </div>

</body>
</html>    