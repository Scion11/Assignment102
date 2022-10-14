<div class="col-4 mx-auto border shadow rounded py-4 mt-5 px-4">
    <h4>Add Member</h4>    
    <form method="POST">
        <input type="hidden" id="csrf" name="csrf" value="<?php echo $_SESSION["CSRF_TOKEN"]?>">        
        <label class="mt-4">First Name:</label>
        <input type="text" class="form-control" id="fname" name="fname" required>
        <label class="mt-4">Last Name:</label>
        <input type="text" class="form-control" id="lname" name="lname" required>
        <label class="mt-4">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>        
        <label class="mt-4">Password:</label>
        <input type="password" class="form-control" id="password1" name="password1" >
        <label class="mt-4">Retype Password:</label>
        <input type="password" class="form-control" id="password2" name="password2"required>        
        <label class="mt-4">Remarks:</label>
        <textarea class="form-control" id="remarks" name="remarks"></textarea>
        <button class="btn btn-primary mt-4" id="submit" name="submit">Submit</button>        
    </form>
</div>