<?php include($_SERVER['DOCUMENT_ROOT'].'/slim3/app/Views/header.php'); ?>

<div class="container">

<div class="panel panel-default">

    <!-- Default panel contents -->
  <div class="panel-heading">Upcoming visits</div>

  <!-- Table -->
  <table id="visitsTable" class="table">
    <tr>
      <th>Id</th>
      <th>Data</th>
      <th>Local</th>
      <th>Valor</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($visits as $item): ?>

    <tr>
      <td><?php echo $item['id']; ?></td>
      <td><?php echo $item['data']; ?></td>
      <td><?php echo $item['local']; ?></td>
      <td><?php echo $item['valor']; ?></td>
      <td>
        <a title="Delete" href="" class="btn-danger btn-sm" role="button">
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>
      </tr>

      <?php endforeach; ?>

    </table>
  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/slim3/app/Views/footer.php'); ?>
