<?php require 'partials/head.php'; ?>
<!-- Navbar -->
<?php require 'partials/nav.php'; ?>

<main>
<div class="container">
    <div class="row">
        <div class="table-responsive mt-5">
        <button class="btn btn-success mb-3" data-bs-target="#addfile" data-bs-toggle="modal">Add New File</button>
        <button class="btn btn-warning mb-3" data-bs-target="#addfolder" data-bs-toggle="modal">Add New Folder</button>
            <table id="projects" class="table table-hover" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Date Created</th>
                        </tr>
                    </thead>

                    <tbody>
                            <tr> 
                            <td><a class="text-decoration-none text-dark" href=""><strong>123</strong></a></td>
                            <td>10/20/12</td>
                            </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

</main>

<!-- For Upload File -->
<div class="modal fade" id="addfile" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Add File</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" method="POST" enctype="multipart/form-data">
        <input type="file">
       </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Upload</button>
      </div>
    </div>
  </div>
</div>

<!-- For Folder Create -->
<div class="modal fade" id="addfolder" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Add Folder</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label">Folder Name</label>
            <input type="test" class="form-control form-control-lg">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Create Folder</button>
      </div>
    </div>
  </div>
</div>

<?php require 'partials/footer.php'; ?>