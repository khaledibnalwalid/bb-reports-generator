Pixel flood attack

===============================================

**H**ello <?php echo $program; ?> team,

##Description##

I tried to upload those two altered images as incoming invoices and it possibly crash <?php echo $website; ?> by generating error 504: gateway timeout.

  * lottapixel: In the image itself the 260x260 values has been exchanged with 0xfafa x 0xfafa (so 64250x64250 pixels). By loading the 'whole image' into memory, it tries to allocate 4128062500 pixels into memory, flooding the memory and causing DoS.

  * pixel_of_death: A GIF composed of 40k 1x1 images, image size: 1mb, image dimensions: 2048x2048px

##POC##

  1 - Go to : <?php echo $website ?>
  2 - 


##Remediation##

Depends on the image library you use.

##References##

https://hackerone.com/reports/390
https://hackerone.com/reports/400

Best regards,
Thanks for your time .
@khaledibnalwalid

---- impact -----

Denial of service.