Full Path Disclosure in <?php echo $website; ?>

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

I found some PHP errors that contains the full path of your scripts in <?php echo $website ?>

##POC##

  1 - Go to : <?php echo $website ?>
  2 - ...
  3 - ...

##Full Screen##

{}

##Remediation##

  * fix/update/remove the vulnerable script
  * disable PHP errors in the php.ini -> display_errors: Off

##Refrences##

https://www.owasp.org/index.php/Full_Path_Disclosure

Best regards,
Thanks for your time .
@khaledibnalwalid


------ impact -------

This issue is not critical by itself but it can help for further attacks that require the attacker to have the full path, for example to upload a file on the server.