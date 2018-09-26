Server configuration disclosure

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

I found some dangerous urls on your servers that reveal important informations about the servers configuration themself and that are very interesting from a hacker point of view.

##POC##

  1 - Go to : <?php echo $website ?>

##Full Screen##

{}

##Remediation##

Restrict access to files that begins by .ht

  * disable that kind of function on production server
  * protect them with strong credentials
  * use ip restriction

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

While this does not represent a real security issue, this reveal important informations about your system and could be used by a malicious user for a future attack. A hacker could retrieve the modules installed on the server with their version number and then find a corresponding exploit on the Internet. The full path is mandatory for a file upload attack.