<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h1 class="modal-title">Modal Heading</h1>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-popup" id="myForm" style="display:block">
          <div class="d-flex preview-empty" id="preview" style="width:100px;width:150px;"><img src="" alt="" id="preview_img"><p><strong>No images selectd</strong></p></div>

        <form method="POST" action="includes/connection.php" autocomplete="off" enctype="multipart/form-data" class="form-container">
          <h1>Edit</h1>

          <div class="form-group">
            <label for="image">My image:</label>
            <input class="" type="file" name="userimage" id="new_pic" accept=".png, .jpg" onchange="handleFiles(this.files)">
          </div>

          <label for="course"><b>Course</b></label>
          <input type="text" placeholder="Enter your Course" name="course" required>

          <button type="submit" name="edit" class="btn btn-outline-info w-40 btnStyle">Finish</button>
          <button type="submit" class="btn btn-outline-info w-40 btnStyle" onclick="closeForm()">Close</button>
        </form>
      </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
