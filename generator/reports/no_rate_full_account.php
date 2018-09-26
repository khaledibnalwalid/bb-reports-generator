Full account takeover

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

When i tried to login in your mobile app , I noticed application don't has rate limit on pin number input

so it allowed me to takeover any account

##POC##

  1 - sign in by the victim number
  2 - you will see the app request a pin number it has been sent to mobile
  3 - type any pin number and intercept the request by any proxy [ like burp suite ]
  4 - send the request to intruder , now start brute force at the pin code
  5 - you will see the success request like this has an access token

  {}

  video : 

##Remediation##

  * set up a captcha to prevent robots.

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

Allow attacker to steal any account