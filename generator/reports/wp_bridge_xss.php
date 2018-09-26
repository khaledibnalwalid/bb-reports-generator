Reflected Xss at wordpress plugin

===============================================

**H**ello <?php echo $program; ?> team,

i found your blog has a theme vulnerable to Dom Xss

Vulnerable Domain : <?php echo $website; ?>

Vulnerable theme : Bridge

##POC##

  Go to : ``<?php echo $website; ?>/#<img src=u onerror=alert(document.domain);>``

  The alert box should be executed.

##Remediation##

  Update the theme to latest version

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

Allow attacker to inject JS code