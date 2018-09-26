Cross-domain Referer leakage leads to account takeover

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

It has been identified that the application is leaking referrer token to third party sites. In this case it was found that the password reset token is being leaked to third party sites which is a issue knowing the fact that it can allow any malicious users to use the token and reset the passwords of the victim.

##POC##

  1 - Request a password reset link for a valid account
  2 - Click on the reset link and open any proxy [ like burpsuite ]
  3 - You will notice the following request in burpsuite

  {}

  As you can see in the referrer the reset token is getting leaked to third party sites. So, the person who has the complete control over that particular third party site can compromise the user accounts easily.


##Remediation##

  * add ``<meta name="referrer" content="never">`` in the email
  * set the attribute rel="noreferrer" in the concerned link
  * ask a confirmation to the user to avoid account takeover*
  * add a date/time limit to the links.
  * disable all links when the user login whatever the way.

##References##

https://portswigger.net/kb/issues/00500400_cross-domain-referer-leakage

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

Allow the person who has the complete control over that particular third party site can compromise the user accounts easily.