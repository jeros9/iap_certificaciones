<div class="row" style="padding: 20px;">
    {if $hasVideos eq true}
        <div class="row">
            {foreach from=$videos item=video}
                <div class="col-md-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/{$video.code}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h3 class="text-center">{$video.title}</h3>
                </div>
            {/foreach}
        </div>
    {/if}
</div>