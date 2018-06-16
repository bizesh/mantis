<?php
include('include.php');
?>
<div class="col-sm-9">
 <!-- select -->
 <i><h3> Update Project Details <h3> </i>
 <br>
 <div class="form-group">
                    <label>Id</label>
                    <input type="text" class="form-control" placeholder="12131"  disabled>
                  </div>



 <!-- select -->
 
 
 <div class="form-group">
                    <label>Name of contract</label>
                    <input type="text" class="form-control" placeholder="Narayanghat Muglin Road"  disabled>
                  </div>


 <!-- select -->
 <div class="form-group">
                    <label>Progress</label>
                    <select class="form-control">
                      <option>10%</option>
                      <option>20%</option>
                      <option>30%</option>
                      <option>40%</option>
                      <option>50%</option>
                      <option>60%</option>
                      <option>70%</option>
                      <option>80%</option>
                      <option>90%</option>
                      <option>100%</option>
                    </select>
                  </div>


                  </div>

                  <div class="form-group">
                  <form action="postimage.php" method="POST" enctype='multipart/form-data'>
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <br>
                      <div class="input-group-append">
                      <br>
                      <input type='submit' value='Submit' name='but_upload'>
                      </div>
                    </div>
                  </div>
</form>

<?php
include('include2.php');
?>