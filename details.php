<?php

    $title = "Student Branch Details";
    require('header.php');

    require 'php_sheets/vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    // use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use \PhpOffice\PhpSpreadsheet\Reader\Xlsx;
    use \PhpOffice\PhpSpreadsheet\IOFactory;







// $reader = new Xlsx();
// $reader->setLoadSheetsOnly(["Active Colleges"]);
// // $reader->setReadFilter( new MyReadFilter() );
// $spreadsheet = $reader->load("IEEE SAC Hyd '21.xlsx");

// $cellValue = $spreadsheet->getActiveSheet()->getCell('A1')->getValue();

// $dataArray = $spreadsheet->getActiveSheet()
//     ->rangeToArray(
//         'C3:E5',     // The worksheet range that we want to retrieve
//         NULL,        // Value that should be returned for empty cells
//         TRUE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
//         TRUE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
//         TRUE         // Should the array be indexed by cell row and cell column
//     );


// echo $cellValue;

    $reader = IOFactory::createReader('Xlsx');
    $reader->setReadDataOnly(TRUE);
    $spreadsheet = $reader->load("IEEE SAC Hyd '21.xlsx");
    
    $worksheet = $spreadsheet->getActiveSheet();
    // Get the highest row number and column letter referenced in the worksheet
    $highestRow = $worksheet->getHighestRow(); // e.g. 10
    $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
    // Increment the highest column letter
    $highestColumn++;

// $dataArray = $spreadsheet->getActiveSheet()
//     ->rangeToArray(
//         'A2:A101',     // The worksheet range that we want to retrieve
//         NULL,        // Value that should be returned for empty cells
//         TRUE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
//         TRUE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
//         TRUE         // Should the array be indexed by cell row and cell column
//     );

// print_r($dataArray);
// var_dump($dataArray);


    echo '<div class="container select_mate"><form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">';
    echo '<select id="stb" name="stb"><option selected disabled value="">Please choose your Student Branch</option>';
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
    echo '</select>' . PHP_EOL;
    echo '<input type="submit" value="Search" class="btn btn-primary"></input>';
    echo '</form></div>';



    $sb = filter_input(INPUT_POST, 'stb', FILTER_SANITIZE_STRING);

    if ($sb) {
         echo "<div class='container'>
            <div class='main-body'>
                <div class='row gutters-sm'>
                    <div class='col-md-4 mb-3'>
                        <div class='card'>
                            <div class='card-body'>
                                <div class='d-flex flex-column align-items-center text-center'>
                                    <img src='sb_images/" . $worksheet->getCell('T' .$sb)->getValue() . "' alt='Admin' width='250'>
                                    <div class='mt-3'>
                                        <h4>". $worksheet->getCell('A' .$sb)->getValue() . "</h4>
                                        <p class='text-secondary mb-1'><strong> SB Code:</strong> " . $worksheet->getCell('F' .$sb)->getValue() . "</p>
                                        <p class='text-secondary mb-1'><strong>District: </strong>" . $worksheet->getCell('E' .$sb)->getValue() . "</p>
                                        <p class='text-muted font-size-sm'><strong>Zone: </strong>" . $worksheet->getCell('D' .$sb)->getValue() . "</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class='card mt-3'>
                <ul class='list-group list-group-flush'>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                    <h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-globe mr-2 icon-inline'><circle cx='12' cy='12' r='10'></circle><line x1='2' y1='12' x2='22' y2='12'></line><path d='M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z'></path></svg>Website</h6>
                    <span class='text-secondary'><a href=" . $worksheet->getCell('P' .$sb)->getValue() .">Website</a></span>
                  </li>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                    <h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-twitter mr-2 icon-inline text-info'><path d='M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z'></path></svg>Twitter</h6>
                    <span class='text-secondary'><a href=" . $worksheet->getCell('S' .$sb)->getValue() .">Twitter</a></span>
                  </li>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                    <h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-instagram mr-2 icon-inline text-danger'><rect x='2' y='2' width='20' height='20' rx='5' ry='5'></rect><path d='M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z'></path><line x1='17.5' y1='6.5' x2='17.51' y2='6.5'></line></svg>Instagram</h6>
                    <span class='text-secondary'><a href=" . $worksheet->getCell('R' .$sb)->getValue() .">Instagram</a></span>
                  </li>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                    <h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-facebook mr-2 icon-inline text-primary'><path d='M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z'></path></svg>Facebook</h6>
                    <span class='text-secondary'><a href=" . $worksheet->getCell('Q' .$sb)->getValue() .">Facebook</a></span>
                  </li>
                </ul>
              </div>
            </div>

            <div class='col-md-8'>
                <div class='card mb-3'>
                    <div class='card-body'>
                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>SB Counselor Name</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('G' .$sb)->getValue() . "</div>
                        </div>
                        <hr>
                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>SB Counselor Mail ID</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('I' .$sb)->getValue() . "</div>
                        </div>
                        <hr>
                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>SB Counselor Contact</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('H' .$sb)->getValue() . "</div>
                        </div>
                        <hr>

                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>College Principal Name</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('J' .$sb)->getValue() . "</div>
                        </div>
                        <hr>
                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>Principal Mail ID</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('L' .$sb)->getValue() . "</div>
                        </div>
                        <hr>
                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>Principal Contact</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('K' .$sb)->getValue() . "</div>
                        </div>
                        <hr>

                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>SB Chair Name</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('M' .$sb)->getValue() . "</div>
                        </div>
                        <hr>
                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>SB Chair Mail ID</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('O' .$sb)->getValue() . "</div>
                        </div>
                        <hr>
                        <div class='row'>
                            <div class='col-sm-4'><h6 class='mb-0'>SB Chair Contact</h6></div>
                            <div class='col-sm-8 text-secondary'>" . $worksheet->getCell('N' .$sb)->getValue() . "</div>
                        </div>
                        <hr>
                        
                    </div>
                </div>              

            </div>

        </div></div></div></div>";
    }

   

    // echo $sb;
// if () {
// 	echo $_POST['stb'];
// 	echo "string";
// }





// echo '<table>' . "\n";
// for ($row = 1; $row <= $highestRow; ++$row) {
//     echo '<tr>' . PHP_EOL;
//     for ($col = 'A'; $col != $highestColumn; ++$col) {
//         echo '<td>' .
//              $worksheet->getCell($col . $row)
//                  ->getValue() .
//              '</td>' . PHP_EOL;
//     }
//     echo '</tr>' . PHP_EOL;
// }
// echo '</table>' . PHP_EOL;


?>

<style type="text/css">
    select{
        border: none;
        height: 50px;
        border-radius: 7px;
        background-color: #fff;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        margin-bottom: 30px;
        padding-left: 40px;
        width: 90%;
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
    a{
        color: black;
    }
    @media (max-width: 600px) {
    select{
        width: 70%;
        padding-left: 10px;
    }
}
    
</style>



<!-- 
</body>
</html> -->