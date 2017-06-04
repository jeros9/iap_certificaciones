<ul id="sort-box" class="sorts">
 <li>
    <div class="content-header">	
        <div class="content-header-left">
          <img src="{$WEB_ROOT}/images/new/catalogos.png" alt="" />
            <h2>Topico {$topic.nombre} </h2> 
        </div>         

       <div class="content-header-right">
         
		<h2><a href="{$WEB_ROOT}/forumsub-modules-student/id/{$id}/topicId/{$topic.topicId}">Regresar</a></h2>

        </div> 		
    </div>
        {include file="boxes/status_no_ajax.tpl"}                                     
      	{include file="{$DOC_ROOT}/templates/lists/topic-replies.tpl"}

      	{include file="{$DOC_ROOT}/templates/forms/add-reply.tpl"}
                         
   </li>                                                              
 </ul>

<!--brach -->