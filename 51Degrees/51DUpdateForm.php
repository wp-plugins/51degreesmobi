<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0.
 *
 * If a copy of the MPL was not distributed with this file, You can obtain one
 * at http://mozilla.org/MPL/2.0/.
 *
 * This Source Code Form is "Incompatible With Secondary Licenses", as defined
 * by the Mozilla Public License, v. 2.0.
 */
	include_once('51Degrees.mobi.metadata.php');

	$data_type = $_51d_meta_data["DatasetType"];
	$export_date = $_51d_meta_data["ExportDate"];

?>

<html>

<head>
<title>51Degrees.mobi Data Updater for PHP</title>
<script type="text/javascript" src="51DUpdate.js" ></script>
</head>

<body>
You're currently using <?php echo $data_type; ?> data exported on the <?php echo $export_date; ?>.
Press the button below to attempt an update from 51Degrees.mobi.
<form action="" method="POST" name="ajax">
	<input onclick="fiftyone_degrees_start_updates();" type="BUTTON" value="Update Data"></input>
	<div id="update_message"></div>
</form>

</body>

</html>