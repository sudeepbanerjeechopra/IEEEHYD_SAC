<?php

    $title = "Student Branch Details";
    require('header.php');

    require 'php_sheets/vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer;
    use \PhpOffice\PhpSpreadsheet\Reader\Xlsx;
    use \PhpOffice\PhpSpreadsheet\IOFactory;


    $reader = IOFactory::createReader('Xlsx');
    $reader->setReadDataOnly(TRUE);
    $spreadsheet = $reader->load("IEEE SAC Hyd '21.xlsx");
    
    $worksheet = $spreadsheet->getActiveSheet();
    // Get the highest row number and column letter referenced in the worksheet
    $highestRow = $worksheet->getHighestRow(); // e.g. 10
    $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
    // Increment the highest column letter
    $highestColumn++;



    echo '<div class="container select_mate">
    <center><h3>Student Branch Social Handles Form</h3></center><br><br><form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST" enctype="multipart/form-data">';
    echo '<center><select id="stb" name="stb"><option selected disabled value="">Please choose your Student Branch</option>';
    for ($row = 2; $row <= $highestRow; ++$row) {
        $col = 'A';
        // echo "<option value=' ". $worksheet->getCell($col . $row)
        //          ->getValue();

        echo "<option value='". $row;
        echo "'>";
        echo $worksheet->getCell($col . $row)
                 ->getValue();
        echo "</option>";
    }
    echo '</select></center>' . PHP_EOL;
    echo "<br><input type='text' name='web' id='web' placeholder='Website Link'>
          <input type='text' name='fb' id='fb' placeholder='Facebook Page Link'>
          <input type='text' name='insta' id='insta' placeholder='Instagram Page Link'>
          <input type='text' name='twitter' id='twitter' placeholder='Twitter Page Link'>
          <input type='file' name='img' id='img' placeholder='Upload file'>";
    echo '<br><center><input type="submit" value="Submit" class="btn btn-primary"></center></input>';
    echo '</form></div>';




    $sb = filter_input(INPUT_POST, 'stb', FILTER_SANITIZE_STRING);
    $web = filter_input(INPUT_POST, 'web', FILTER_SANITIZE_STRING);
    $fb = filter_input(INPUT_POST, 'fb', FILTER_SANITIZE_STRING);
    $tw = filter_input(INPUT_POST, 'twitter', FILTER_SANITIZE_STRING);
    $insta = filter_input(INPUT_POST, 'insta', FILTER_SANITIZE_STRING);

    

    if ($sb) {

        



        $spreadsheet1 = IOFactory::load("IEEE SAC Hyd '21.xlsx");
        $writer = IOFactory::createWriter($spreadsheet1, "Xlsx");
        $worksheet1 = $spreadsheet1->getActiveSheet();
        $website_cell = 'P' . $sb;
        $fb_cell = 'Q' . $sb;
        $insta_cell = 'R' . $sb;
        $twitter_cell = 'S' . $sb;
        $image_cell = 'T' . $sb;

        if (!$web == "") {
            $worksheet1->setCellValue($website_cell, $web);
        }

        if (!$fb == "") {
            $worksheet1->setCellValue($fb_cell, $fb);
        }

        if (!$insta == "") {
            $worksheet1->setCellValue($insta_cell, $insta);
        }

        if (!$tw == "") {
            $worksheet1->setCellValue($twitter_cell, $tw);
        }

        if (!htmlspecialchars( basename( $_FILES["img"]["name"])) == "") {
            $target_dir = "sb_images/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["img"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        }

        // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

            $worksheet1->setCellValue($image_cell, htmlspecialchars( basename( $_FILES["img"]["name"])));
        }

        $writer->save("IEEE SAC Hyd '21.xlsx");
    }

?>

<style type="text/css">
    select, input{
        border: none;
        height: 50px;
        border-radius: 7px;
        background-color: #fff;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        margin-bottom: 30px;
        padding-left: 40px;
    }
    option{
        position: absolute;
        overflow: hidden;
    }
    .card{
        border: none;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        border-radius: 5x;
        font-family: Candara, Calibri, Segoe, "Segoe UI", Optima, Arial, sans-serif;

    }
    input{
        width: 500px;
    }
    @media (max-width: 600px) {
    select{
        width: 100%;
        padding-left: 10px;
    }
    input{
        width: 100%;
    }
}
    
</style>