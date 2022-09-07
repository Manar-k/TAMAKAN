<!-- <!DOCTYPE html>
<html>

<head>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
	</script>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	</script>

	<style>
		.box {
			width: 750px;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-top: 100px;
		}
	</style>
</head>

<body>
	<div class="container box">
		<h3 align="center">
			Geeks for Geeks Import JSON
			data into database
		</h3><br />
		
		//php
		
// 			$connect = mysqli_connect("localhost", "root", "", "tamakan");
			
// 			$query = '';
// 			$table_data = '';
			
// 			// json file name
// 			$filename = "dataJson.json";
			
// 			// Read the JSON file in PHP
// 			$data = file_get_contents($filename);
			
// 			// Convert the JSON String into PHP Array
// 			$array = json_decode($data, true);
			
// //  echo"<pre>";
// // print_r($array); 
// //  echo"</pre>";


//             // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
// 			// Extracting row by row
// 			foreach($array as $row) {
// 				// Database query to insert data
// 				// into database Make Multiple
// 				// Insert Query
// 				$query .=
// 				"INSERT INTO products (id, title, descriptionn, price, discountPercentage, rating, stock, brand, category, thumbnail, images) VALUES
//                 ('".$row['id']."', '".$row['title']."'
//                 , '".$row['description']."', '".$row['price']."'
//                 , '".$row['discountPercentage']."', '".$row['rating']."'
//                 , '".$row['stock']."', '".$row['brand']."'
//                 , '".$row['category']."',  '".$row['thumbnail']."'
//                 , '".implode(";",$row["images"])."'); ";

//                 //mysqli_query($connect, $query);

// 				$table_data .= '
// 				<tr>
// 					<td>'.$row["id"].'</td>
// 					<td>'.$row["title"].'</td>
// 					<td>'.$row["description"].'</td>

//                     <td>'.$row["price"].'</td>
// 					<td>'.$row["discountPercentage"].'</td>
// 					<td>'.$row["rating"].'</td>

//                     <td>'.$row["stock"].'</td>
// 					<td>'.$row["brand"].'</td>
// 					<td>'.$row["category"].'</td>

//                     <td>'.$row["thumbnail"].'</td>
// 					<td>'.implode(";",$row["images"]).'</td>
// 				</tr>
// 				'; // Data for display on Web page
// 			}

// 			if(mysqli_multi_query($connect, $query)) {
// 				echo '<h3>Inserted JSON Data</h3><br />';
// 				echo '
// 				<table class="table table-bordered">
// 				<tr>
// 					<th width="45%">id</th>
// 					<th width="10%">title</th>
// 					<th width="45%">description</th>

//                     <th width="45%">price</th>
// 					<th width="10%">discountPercentage</th>
// 					<th width="45%">rating</th>

//                     <th width="45%">stock</th>
// 					<th width="10%">brand</th>
// 					<th width="45%">category</th>

//                     <th width="45%">thumbnail</th>
// 					<th width="45%">images</th>
// 				</tr>
// 				';
// 				echo $table_data;
// 				echo '</table>';
// 			}
		?>
		<br />
	</div>
</body>

</html> -->





































<!-- // open mysql connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Tamakan";
$con = mysqli_connect($host, $username, $password, $dbname) or die('Error in Connecting: ' . mysqli_error($con));

// use prepare statement for insert query
$st = mysqli_prepare($con, 'INSERT INTO products(title, descriptionn, price, discountPercentage, rating, stock, brand, category, thumbnail, images) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?,? )');

// bind variables to insert query params
mysqli_stmt_bind_param($st, 'ssiddissss', $title, $description, $price, $discountPercentage, $rating, $stock, $brand, $category, $thumbnail, $images);
//$total, $skip, $limit
// read json file
$filename = 'dataJson.json';
$json = file_get_contents($filename);   

//convert json object to php associative array
$data = json_decode($json, true);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
// loop through the array
foreach ($data as $row) {
    // get the employee details
    //$id = $row['id'];
    $title = $row['title'];
    $description = $row['description'];
    $price = $row['price'];
    $discountPercentage = $row['discountPercentage'];
    $rating = $row['rating'];
    $stock = $row['stock'];
    $brand = $row['brand'];
    $category = $row['category'];
    $thumbnail = $row['thumbnail'];
    $images = $row['images'];
    
    // ,"total":100,"skip":0,"limit":30
    // $total = $row['total'];
    // $skip = $row['skip'];
    // $limit = $row['limit'];

    // execute insert query
    mysqli_stmt_execute($st);
}
}

