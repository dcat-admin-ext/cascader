<div class="cascader-wrapper">
    <input id="domId" value="2-1"/>
</div>

<style>

</style>

<script require="@dcat-admin-ext.cascader">
    var data = [
        {
            id: '1',
            name: 'text1',
            children: [
                {name: 'text1-1', id: '1-1'},
                {name: 'text1-2', id: '1-2'},
                {name: 'text1-3', id: '1-3'}
            ]
        },
        {
            id: '2',
            name: 'text2',
            children: [
                {name: 'text2-1', id: '2-1'},
                {name: 'text2-2', id: '2-2'},
                {name: 'text2-3', id: '2-3'}
            ]
        },
        {
            id: '3',
            name: 'text3',
            children: [
                {name: 'text3-1', id: '3-1'},
                {name: 'text3-2', id: '3-2'},
                {name: 'text3-3', id: '3-3'}
            ]
        },
    ];

	$('#domId').cascader({
        displayField: 'name',
        valueField: 'id',
        separator: '/',
        data: data
    });
</script>
