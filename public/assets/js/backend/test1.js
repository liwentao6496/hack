define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'test1/index' + location.search,
                    add_url: 'test1/add',
                    edit_url: 'test1/edit',
                    del_url: 'test1/del',
                    multi_url: 'test1/multi',
                    table: 'test1',
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
                        {field: 'user_id', title: __('User_id')},
                        {field: 'name', title: __('Name')},
                        {field: 'thumbnail', title: __('Thumbnail')},
                        {field: 'theme_preview', title: __('Theme_preview')},
                        {field: 'main_file', title: __('Main_file')},
                        {field: 'main_file_name', title: __('Main_file_name')},
                        {field: 'categories', title: __('Categories')},
                        {field: 'demo_url', title: __('Demo_url'), formatter: Table.api.formatter.url},
                        {field: 'price', title: __('Price'), operate:'BETWEEN'},
                        {field: 'suggested_price', title: __('Suggested_price'), operate:'BETWEEN'},
                        {field: 'sales', title: __('Sales')},
                        {field: 'earning', title: __('Earning'), operate:'BETWEEN'},
                        {field: 'rating', title: __('Rating')},
                        {field: 'votes', title: __('Votes')},
                        {field: 'score', title: __('Score')},
                        {field: 'comments', title: __('Comments')},
                        {field: 'free_request', title: __('Free_request'), searchList: {"true":__('True'),"false":__('False')}, formatter: Table.api.formatter.normal},
                        {field: 'free_file', title: __('Free_file'), searchList: {"true":__('True'),"false":__('False')}, formatter: Table.api.formatter.normal},
                        {field: 'weekly_to', title: __('Weekly_to'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'datetime', title: __('Datetime'), operate:'RANGE', addclass:'datetimerange'},
                        {field: 'status', title: __('Status'), searchList: {"active":__('Active'),"queue":__('Queue'),"unapproved":__('Unapproved'),"extended_buy":__('Extended_buy'),"deleted":__('Deleted')}, formatter: Table.api.formatter.status},
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