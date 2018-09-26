Click jacking on <?php echo $website; ?>

=====================================

**H**ello <?php echo $program; ?> team,

##Description##

I found this page : <?php echo $website; ?> is vulnerable to clickjacking.

``Clickjacking, also known as a "UI redress attack", is when an attacker uses multiple transparent or opaque layers to trick a user into clicking on a button or link on another page when they were intending to click on the the top level page. Thus, the attacker is "hijacking" clicks meant for their page and routing them to another page, most likely owned by another application, domain, or both.``

##POC##

  1. Open any editor and put this code on it 
  ```
  <iframe src="<?php echo $website; ?>"></iframe>
  ```

##Remediation##

* set a correct value to the HTTP header X-Frame-Options
https://developer.mozilla.org/fr/docs/HTTP/Headers/Content-Security-Policy

* set a correct value to the HTTP header Content-Security-Policy
https://developer.mozilla.org/fr/docs/HTTP/Headers/X-Frame-Options

* implement a frame breakder
https://www.thesitewizard.com/archive/framebreak.shtml

##Refrences##

https://www.owasp.org/index.php/Clickjacking
https://www.owasp.org/index.php/Clickjacking_Defense_Cheat_Sheet

Best regards,
Thanks for your time .
@khaledibnalwalid

---impact---

An attacker could embed your website in an iframe and by tricking the UI, the user himself could unintentionally perform dangerous actions. You may think that kind of attack is not so dangerous but combined with other vulnerabilities, it could be deadly.