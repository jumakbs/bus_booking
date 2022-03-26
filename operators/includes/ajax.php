<!-- <?php

  if(isset($_GET['froms']) && !empty($_GET['froms'])){
      include('../databases/database.php');

      $id = $_GET['froms'];

      $query = "SELECT * FROM routes WHERE froms = '$id'";
      $do = mysqli_query($link,$query);
      $count = mysqli_num_rows($do);

      if($count > 0){
          while($row = mysqli_fetch_array($do)){
              echo '<option value="'.$row['id'].'">'.$row['destination'].'</option>';
          }
      }else{
          echo '<option value="">No destination available</option>';
      }
  }else{
      echo '<h1>Error</h1>'
  }

?> -->