htaccess file is readable

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

It appears that there is a misconfiguration that is causing the contents of the ``.htaccess`` to become world readable. While this does not represent an immediate security issue, there is definitely a server misconfiguration/information leak that should be fixed.

##POC##

  1 - Go to : <?php echo $website ?>

##Full Screen##

{}

##Remediation##

Restrict access to files that begins by .ht

  * Apache <FilesMatch "^.ht"> Require all denied
  * Nginx location ~/.ht { deny all; }

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

know information about web app