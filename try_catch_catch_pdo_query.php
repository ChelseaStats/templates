	try {
		$pdo = new pdodb();
		$pdo->query('INSERT INTO t_table (F_FIELD) VALUES (:f1)');
		$pdo->bind(':f1' ,$f01);
		$result = $pdo->execute();

		$message1  = "1 record inserted: $f1";
		$message2  = "ID given: ".$pdo->lastInsertId();
		
	} catch (PDOException $e) {

		print "DB Error: The record could not be added.<br>".$e->getMessage();
		
	} catch (Exception $e) {

		print "General Error: The record could not be added.<br>".$e->getMessage();

	}
