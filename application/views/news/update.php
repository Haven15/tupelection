<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/dist/css/bootstrap.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/dist/css/bootstrap-theme.min.css') ?>">
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/update'); ?>
    <div class="navbar navbar-default">
      <div class=container>
      <h2><span class="glyphicon glyphicon-home"></span>&nbsp;Welcome to my Application!</h2>

      <label for="title">ID</label>
      <input type="input" name="id" /><br />

      <label for="title">Title</label>
      <input type="input" name="title" /><br />

      <label for="text">Text</label>
      <textarea name="text"></textarea><br />

      <input type="submit" name="submit" value="Update news item" />
      </div>
    </div>
</form>
