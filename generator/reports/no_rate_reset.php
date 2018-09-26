No rate limit at reset password page

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

The functionnality "Forgot your password ?" miss a human test, a captcha or rate limit.

##POC##

  1 - Go to reset password page : <?php echo $website ?>
  
  2 - open any proxy like burpsuite
  3 - write the victim email to reset its password & send the request to intruder .
  4 - start the attack and in all requests you will get 302 like image .

  {}
  
  and my account received +200 messages

  {}

##Remediation##

  * limit the functionality to x attempts in a predefined period before blocking the account
  * set up a captcha to prevent robots

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

The functionality can be used to email spam a known user.