xmlrpc.php FILE IS enable it can using for brute force attack or denial of service

===============================================

**H**ello <?php echo $program; ?> team,

i found the xmlrpc.php is enable and it can using for brute force attack or denial of service

``Wordpress that have xmlrpc.php enabled for pingbacks, trackbacks, etc. can be made as a part of a huge botnet causing a major DDOS``

##Description##

xmlrpc.php file enabled at : <?php echo $website; ?>/xmlrpc.php and could thus be potentially used for such an attack against other victim hosts.

and i tested the file and it working

{}

Now, considering the domain <?php echo $website; ?>, the xmlrpc.php file discussed above could potentially be abused to cause a DDOS attack against a victim host. This is achieved by simply sending a request that looks like below.

```
reqeust
```

As soon as the above request is sent, the victim host (173.243.56.36) gets an entry in its log file with a request originating from the <?php echo $website; ?> domain verifying the pingback.

##Remediation##

If the XMLRPC.php file is not being used, it should be disabled and removed completely to avoid any potential risks. Otherwise, it should at the very least be blocked from external access.

##References##

https://hackerone.com/reports/325040
https://blog.sucuri.net/2015/10/brute-force-amplification-attacks-against-wordpress-xmlrpc.html
https://blog.sucuri.net/2014/03/more-than-162000-wordpress-sites-used-for-distributed-denial-of-service-attack.html

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

This can be automated from multiple hosts and be used to cause a mass DDOS attack on the victim.

this method is also used for brute force attacks to stealing the admin credentials and other important credentials