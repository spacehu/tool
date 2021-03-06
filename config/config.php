<?php

/** 系统目录信息 */
define('MANAGE_LIB', './lib');
define('MANAGE_MOD', './mod');
/** 网站信息 */
define('DOMAIN_NAME', 'localweb');
define('PORT', '80');
date_default_timezone_set('Asia/Shanghai');

/** 系统常量 */
define('DEFAULT_ACTION', 'main');
define('DEFAULT_ACTION_PATH', './action');
define('MANAGE_TEMPLATE', './template');
define('ERROR_405', './index.php?a=admin&m=error&message=405');
define('ERROR_404', './index.php?a=admin&m=error&message=404');


return $config = [
    'mysql' => include_once("parem.mysql." . ENV . ".php"), // 数据库设定 
    'env' => include_once("parem.env." . ENV . ".php"), // 配置设定 
    /** 常规系统设定 */
    'page_width' => 10, //分页
    'sysDelay' => 2, //系统延迟的秒数
    'shop_name' => 'tiger', //商店名称
    'cookie_pre' => '', //定义cookie的头部信息
    'cookie_life_time' => 1000 * 60 * 60 * 24/* */, //cookie存活的时间&session
    'config' => [
        'password' => 123456,
    ],
    'language' => [
        'key' => 'zh_cn', //定义默认语言
    ],
    'template' => MANAGE_TEMPLATE, //定义模板
    'lib' => MANAGE_LIB, //定义外部插件
    'mod' => MANAGE_MOD, //定义内部插件
    'port' => PORT, //定义端口号
    'url_rewrite' => true, //路由重写是否开启
    'restful_api' => [
        'isopen' => true, //是否开启restfulApi
        'path' => [
            /* public api */
            'GET /v1/ApiSystem-saveip.htm' => 'v1-ApiSystem-saveip',
            'GET /v1/ApiEnum-getRegion.htm' => 'v1-ApiEnum-getRegion',
            'GET /v1/ApiSms-sendSms.htm' => 'v1-ApiSms-sendSms',
            'GET /v1/ApiSms-sendRegistSms.htm' => 'v1-ApiSms-sendRegistSms',
            'GET /v2/ApiEnum-getRegion.htm' => 'v2-ApiEnum-getRegion',
            /* system api */
            'GET /v2/ApiHome-getCategory.htm' => 'v2-ApiHome-getCategory',
            'GET /v2/ApiHome-getBrand.htm' => 'v2-ApiHome-getBrand',
            'GET /v2/ApiHome-getAgeRange.htm' => 'v2-ApiHome-getAgeRange',
            'GET /v2/ApiHome-getSubjectCategory.htm' => 'v2-ApiHome-getSubjectCategory',
            /* base api */
            'GET /v2/ApiHome-slideShow.htm' => 'v2-ApiHome-slideShow',
            'GET /v2/ApiHome-article.htm' => 'v2-ApiHome-article',
            'GET /v2/ApiHome-article_detail.htm' => 'v2-ApiHome-article_detail',
            'POST /v2/ApiHome-saveSingle.htm' => 'v2-ApiHome-saveSingle',
            'POST /v2/ApiHome-saveComment.htm' => 'v2-ApiHome-saveComment',
            'GET /v2/ApiHome-getHelp.htm' => 'v2-ApiHome-getHelp',
            'POST /v2/ApiHome-saveHelp.htm' => 'v2-ApiHome-saveHelp',
            /* user api */
            'GET /v2/ApiHome-getBookedList.htm' => 'v2-ApiHome-getBookedList',
            'GET /v2/ApiHome-getPoints.htm' => 'v2-ApiHome-getPoints',
            'POST /v2/ApiHome-saveUserInfo.htm' => 'v2-ApiHome-saveUserInfo',
            'POST /v2/ApiHome-savePoint.htm' => 'v2-ApiHome-savePoint',
            'POST /v1/ApiAccount-regist.htm' => 'v1-ApiAccount-regist',
            'POST /v1/ApiAccount-login.htm' => 'v1-ApiAccount-login',
            /* need token api */
            'POST /v1/ApiAccount-logout.htm' => 'v1-ApiAccount-logout',
            'GET /v1/ApiAccount-center.htm' => 'v1-ApiAccount-center',
            'POST /v1/ApiAccount-saveUserInfo.htm' => 'v1-ApiAccount-save_user_info',
            //'POST /v1/ApiAccount-uploadPhoto.htm' => 'v1-ApiAccount-upload_photo',
            //'POST /v1/ApiAccount-savePhoto.htm' => 'v1-ApiAccount-save_photo',
            'POST /v1/ApiAccount-uploadPhoto.htm' => 'v1-ApiAccount-uploadPhoto',
            'GET /v1/ApiAccount-point.htm' => 'v1-ApiAccount-point',
            /* wechat api */
            'GET /v2/ApiWeChat-getWeChatInfo.htm' => 'v2-ApiWeChat-getWeChatInfo',
            'GET /v2/ApiWeChat-getAccessToken.htm' => 'v2-ApiWeChat-getAccessToken',
            'GET /v2/ApiWeChat-getJsApiTicket.htm' => 'v2-ApiWeChat-getTicket',
            /* applets api */
            'GET /v1/ApiApplets-photo.htm' => 'v1-ApiApplets-photo',
            'POST /v1/ApiApplets-saveWeChatInfo.htm' => 'v1-ApiApplets-saveWeChatInfo',
            /* tool api */
            'POST /v3/ApiSensitiveWord-postWord.htm' => 'v1-ApiApplets-postWord',
            'POST /v3/ApiSensitiveWord-replaceWord.htm' => 'v1-ApiApplets-replaceWord',
        ]
    ],
    'debug' => false, //调试器
    'wechat' => [
        'appid' => 'wx11eb371cd85adfd4',
        'secret' => '01ef7de58bc18da629d4ec33a62744f9',
        'index_url' => 'https://api.tigerhuclub.com',
    ],
    'actionList' => [
        'index' => '首页',
        'awards' => '简介',
        'works' => '作品',
        'album' => '专辑列表',
        'album_music' => '专辑音乐',
        'notice' => '行程列表',
        'article' => '活动列表',
        'article_detail' => '活动详情',
        'video' => '视频列表',
        'video_detail' => '视频播放页',
        'photo' => '照片列表',
        'single' => '单页',
    ],
    'pointInfo' => [
        'firstPhone' => 30,
        'share' => 20,
        'personalMax' => 500,
    ],
    'sensitiveword' => [
        'game' => './data/sensitiveword/prohibitword_20190410.txt',
    ],
];


