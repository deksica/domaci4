<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style3.css">
    <title>
        Sve Želje
    </title>
</head>

<body>
    <div class="container my-4">
          <h1 class="text-center"> <b><i>Spisak svih zelja</i></b></h1>
         <table class="table table-bordered border-primary">
              <thead class="thead-light">
                <tr class="text-center">
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Grad</th>
                    <th>Da li je bio dobar?</th>
                    <th>Zelja</th>
                </tr>
</thead>
            <tbody>
      <?php
             $db_folder = "./zelje_db";
               
              $file_arr = scandir($db_folder);

            foreach ($file_arr as $file) {
                
                    if ($file == "." || $file == "..") continue;

                   
                    $my_file = fopen($db_folder . "/" . $file, "r") or die("Nije moguce da se otvori fajl");
                    $contents = fread($my_file, filesize($db_folder . "/" . $file));
                    $arr = json_decode($contents, true);
                    fclose($my_file);
                   
                  echo "<tr class='text-center'>";
                    foreach ($arr as $val) {
                        echo "<td>$val</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>