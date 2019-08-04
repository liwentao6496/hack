<?php

namespace app\admin\model;

use think\Model;


class Test1 extends Model
{

    

    

    // 表名
    protected $name = 'test1';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'free_request_text',
        'free_file_text',
        'status_text'
    ];
    

    
    public function getFreeRequestList()
    {
        return ['true' => __('True'), 'false' => __('False')];
    }

    public function getFreeFileList()
    {
        return ['true' => __('True'), 'false' => __('False')];
    }

    public function getStatusList()
    {
        return ['active' => __('Active'), 'queue' => __('Queue'), 'unapproved' => __('Unapproved'), 'extended_buy' => __('Extended_buy'), 'deleted' => __('Deleted')];
    }


    public function getFreeRequestTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['free_request']) ? $data['free_request'] : '');
        $list = $this->getFreeRequestList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getFreeFileTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['free_file']) ? $data['free_file'] : '');
        $list = $this->getFreeFileList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
