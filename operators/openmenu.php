

<html>
<head>

 <link rel="stylesheet" href="css/style.css">
 <style>
table, td {
border: none;
 text-align: center;
    text-align-last: center;
 }

</style>
</head>
<body>

<div class="container">




<article>

<form method="post" action="openmenu.php?id=<?=$row['restaur']?>">
  <input type="submit"  value="View">
<h1><?php $fullname = $_SESSION['fullname'];
echo $fullname ;?></h1>
<h1>Call to Order:</h1>
<?php $price = $_SESSION['price'];

echo $price;

?>

<br>
<br>
   

    </form>

</article>


 </div>

 