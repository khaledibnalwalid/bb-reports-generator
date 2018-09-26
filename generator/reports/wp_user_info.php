Disclosure of Users Information via Wordpress API

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

By default Wordpress allow public access to Rest API to get informations about all users registered on the system.

so it's possible to get information about the users registered (such as: id, name, login name, etc.) without authentication in your Wordpress via API on <?php echo $website; ?>

##POC##

  1 - Go to : <?php echo $website ?>/wp-json/wp/v2/users
  2 - You will see the users information like pic

  {}

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

It's possible to get all the users registered on the system