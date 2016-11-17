<?php
function resolve_tab($tably)
{
  global $tab;
  return ($tab == $tably) ? ' active' : '';
}
?>
<nav class="navbar navbar-dark bg-primary navbar-full">
  <a class="navbar-brand" href="/">Alphex</a>
  <ul class="nav navbar-nav">
    <li class="nav-item<?=resolve_tab("Exchange")?>"><a class="nav-link" href="/exchange">Exchange</a></li>
    <li class="nav-item<?=resolve_tab("Trading")?>"><a class="nav-link" href="/trading">Trading</a></li>
    <li class="nav-item<?=resolve_tab("Funding")?>"><a class="nav-link" href="/funding">Funding</a></li>
  </ul>
  <ul class="nav navbar-nav float-xs-right">
    <?php
    if ($authenticated) {
    ?>
    <li class="nav-item<?=resolve_tab("Wallet")?>"><a class="nav-link" href="/wallet">Wallet</a></li>
    <li class="nav-item<?=resolve_tab("Profile")?>"><a class="nav-link" href="/profile"><?=htmlspecialchars($authenticated_user)?></a></li>
    <li class="nav-item"><a class="nav-link" href="?signout=✓">Sign Out</a></li>
    <?php
    } else {
    ?>
    <li class="nav-item<?=resolve_tab("Sign In")?>"><a class="nav-link" href="/signin">Sign In</a></li>
    <li class="nav-item<?=resolve_tab("Sign Up")?>"><a class="nav-link" href="/signup">Sign Up</a></li>
    <?php
    }
    ?>
  </ul>
</nav>
<div id="targetElement">
  
</div>