





<?php
require_once("connect.php");
$output='';

if(isset($_POST['txt'])){

$txt=$_POST['txt'];

$sql="SELECT * FROM products WHERE productName LIKE '{$txt}%' ";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){

$output .= '<h4 align="center">Search Result</h4>';
$output .= '<div class="table.responsive">
             <table class="table table bordered">
             <thead>      
             <tr>
             <th>ID</th>
             <th>ProductName</th>
             <th>ProductDesc</th>
             <th>ProductPrice</th>
             <th>ProductPhoto</th>
             </tr>
             </thead>';
             while($row=mysqli_fetch_array($result))
             {
              $output .= '
                   <tr>
                   <td>'.$row["id"].'</td>
                   <td>'.$row["productName"].'</td>
                   <td>'.$row["productDesc"].'</td>
                   <td>'.$row["productPrice"].'</td>
                   <td>'.$row["productPhoto"].'</td>

                    </tr>
                               ';

             }
             echo $output;



}
else{
  echo 'product not found';
}
}







  ?>