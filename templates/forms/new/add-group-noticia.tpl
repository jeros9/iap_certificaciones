<form class="form-horizontal" id="addNoticia" name="addNoticia" method="POST" action="{$WEB_ROOT}/add-group-noticia/id/{$id}">
    <input type="hidden" id="type" name="type" value="addNoticia"/>
    <input type="hidden" id="type" name="type" value="saveAddMajor"/>
    <input type="hidden" id="auxTpl" name="auxTpl" value="{$auxTpl}"/>
    <input type="hidden" id="courseId" name="courseId" value="{$id}"/>
    <input type="hidden" id="courseId2" name="courseId2" value="{$infos.courseId}"/>
    <input type="hidden" id="announcementId" name="announcementId" value="{$infos.announcementId}"/>

    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Título:</label>
            <div class="col-md-8">
                <input type="text" name="title" id="title" value="{$infos.title}" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Descripción:</label>
            <div class="col-md-8">
                <textarea name="description" id="description" value="" cols="30" class="form-control">{$infos.description}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center" id="espere"></div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="text-center col-md-12">
                    <input type="submit" class="btn green submitForm" id="addMajor" name="addMajor"/>
                    <button type="button" class="btn default closeModal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        skin : "o2k7"
    });
    
    $(document).on('click', '#addMajor', function() {
		$('#espere').html('<h3><i class="fa fa-spinner fa-pulse fa-fw"></i> Espere por favor...</h3><br><br>');
    })
</script>
