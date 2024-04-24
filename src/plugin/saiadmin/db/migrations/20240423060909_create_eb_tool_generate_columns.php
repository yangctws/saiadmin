<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEbToolGenerateColumns extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $table = $this->table('eb_tool_generate_columns', [
            'comment' => '代码生成业务字段表',
            'id' => false,
            'primary_key' => 'id',
        ]);
        $table->addColumn('id', 'integer', ['signed' => false, 'identity' => true])
            ->addColumn('table_id', 'integer', ['null' => true, 'default' => null, 'comment' => '所属表ID'])
            ->addColumn('column_name', 'string', ['limit' => 200, 'null' => true, 'default' => null, 'comment' => '字段名称'])
            ->addColumn('column_comment', 'string', ['limit' => 255, 'null' => true, 'default' => null, 'comment' => '字段注释'])
            ->addColumn('column_type', 'string', ['limit' => 50, 'null' => true, 'default' => null, 'comment' => '字段类型'])
            ->addColumn('default_value', 'string', ['limit' => 50, 'null' => true, 'default' => null, 'comment' => '默认值'])
            ->addColumn('is_pk', 'integer', ['null' => true, 'default' => 1, 'comment' => '1 非主键 2 主键'])
            ->addColumn('is_required', 'integer', ['null' => true, 'default' => 1, 'comment' => '1 非必填 2 必填'])
            ->addColumn('is_insert', 'integer', ['null' => true, 'default' => 1, 'comment' => '1 非插入字段 2 插入字段'])
            ->addColumn('is_edit', 'integer', ['null' => true, 'default' => 1, 'comment' => '1 非编辑字段 2 编辑字段'])
            ->addColumn('is_list', 'integer', ['null' => true, 'default' => 1, 'comment' => '1 非列表显示字段 2 列表显示字段'])
            ->addColumn('is_query', 'integer', ['null' => true, 'default' => 1, 'comment' => '1 非查询字段 2 查询字段'])
            ->addColumn('query_type', 'string', ['limit' => 100, 'null' => true, 'default' => 'eq', 'comment' => '查询方式 eq 等于, neq 不等于, gt 大于, lt 小于, like 范围'])
            ->addColumn('view_type', 'string', ['limit' => 100, 'null' => true, 'default' => 'text', 'comment' => '页面控件,text, textarea, password, select, checkbox, radio, date, upload, ma-upload(封装的上传控件)'])
            ->addColumn('dict_type', 'string', ['limit' => 200, 'null' => true, 'default' => null, 'comment' => '字典类型'])
            ->addColumn('allow_roles', 'string', ['limit' => 255, 'null' => true, 'default' => null, 'comment' => '允许查看该字段的角色'])
            ->addColumn('options', 'string', ['limit' => 1000, 'null' => true, 'default' => null, 'comment' => '字段其他设置'])
            ->addColumn('sort', 'integer', ['null' => true, 'default' => 0, 'comment' => '排序'])
            ->addColumn('remark', 'string', ['limit' => 255, 'null' => true, 'default' => null, 'comment' => '备注'])
            ->addColumn('created_by', 'integer', ['null' => true, 'default' => null, 'comment' => '创建者'])
            ->addColumn('updated_by', 'integer', ['null' => true, 'default' => null, 'comment' => '更新者'])
            ->addColumn('create_time', 'datetime', ['null' => true, 'default' => null, 'comment' => '创建时间'])
            ->addColumn('update_time', 'datetime', ['null' => true, 'default' => null, 'comment' => '修改时间'])
            ->addColumn('delete_time', 'datetime', ['null' => true, 'default' => null, 'comment' => '删除时间'])
            ->addIndex(['table_id'], ['name' => 'idx_table_id'])
            ->create();

        $data = [
            [
                'id' => 57,
                'table_id' => 4,
                'column_name' => 'id',
                'column_comment' => '编号',
                'column_type' => 'int',
                'default_value' => null,
                'is_pk' => 2,
                'is_required' => 2,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 12,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 58,
                'table_id' => 4,
                'column_name' => 'parent_id',
                'column_comment' => '父级ID',
                'column_type' => 'int',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 2,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'treeSelect',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 11,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 59,
                'table_id' => 4,
                'column_name' => 'category_name',
                'column_comment' => '分类标题',
                'column_type' => 'varchar',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 2,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 2,
                'query_type' => 'like',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 10,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 60,
                'table_id' => 4,
                'column_name' => 'describe',
                'column_comment' => '分类简介',
                'column_type' => 'varchar',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'textarea',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 9,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 61,
                'table_id' => 4,
                'column_name' => 'image',
                'column_comment' => '分类图片',
                'column_type' => 'varchar',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'upload',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => '{"type":"image","returnType":"url","multiple":false}',
                'sort' => 8,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 62,
                'table_id' => 4,
                'column_name' => 'sort',
                'column_comment' => '排序',
                'column_type' => 'int',
                'default_value' => '100',
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'inputNumber',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 7,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 63,
                'table_id' => 4,
                'column_name' => 'status',
                'column_comment' => '状态',
                'column_type' => 'tinyint',
                'default_value' => '1',
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'radio',
                'dict_type' => 'data_status',
                'allow_roles' => null,
                'options' => null,
                'sort' => 6,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 64,
                'table_id' => 4,
                'column_name' => 'created_by',
                'column_comment' => '创建者',
                'column_type' => 'int',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 5,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 65,
                'table_id' => 4,
                'column_name' => 'updated_by',
                'column_comment' => '更新者',
                'column_type' => 'int',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 4,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 66,
                'table_id' => 4,
                'column_name' => 'create_time',
                'column_comment' => '创建时间',
                'column_type' => 'datetime',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 2,
                'is_query' => 2,
                'query_type' => 'between',
                'view_type' => 'date',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => '{"mode":"date","showTime":true,"range":true}',
                'sort' => 3,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 67,
                'table_id' => 4,
                'column_name' => 'update_time',
                'column_comment' => '修改时间',
                'column_type' => 'datetime',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'between',
                'view_type' => 'date',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => '{"mode":"date","showTime":true,"range":true}',
                'sort' => 2,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:04',
                'update_time' => '2024-01-20 15:40:16',
                'delete_time' => null,
            ],
            [
                'id' => 68,
                'table_id' => 3,
                'column_name' => 'id',
                'column_comment' => '编号',
                'column_type' => 'int',
                'default_value' => null,
                'is_pk' => 2,
                'is_required' => 2,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 18,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 69,
                'table_id' => 3,
                'column_name' => 'category_id',
                'column_comment' => '文章分类',
                'column_type' => 'int',
                'default_value' => '0',
                'is_pk' => 1,
                'is_required' => 2,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'treeSelect',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 17,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 70,
                'table_id' => 3,
                'column_name' => 'title',
                'column_comment' => '文章标题',
                'column_type' => 'varchar',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 2,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 2,
                'query_type' => 'like',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 16,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 71,
                'table_id' => 3,
                'column_name' => 'author',
                'column_comment' => '文章作者',
                'column_type' => 'varchar',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 2,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 2,
                'query_type' => 'like',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 15,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 72,
                'table_id' => 3,
                'column_name' => 'image',
                'column_comment' => '文章封面',
                'column_type' => 'varchar',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'upload',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => '{"type":"image","returnType":"url","multiple":false}',
                'sort' => 14,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 73,
                'table_id' => 3,
                'column_name' => 'content',
                'column_comment' => '文章内容',
                'column_type' => 'text',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 2,
                'query_type' => 'like',
                'view_type' => 'textarea',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 13,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 74,
                'table_id' => 3,
                'column_name' => 'tags',
                'column_comment' => '文章标签',
                'column_type' => 'varchar',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 2,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'like',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 12,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 75,
                'table_id' => 3,
                'column_name' => 'click_count',
                'column_comment' => '点击数',
                'column_type' => 'int',
                'default_value' => '0',
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'inputNumber',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 11,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 76,
                'table_id' => 3,
                'column_name' => 'comment_count',
                'column_comment' => '评论数',
                'column_type' => 'int',
                'default_value' => '0',
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'inputNumber',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 10,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 77,
                'table_id' => 3,
                'column_name' => 'status',
                'column_comment' => '状态',
                'column_type' => 'tinyint',
                'default_value' => '1',
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 2,
                'is_edit' => 2,
                'is_list' => 2,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'radio',
                'dict_type' => 'data_status',
                'allow_roles' => null,
                'options' => null,
                'sort' => 9,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 78,
                'table_id' => 3,
                'column_name' => 'created_by',
                'column_comment' => '创建者',
                'column_type' => 'int',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 8,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 79,
                'table_id' => 3,
                'column_name' => 'updated_by',
                'column_comment' => '更新者',
                'column_type' => 'int',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 7,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 80,
                'table_id' => 3,
                'column_name' => 'create_time',
                'column_comment' => '创建时间',
                'column_type' => 'datetime',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 2,
                'is_query' => 2,
                'query_type' => 'between',
                'view_type' => 'date',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => '{"mode":"date","showTime":true,"range":true}',
                'sort' => 6,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 81,
                'table_id' => 3,
                'column_name' => 'update_time',
                'column_comment' => '修改时间',
                'column_type' => 'datetime',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'between',
                'view_type' => 'date',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => '{"mode":"date","showTime":true,"range":true}',
                'sort' => 5,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 82,
                'table_id' => 3,
                'column_name' => 'updated_by',
                'column_comment' => '更新者',
                'column_type' => 'int',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'eq',
                'view_type' => 'input',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => null,
                'sort' => 4,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 83,
                'table_id' => 3,
                'column_name' => 'create_time',
                'column_comment' => '创建时间',
                'column_type' => 'datetime',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 2,
                'is_query' => 2,
                'query_type' => 'between',
                'view_type' => 'date',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => '{"mode":"date","showTime":true,"range":true}',
                'sort' => 3,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
            [
                'id' => 84,
                'table_id' => 3,
                'column_name' => 'update_time',
                'column_comment' => '修改时间',
                'column_type' => 'datetime',
                'default_value' => null,
                'is_pk' => 1,
                'is_required' => 1,
                'is_insert' => 1,
                'is_edit' => 1,
                'is_list' => 1,
                'is_query' => 1,
                'query_type' => 'between',
                'view_type' => 'date',
                'dict_type' => null,
                'allow_roles' => null,
                'options' => '{"mode":"date","showTime":true,"range":true}',
                'sort' => 2,
                'remark' => null,
                'created_by' => null,
                'updated_by' => null,
                'create_time' => '2023-12-01 14:03:06',
                'update_time' => '2024-01-20 15:41:16',
                'delete_time' => null,
            ],
        ];
        $table->insert($data)->save();
    }

    public function down()
    {
        $this->table('eb_tool_generate_columns')->drop()->save();
    }
}
