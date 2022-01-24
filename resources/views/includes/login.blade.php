<!-- Login Modal -->
<div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="loginModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLongTitle">Login to the PhoneBook</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="app/login.php">
        <div class="modal-body">
          <label>Username</label> 
          <input type="text" name="username" placeholder="Enter a username"> <br />
          <label>Password</label> 
          <input type="password" name="password" placeholder="Enter in a password">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="login-submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>