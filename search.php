<?php require('core/init.php'); ?>

<?php

	// Crate DB Object
	$db = new Database;
	$term = $_POST['query'];
	$db->query('SELECT * FROM company
										WHERE name LIKE :term');
	// Bind values
	$db->bind(':term', ('%' . $term . '%'));
	$results = $db->resultSet();
	$data = array();

	// var_dump($result);
	if ($db->rowCount($results) > 0) {
		foreach ($results as $result){

			$data[] = $result->name;
		}
		echo json_encode($data);
	}



