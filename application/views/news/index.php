<div class="container">
  <h2><?php echo $title; ?></h2>
  <table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Slug</td>
        <td>Text</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($news as $news_item): ?>
      <tr>
        <td><?php echo $news_item['id']; ?></td>
        <td><?php echo $news_item['title']; ?></td>
        <td><?php echo $news_item['text']; ?></td>
        <td><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p></td>
        <td>
          <a href="javascript:;" class="btn btn-info">Edit</a>
          <a href="javascript:;" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php foreach ($news as $news_item): ?>

          <h3><?php echo $news_item['title']; ?></h3>
          <div class="main">
                  <?php echo $news_item['text']; ?>
          </div>
          <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

  <?php endforeach; ?>
</div>
