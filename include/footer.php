<footer class="footer-wrap">
  <div class="footer">

    <div class="footsignature">Strategic Design Solutions</div>

    <div class="footcontact">
      617 482 2900<br>
      <a href="mailto:info@mothdesign.net">info@mothdesign.net</a>
    </div>

    <div class="footaddress">
      450 Harrison Avenue, Suite 303<br>
      Boston, Massachusetts 02118
    </div>

    <div class="footsocial">
      <a href="https://www.facebook.com/MothDesignInc" class="icon-facebook" target="_blank"><span>facebook</span></a>
      <a href="https://www.instagram.com/mothdesignboston" class="icon-instagram" target="_blank"><span>Instagram</span></a>
      <a href="https://www.linkedin.com/company/moth-design-boston" class="icon-linkedin" target="_blank"><span>LinkedIn</span></a>
    </div>
	<?php date_default_timezone_set('America/New_York'); ?>	
    <div class="footcopy">&copy; <?= date('Y'); ?> Moth Design Inc.</div>
	
	

  </div>
</footer>

<?php if ($level1 == "work" && $level2 != "") { ?>
<script src="js/more.js"></script>
<?php } ?>

<script src="js/navigation.js"></script>

<?php include( 'analyticstracking.php' ); ?>
