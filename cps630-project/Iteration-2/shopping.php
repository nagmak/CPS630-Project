<?php
    include 'db-connect.php';
    $conn = OpenCon();
    //echo "Connected Successfully";
    $attractions = [];
    $images = [];
    $sql = "SELECT * FROM attractions";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($attractions, $row);
            //echo "ID: " . $row["ID"]. ", Name: " . $row["Name"]. ", Country: " . $row["Country"]. ", Continent: " . $row["Continent"]. ", Info: " . $row["Info"]. ", Popular: " . $row["Popular"]."<br>";
        }
    } else {
        echo "0 results";
    }
    $sql = "SELECT * FROM images";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($images, $row);
            //echo "ID: " . $row["ID"]. ", Name: " . $row["Name"]. ", Attraction: " . $row["Attraction"]. ", Image URL: " . $row["ImageURL"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    echo $attractions;
    echo $images;

    CloseCon($conn);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Add icon library -->
    <script src="https://kit.fontawesome.com/fc886187d2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Plan your Travel</title>
  </head>
  <body>
    <nav id="navbar-travel" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Plan your Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
    </nav>

    <ul>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Preposed Travel Plans
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <!-- Plan Toronto -->
          <div class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#">Toronto</a>  
            <ul class="dropdown-menu">
                <h5>Toronto Package</h5>
                <li class="dropdown-item">Start Date: 11/27/2020</li>
                <li class="dropdown-item">Duration: 1 Week</li>
                <li class="dropdown-item">Air fare: $200</li>
                <li class="dropdown-item">Tour ID#: 416647509</li>
                <li class="dropdown-item">Total Price: $1000</li>
                <a class="dropdown-item package-item" style="font-weight: bolder;" id="Toronto" href="#">Select Package</a>  
            </ul>
        
          <!-- Plan New York -->
            <a class="dropdown-item dropdown-toggle" href="#">New York</a>
            <ul class="dropdown-menu">
              <h5>New York Package</h5>
              <li class="dropdown-item">Start Date: 06/20/2020</li>
              <li class="dropdown-item">Duration: 2 Weeks</li>
              <li class="dropdown-item">Air fare: $350</li>
              <li class="dropdown-item">Tour ID#: 893205234</li>
              <li class="dropdown-item">Total Price: $1500</li>
              <a class="dropdown-item package-item" style="font-weight: bolder;" id="New_York" href="#">Select Package</a>  
            </ul>
        </div>
    </ul>
    
    <form style="float: right;">
      <table id="New-York-Form" style="display: none;">
        <th>
          New York Package
        </th>
        <tr> 
          <td class="label">Number Of Travelers:</td>
          <td>
            <input class="travelers" name="travelers" type="number" />
          </td>
        </tr>

      
        <tr id="travelerAgeNY">
          <td class="label">New York Trip Total:</td>
          <td>
            <h5 id="ny-trip-total"></h5>
          </td>
        </tr>
      </table>

      <table id="Toronto-Form" style="display: none;">
        <th>
          Toronto Package
        </th>
        <tr>
          <td  class="label">Number Of Travelers:</td>
          <td>
            <input class="travelers" name="travelers" type="number" />
          </td>
        </tr>

        <tr id="travelerAgeTO">
          <td class="label">Toronto Trip Total:</td>
          <td>
            <h5 id="to-trip-total"></h5>
          </td>
        </tr>
      </table>
      <h5 id="grand-total">Grand Total(w/ tax): $0</h5>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="index.js" type="text/javascript"></script>
  </body>
</html>