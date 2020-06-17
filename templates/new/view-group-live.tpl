<div class="row" style="padding: 20px;">
    {if $myModule['ytLive'] neq ''}
        <div class="row">
            <div class="col-md-8">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/{$myModule['ytLive']}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 text-center">
                <p><small>Para unirse al chat, debe iniciar sesión con su cuenta de correo de <a href="https://gmail.com" target="_blank">GMail.</small></p>
                <a href="https://www.youtube.com/live_chat?is_popout=1&v={$myModule['ytLive']}" target="_blank" onclick="window.open(this.href, this.target, 'width=400, height=550, left=800, top=200'); return false;" class="btn btn-info btn-sm mb-2">
                    Abrir Chat
                </a>
                <iframe width="100%" height="400" src="https://www.youtube.com/live_chat?v={$myModule['ytLive']}&embed_domain=redconocer.iapchiapas.edu.mx" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    {/if}
</div>