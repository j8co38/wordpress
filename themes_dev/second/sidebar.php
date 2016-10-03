<aside id="sidebar">
	<div class="side-content">
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			<label class="screen-reader-text" for="s"></label>
			<input type="text" value="" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="&#xf002;" />
		</form>
		<script>document.write('<p>広告<p>');</script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- side -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:200px;height:200px"
		     data-ad-client="ca-pub-5653909761408361"
		     data-ad-slot="7053572534"></ins>
		<script>
		    (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<?php dynamic_sidebar(); ?>
		<div class="fb-page sidebar-wrapper" data-href="https://www.facebook.com/yhmd.lol.blog" data-width="208" data-height="280" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/yhmd.lol.blog"><a href="https://www.facebook.com/yhmd.lol.blog">LOL.blog-webデザインetcを勉強中</a></blockquote></div></div>
		<article id="profile" class="sidebar-wrapper">
			<h4 class="sidebar-title">Author</h4>
			<img class="me" src="<?php echo get_template_directory_uri(); ?>/images/side/me.png" alt="me">
			<p>ハマダユイコ (22)<br>
					WEB系の勉強をしている大学生<br>
					自分用のメモだったり、学んだことだったりを記事にします。<br>
					<a href="http://united.nagoya">UNITED</a>のいちメンバーとしても活動中。<br>
					故郷熊本にちなんだLINEスタンプをつくりました。<br>
					【<a href="http://y-hmd.com">ポートフォリオサイトはこちら</a>】</p>
		</article>
		<div class="bnr-list">
			<a href="http://united.nagoya" target="_blank" class="bnr"><img src="<?php echo get_template_directory_uri(); ?>/images/side/bnr_united.png" alt="united"></a>
			<a href="http://line.me/S/sticker/1041727" target="_blank" class="bnr"><img src="<?php echo get_template_directory_uri(); ?>/images/side/bnr_stamp.png" alt="LINEスタンプ"></a>
		</div>
	</div>
</aside>

<aside id="sp-sidebar">
	<?php dynamic_sidebar('sp-popular'); ?>
</aside>

<div id="sp-profile" class="side-content">
	<h4 class="sidebar-title">Author</h4>
	<img class="me" src="<?php echo get_template_directory_uri(); ?>/images/side/me.png" alt="me">
	<p>ハマダユイコ (22)<br>
			WEB系の勉強をしている大学生<br>
			自分用のメモだったり、学んだことだったりを記事にします。<br>
			<a href="http://united.nagoya">UNITED</a>のいちメンバーとしても活動中。<br>
			故郷熊本にちなんだLINEスタンプをつくりました。<br>
			【<a href="http://y-hmd.com">ポートフォリオサイトはこちら</a>】</p>
	<div class="bnr-list">
		<a href="http://united.nagoya" target="_blank" class="bnr"><img src="<?php echo get_template_directory_uri(); ?>/images/side/bnr_united.png" alt="united"></a>
		<a href="http://line.me/S/sticker/1041727" target="_blank" class="bnr"><img src="<?php echo get_template_directory_uri(); ?>/images/side/bnr_stamp.png" alt="LINEスタンプ"></a>
	</div>
</div>
