<table class="resources-datatable table-middle table-hover table-responsive table">
    <thead>
        <tr>
            <th>{{ _('No') }}</th>
            <th class="no-sort">
                <label class="custom-checkbox">
                    <input type="checkbox" class="parent-checkbox">
                    <span></span>
                </label>
            </th>
            <th>{{ _('ID') }}</th>
            {!! $fieldHeaders !!}
            <th class="no-sort text-center">{{ _('Action') }}</th>
        </tr>
    </thead>

    <tbody>
    @@foreach(${{ 'collection' }} as ${{ $config->modelNames->camel }})
        <?php
            $editRoute = "route('". $config->modelNames->snakePlural . ".edit', $" . $config->modelNames->camel . "->id)";
            $deleteRoute = "route('". $config->modelNames->snakePlural . ".destroy', $" . $config->modelNames->camel . "->id)";
        ?>
        <tr class="item">
            <td>@{{ ++$i }}</td>
            <td>
                <label class="custom-checkbox">
                    <input type="checkbox" class="child-checkbox"
                        data-id="@{{ ${!! $config->modelNames->camel !!}->{!! $config->primaryName !!} }}">
                    <span></span>
                </label>
            </td>
            <td>@{{ ${!! $config->modelNames->camel !!}->{!! $config->primaryName !!} }}</td>
            {!! $fieldBody !!}
            <td>
                <ul class="list-unstyled table-actions">
                    <li>
                        <?php echo "<x-admin.edit-button data-modal=\"true\" href=\"{{ ".$editRoute." }}\" />" ?>
                    </li>
                     <li>
                        <?php echo "<x-admin.delete-button data-url=\"{{ ".$deleteRoute." }}\" />" ?>
                    </li>
                </ul>
            </td>
        </tr>
    @@endforeach
    </tbody>
</table>
   