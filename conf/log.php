<?php
$closelog = Yaf_Application::app()->getConfig()->milib->milog->close;
$log_config = array(

    //日志等级
    'LogLevel' => $closelog==1 ? 0 : 4,

    /** 当pushMessage或者fmt中存在array时，是否以折行的方式输出
     *  折行的输出方式，可读性更高，但是会占用多行
     */
    'PrettyArray' => false,

    /** 是否开启按小时自动切分日志文件 */
    'AutoRotate' => false,

    /** 可配置化的自定义格式, 目前支持
     *  %Uri %Query %UserAddr %FrontendAddr %Referer %UserAgent %Cookie
     *  %Port %Method
     */
//    'FormatString' => '%Uri %Query %UserAddr %Port %Cookie %TimeUsed %Method %User %UserAgent',
    'FormatString' => '%Uri %Query %UserAddr %Port %TimeUsed %Method %User %UserAgent',

    /** PHP日志文件打印目录 默认 APPLICATION_PATH/log */
    'LogPath' => '/home/work/logs/applogs',

    /** PHP日志文件名称 */
    'LogFile' => 'api_miren_mi_com_access.log',

    /** 本模块所属产品线 */
    'Product' => 'mi.com',

    /** 本模块所属系统 */
    'System' => 'miren',

    /** 本模块名称 */
    'Module' => 'script',
     /** 是否使用小米日志规范化输出格式 */
   'StandardFormatLog' => true
); 

return $log_config;