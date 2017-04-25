<? 
$htmltitle = "Moth Design";
$metadescription = "Moth Design is a strategic graphic design studio based in Boston, MA";
$metakeywords = "moth design, graphic design, strategic design, web design, design, studio, boston ma";
$bodyclass = "home";
$pagetitle = "Welcome";
$level1 = "home";
$level2 = ""; 
include('include/header.php');
?>
<section class="home-top">
	<!--h2 class="animated fadeIn">Moth is a savvy, multidisciplinary studio <br class="br">devoted to <span data-typer-targets="meaningful collaboration, elegant design solutions, going the extra mile, building strong relationships, attention to detail" style="">smart strategies</span>.</h2-->
	
	
	<h2 class="animated fadeIn">Moth is a savvy, multidisciplinary studio <br class="br">devoted to <span data-typer-targets='{ "targets" : ["meaningful collaboration","elegant design solutions", "going the extra mile", "building strong relationships", "the details"]}'>smart strategies</span>.</h2>
	
	
	<!--h2 >
		<span class="first">Moth is a savvy, multidisciplinary studio devoted to&nbsp;</span>
		<span class="underline" data-typer-targets='{ "targets" : ["","", "", "", "", "", ""]}'></span>
	</h2-->
</section>
<section class="home-section home-first" id="first">
	<div class="wrap">
		<div class="image-grid">
			<div class="t-all m-all d4-d12">
				<span class="home-img road-scholar" data-picture data-alt="Road Scholar">
					<span data-src="images/home/homepage-1.png"></span>
					<span data-src="images/home/homepage-1.png" data-media="(max-width: 600px)"></span>
					<noscript><img src="images/home/homepage-1.png" alt="Roadscholar"></noscript>
				</span>
			</div>
			<div class="t-all m-all d2-d3">
				<a href="road-scholar" class="home-block road-scholar">
					<h2><span class="road-scholar">Let&rsquo;s go there.</span></h2>
					<div class="home-block-text">Road Scholar had a wide audience  to reach. We went there.</div>
			  	</a>
			</div>
		</div>
		<div class="image-grid home-second pushdown-12">
			<div class="m-all d1-d5">
				<span class="home-img deer" data-picture data-alt="">
					<span data-src="images/home/homepage-2.png"></span>
					<span data-src="images/home/homepage-2.png" data-media="(max-width: 600px)"></span>
					<noscript><img src="images/home/homepage-2.png" alt=""></noscript>
				</span>
			</div>
			<div class="t-all m-all d1-d5">
				<span class="home-img deer" data-picture data-alt="">
					<span data-src="images/home/homepage-3.png"></span>
					<span data-src="images/home/homepage-3.png" data-media="(max-width: 600px)"></span>
					<noscript><img src="images/home/homepage-3.png" alt=""></noscript>
				</span>
			</div>
			<div class="t-all m-all d7-d10">
				<a href="deerfield" class="home-block deer">
					<h2><span class="deer">A different</span> <span class="deer">kind of prep.</span></h2>
					<div class="home-block-text">How do you make boarding school cool?  Lorem ipsum dolor sit.</div>
			  	</a>
			</div>
		</div>
	</div>
</section>
<div class="studio-photo"></div>
<ul class="capabilities">
	<li class="strategy">strategy</li>
	<li class="branding">branding</li>
	<li class="digital">digital</li>
	<li class="print">print</li>
</ul>
<section class="home-section home-second" id="second">
	<div class="wrap">
		<div class="image-grid yuso">
			<div class="t-all m-all d6-d12">
				<span class="home-img yuso" data-picture data-alt="Yuso">
					<span data-src="images/home/homepage-4.png"></span>
					<span data-src="images/home/homepage-4.png" data-media="(max-width: 600px)"></span>
					<noscript><img src="images/home/homepage-4.png" alt="yuso"></noscript>
				</span>
			</div>
			<div class="t-all m-all d2-d3">
				<a href="yuso" class="home-block yuso">
					<h2><span class="yuso">A nosh with a</span><span class="yuso">conscience.</span></h2>
					<div class="home-block-text">When tech-savvy MIT came to us needing a unique print piece, it made us think.</div>
			  	</a>
			</div>
		</div>
		<div class="image-grid">
			<div class="t-all m-all d1-d5 pushdown-4">
				<span class="home-img mit-giving" data-picture data-alt="MIT Giving">
					<span data-src="images/home/homepage-5.png"></span>
					<span data-src="images/home/homepage-5.png" data-media="(max-width: 600px)"></span>
					<noscript><img src="images/home/homepage-5.png" alt="giving"></noscript>
				</span>
			</div>
			<div class="t-all m-all d7-d10 pushdown-8">
				<a href="mit-giving" class="home-block mit-giving pushdown-12">
					<h2><span class="mit-giving">Making an</span><span class="mit-giving">impact.</span></h2>
					<div class="home-block-text">When tech-savvy MIT came to us needing a unique print piece, it made us think.</div>
			  	</a>
			</div>
		</div>
	</div>
</section>
<section class="home-section home-third text-footer" id="third">
	<h3>Our Vision</h3>
	<p>We have a holistic view of design, but we’re ever-mindful of the core tenets of the studio.<br class="hide">They anchor our practice.</p>
	<a href="work" class="work">View more work</a>
	<a href="studio" class="studio">About us</a>
	<a href="contact" class="contact">Say hello</a>
</section>
<?php include( 'include/footer.php' ); ?>
<script src="js/matchmedia.js"></script>
<script src="js/picturefill.js"></script>
  <script>
    $(function () {
      $('[data-typer-targets]').typer();
    });
  </script>
</body>
</html>
