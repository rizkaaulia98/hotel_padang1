<div class="col-sm-6"> <!-- menampilkan peta-->
  <section class="panel">
    <header class="panel-heading">
      <h3>
        <input id="latlng" type="text" class="form-control" style="width:200px" value="" placeholder="Latitude, Longitude">
          <button class="btn btn-default my-btn" id="btnlatlng" type="button" title="Geocode"><i class="fa fa-search"></i></button>
          <button class="btn btn-default my-btn" id="delete-button" type="button" title="Remove shape"><i class="fa fa-trash"></i></button>
      </h3>
    </header>

    <div class="panel-body">
      <div id="map" style="width:100%;height:420px; z-index:50"></div>
    </div>
  </section>
</div>

<div class="col-sm-6"> <!-- menampilkan form add mosque-->
  <section class="panel">
    <div class="panel-body">
      <a class="btn btn-compose">Update Information</a>
      <div class="box-body">
        <div class="form-group" id="hasilcari1">
				  <?php if (isset($_GET['id'])){
    	 			$id=$_GET['id'];
    				$sql = mysqli_query($conn, "SELECT id, name, address,cp, ktp, marriage_book, access, mushalla, ST_AsText(geom) as geom, id_type FROM hotel where id='$id'");
    				$data =  mysqli_fetch_array($sql);
    			?>
          <form role="form" action="act/hotel_update.php" enctype="multipart/form-data" method="post">

            <div class="form-group">
              <label for="geom">Koordinat</label>
              <textarea class="form-control" id="geom" name="geom" readonly><?php echo $data['geom'] ?></textarea>
            </div>
            <div class="form-group">
              <label for="id">ID Hotel</label>
              <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>">
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
            </div>
            <div class="form-group">
              <label for="address">Cp</label>
              <input type="text" class="form-control" name="cp" value="<?php echo $data['cp'] ?>">
            </div>
            <div class="form-group">
              <label for="type">Type</label>
              <select name="type" id="type" class="form-control">
                <?php
                  $kategori=mysqli_query($conn, "select * from hotel_type order by name ");
                  while($rowkategori = mysqli_fetch_assoc($kategori)){
                    if ($data[id_type]==$rowkategori[id]){
                      echo "<option value=\"$rowkategori[id]\" selected>$rowkategori[name]</option>";}
                      else{
                      echo "<option value=\"$rowkategori[id]\">$rowkategori[name]</option>";}
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="type">Mushalla</label>
              <select name="mushalla" id="mushalla" class="form-control">
                <?php
                  if ($data['mushalla'] == 1) {?>
                    <option value="1" selected>Ada</option>
                    <option value="0">Tidak Ada</option>
                <?php
                  }else{
                ?>
                    <option value="1">Ada</option>
                    <option value="0" selected>Tidak Ada</option>
                <?php
                  }
                ?>
              </select>
            </div>
            <br>
            <h4>Requirements</h4>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <?php
                    if ($data['ktp'] == 1) {?>
                      <input type="checkbox" name="ktp" value="1" checked>ID Card
                  <?php
                    }else{
                  ?>
                      <input type="checkbox" name="ktp" value="1" >ID Card
                  <?php
                    }
                  ?>
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <?php
                    if ($data['marriage_book'] == 1) {?>
                      <input type="checkbox" name="marriage_book" value="1" checked>Marriage Book
                  <?php
                    }else{
                  ?>
                      <input type="checkbox" name="marriage_book" value="1" >Marriage Book
                  <?php
                    }
                  ?>
                </label>
              </div>
            </div>

            <h4>Access</h4>
            <div class="form-group">
              <div class="radio">
                <label>
                  <input type="radio" name="access" value="1" <?php if($data['access']=='1') echo 'checked';?>>Bus
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="access" value="0" <?php if($data['access']=='0') echo 'checked';?>>No Bus
                </label>
              </div>
            </div>


            <button type="submit" class="btn btn-primary pull-right">Save <i class="fa fa-floppy-o"></i>
            <input hidden name="id_awal" value="<?php echo $data['id'] ?>"></button>
          </form>
        </div><!-- Form Group -->
      </div><!-- Box Body -->
    </div><!-- Panel Body -->
  </section>
</div>
<script src="inc/mapupd.js" type="text/javascript"></script>
