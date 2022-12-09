

<?php
include("Header.php")
?>
<?php
$conn = mysqli_connect("localhost","root","","property");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<?php
    $output = '';
   
    if(isset($_GET['query']) && $_GET['query'] !== ' '){
        $searchq = $_GET['query'];
       
        $q = mysqli_query($conn, "SELECT * FROM propety WHERE name LIKE '%$searchq%' OR monthly LIKE '%$searchq%'") or die(mysqli_connect_error());
        $c = mysqli_num_rows($q);
        if($c == 0){
            $output = 'No search results for <b>"' . $searchq . '"</b>';
        } else {
            while($row = mysqli_fetch_array($q)){
                $name = $row['name'];
                $monthly = $row['monthly'];
                $address = $row['address'];
                $access = $row['access'];
                $monthly = $row['monthly'];
                $floor = $row['floor'];
                $utility = $row['utility'];
                $descrip = $row['descrip'];
                $ContactName = $row['ContactName'];
                $ContactEmail = $row['ContactEmail'];
                $ContactMobile = $row['ContactMobile'];
               	 


                $output .= '<table> 
                    <tr>

      <th>«”„ «·⁄ﬁ«—</th>
      <th>«· ﬂ·›… «·‘Â—Ì… </th>
      <th>«·⁄‰Ê«‰</th>
      <th>’Ê—… «·⁄ﬁ«—«  </th>
      <th> ›«’Ì· «·⁄ﬁ«— ﬂ«„·… </th>
    </tr>


				</table>
				
				<a href="' . $name . '">
                            <h3>' . $monthly . '</h3>
                                <p>' . $address . '</p>
                            </a>';
            }
        }
    } else {
        header("location: ./");
    }
    print("$output");
    mysqli_close($conn);
 
?>

