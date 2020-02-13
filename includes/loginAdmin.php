<div id="adminLogin" class="w3-modal ">
<div class="w3-modal-content">
  <header class="w3-container w3-brown w3-center">
    <span onclick="document.getElementById('adminLogin').style.display='none'" class="w3-closebtn">×</span>
    <h2>Admin login section</h2>
  </header>
  <div class="w3-container">
  <form class="w3-container" action="includes/connection.php" method="post">

  <p>
  <label class="w3-label w3-text-brown"><b>Email</b></label>
  <input class="w3-input w3-border w3-sand" name="adminemail" type="email" required></p>

  <p>
  <label class="w3-label w3-text-brown"><b>Password</b></label>
  <input class="w3-input w3-border w3-sand" name="adminpassword" type="password"></p>
  <p>
<div class="w3-center">
  <button type="submit" name="adminlogin" class="w3-btn w3-brown w3-round-large w3-hover-shadow">Login</button></p>
</div>

  </form>


  </div>
  <footer class="w3-container w3-pale-red w3-center">
    <p>Maseno university christian union</p>
  </footer>
</div>
</div>
