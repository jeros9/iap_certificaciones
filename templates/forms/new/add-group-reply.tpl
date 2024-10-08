<script type="text/javascript" src="{$WEB_ROOT}/tinymce/tiny_mce.js"></script>
{if $User["type"] == "Docente"}
<form class="form-horizontal" id="addNoticia" name="addNoticia" method="post" action="{$WEB_ROOT}/respuestas/id/{$courseId}&topic={$topicsubId}" enctype="multipart/form-data">
{else}
<form class="form-horizontal" id="addNoticia" name="addNoticia" method="post" action="{$WEB_ROOT}/view-modules-student/id/{$courseId}&tipo=respuestas&topic={$topicsubId}" enctype="multipart/form-data">
{/if}
    <input type="hidden" id="type" name="type" value="saveAddMajor"/>
    <input type="hidden" id="topicsubId" name="topicsubId" value="{$topicsubId}"/>
    <input type="hidden" id="courseId" name="courseId" value="{$courseId}"/>

    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Aportación:</label>
            <div class="col-md-8">
                <textarea name="reply" id="reply" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Subir Archivo:</label>
            <div class="col-md-8">
                <input type="file" name="path" id="path" class="form-control" />
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <input type="submit" class="btn green submitForm" id="addMajor" name="addMajor" value="Enviar Aportación"/>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        skin : "o2k7",
        plugins : "paste",
        theme_advanced_buttons3_add : "pastetext,pasteword,selectall",
        paste_auto_cleanup_on_paste : true,
        paste_preprocess : function(pl, o) {
            o.content = "-: CLEANED :-\n" + o.content;
        },
        paste_postprocess : function(pl, o) {
            o.node.innerHTML = o.node.innerHTML + "\n-: CLEANED :-";
        }
    });
</script>