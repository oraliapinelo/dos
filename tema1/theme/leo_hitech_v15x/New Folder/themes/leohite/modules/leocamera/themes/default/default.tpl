
<div class="leocamera_container"> 
    <div id="leo-camera" class="camera_wrap {$leocamera.theme}">
        {foreach from=$leocamera_slides item=item}
            <div data-thumb="{$item.thumbnail}" data-src="{$item.mainimage}" >
                {if $item.title and $leocamera.show_desc}                            
                    <div class="camera_caption fadeFromBottom" >             
                        <div class="leo_camera_title" >
                            {if $leocamera.show_title}
                                <a href="{$item.url}" title="{$item.title}">{$item.title}</a>
                            {/if}                            
                        </div>
						<div class="leo_camara_desc">
							{$item.description}
						</div>
						<div class="leo_buy">
						<a href="#">{l s='shop now' mod='leocamera'}</a>
						</div>
                    </div>
                {/if}
            </div>
        {/foreach}    
    </div>
</div>