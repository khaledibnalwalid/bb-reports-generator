No rate limit at signup page

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

When i registered on your website i didn't find any confirmation or captcha , so i intercept the signup request and changed my email and name to another and the account was created

##POC##

  1 - Go to : <?php echo $website ?>
  
  2 - write any information
  3 - click signup and intercept the request by any proxy like burpsuite
  4 - send the request to intruder and list have any accounts ( you can edit any bruteforce's list by add @gmail.com or @yahoo.com at the least words )

  {}


##Remediation##

  * set up a captcha to prevent robots.

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

attacker can use a huge list of emails and register in your website
so any one will try to register new account but he can't because his email is used before