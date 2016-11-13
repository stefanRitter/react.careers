<nav class="tabs">
  <?php if ( $post->post_name == 'jobs-2' || $post->post_name == 'jobs') : ?>
    <a href="/" class="active-tab">Search Jobs</a>
    <a href="/companies">View Companies</a>

  <?php else : ?>
    <a href="/">Search Jobs</a>
    <a href="/companies" class="active-tab">View Companies</a>

  <?php endif; ?>
</nav>
