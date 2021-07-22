<table class="table table-striped">
    <thead>
        <tr>
            <th>Cargo</th>
            <th>Estatus</th>
            <th>Grupo</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$orderInfo item=item}
            <tr>
                <td>{$item.orderName}</td>
                <td>
                    {if $item.totalOrder > 0}
                        <i class="fa fa-check-circle text-success"></i>
                    {else}
                        <i class="fa fa-times-circle text-danger"></i>
                    {/if}
                </td>
                <td>{if $item.totalOrder > 0} {$item.subjectName} [{$item.groupName}] {/if}</td>
            </tr>
        {/foreach}
    </tbody>
</table>