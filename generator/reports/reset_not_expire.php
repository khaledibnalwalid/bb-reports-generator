Password reset link remains valid after email and password changed

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

Possible account takeover using the forgot password link even after the email address and password changed.

##POC##

  1 - Create an account in <?php echo $program ?> [ E.g john@example.com ] 
  2 - After account verification logout from the account
  3 - Reset the password for john@example.com where we get the password reset link but do not use this link.
  4 - Now login again and change the email from john@exmaple.com to ``khaled@example.com`` .
  5 - A verification email will be sent to **khaled**. After successful verification we can change the password and logout.
  6 - now go and use the reset link you got in (3) step by john@example.com
  7 - you will see the form of reset password opened, and you can change the password .

you got the <?php echo $program ?>'s user ( after email and password changed ) successfully


##REF##

  * https://hackerone.com/reports/8082
  * https://hackerone.com/reports/145896

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

Allow attacker to change password after the user recover it