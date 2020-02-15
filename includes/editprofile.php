<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header w3-center">
        <h1 class="modal-title">Edit your profile here</h1>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="includes/connection.php" autocomplete="off" enctype="multipart/form-data" class="">
      <div class="row">
        <div class="col-md-3">
          <div class="">
            <div class="custom-file">
              <input type="file"  name="userimage" class="custom-file-input" id="customFile new_pic"  accept=".png, .jpg" onchange="handleFiles(this.files)">
              <label class="custom-file-label" for="customFile">Choose image</label>
            </div>
          </div>
        </div>
        <div class="col-md-9 d-flex">
          <div class="d-flex preview-empty mx-auto" id="preview" style="width:100px;width:150px;"><img src="" alt="" id="preview_img">
            <p><strong>No image selected</strong></p>
          </div>
        </div>
      </div>
<!-- eveteam select -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="my-3">
          <label for="eveteam">Select your eveteam</label>
          <select name="eveteam" class="selectpicker "  id="eveteam" >
            <?php
            $groupquery = "SELECT * FROM `groups` WHERE `type`='eve_team'";
            $group_result = $conn->query($groupquery);
            if ($group_result->num_rows > 0) :
                while($group_row = $group_result->fetch_assoc()) :?>
                <option data-tokens="" style="color:black" value="<?= $group_row['id'] ?>" <?php if ($group_row['id'] == $memberteam) echo "selected"; ?>><?= $group_row['name'] ?></option>
            <?php
            endwhile;
            endif;
            ?>
          </select>
          </div>
<!-- Select your ministries -->
          <div class="form-group mb-3">
          <label for="groupId">Select Your ministries</label>
          <select class="selectpicker " id="groupId" name="minGid[]" multiple>
            <?php
            $groupquery = "SELECT * FROM `groups` WHERE `type`='ministry'";
            $group_result = $conn->query($groupquery);
            if ($group_result->num_rows > 0) :
                while($group_row = $group_result->fetch_assoc()) :?>
                <option  value="<?= $group_row['id']?>" <?php if (in_array($group_row['id'], $member_ministry_ids)) echo "selected"; ?>><?= $group_row['name'] ?></option>
            <?php
            endwhile;
            endif;
            ?>
          </select>
          </div>
          <div class="form-group">
            <label for="course"><b>Course</b></label>
            <input class="form-control" type="text" placeholder="Enter your course" name="course">
          </div>
        </div>

        <div class="col-md-1"></div>
      </div>
          <button type="submit" name="edit" class="btn btn-outline-info w-50 btnStyle">Complete changes</button>
          <!-- <button type="submit" class="btn btn-outline-info w-40 btnStyle" onclick="closeForm()">Close</button> -->
        </form>
          </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger w-50" data-dismiss="modal">Close </button>
      </div>

    </div>
  </div>
</div>
