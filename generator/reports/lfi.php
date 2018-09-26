Local file inclusion on <?php echo $website; ?>

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

The parameter **xxxx** at the following url is vulnerable to Local File Inclusion: <?php echo $website; ?>

##POC##

  Click on one of the following link: <?php echo $website; ?>/etc/passwd
  you will see your passwd file

##Remediation##

  * sanitize all input parameters to disallow directory traversal
  * create a whitelist of files that can be included

##References##

https://www.owasp.org/index.php/Testing_Directory_traversal/file_include_(OTG-AUTHZ-001)

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

sensitive information leakage (usernames, package installed, service running...)