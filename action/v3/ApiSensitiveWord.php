<?php

namespace action\v3;

use mod\common as Common;
use TigerDAL;
use config\code;
use mod\tool\file;
use mod\fiter as Fiter;

class ApiSensitiveWord extends \action\RestfulApi {

    public $post;

    /**
     * 主方法引入父类的基类
     * 责任是分担路由的工作
     */
    function __construct() {
        $path = parent::__construct();
        $this->post = Common::exchangePost();
        if (!empty($path)) {
            $_path = explode("-", $path);
            $actEval = "\$res = \$this ->" . $_path['2'] . "();";
            eval($actEval);
            exit(json_encode($res));
        }
    }

    /** 检查 */
    function postWord() {
        try {
            $str = $this->post['str'];
            $fiter = new Fiter(\mod\init::$config['sensitiveword']['game']);

            $res = $fiter->filter($str, 0);
            self::$data['result'] = $res;
        } catch (Exception $ex) {
            TigerDAL\CatchDAL::markError(code::$code[code::API_ENUM], code::API_ENUM, json_encode($ex));
            self::$data['success'] = false;
            self::$data['message'] = '999';
        }
        return self::$data;
    }

    /** 替换 */
    function replaceWord() {
        try {
            $str = $this->post['str'];
            $fiter = new Fiter(\mod\init::$config['sensitiveword']['game']);

            $res = $fiter->filterRelpace($str, 0);
            self::$data['result'] = $res;
        } catch (Exception $ex) {
            TigerDAL\CatchDAL::markError(code::$code[code::API_ENUM], code::API_ENUM, json_encode($ex));
            self::$data['success'] = false;
            self::$data['message'] = '999';
        }
        return self::$data;
    }

}
