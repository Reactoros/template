<?php
$cnx = mysqli_connect('remotemysql.com', 'ld4FOy17h7', 'vb4Lq8b0dx','ld4FOy17h7');
$title = "";
$content = "";
$image = "./images/image_4.jpg";

if(isset($_POST["one"])){
  $title = $_POST["title"];
  $content = $_POST["content"];

  $query = mysqli_query($cnx,"INSERT INTO blog VALUES(NULL,'$title','$content','$image')");
  echo mysqli_error($cnx);
}


?>

<head>
<title>Admin</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>


<body>
    <a href="index.php" class="btn btn-info mt-3 ml-3 mb-5">Acceuil</a>

    <div class="container">
        <div class="row">
            <h1 class="title">Ecrire un blog</h1>

        </div>
      <div class="row">

  <form class="mb-5" action="admin.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Titre</label>
          <input name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Photo</label>
    <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <button name="one" type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
    </div>
    

    <div class="container">
        <div class="row">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
   
</body>