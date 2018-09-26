Directory listing on <?php echo $website; ?>

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

I found Directory Listing on <?php echo $website ?>

##POC##

  1 - Go to : <?php echo $website ?>
  2 - you will see **Index of /icons**

##Full Screen##

{}

##Remediation##

  * create a file named index.html in those folders
  * disable directory index in Apache configuration: "Options -Indexes"

##Refrences##

http://projects.webappsec.org/w/page/13246922/Directory%20Indexing

Best regards,
Thanks for your time .
@khaledibnalwalid