<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav") ?>

<!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo site_url('dashboard/') ?>">Dashboard</a>
      </li>
    </ol>
  <?php foreach($user as $u){ ?>
  <form method="post" action="<?php echo site_url('user/update'); ?>">
    <div>
     <label for="kodeprod" class="text text-danger">Id User</label>
     <div>
       <input type="text" class="form-control" name="id_user" readonly value="<?php echo $u->id_user ?>">
     </div>
     </div>
    <div>
     <label for="kodeprod" class="text text-danger">User Name:</label>
     <div>
       <input type="text" class="form-control" name="username" value="<?php echo $u->username ?>">
     </div>
     </div>
     <div>
      <label for="kodeprod" class="text text-danger">Password:</label>
      <div>
        <input type="text" class="form-control" name="password">
      </div>
    </div>
    <div>
     <label for="kodeprod" class="text text-danger">Nama User:</label>
     <div>
       <input type="text" class="form-control" name="nama" value="<?php echo $u->nama_user ?>">
     </div>
   </div><br/><br/>
   <div class="footer">
     <center>
       <button class="btn btn-danger" type="submit">KEMBALI</button>
       <button class="btn btn-success" type="submit" name="tambah">UBAH</button>
    </center>
   </div>
 </form><br/><br/>
  <?php } ?>

<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
