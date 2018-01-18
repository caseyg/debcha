<?php snippet('header') ?>

<div class="container py-3">
  <div class="row pt-3">
    <div class="col-12">
      <h1 class="pt-3"><?php echo $page->title() ?></h1>
      <hr>
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col-6 col-sm-3">
      <figure>
        <img src="<?php echo $page->portrait()->toFile()->resize('900')->url() ?>" class="img-fluid">
      </figure>
    </div>
    <div class="col-sm-9">
      <div class="row">
        <div class="h4 col-sm-5">
          <?php echo $page->about()->kt() ?>
        </div>
        <table class="contactinfo">
          <tr>
            <th>Email</th>
            <th>Twitter</th>
          </tr>
          <tr>
            <td><a href="mailto:<?php echo $page->email() ?>"><?php echo $page->email() ?></a></td>
            <td><a href="http://twitter.com/<?php echo $page->twitter() ?>">@<?php echo $page->twitter() ?></a></td>
          </tr>
          <tr>
            <th colspan="2">Mailing Address</th>
          </tr>
          <tr>
            <td colspan="2"><?php echo $page->mailingaddress()->kt() ?></td>
          </tr>
          <tr>
            <th>Phone*</th>
            <th>Fax**</th>
          </tr>
          <tr>
            <td><?php echo $page->phone()->kt() ?></td>
            <td><?php echo $page->fax()->kt() ?></td>
          </tr>
          <tr>
            <td colspan="2" class="contactinfo__disclaimer"><?php echo $page->disclaimer()->kt() ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr style="clear:both;">
  <div class="row">
    <div class="col-12">
      <?php echo $page->bio()->kt() ?>
    </div>
  </div>
</div>
</div>
<?php snippet('footer') ?>
