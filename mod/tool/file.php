<?php

namespace mod\tool;

/** 文件处理 */
class file {
    /* 对象 */

    public $obj;

    public function _txt($_filePath) {
        if (file_exists($_filePath)) {
            $str = file_get_contents($_filePath); //将整个文件内容读入到一个字符串中
            /* 遍历 */
            $this->obj = explode("\r\n", $str);
            //$this->obj = str_replace("\r\n", "<br />", $str);
            return $this->obj;
        }
    }

}
