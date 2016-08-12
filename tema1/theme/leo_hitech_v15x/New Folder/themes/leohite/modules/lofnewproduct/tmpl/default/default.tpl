<div class="clearfix clear clr"></div>
<div class="lof-newproduct {$theme}" style="width:{$moduleWidth};height:{$moduleHeight}">
	<div class="newproduct-widget">
		<div class="header">
			<h4 class="heading-hightlight"><span>{l s='News Product' mod='lofnewproduct'}</span></h4>
		</div>
		<div class="list-newproduct responsive">
			<ul id="lofnewproduct-{$moduleId}" class="newproduct-news clearfix">
				{foreach from=$listNews item=item}    
				<li>
					<div class="center_block">
						<div class="lof-product box-hover clearfix">
							<a class="product_image" href="{$item.link}" title="item.name">
								<img class="responsive-img" src="{$item.mainImge}" alt="{$item.name}" style="width:{$main_width}px;height:{$main_height}px" />
							</a>
						</div>
						{if $show_title eq '1'}<h3><a href="{$item.link}">{$item.name}</a></h3>{/if}
						{if $show_desc eq '1'}<p class="product_desc">{$item.description}</p>{/if}
					</div>	
					<div class="right_block">
						<div class="content_price">
							{if $show_price eq '1'}
							<span class="price lof-price-fix">{$item.price}</span>
							{/if}
							
							{if (($item.reduction) != ($item.price)) AND ($priceSpecial  eq '1')}
							<span class="price-discount">{displayWtPrice p=$item.price_without_reduction}</span>
							{/if}
						</div>
						{if (($item.quantity > 0 OR $item.allow_oosp))}
						<a class="lof-add-cart ajax_add_to_cart_button" rel="ajax_id_product_{$item.id_product}" href="{$site_url}cart.php?add&amp;id_product={$item.id_product}&amp;token={$token}"><span>{l s='Add to cart' mod='lofnewproduct'}</span></a>
						{else}
							<span class="lof-add-cart">{l s='Add to cart' mod='lofnewproduct'}</span></a>
						{/if}
					</div>	
				</li>
				{/foreach}
			</ul>		
			<div class="clear"></div>
			{if $show_button eq '1'}
			<div class="newproduct-nav">
				<a id="lofprev-{$moduleId}" class="prev" href="#">&nbsp;</a>
				<a id="lofnext-{$moduleId}" class="next" href="#">&nbsp;</a>
			</div>{/if}
			{if $show_pager eq '1'}<div id="lofpager-{$moduleId}" class="lof-pager"></div>{/if}
		</div>
	</div>
</div>
<script type="text/javascript">
// <![CDATA[
			$('#lofnewproduct-{$moduleId}').carouFredSel({ldelim}
				responsive:true,
				prev: '#lofprev-{$moduleId}',
				next: '#lofnext-{$moduleId}',
				pagination: "#lofpager-{$moduleId}",
				auto: {$auto_play},
				width: {$slide_width},
				height: {$slide_height},
				scroll: {$scroll_items},
				items:{ldelim}
					width:200,
					visible:{ldelim}
						min:1,
						max:{$limit_cols}
					{rdelim}
				{rdelim}
			{rdelim});	

// ]]>
</script>  
