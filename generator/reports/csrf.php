CSRF on <?php echo $website; ?>

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

I have found a CSRF issue on <?php echo $website ?> thats allows an attacker to change a user datas whithout his permission.

##POC##

  1 - Save the following code in ``.html`` file

  ```
  <html>
    <body>
      <form action="<?php echo $website; ?>" method="POST" target="_blank">
        <input type="submit" value="Submit request" />
      </form>
    </body>
  </html>
  ```

  2 - Log on your account
  3 - open another tab
  4 - execute the script previously created

##Remediation##

  * add an unpredictable token in each request
  * add a captcha
  * ask user confirmation before performing any action
  * ask user his password before performing any action

##Refrences##

https://www.owasp.org/index.php/Top_10_2013-A8-Cross-Site_Request_Forgery_(CSRF)

Best regards,
Thanks for your time .
@khaledibnalwalid