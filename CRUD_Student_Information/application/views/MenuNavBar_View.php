<nav class="navbar navbar-light bg-faded" style="background-color: cyan;">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
    <ul class="navbar-nav" style="list-style-type: none;">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>index.php/ShowData_Controller">List Data<span
            class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>index.php/AddData_Controller">Add Data</a>
      </li>
    </ul>
  </div>
</nav>
