<script type="text/javascript" src="{$WEB_ROOT}/tinymce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7"
	});
</script>

{if $access == 1}
    <h5><b>IMPORTANTE:</b> {$final_test.description}</p>
    <form id="addFinalTest" name="addFinalTest" method="post">
        <input type="hidden" id="type" name="type" value="saveAddMajor"/>
        <ul id="sort-box" class="sorts">
            <li>              
                <div class="content-in-small">
                    <div class="content-settings-row">
                        Tiempo Restante: <span id="countdownJobs" style="font-weight:bold">{$timeLeft}</span>
                    </div>    
                    <div class="content-settings-row">
                        <h4 style="color: red;">No cerrar esta página, de lo contrario no podrá realizar nuevamente el examen.</h4>
                    </div>
                    {foreach from=$myTest item=subject}
                        <div class="content-settings-row" style="margin-bottom: 60px;">
                            <div style="text-align:left">
                                {if $subject.questionType eq "vof"}
                                    <b>Los entes públicos deberán asegurarse que el Sistema de Contabilidad Gubernamental: </b>
                                {/if}
                                <b>{$subject.question}</b><br><br><br>
                            </div>
                            <div style="text-align:left">
                                {if $subject.answers > 1}
                                    {if $subject.opcionA}
                                        <label><input style="width:50px" type="checkbox" name="anwer[{$subject.questionId}][respuesta1]" id="anwer[{$subject.questionId}][respuesta1]" value="opcionA" /> {$subject.opcionA}</label>
                                    {/if}
                                    {if $subject.opcionB}
                                        <div style="clear:both"></div>
                                        <label><input style="width:50px" type="checkbox" name="anwer[{$subject.questionId}][respuesta2]" id="anwer[{$subject.questionId}][respuesta2]" value="opcionB" /> {$subject.opcionB}</label>
                                    {/if}
                                    {if $subject.opcionC}
                                        <div style="clear:both"></div>
                                        <label><input style="width:50px" type="checkbox" name="anwer[{$subject.questionId}][respuesta3]" id="anwer[{$subject.questionId}][respuesta3]" value="opcionC" /> {$subject.opcionC}</label>
                                    {/if}
                                    {if $subject.opcionD}
                                        <div style="clear:both"></div>
                                        <label><input style="width:50px" type="checkbox" name="anwer[{$subject.questionId}][respuesta4]" id="anwer[{$subject.questionId}][respuesta4]" value="opcionD" /> {$subject.opcionD}</label>
                                    {/if}
                                    {if $subject.opcionE}
                                        <div style="clear:both"></div>
                                        <label><input style="width:50px" type="checkbox" name="anwer[{$subject.questionId}][respuesta5]" id="anwer[{$subject.questionId}][respuesta5]" value="opcionE" /> {$subject.opcionE}</label><br />
                                    {/if}
                                {else}
                                    {if $subject.opcionA}
                                        <label><input style="width:50px" type="radio" name="anwer[{$subject.questionId}][respuesta1]" id="anwer[{$subject.questionId}][respuesta1]" value="opcionA" /> {$subject.opcionA}</label>
                                    {/if}
                                    {if $subject.opcionB}
                                        <div style="clear:both"></div>
                                        <label><input style="width:50px" type="radio" name="anwer[{$subject.questionId}][respuesta2]" id="anwer[{$subject.questionId}][respuesta2]" value="opcionB" /> {$subject.opcionB}</label>
                                    {/if}
                                    {if $subject.opcionC}
                                        <div style="clear:both"></div>
                                        <label><input style="width:50px" type="radio" name="anwer[{$subject.questionId}][respuesta3]" id="anwer[{$subject.questionId}][respuesta3]" value="opcionC" /> {$subject.opcionC}</label>
                                    {/if}
                                    {if $subject.opcionD}
                                        <div style="clear:both"></div>
                                        <label><input style="width:50px" type="radio" name="anwer[{$subject.questionId}][respuesta4]" id="anwer[{$subject.questionId}][respuesta4]" value="opcionD" /> {$subject.opcionD}</label>
                                    {/if}
                                    {if $subject.opcionE}
                                        <div style="clear:both"></div>
                                        <label><input style="width:50px" type="radio" name="anwer[{$subject.questionId}][respuesta5]" id="anwer[{$subject.questionId}][respuesta5]" value="opcionE" /> {$subject.opcionE}</label><br />
                                    {/if}
                                {/if}
                            </div>
                        </div>
                    {/foreach}
                    <div class="row text-center">
                        <input type="submit" class="btn green submitForm" id="addMajor" name="addMajor" value="Enviar" onClick="return confirmSubmit()" />
                    </div>
                </div>
            </li>                              
        </ul>    
    </form>
{else}
	<p>Examen Finalizado. ¡Muchas Gracias!</p>
    <div class="row">
		<div class="col-md-12 text-center">
			<a href="{$WEB_ROOT}/view-modules-student/id/{$final_test.courseId}&tipo=avisos" title="Ver Modulo de Curso"  class="btn blue" target="_top" >
				Entrar al Curso
			</a>
		</div>
	</div>
{/if}

<script>
    function countdown(remain, count, not, messages) 
    {
        var notifier = document.getElementById(count);
        var countdown = document.getElementById(count)
        var timer = setInterval( function () {
            countdown.innerHTML = Math.floor(remain/60) + ":" + (remain % 60 < 10 ? "0" : "") + remain % 60;
            if (messages[remain]) { notifier.innerHTML = messages[remain]; }
            console.log("Restante: " + (remain));
            if (--remain < 0 ) { 
                //clearInterval(timer); 
                $('#addFinalTest').submit();
            }
        }, 1000);
    }

    function confirmSubmit()
    {
        var agree = confirm("¿Estás seguro que deseas enviar tu exámen? ¿Respondiste todas las preguntas?");
        if (agree)
            return true;
        else
            return false;
    }

    countdown({$timeLeft}, "countdownJobs", "countdownJobs",
    { 
        60: "Available in one minute",
        30: "30 seconds left",
        0: "Is now Available"
    });
</script>
