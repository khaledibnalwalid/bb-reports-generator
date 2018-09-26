CRLF injection in <?php echo $website; ?>

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

The following url/server are vulnerable to CRLF attack aka Carriage Return Line Feed injection : <?php echo $website; ?>

When adding the characters ``%0D%0A`` in the url, it's possible to inject headers in the returned response, this leads to:

Cookie injection
An attacker can inject cookies with the desired name and value and even overwrite existing cookies.

HTTP response splitting
An attacker could alter the content of the page served and trick users with a corrupted url. (not reproductible, Firefox returns an error "Corrupted Content Error")

##POC##

curl -i -s "<?php echo $website; ?>/%0d%0aSet-cookie:%20Test=crlfinjection"

##Refrences##

https://www.owasp.org/index.php/CRLF_Injection
https://www.owasp.org/index.php/HTTP_Response_Splitting

Best regards,
Thanks for your time .
@khaledibnalwalid

---impact---

Attacker can inject new cookie in user's browser