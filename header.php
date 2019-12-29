<!Doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<nav class="navbar container" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item logo" href="">
      <strong><span class="blue-bg">ada</span>ux</strong>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a  href="<?php echo site_url('/blog'); ?>" class="navbar-item">
        Articles
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Extras
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Gaming
          </a>
        </div>
      </div>

      <a class="navbar-item">
        Need help with ADA?
      </a>

    </div>
    <div class="navbar-end">
    <a class="navbar-item " href="https://github.com/jenny-q">
        <span class="button is-small">
          github
        </span>
      </a>
  </div>

  </div>
</nav>


