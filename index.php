
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.CSS">
<style>
  body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.city {
  background-color: #007bff;
  color: white;
  border: 2px solid #0056b3;
  padding: 20px;
  margin-bottom: 20px;
}

.city h3 {
  margin-top: 0;
}

.city p {
  margin-bottom: 10px;
}

.city a {
  color: #fff;
  text-decoration: none;
}

.city a:hover {
  text-decoration: underline;
}
    </style>

<title>my home page</title>
</head>

<body>
  <?php include('menu.php'); ?>
  <div class="container">
    <h2>Welcome to My PHP & MYSQL webpage</h2>
    <div class="city">
      <h3>My Name is: Aseel O</h3>
      <p>This Assessment shows how to build a dynamic website Using PHP & MySQL</p>
      <h5>My ID: 30083129</h5>
      <a href="contact.php">Click to visit the contact page.</a>
    </div>
  </div>
</body>



   