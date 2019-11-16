@extends('master')

@section('content')
<div id="breadcrumbs" class="stuck_position"><div class="container">
	<div class="row"><div class="moduletable   col-sm-12"><div class="module_container"><span class="caption">On Sale</span>
		<ul class="breadcrumb">
			<li><a href="/index.php" class="pathway">Home</a><span class="divider">&nbsp;/&nbsp;</span></li><li><a href="/index.php/catalog" class="pathway">All Products</a><span class="divider">&nbsp;/&nbsp;</span></li><li><a href="/index.php/catalog/on-sale" class="pathway">On Sale</a><span class="divider">&nbsp;&nbsp;</span></li><li class="active"></li>	</ul>
		</div></div></div>
	</div></div>

</div>


<!-- Main Content row -->
<div id="content">
	<div class="container">
		<div class="row">
			<div class="content-inner">
				<!-- Left sidebar -->
				<!-- aside-left -->
				<div id="aside-left" class="col-sm-4"><div class="moduletable category"><div class="module_container"><header class='page_header'><h6 class="moduleTitle "><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Categories</span></h6></header><ul class="VMmenu list list__categories list__accordion" id="accordion416">
					<li id="vm-category-76" class="list-item level0 VmClose">
						<a href="/index.php/catalog/ceramictiles" >Ceramic Tiles</a>			</li>
						<li id="vm-category-40" class="list-item level0 parent has-children VmClose">
							<a href="/index.php/slabs" >Slabs</a>






						</li>
						<li id="vm-category-42" class="list-item level0 parent has-children VmClose">
							<a href="/index.php/catalog/tiles" >Porcelain Tiles</a>


						</li>
						<li id="vm-category-43" class="list-item level0 parent has-children VmClose">
							<a href="/index.php/catalog/mosaic-tiles" >Mosaic Tiles</a>

						</li>
						<li id="vm-category-53" class="list-item level0 parent has-children active">
							<a href="/index.php/catalog/on-sale" >On Sale</a>


						</li>
					</ul>

				</div></div></div>

				<div id="component" class="col-sm-8">
					<main role="main">
						<div id="system-message-container">
						</div>


						<div id="bd_results">
							<div id="cf_res_ajax_loader"></div><div id="com_virtuemart">
								<div class="category-view-box"> <h3><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first"></span> <span class="item_title_part_1 item_title_part_even item_title_part_first_half">On</span> <span class="item_title_part_2 item_title_part_odd item_title_part_second_half item_title_part_last">Sale</span></h3>
									<div class="category_description">
									</div>
									<div class="browse-view comvirtuemartmod">

										<div class="orderby-displaynumber">
											<div class="vm-order-list">
											</div>
											<div class="display-number">

											</div>
											<div class="clearfix"></div>
										</div>

									</div> <!-- end of orderby-displaynumber -->

									<div class="grid-list">

									</div>
									<div class="virtuemart-category__container grid">
										<div id="products-view" class=" products-view " id="products">

											<div class="row prod">
												@foreach($onsale as $osl)
												<div id="producthorizon342" class="product vm-product-horizon vm-col-3  vertical-separator vm-col span4">
													<div id="producthorizont" class="prod-box spacer product-container">

															<div class="vm-product-media-container">
																<a title="Bianco Arabesque 6mm" href="/index.php/catalog/mosaic-tiles/ceramicmosaic/bianco-arabesque-6mm">
																	<img src="file/images/{{$osl->images}}" alt="Bianco-Arabesque-6mm" class="browseProductImage" />				</a>
																</div>
																<div class="fleft-box">
																	<div class="vm3pr vm3pr-0"> <div class="product-price " id="productPrice343">
																		<a class="ask-a-question bold" href="/index.php/catalog/mosaic-tiles/ceramicmosaic/bianco-arabesque-6mm/askquestion?tmpl=component" rel="nofollow" >Call for price</a>
																	</div>

																	<div class="clear"></div>
																</div>
																<div class="vm-product-descr-container-0">
																	<b>{{$osl->name}}</b>
																	<div class="product_s_desc">
																		<p><span style="font-size: 12pt;">{{$osl->intro}}										</div>
																		</div>

																		<div class="vm-product-stockhandle-container">
																		</div>
																		<div class="box-btn">
																			<div class="vm3pr-3 addcart-box">
																				<div class="addtocart-area">
																					<form method="post" class="product js-recalculate" action="/index.php/catalog">

																						<input type="hidden" name="option" value="com_virtuemart"/>
																						<input type="hidden" name="pid" value="343"/>
																						<input type="hidden" name="view" value="cart"/>
																						<input type="hidden" name="virtuemart_product_id[]" value="343"/>
																						<input type="hidden" class="pname" value="Bianco Arabesque 6mm"/>
																						<input type="hidden" name="Itemid" value="1054"/>	</form>

																					</div>					</div>
																					<div style="display:block;"
																					class="wishlist list_wishlists343">



																				</div>
																				<div style="display:none;" class="wishlist remove list_wishlists_remove343">

																				</div>
																				<div
																				class="compare list_compare343">


																			</div>
																		</div>
																		<div class="vm-rating">
																			<div class="ratingbox">
																				<span class="rating-icons">
																				</span>

																				<div class="clearfix"></div>
																			</div>
																		</div>
																	</div><div class="clearfix"></div>
																</div>
															</div>
															@endforeach


														<div class="clearfix"></div>
													</div>
												</div>
											</div><div class="clearfix"></div>
										</div>

									</div>

								</div>


								<div class="pagination vm-pagination-bottom">

								</div>


								<!-- end browse-view -->
							</div>
							<script>
								function createCookie(a,b,c,d){if(c){var e=new Date();e.setTime(e.getTime()+(c*24*60*60*1000));var f="; expires="+e.toGMTString()}else var f="";if(d){var d="; path="+d}else var d="; path=/";document.cookie=a+"="+b+f+d}

								function readCookie(a){var b=a+"=";var d=document.cookie.split(';');for(var i=0;i<d.length;i++){var c=d[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(b)==0)return c.substring(b.length,c.length)}return null}

								jQuery(function($){
									if(readCookie('grid-list') == 'list'){
										$('.grid-list div').removeClass('active');
										$('.grid-list div[data-grid=list]').addClass('active');
										$('.virtuemart-category__container').removeClass('grid').addClass('list');
									}
									$('.grid-list div').click(function(){
										if(!$(this).hasClass('active')){
											$('.grid-list div').removeClass('active');
											$(this).addClass('active');
											data_grid = $(this).attr('data-grid');
											createCookie('grid-list',data_grid,365)
											$('.virtuemart-category__container').addClass('interim').delay(500)
											.queue(function (n) {
												$(this).removeClass('grid').removeClass('list').removeClass('interim').addClass(data_grid);
												n();
											});
										}
									})
								})
							</script>
							<script>
								jQuery(document).ready(function(){
									jQuery('.box-btn .btn').tooltip();
								});
							</script>







