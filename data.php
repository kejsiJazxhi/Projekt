<?php include "header.php"; ?>
<div class="container">
  <div class="row">
    <div class="col-md-5 titulli_majtas">
      <h2> <b>Employees</b></h2>
    </div>
    <div class="col-md-5 "></div>

  </div>
</div>
<form>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" id="forma_shtimit">
          <div class="modal-body ">
            <input class="form-control" name="full_name" id="full_name" type="text" placeholder="Full Name" /> <br>
            <input class="form-control" name="email" id="email" type="text" placeholder="Email " />  <br>
            <input class="form-control" name="salary" id="salary" type="number" placeholder="Salary" /> <br>
            <input class="form-control" name="working_date" id="working_date" type="number" placeholder="Working Date" /> <br>
            <select class="form-control" name="role" id="fuel" type="text">
              <option selected>Role</option>
              <option>Recepsionist</option>
              <option>Web Designer</option>
              <option>Administrator</option>
              <option>Office manager</option>
              <option>Operations manager</option>
            </select>
            <label>Status: </label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                New Employee
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                Hired Employeee
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                Fired Employee
              </label>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" id="butsave" class="btn btn-primary" type="submit">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>
<div class="container ">
  <div class="row">
    <div class="col-md-12">

      <?php
      $stmt = $conn->query("SELECT * FROM projekt");
      $result = $stmt->fetchAll();


      ?>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr class="table-dark">
            <th> Full Name</th> 
            <th> Email</th>
            <th> Salary</th>
            <th> Working Date</th>
            <th> Role</th>
            <th> Status</th>
            <th><button type="button" class="btn btn-md btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Employee </button></th>
          </tr>
          <?php foreach ($result as $row) { ?>
            <tr class="table-dark">
              <td><?php echo $row['full_name']; ?> </td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['salary']; ?></td>
              <td><?php echo $row['working_date']; ?></td>
              <td><?php echo $row['role']; ?></td>
              <td><?php echo $row['statuss']; ?></td>
              <td>
                <button type="button" class="btn btn-sm btn-danger"> Delete </button>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>



<?php include "footer.php"; ?>