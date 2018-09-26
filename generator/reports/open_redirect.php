Open redirect on <?php echo $website; ?>

===============================================

**H**ello <?php echo $program; ?> team,

I would like to report an open redirect issue on <?php echo $website ?>

##Description##

An attacker can redirect a user to any external website using the vulnerable parameter .

##POC##

  1 - Visit the following url: https://xxx.xxxxxxxxxxxx.xxx/.....
  2 - This will redirect you to http://google.com

##Full Screen##

{}

##Remediation##

  * fix/update/remove the vulnerable script
  * disable PHP errors in the php.ini -> display_errors: Off

##Refrences##

https://www.owasp.org/index.php/Unvalidated_Redirects_and_Forwards_Cheat_Sheet

Best regards,
Thanks for your time .
@khaledibnalwalid


------ impact -------

By modifying untrusted URL input to a malicious site, an attacker may successfully launch a phishing scam and steal user credentials. Because the server name in the modified link is identical to the original site, phishing attempts may have a more trustworthy appearance.