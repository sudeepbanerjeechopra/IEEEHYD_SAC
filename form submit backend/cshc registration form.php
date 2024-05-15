<?php 



	require '../php_sheets/vendor/autoload.php';

	

	use PhpOffice\PhpSpreadsheet\Spreadsheet;

	use PhpOffice\PhpSpreadsheet\Writer;

	use \PhpOffice\PhpSpreadsheet\Reader\Xlsx;

	use \PhpOffice\PhpSpreadsheet\IOFactory;

	

	

	$reader = IOFactory::createReader('Xlsx');

	$reader->setReadDataOnly(TRUE);

	$spreadsheet = $reader->load("../sheets/cshc21-Registration Form Entries.xlsx");

	

	$worksheet = $spreadsheet->getActiveSheet();

	$highestRow = $worksheet->getHighestRow(); // e.g. 10

	

	$row =  $highestRow + 1;

    date_default_timezone_set("Asia/Calcutta");



	

	if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	    if($_POST["name"] != '' AND $_POST["email"] != '' AND $_POST["phone"] != '' AND $_POST["org"] != '' AND $_POST["member"] != '') {

	    	

	    	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

			$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

			$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

			$org = filter_input(INPUT_POST, 'org', FILTER_SANITIZE_STRING);

			$member = filter_input(INPUT_POST, 'member', FILTER_SANITIZE_STRING);

			$mno = filter_input(INPUT_POST, 'mno', FILTER_SANITIZE_STRING);



			$spreadsheet1 = IOFactory::load("../sheets/cshc21-Registration Form Entries.xlsx");

        	$writer = IOFactory::createWriter($spreadsheet1, "Xlsx");

        	$worksheet1 = $spreadsheet1->getActiveSheet();

        	

        	$name_cell = 'B' . $row;

        	$email_cell = 'C' . $row;

        	$phone_cell = 'D' . $row;

        	$org_cell = 'E' . $row;

        	$member_cell = 'F' . $row;

        	$mno_cell = 'G' . $row;

        	$timestamp_cell = 'A' . $row;



        	if (!$name == "") {

            	$worksheet1->setCellValue($name_cell, $name);

        	}

        	if (!$email == "") {

            	$worksheet1->setCellValue($email_cell, $email);

        	}

        	if (!$phone == "") {

            	$worksheet1->setCellValue($phone_cell, $phone);

        	}

        	if (!$org == "") {

            	$worksheet1->setCellValue($org_cell, $org);

        	}

        	if (!$member == "") {

            	$worksheet1->setCellValue($member_cell, $member);

        	}

        	if (!$mno == "") {

            	$worksheet1->setCellValue($mno_cell, $mno);

        	}



        	$worksheet1->setCellValue($timestamp_cell, date("Y-m-d h:i:s a"));

        	$writer->save("../sheets/cshc21-Registration Form Entries.xlsx");

	    	

	    	echo "Your entry successfully Uploaded on " .  date("Y-m-d h:i:s a");

	    	echo "</br></br>";

	    	echo "now you can close this page, we will get back to you soon";

	    }

	}



 ?>



 <html>

 	

 </html>