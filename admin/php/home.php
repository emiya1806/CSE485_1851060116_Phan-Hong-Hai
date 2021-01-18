<h2>Edit Home Section</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  something wrong with your image please check type or size !
</div>
      <?php
  } } 
?>  
         <form method="post" action="php/uhome.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['profilepic']?>" class="oo img-thumbnail"><br>
  <label>Profile Pic (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="profile" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Choose Profile Pic...</label>
  </div></div>
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['homewallpaper']?>" class="oo img-thumbnail">
  <label>Home Cover (Minimum 1920 X 1280, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="cover" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Choose Home Cover...</label>
  </div></div>
  
   <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="name" name="name" value="<?=$data['name']?>" class="form-control" id="name" placeholder="Mohan Goswami">
    </div>
    
   
    
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?=$data['emailid']?>" class="form-control" id="email" placeholder="workwithmohan@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="twitter">Twitter</label>
      <input type="text" class="form-control" value="<?=$data['twitter']?>" name="twitter" id="twitter" placeholder="https://twitter.com/k1ller_Que3n">
    </div>
    
    <div class="form-group col-md-6">
      <label for="facebook">Facebook</label>
      <input type="text" class="form-control" value="<?=$data['facebook']?>" name="facebook" id="facebook" placeholder="https://www.facebook.com/profile.php?id=100027259371639">
    </div>
    
    <div class="form-group col-md-6">
      <label for="instagram">Instagram</label>
      <input type="text" class="form-control" value="<?=$data['instagram']?>" name="instagram" id="instagram" placeholder="https://www.instagram.com/k1llerque3n/">
    </div>
    
    <div class="form-group col-md-6">
      <label for="reddit">Skype</label>
      <input type="text" class="form-control" value="<?=$data['reddit']?>" name="reddit" id="reddit" placeholder="https://www.reddit.com/u/k1ller_Que3n">
    </div>
    
    <div class="form-group col-md-6">
      <label for="twitch">Linkedin</label>
      <input type="text" class="form-control" value="<?=$data['twitch']?>" name="twitch" id="twitch" placeholder="https://www.twitch.tv/killer_qu3en">
    </div>
    <div class="form-group col-md-6">
      <label for="spotify">Github</label>
      <input type="text" class="form-control"  value="<?=$data['spotify']?>" name="spotify" id="spotify" placeholder="https://open.spotify.com/user/31j5wci3pc3bmg7hv6zgdsyrcapq  ">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" value="<?=$data['location']?>" class="form-control" id="address" placeholder="8/16/37/349 Minh Khai, Ha Noi, Viet Nam">
  </div>
  <div class="form-row">
  <div class="form-group col-md-9">
    <label for="profession">Proffesion Titles (Separate with ',' comma)</label>
    <input type="text" class="form-control" name="profession" value="<?=$data['professions']?>" id="profession" placeholder="Student">
  </div>
  <div class="form-group col-md-3">
    <label for="mobile">Mobile No</label>
    <input type="text" class="form-control" value="<?=$data['mobile']?>" name="mobile" id="mobile" placeholder="+84934342000">
  </div>
             </div>
  <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>
