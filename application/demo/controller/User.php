<?php
// +----------------------------------------------------------------------
// | When work is a pleasure, life is a joy!
// +----------------------------------------------------------------------
// | User: ShouKun Liu  |  Email:24147287@qq.com  | Time:2017/3/5 9:58
// +----------------------------------------------------------------------
// | TITLE: 用户接口
// +----------------------------------------------------------------------
namespace app\demo\controller;

/**
 * Class User
 * @title 用户接口
 * @url /v1/user
 * @desc  有关于用户的接口
 * @version 1.0
 * @readme /doc/md/user.md
 */
class User extends Base
{
    // 允许访问的请求类型
    public $restMethodList = 'get|post';

    /**
     * 参数规则
     * @name 字段名称
     * @type 类型
     * @require 是否必须
     * @default 默认值
     * @desc 说明
     * @range 范围
     * @return array
     */
    public static function getRules()
    {
        $rules = [
                //共用参数
                'all'=>[
                    'time'=> ['name' => 'time', 'type' => 'int', 'require' => 'true', 'default' => '', 'desc' => '时间戳', 'range' => '',]
                ],

                'get'=>[
                    'id' => ['name' => 'id', 'type' => 'int', 'require' => 'true', 'default' => '', 'desc' => '用户id', 'range' => '',]
                ],
                'post'=>[
                    'username' => ['name' => 'username', 'type' => 'string', 'require' => 'true', 'default' => '', 'desc' => '用户名', 'range' => '',],
                    'age' => ['name' => 'age', 'type' => 'int', 'require' => 'true', 'default' => '18', 'desc' => '年龄', 'range' => '0-200',],
                ]
        ];
        //可以合并公共参数
        return array_merge(parent::getRules(),$rules);
    }

    /**
     * @title 获取用户信息
     * @desc 获取用户信息
     * @readme /doc/md/method.md
     * @param \think\Request $request
     * @return int id ID
     * @return string username 错误信息
     * @return int age 年龄
     */
    public function getResponse(\think\Request $request)
    {
        return $this->sendSuccess(['username' => 'api', 'age' => 1, 'id' => 1]);
    }

    /**
     * @title 添加用户信息
     * @desc  添加用户信息
     * @readme /doc/md/method.md
     * @param \think\Request $request
     * @return string message 错误信息
     * @return int errCode 错误号
     */
    public function postResponse(\think\Request $request)
    {
        return $this->sendError(5001, '添加错误');
    }


}