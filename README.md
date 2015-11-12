# pagechecker
A simple PHP class that check the filename and return a status if the filename matches. Suitable for menu development, that uses template. 

## How to use?

For example, you have index.php, about.php and contact.php. And on every page you include a menu template file, named menu.php. However, you started to notice that to make a menu "active" you will need some function to check whether you are currently on the page and then mark the menu as "active" like below:

<img src="http://s29.postimg.org/e1zgdgmxz/Capture.png">

And the structure looks pretty much like this:

```
<li class="active">
  <a href="index.php"><span>Home</span></a>
</li>
<li class="">
  <a href="about.php"><span>About Us</span></a>
</li>
<li class="">
  <a href="contact.php"><span>Contact Us</span></a>
</li>
```

Now, by using this class you can do this:

```
<li class="<?php echo $pagechecker->check_page('index.php', 'active'); ?>">
  <a href="index.php"><span>Home</span></a>
</li>
<li class="<?php echo $pagechecker->check_page('about.php', 'active'); ?>">
  <a href="about.php"><span>About Us</span></a>
</li>
<li class="<?php echo $pagechecker->check_page('contact.php', 'active'); ?>">
  <a href="contact.php"><span>Contact Us</span></a>
</li>
```

So the menu will be active on each respective pages.
