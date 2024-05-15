<?php
include('menu.php');
include("connections.php");
$sql = "SELECT * FROM questions";
$result = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Definitions Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"> <!-- Link to your style.css file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


    

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Questions</h1>
</div>

<div class="container mt-5">
  <div class="accordion" id="accordionExample">

    <?php while ($data = $result->fetch(PDO::FETCH_ASSOC)): ?>
      <!-- Start of Definition Accordion Item -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading<?= $data['id'] ?>">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $data['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $data['id'] ?>">
            <?= $data['Question'] ?>
          </button>
        </h2>
        <div id="collapse<?= $data['id'] ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?= $data['id'] ?>" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <!-- Start of Description Accordion -->
            <div class="accordion" id="descriptionAccordion<?= $data['id'] ?>">
              <div class="accordion-item">
                <h2 class="accordion-header" id="descriptionHeading<?= $data['id'] ?>">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#descriptionCollapse<?= $data['id'] ?>" aria-expanded="true" aria-controls="descriptionCollapse<?= $data['id'] ?>">
                    Description
                  </button>
                </h2>
                <div id="descriptionCollapse<?= $data['id'] ?>" class="accordion-collapse collapse show" aria-labelledby="descriptionHeading<?= $data['id'] ?>" data-bs-parent="#descriptionAccordion<?= $data['id'] ?>">
                  <div class="accordion-body">
                    <?= $data['Description'] ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Description Accordion -->

            <!-- Start of Answer Accordion -->
            <div class="accordion" id="answerAccordion<?= $data['id'] ?>">
              <div class="accordion-item">
                <h2 class="accordion-header" id="answerHeading<?= $data['id'] ?>">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answerCollapse<?= $data['id'] ?>" aria-expanded="true" aria-controls="answerCollapse<?= $data['id'] ?>">
                    Answer
                  </button>
                </h2>
                <div id="answerCollapse<?= $data['id'] ?>" class="accordion-collapse collapse show" aria-labelledby="answerHeading<?= $data['id'] ?>" data-bs-parent="#answerAccordion<?= $data['id'] ?>">
                  <div class="accordion-body">
                    <?= $data['Answer'] ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Answer Accordion -->
          </div>
        </div>
      </div>
      <!-- End of Definition Accordion Item -->
    <?php endwhile; ?>

  </div>
</div>

</body>
</html>