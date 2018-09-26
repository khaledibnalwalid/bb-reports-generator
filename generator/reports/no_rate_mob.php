Missing rate limit on phone verification function

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

The functionnality "Phone verification" miss a human test, a captcha or rate limit.

##POC##

  1 - Go to : <?php echo $website ?>
  2 - 
  3 - open any proxy like burpsuite
  4 - send the request to intruder .
  5 - start the attack and in all requests you will get 302 like image .

  {}


##Remediation##

  * limit the functionality to x attempts in a predefined period before blocking the account
  * set up a captcha to prevent robots

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

The functionality can be used to SMS spam a known phone number.