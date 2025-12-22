<?php
$no_footer_pages = ['contact', 'dashboard'];
?>
			<?php if(!in_array($page,$no_footer_pages)){?>
				<div class="row second-row">
					<div class="col-sm-12 text-center readmore">
						<a href="contact">Contact Us</a>
					</div>
				</div>
            <?php } ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="col-sm-12 text-center" id="footer">
			<p>&copy; 2016 - <?=date('Y')?> Rolls Capital Advisors. All Rights Reserved.</p>
		</div>
	</div>
</body>
</html>