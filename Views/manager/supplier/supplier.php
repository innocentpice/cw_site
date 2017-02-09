<header class="text-center">
    <h1>Supplier Management.</h1>
</header>
<div style="margin-top:4rem;">
    <div class="table-responsive">
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>SUP_ABNAME</th>
              <th>SUP_NAME</th>
              <th>SUP_ADDRESS</th>
              <th>SUP_TEL</th>
              <th>SUP_EMAIL</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($this->supplier as $supplier){?>
            <tr>
                <td><?=$supplier['NO']?></td>
                <td><?=$supplier['SUP_ABNAME']?></td>
                <td><?=$supplier['SUP_NAME']?></td>
                <td><?=$supplier['SUP_ADDRESS']?></td>
                <td><?=$supplier['SUP_TEL']?></td>
                <td><?=$supplier['SUP_EMAIL']?></td>
            </tr>
            <?php }?>
          </tbody>
    </table>
  </div>
</div>