<script id="updateChosen_js" type="text/javascript">//<![CDATA[
if (typeof Virtuemart === "undefined")
	var Virtuemart = {};
Virtuemart.updateChosenDropdownLayout = function() {
	var vm2string = {editImage: 'edit image',select_all_text: 'Select all',select_some_options_text: 'Available for all'};
	jQuery("select.vm-chzn-select").chosen({enable_select_all: true,select_all_text : vm2string.select_all_text,select_some_options_text:vm2string.select_some_options_text,disable_search_threshold: 5});
		//console.log("updateChosenDropdownLayout");
	}
	jQuery(document).ready( function() {
		Virtuemart.updateChosenDropdownLayout($);
	}); //]]>
</script>
<script id="ready.vmprices_js" type="text/javascript">//<![CDATA[
jQuery(document).ready(function($) {

	Virtuemart.product($("form.product"));
}); //]]>
</script>

<script id="updDynamicListeners_js" type="text/javascript">//<![CDATA[
jQuery(document).ready(function() { // GALT: Start listening for dynamic content update.
	// If template is aware of dynamic update and provided a variable let's
	// set-up the event listeners.
	//if (Virtuemart.container)
	Virtuemart.updateDynamicUpdateListeners();

}); //]]>
</script>
<script id="vm.hover_js" type="text/javascript">//<![CDATA[
jQuery(document).ready(function () {
	jQuery('.orderlistcontainer').hover(
		function() { jQuery(this).addClass('show')},
		function() { jQuery(this).removeClass('show')}
		)
}); //]]>
</script>
<script id="popups_js" type="text/javascript">//<![CDATA[
jQuery(document).ready(function($) {

	jQuery('a.ask-a-question, a.printModal, a.recommened-to-friend, a.manuModal').click(function(event){
		event.preventDefault();
		jQuery.fancybox({
			href: jQuery(this).attr('href'),
			type: 'iframe',
			wrapCSS : 'custom-class',
			height: 550,
			width: 500
		});
	});

	}); //]]>
</script></div>
</main>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="footer-wrapper">
	<div class="footer-wrapper-inner">

		@endsection