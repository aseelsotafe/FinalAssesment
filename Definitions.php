<?php
include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Definitions Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container-fluid {
      padding: 20px;
      background-color: #007bff;
      color: white;
      text-align: center;
    }

    .accordion-item {
      margin-bottom: 10px;
    }

    .accordion-button {
      background-color: #007bff;
      color: white;
      border: 1px solid #007bff;
    }

    .accordion-button:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .accordion-collapse {
      border-top: 1px solid #007bff;
    }

    .accordion-body {
      background-color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <h1>Definitions</h1>
</div>

<div class="container mt-5">
  <div class="accordion" id="accordionExample">
    <?php
    include("connections.php");

    $sql = "SELECT * FROM definitions";
    $result = $pdo->query($sql);
    $i = 0;
    while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
      $questionID = $data['id'];

      if ($i == 0) {
    ?>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <?php echo $data['Title']; ?>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <?php echo $data['Description']; ?>
        </div>
      </div>
    </div>
    <?php } else { ?>
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading<?php echo $questionID; ?>">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $questionID; ?>" aria-expanded="false" aria-controls="collapse<?php echo $questionID; ?>">
          <?php echo $data['Title']; ?>
        </button>
      </h2>
      <div id="collapse<?php echo $questionID; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $questionID; ?>" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <?php echo $data['Description']; ?>
        </div>
      </div>
    </div>
    <?php } $i++;} ?>
  </div>
</div>

</body>
</html>