//close connection
mysqli_close($con); -->


<?php

 $con = mysqli_connect('localhost', 'root','','Tamakan');

 $filename = "dataJson.json"; 

  $data = file_get_contents($filename); 

$array = json_decode($data, true); 
//   echo"<pre>";
//   print_r($array); 
//   echo"</pre>";
//   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 foreach ($array as $value) { 
// ('id', 'title', 'descriptionn', 'price', 'discountPercentage', 'rating', 'stock', 'brand', 'category', 'thumbnail', 'images')
 $query = "INSERT INTO products VALUES ('".$value['id']."', '".$value['title']."', '".$value['description']."', '".$value['price']."', '".$value['discountPercentage']."', '".$value['rating']."', '".$value['stock']."', '".$value['brand']."', '".$value['category']."',  '".$value['thumbnail']."', '".implode(";",$value["images"])."')";
//  , '".$value['total']."', '".$value['skip']."', '".$value['limit']."'
  mysqli_query($con, $query); 

  } 
//  }

 echo "Data Inserted Successfully"; 
?>






<!-- //  ('id', 'title', 'descriptionn', 'price', 'discountPercentage', 'rating', 'stock', 'brand', 'category', 'thumbnail', 'images', 'total', 'skipp', 'limitt')




//     $con = mysqli_connect("localhost","root","","Tamakan") or die('Could not connect: ' . mysql_error());
//     //mysqli_select_db("Tamakan", $con);

//     //read the json file contents
//     $jsondata = file_get_contents('dataJson.json');

//     //convert json object to php associative array
//     $data = json_decode($jsondata, true);

//     //get the products details $data['products']['id']
//     $id = $_POST[$data['id']];
//     $title = $data['products']['title'];
//     $description = $data['products']['description'];
//     $price = $data['products']['price'];
//     $discountPercentage = $data['products']['discountPercentage'];
//     $rating = $data['products']['rating'];
//     $stock = $data['products']['stock'];
//     $brand = $data['products']['brand'];
//     $category = $data['products']['category'];
//     $thumbnail = $data['products']['thumbnail'];
//     $images = $data['products']['images'];

//     $total = $data['total'];
//     $skip = $data['skip'];
//     $limit = $data['limit'];
// //(id, title, descriptionn, price, discountPercentage, rating, stock, brand, category, thumbnail, images, total, skipp, limitt)
//     //insert into mysql table
//     $sql = "INSERT INTO products VALUES('$id', '$title', '$description', '$price', '$discountPercentage', '$rating', '$stock', '$brand', '$category', '$thumbnail', '$images', '$total', '$skip', '$limit')";
//     // if(!mysql_query($sql,$con))
//     // {
//     //     die('Error : ' . mysql_error());
//     // }
// ?> -->










    <!-- <form action="index.php" method="post"></form>

    // $con = mysqli_connect("localhost","root","","Tamakan") or die('Could not connect: ' . mysql_error());
    // //mysqli_select_db("Tamakan", $con);

    // //read the json file contents
    // $jsondata = file_get_contents('dataJson.json');

    //convert json object to php associative array
    // $data = json_decode($jsondata, true);
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // //get the products details $data['products']['id']
    // $id = $data['products']['id'];
//     $title = $data['products']['title'];
//     $description = $data['products']['description'];
//     $price = $data['products']['price'];
//     $discountPercentage = $data['products']['discountPercentage'];
//     $rating = $data['products']['rating'];
//     $stock = $data['products']['stock'];
//     $brand = $data['products']['brand'];
//     $category = $data['products']['category'];
//     $thumbnail = $data['products']['thumbnail'];
//     $images = $data['products']['images'];

//     $total = $data['total'];
//     $skip = $data['skip'];
//     $limit = $data['limit'];
// //(id, title, descriptionn, price, discountPercentage, rating, stock, brand, category, thumbnail, images, total, skipp, limitt)
//     //insert into mysql table
//     $sql = "INSERT INTO products VALUES('$id', '$title', '$description', '$price', '$discountPercentage', '$rating', '$stock', '$brand', '$category', '$thumbnail', '$images', '$total', '$skip', '$limit')";
//     mysqli_query($con, $sql); 
// }
//     // if(!mysql_query($sql,$con))
//     // {
//     //     die('Error : ' . mysql_error());
//     // }
// ?>