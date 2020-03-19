<div class="mid_right_area">
<ul>
<li>
<form name="frmnewsletter" id="frmnewsletter" method="post" action="">
<h2>News <span>Letter</span></h2>
<div class="news_form">
    <input name="newsletter_name" type="text" onfocus="if(this.value=='Name') this.value='';" onblur="if(this.value=='') this.value='Name';" value="Name" />
</div>
<div class="news_form">
    <input name="newsletter_email" type="text" onfocus="if(this.value=='Email') this.value='';" onblur="if(this.value=='') this.value='Email';" value="Email" />
</div>
<div class="news_submit">
    <input name="cmdsubmitnewsletter" id="cmdsubmitnewsletter" type="submit" />
</div>
</form>
</li>
<?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar() ) : ?>
<li><h2><?php _e('Categories') ?></h2></li>
<?php endif; ?>
</ul>
</div>