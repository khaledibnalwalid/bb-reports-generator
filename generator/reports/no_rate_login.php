No rate limit at login page

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

Login functionality can be brute forced due to lack of captcha or rate limit.

##POC##

  1 - Go to : <?php echo $website ?>
  2 - open any proxy program like burpsuite
  3 - login by any account & sent the request to intruder .
  4 - start the attack and in all requests you will get 200ok like image .

  {}


##Remediation##

  * limit the functionality to x attempts in a predefined period before blocking the account
  * set up a captcha to prevent robots.

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

Atacker can make a load on website from a lot of requests and if the user has a weak password he can steal it