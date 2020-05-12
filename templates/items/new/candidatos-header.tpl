<tr>
    <th class="text-center">Usuario</th>
    <th class="text-center">Nombre</th>
    {section name=foo loop=$totalActividades} 
        <th class="text-center">Cal. {$smarty.section.foo.iteration}</th> 
    {/section}
    <th class="text-center">Acumulado</th>
</tr>