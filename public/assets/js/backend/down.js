define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'down/index' + location.search,
                    add_url: 'down/add',
                    edit_url: 'down/edit',
                    del_url: 'down/del',
                    multi_url: 'down/multi',
                    table: 'down',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'title', title: __('Title')},
                        {field: 'tag', title: __('Tag')},
                        {field: 'class', title: __('Class')},
                        {field: 'file_size', title: __('File_size'), operate:'BETWEEN'},
                        {field: 'addtime', title: __('Addtime'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'view_count', title: __('View_count')},
                        {field: 'status', title: __('Status')},
                        {field: 'down_url', title: __('Down_url'), formatter: Table.api.formatter.url},
                        {field: 'like', title: __('Like')},
                        {field: 'issuer', title: __('Issuer')},
                        {field: 'level', title: __('Level')},
                        {field: 'picrure', title: __('Picrure')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});