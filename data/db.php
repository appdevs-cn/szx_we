<?php
$schemas = 'a:95:{i:0;a:6:{s:9:"tablename";s:11:"ims_account";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:6:{s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"hash";a:6:{s:4:"name";s:4:"hash";s:4:"type";s:7:"varchar";s:6:"length";s:1:"8";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"isconnect";a:6:{s:4:"name";s:9:"isconnect";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"isdeleted";a:6:{s:4:"name";s:9:"isdeleted";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:4:"acid";}}s:11:"idx_uniacid";a:3:{s:4:"name";s:11:"idx_uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:1;a:6:{s:9:"tablename";s:19:"ims_account_wechats";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";N;s:6:"fields";a:20:{s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"token";a:6:{s:4:"name";s:5:"token";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:14:"encodingaeskey";a:6:{s:4:"name";s:14:"encodingaeskey";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"level";a:6:{s:4:"name";s:5:"level";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"account";a:6:{s:4:"name";s:7:"account";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"original";a:6:{s:4:"name";s:8:"original";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"signature";a:6:{s:4:"name";s:9:"signature";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"country";a:6:{s:4:"name";s:7:"country";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"province";a:6:{s:4:"name";s:8:"province";s:4:"type";s:7:"varchar";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"city";a:6:{s:4:"name";s:4:"city";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"username";a:6:{s:4:"name";s:8:"username";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"password";a:6:{s:4:"name";s:8:"password";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"lastupdate";a:6:{s:4:"name";s:10:"lastupdate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"key";a:6:{s:4:"name";s:3:"key";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"secret";a:6:{s:4:"name";s:6:"secret";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"styleid";a:6:{s:4:"name";s:7:"styleid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:12:"subscribeurl";a:6:{s:4:"name";s:12:"subscribeurl";s:4:"type";s:7:"varchar";s:6:"length";s:3:"120";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:18:"auth_refresh_token";a:6:{s:4:"name";s:18:"auth_refresh_token";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:4:"acid";}}s:7:"idx_key";a:3:{s:4:"name";s:7:"idx_key";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"key";}}}}i:2;a:6:{s:9:"tablename";s:17:"ims_account_wxapp";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:10:{s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"token";a:6:{s:4:"name";s:5:"token";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:14:"encodingaeskey";a:6:{s:4:"name";s:14:"encodingaeskey";s:4:"type";s:7:"varchar";s:6:"length";s:2:"43";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"level";a:6:{s:4:"name";s:5:"level";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"account";a:6:{s:4:"name";s:7:"account";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"original";a:6:{s:4:"name";s:8:"original";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"key";a:6:{s:4:"name";s:3:"key";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"secret";a:6:{s:4:"name";s:6:"secret";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:4:"acid";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:3;a:6:{s:9:"tablename";s:20:"ims_article_category";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:4:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:4:"type";a:3:{s:4:"name";s:4:"type";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:4:"type";}}}}i:4;a:6:{s:9:"tablename";s:16:"ims_article_news";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:12:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:6:"cateid";a:6:{s:4:"name";s:6:"cateid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:10:"mediumtext";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"thumb";a:6:{s:4:"name";s:5:"thumb";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"source";a:6:{s:4:"name";s:6:"source";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"author";a:6:{s:4:"name";s:6:"author";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"is_display";a:6:{s:4:"name";s:10:"is_display";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:12:"is_show_home";a:6:{s:4:"name";s:12:"is_show_home";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"click";a:6:{s:4:"name";s:5:"click";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:5:"title";a:3:{s:4:"name";s:5:"title";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"title";}}s:6:"cateid";a:3:{s:4:"name";s:6:"cateid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"cateid";}}}}i:5;a:6:{s:9:"tablename";s:18:"ims_article_notice";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:9:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:6:"cateid";a:6:{s:4:"name";s:6:"cateid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:10:"mediumtext";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"is_display";a:6:{s:4:"name";s:10:"is_display";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:12:"is_show_home";a:6:{s:4:"name";s:12:"is_show_home";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"click";a:6:{s:4:"name";s:5:"click";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:5:"title";a:3:{s:4:"name";s:5:"title";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"title";}}s:6:"cateid";a:3:{s:4:"name";s:6:"cateid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"cateid";}}}}i:6;a:6:{s:9:"tablename";s:25:"ims_article_unread_notice";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:4:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:9:"notice_id";a:6:{s:4:"name";s:9:"notice_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"is_new";a:6:{s:4:"name";s:6:"is_new";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"uid";a:3:{s:4:"name";s:3:"uid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"uid";}}s:9:"notice_id";a:3:{s:4:"name";s:9:"notice_id";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:9:"notice_id";}}}}i:7;a:6:{s:9:"tablename";s:15:"ims_basic_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:3:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:8;a:6:{s:9:"tablename";s:12:"ims_business";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:16:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"weid";a:6:{s:4:"name";s:4:"weid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"thumb";a:6:{s:4:"name";s:5:"thumb";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"phone";a:6:{s:4:"name";s:5:"phone";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:2:"qq";a:6:{s:4:"name";s:2:"qq";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"province";a:6:{s:4:"name";s:8:"province";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"city";a:6:{s:4:"name";s:4:"city";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"dist";a:6:{s:4:"name";s:4:"dist";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"address";a:6:{s:4:"name";s:7:"address";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"lng";a:6:{s:4:"name";s:3:"lng";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"lat";a:6:{s:4:"name";s:3:"lat";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"industry1";a:6:{s:4:"name";s:9:"industry1";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"industry2";a:6:{s:4:"name";s:9:"industry2";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:11:"idx_lat_lng";a:3:{s:4:"name";s:11:"idx_lat_lng";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:3:"lng";i:1;s:3:"lat";}}}}i:9;a:6:{s:9:"tablename";s:19:"ims_core_attachment";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"filename";a:6:{s:4:"name";s:8:"filename";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"attachment";a:6:{s:4:"name";s:10:"attachment";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:10;a:6:{s:9:"tablename";s:14:"ims_core_cache";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";N;s:6:"fields";a:2:{s:3:"key";a:6:{s:4:"name";s:3:"key";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"value";a:6:{s:4:"name";s:5:"value";s:4:"type";s:8:"longtext";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"key";}}}}i:11;a:6:{s:9:"tablename";s:13:"ims_core_cron";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:16:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"cloudid";a:6:{s:4:"name";s:7:"cloudid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"filename";a:6:{s:4:"name";s:8:"filename";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"lastruntime";a:6:{s:4:"name";s:11:"lastruntime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:11:"nextruntime";a:6:{s:4:"name";s:11:"nextruntime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"weekday";a:6:{s:4:"name";s:7:"weekday";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"day";a:6:{s:4:"name";s:3:"day";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"hour";a:6:{s:4:"name";s:4:"hour";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"minute";a:6:{s:4:"name";s:6:"minute";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"extra";a:6:{s:4:"name";s:5:"extra";s:4:"type";s:7:"varchar";s:6:"length";s:4:"5000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:5:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:10:"createtime";a:3:{s:4:"name";s:10:"createtime";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:10:"createtime";}}s:11:"nextruntime";a:3:{s:4:"name";s:11:"nextruntime";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:11:"nextruntime";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:7:"cloudid";a:3:{s:4:"name";s:7:"cloudid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"cloudid";}}}}i:12;a:6:{s:9:"tablename";s:20:"ims_core_cron_record";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:8:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"tid";a:6:{s:4:"name";s:3:"tid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"note";a:6:{s:4:"name";s:4:"note";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"tag";a:6:{s:4:"name";s:3:"tag";s:4:"type";s:7:"varchar";s:6:"length";s:4:"5000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:4:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:3:"tid";a:3:{s:4:"name";s:3:"tid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"tid";}}s:6:"module";a:3:{s:4:"name";s:6:"module";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"module";}}}}i:13;a:6:{s:9:"tablename";s:13:"ims_core_menu";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:14:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"pid";a:6:{s:4:"name";s:3:"pid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"append_title";a:6:{s:4:"name";s:12:"append_title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"append_url";a:6:{s:4:"name";s:10:"append_url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"is_display";a:6:{s:4:"name";s:10:"is_display";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"is_system";a:6:{s:4:"name";s:9:"is_system";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:15:"permission_name";a:6:{s:4:"name";s:15:"permission_name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"group_name";a:6:{s:4:"name";s:10:"group_name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"icon";a:6:{s:4:"name";s:4:"icon";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:14;a:6:{s:9:"tablename";s:15:"ims_core_paylog";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:16:{s:4:"plid";a:6:{s:4:"name";s:4:"plid";s:4:"type";s:6:"bigint";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"openid";a:6:{s:4:"name";s:6:"openid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"40";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"uniontid";a:6:{s:4:"name";s:8:"uniontid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"tid";a:6:{s:4:"name";s:3:"tid";s:4:"type";s:7:"varchar";s:6:"length";s:3:"128";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"fee";a:6:{s:4:"name";s:3:"fee";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"tag";a:6:{s:4:"name";s:3:"tag";s:4:"type";s:7:"varchar";s:6:"length";s:4:"2000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"is_usecard";a:6:{s:4:"name";s:10:"is_usecard";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"card_type";a:6:{s:4:"name";s:9:"card_type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"card_id";a:6:{s:4:"name";s:7:"card_id";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"card_fee";a:6:{s:4:"name";s:8:"card_fee";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:12:"encrypt_code";a:6:{s:4:"name";s:12:"encrypt_code";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:5:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:4:"plid";}}s:10:"idx_openid";a:3:{s:4:"name";s:10:"idx_openid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"openid";}}s:7:"idx_tid";a:3:{s:4:"name";s:7:"idx_tid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"tid";}}s:11:"idx_uniacid";a:3:{s:4:"name";s:11:"idx_uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:8:"uniontid";a:3:{s:4:"name";s:8:"uniontid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:8:"uniontid";}}}}i:15;a:6:{s:9:"tablename";s:20:"ims_core_performance";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"runtime";a:6:{s:4:"name";s:7:"runtime";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"runurl";a:6:{s:4:"name";s:6:"runurl";s:4:"type";s:7:"varchar";s:6:"length";s:3:"512";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"runsql";a:6:{s:4:"name";s:6:"runsql";s:4:"type";s:7:"varchar";s:6:"length";s:3:"512";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:16;a:6:{s:9:"tablename";s:14:"ims_core_queue";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:10:{s:3:"qid";a:6:{s:4:"name";s:3:"qid";s:4:"type";s:6:"bigint";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"message";a:6:{s:4:"name";s:7:"message";s:4:"type";s:7:"varchar";s:6:"length";s:4:"2000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"params";a:6:{s:4:"name";s:6:"params";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"keyword";a:6:{s:4:"name";s:7:"keyword";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"response";a:6:{s:4:"name";s:8:"response";s:4:"type";s:7:"varchar";s:6:"length";s:4:"2000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"dateline";a:6:{s:4:"name";s:8:"dateline";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:4:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"qid";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:7:"uniacid";i:1;s:4:"acid";}}s:6:"module";a:3:{s:4:"name";s:6:"module";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"module";}}s:8:"dateline";a:3:{s:4:"name";s:8:"dateline";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:8:"dateline";}}}}i:17;a:6:{s:9:"tablename";s:18:"ims_core_refundlog";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:15:"refund_uniontid";a:6:{s:4:"name";s:15:"refund_uniontid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"reason";a:6:{s:4:"name";s:6:"reason";s:4:"type";s:7:"varchar";s:6:"length";s:2:"80";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"uniontid";a:6:{s:4:"name";s:8:"uniontid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"fee";a:6:{s:4:"name";s:3:"fee";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:3:"int";s:6:"length";s:1:"2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:15:"refund_uniontid";a:3:{s:4:"name";s:15:"refund_uniontid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:15:"refund_uniontid";}}s:8:"uniontid";a:3:{s:4:"name";s:8:"uniontid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:8:"uniontid";}}}}i:18;a:6:{s:9:"tablename";s:17:"ims_core_resource";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:3:"mid";a:6:{s:4:"name";s:3:"mid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"media_id";a:6:{s:4:"name";s:8:"media_id";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"trunk";a:6:{s:4:"name";s:5:"trunk";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"dateline";a:6:{s:4:"name";s:8:"dateline";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"mid";}}s:4:"acid";a:3:{s:4:"name";s:4:"acid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:4:"type";a:3:{s:4:"name";s:4:"type";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:4:"type";}}}}i:19;a:6:{s:9:"tablename";s:20:"ims_core_sendsms_log";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"mobile";a:6:{s:4:"name";s:6:"mobile";s:4:"type";s:7:"varchar";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"result";a:6:{s:4:"name";s:6:"result";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:20;a:6:{s:9:"tablename";s:17:"ims_core_sessions";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";N;s:6:"fields";a:5:{s:3:"sid";a:6:{s:4:"name";s:3:"sid";s:4:"type";s:4:"char";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"openid";a:6:{s:4:"name";s:6:"openid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"data";a:6:{s:4:"name";s:4:"data";s:4:"type";s:7:"varchar";s:6:"length";s:4:"5000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"expiretime";a:6:{s:4:"name";s:10:"expiretime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"sid";}}}}i:21;a:6:{s:9:"tablename";s:17:"ims_core_settings";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";N;s:6:"fields";a:2:{s:3:"key";a:6:{s:4:"name";s:3:"key";s:4:"type";s:7:"varchar";s:6:"length";s:3:"200";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"value";a:6:{s:4:"name";s:5:"value";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"key";}}}}i:22;a:6:{s:9:"tablename";s:19:"ims_coupon_location";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:24:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"sid";a:6:{s:4:"name";s:3:"sid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:11:"location_id";a:6:{s:4:"name";s:11:"location_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:13:"business_name";a:6:{s:4:"name";s:13:"business_name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"branch_name";a:6:{s:4:"name";s:11:"branch_name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"category";a:6:{s:4:"name";s:8:"category";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"province";a:6:{s:4:"name";s:8:"province";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"city";a:6:{s:4:"name";s:4:"city";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"district";a:6:{s:4:"name";s:8:"district";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"address";a:6:{s:4:"name";s:7:"address";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"longitude";a:6:{s:4:"name";s:9:"longitude";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"latitude";a:6:{s:4:"name";s:8:"latitude";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"telephone";a:6:{s:4:"name";s:9:"telephone";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"photo_list";a:6:{s:4:"name";s:10:"photo_list";s:4:"type";s:7:"varchar";s:6:"length";s:5:"10000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"avg_price";a:6:{s:4:"name";s:9:"avg_price";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"open_time";a:6:{s:4:"name";s:9:"open_time";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"recommend";a:6:{s:4:"name";s:9:"recommend";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"special";a:6:{s:4:"name";s:7:"special";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"introduction";a:6:{s:4:"name";s:12:"introduction";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"offset_type";a:6:{s:4:"name";s:11:"offset_type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"message";a:6:{s:4:"name";s:7:"message";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:7:"uniacid";i:1;s:4:"acid";}}}}i:23;a:6:{s:9:"tablename";s:15:"ims_cover_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"3";s:6:"fields";a:10:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"multiid";a:6:{s:4:"name";s:7:"multiid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:2:"do";a:6:{s:4:"name";s:2:"do";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"thumb";a:6:{s:4:"name";s:5:"thumb";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:24;a:6:{s:9:"tablename";s:16:"ims_custom_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"start1";a:6:{s:4:"name";s:6:"start1";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"end1";a:6:{s:4:"name";s:4:"end1";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"start2";a:6:{s:4:"name";s:6:"start2";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"end2";a:6:{s:4:"name";s:4:"end2";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:25;a:6:{s:9:"tablename";s:16:"ims_images_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"mediaid";a:6:{s:4:"name";s:7:"mediaid";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:26;a:6:{s:9:"tablename";s:18:"ims_mc_cash_record";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:17:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"clerk_id";a:6:{s:4:"name";s:8:"clerk_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"store_id";a:6:{s:4:"name";s:8:"store_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"clerk_type";a:6:{s:4:"name";s:10:"clerk_type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"fee";a:6:{s:4:"name";s:3:"fee";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"final_fee";a:6:{s:4:"name";s:9:"final_fee";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"credit1";a:6:{s:4:"name";s:7:"credit1";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:11:"credit1_fee";a:6:{s:4:"name";s:11:"credit1_fee";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"credit2";a:6:{s:4:"name";s:7:"credit2";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"cash";a:6:{s:4:"name";s:4:"cash";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:11:"return_cash";a:6:{s:4:"name";s:11:"return_cash";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"final_cash";a:6:{s:4:"name";s:10:"final_cash";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"remark";a:6:{s:4:"name";s:6:"remark";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"trade_type";a:6:{s:4:"name";s:10:"trade_type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:3:"uid";a:3:{s:4:"name";s:3:"uid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"uid";}}}}i:27;a:6:{s:9:"tablename";s:19:"ims_mc_chats_record";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:8:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"flag";a:6:{s:4:"name";s:4:"flag";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"openid";a:6:{s:4:"name";s:6:"openid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"msgtype";a:6:{s:4:"name";s:7:"msgtype";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:7:"varchar";s:6:"length";s:5:"10000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:4:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:7:"uniacid";i:1;s:4:"acid";}}s:6:"openid";a:3:{s:4:"name";s:6:"openid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"openid";}}s:10:"createtime";a:3:{s:4:"name";s:10:"createtime";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:10:"createtime";}}}}i:28;a:6:{s:9:"tablename";s:23:"ims_mc_credits_recharge";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:12:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"openid";a:6:{s:4:"name";s:6:"openid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"tid";a:6:{s:4:"name";s:3:"tid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"transid";a:6:{s:4:"name";s:7:"transid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"fee";a:6:{s:4:"name";s:3:"fee";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"tag";a:6:{s:4:"name";s:3:"tag";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"backtype";a:6:{s:4:"name";s:8:"backtype";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:15:"idx_uniacid_uid";a:3:{s:4:"name";s:15:"idx_uniacid_uid";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:7:"uniacid";i:1;s:3:"uid";}}s:7:"idx_tid";a:3:{s:4:"name";s:7:"idx_tid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"tid";}}}}i:29;a:6:{s:9:"tablename";s:21:"ims_mc_credits_record";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:12:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:1;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"credittype";a:6:{s:4:"name";s:10:"credittype";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"num";a:6:{s:4:"name";s:3:"num";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"operator";a:6:{s:4:"name";s:8:"operator";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"clerk_id";a:6:{s:4:"name";s:8:"clerk_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"store_id";a:6:{s:4:"name";s:8:"store_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"clerk_type";a:6:{s:4:"name";s:10:"clerk_type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"remark";a:6:{s:4:"name";s:6:"remark";s:4:"type";s:7:"varchar";s:6:"length";s:3:"200";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:3:"uid";a:3:{s:4:"name";s:3:"uid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"uid";}}}}i:30;a:6:{s:9:"tablename";s:18:"ims_mc_fans_groups";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:4:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"groups";a:6:{s:4:"name";s:6:"groups";s:4:"type";s:7:"varchar";s:6:"length";s:5:"10000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:31;a:6:{s:9:"tablename";s:23:"ims_mc_fans_tag_mapping";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:3:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:5:"fanid";a:6:{s:4:"name";s:5:"fanid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"tagid";a:6:{s:4:"name";s:5:"tagid";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:4:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"mapping";a:3:{s:4:"name";s:7:"mapping";s:4:"type";s:6:"unique";s:6:"fields";a:2:{i:0;s:5:"fanid";i:1;s:5:"tagid";}}s:11:"fanid_index";a:3:{s:4:"name";s:11:"fanid_index";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"fanid";}}s:11:"tagid_index";a:3:{s:4:"name";s:11:"tagid_index";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"tagid";}}}}i:32;a:6:{s:9:"tablename";s:13:"ims_mc_groups";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:5:{s:7:"groupid";a:6:{s:4:"name";s:7:"groupid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"credit";a:6:{s:4:"name";s:6:"credit";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"isdefault";a:6:{s:4:"name";s:9:"isdefault";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:7:"groupid";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:33;a:6:{s:9:"tablename";s:14:"ims_mc_handsel";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:9:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"touid";a:6:{s:4:"name";s:5:"touid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"fromuid";a:6:{s:4:"name";s:7:"fromuid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"sign";a:6:{s:4:"name";s:4:"sign";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"action";a:6:{s:4:"name";s:6:"action";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"credit_value";a:6:{s:4:"name";s:12:"credit_value";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"uid";a:3:{s:4:"name";s:3:"uid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"touid";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:34;a:6:{s:9:"tablename";s:19:"ims_mc_mapping_fans";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:14:{s:5:"fanid";a:6:{s:4:"name";s:5:"fanid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"openid";a:6:{s:4:"name";s:6:"openid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"nickname";a:6:{s:4:"name";s:8:"nickname";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"groupid";a:6:{s:4:"name";s:7:"groupid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"salt";a:6:{s:4:"name";s:4:"salt";s:4:"type";s:4:"char";s:6:"length";s:1:"8";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"follow";a:6:{s:4:"name";s:6:"follow";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"followtime";a:6:{s:4:"name";s:10:"followtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:12:"unfollowtime";a:6:{s:4:"name";s:12:"unfollowtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"tag";a:6:{s:4:"name";s:3:"tag";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"updatetime";a:6:{s:4:"name";s:10:"updatetime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:1;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"unionid";a:6:{s:4:"name";s:7:"unionid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:7:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:5:"fanid";}}s:4:"acid";a:3:{s:4:"name";s:4:"acid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:4:"acid";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:8:"nickname";a:3:{s:4:"name";s:8:"nickname";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:8:"nickname";}}s:10:"updatetime";a:3:{s:4:"name";s:10:"updatetime";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:10:"updatetime";}}s:3:"uid";a:3:{s:4:"name";s:3:"uid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"uid";}}s:6:"openid";a:3:{s:4:"name";s:6:"openid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"openid";}}}}i:35;a:6:{s:9:"tablename";s:22:"ims_mc_mapping_ucenter";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:4:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"centeruid";a:6:{s:4:"name";s:9:"centeruid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:36;a:6:{s:9:"tablename";s:18:"ims_mc_mass_record";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:16:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"groupname";a:6:{s:4:"name";s:9:"groupname";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"fansnum";a:6:{s:4:"name";s:7:"fansnum";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"msgtype";a:6:{s:4:"name";s:7:"msgtype";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:7:"varchar";s:6:"length";s:5:"10000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"group";a:6:{s:4:"name";s:5:"group";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"attach_id";a:6:{s:4:"name";s:9:"attach_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"media_id";a:6:{s:4:"name";s:8:"media_id";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"cron_id";a:6:{s:4:"name";s:7:"cron_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"sendtime";a:6:{s:4:"name";s:8:"sendtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:13:"finalsendtime";a:6:{s:4:"name";s:13:"finalsendtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:7:"uniacid";i:1;s:4:"acid";}}}}i:37;a:6:{s:9:"tablename";s:21:"ims_mc_member_address";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:11:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"username";a:6:{s:4:"name";s:8:"username";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"mobile";a:6:{s:4:"name";s:6:"mobile";s:4:"type";s:7:"varchar";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"zipcode";a:6:{s:4:"name";s:7:"zipcode";s:4:"type";s:7:"varchar";s:6:"length";s:1:"6";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"province";a:6:{s:4:"name";s:8:"province";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"city";a:6:{s:4:"name";s:4:"city";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"district";a:6:{s:4:"name";s:8:"district";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"address";a:6:{s:4:"name";s:7:"address";s:4:"type";s:7:"varchar";s:6:"length";s:3:"512";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"isdefault";a:6:{s:4:"name";s:9:"isdefault";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:11:"idx_uinacid";a:3:{s:4:"name";s:11:"idx_uinacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:7:"idx_uid";a:3:{s:4:"name";s:7:"idx_uid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"uid";}}}}i:38;a:6:{s:9:"tablename";s:20:"ims_mc_member_fields";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"fieldid";a:6:{s:4:"name";s:7:"fieldid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"available";a:6:{s:4:"name";s:9:"available";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:8:"smallint";s:6:"length";s:1:"6";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:11:"idx_uniacid";a:3:{s:4:"name";s:11:"idx_uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:11:"idx_fieldid";a:3:{s:4:"name";s:11:"idx_fieldid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"fieldid";}}}}i:39;a:6:{s:9:"tablename";s:22:"ims_mc_member_property";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:3:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"property";a:6:{s:4:"name";s:8:"property";s:4:"type";s:7:"varchar";s:6:"length";s:3:"200";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:40;a:6:{s:9:"tablename";s:14:"ims_mc_members";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:52:{s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"mobile";a:6:{s:4:"name";s:6:"mobile";s:4:"type";s:7:"varchar";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"email";a:6:{s:4:"name";s:5:"email";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"password";a:6:{s:4:"name";s:8:"password";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"salt";a:6:{s:4:"name";s:4:"salt";s:4:"type";s:7:"varchar";s:6:"length";s:1:"8";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"groupid";a:6:{s:4:"name";s:7:"groupid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"credit1";a:6:{s:4:"name";s:7:"credit1";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"credit2";a:6:{s:4:"name";s:7:"credit2";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"credit3";a:6:{s:4:"name";s:7:"credit3";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"credit4";a:6:{s:4:"name";s:7:"credit4";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"credit5";a:6:{s:4:"name";s:7:"credit5";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"credit6";a:6:{s:4:"name";s:7:"credit6";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"realname";a:6:{s:4:"name";s:8:"realname";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"nickname";a:6:{s:4:"name";s:8:"nickname";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"avatar";a:6:{s:4:"name";s:6:"avatar";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:2:"qq";a:6:{s:4:"name";s:2:"qq";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"vip";a:6:{s:4:"name";s:3:"vip";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"gender";a:6:{s:4:"name";s:6:"gender";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"birthyear";a:6:{s:4:"name";s:9:"birthyear";s:4:"type";s:8:"smallint";s:6:"length";s:1:"6";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"birthmonth";a:6:{s:4:"name";s:10:"birthmonth";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"birthday";a:6:{s:4:"name";s:8:"birthday";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:13:"constellation";a:6:{s:4:"name";s:13:"constellation";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"zodiac";a:6:{s:4:"name";s:6:"zodiac";s:4:"type";s:7:"varchar";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"telephone";a:6:{s:4:"name";s:9:"telephone";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"idcard";a:6:{s:4:"name";s:6:"idcard";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"studentid";a:6:{s:4:"name";s:9:"studentid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"grade";a:6:{s:4:"name";s:5:"grade";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"address";a:6:{s:4:"name";s:7:"address";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"zipcode";a:6:{s:4:"name";s:7:"zipcode";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"nationality";a:6:{s:4:"name";s:11:"nationality";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:14:"resideprovince";a:6:{s:4:"name";s:14:"resideprovince";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"residecity";a:6:{s:4:"name";s:10:"residecity";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"residedist";a:6:{s:4:"name";s:10:"residedist";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:14:"graduateschool";a:6:{s:4:"name";s:14:"graduateschool";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"company";a:6:{s:4:"name";s:7:"company";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"education";a:6:{s:4:"name";s:9:"education";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"occupation";a:6:{s:4:"name";s:10:"occupation";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"position";a:6:{s:4:"name";s:8:"position";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"revenue";a:6:{s:4:"name";s:7:"revenue";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:15:"affectivestatus";a:6:{s:4:"name";s:15:"affectivestatus";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"lookingfor";a:6:{s:4:"name";s:10:"lookingfor";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"bloodtype";a:6:{s:4:"name";s:9:"bloodtype";s:4:"type";s:7:"varchar";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"height";a:6:{s:4:"name";s:6:"height";s:4:"type";s:7:"varchar";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"weight";a:6:{s:4:"name";s:6:"weight";s:4:"type";s:7:"varchar";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"alipay";a:6:{s:4:"name";s:6:"alipay";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"msn";a:6:{s:4:"name";s:3:"msn";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"taobao";a:6:{s:4:"name";s:6:"taobao";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"site";a:6:{s:4:"name";s:4:"site";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"bio";a:6:{s:4:"name";s:3:"bio";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"interest";a:6:{s:4:"name";s:8:"interest";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:5:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"uid";}}s:7:"groupid";a:3:{s:4:"name";s:7:"groupid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"groupid";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:5:"email";a:3:{s:4:"name";s:5:"email";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"email";}}s:6:"mobile";a:3:{s:4:"name";s:6:"mobile";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"mobile";}}}}i:41;a:6:{s:9:"tablename";s:17:"ims_mc_oauth_fans";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:5:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:12:"oauth_openid";a:6:{s:4:"name";s:12:"oauth_openid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"openid";a:6:{s:4:"name";s:6:"openid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:20:"idx_oauthopenid_acid";a:3:{s:4:"name";s:20:"idx_oauthopenid_acid";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:12:"oauth_openid";i:1;s:4:"acid";}}}}i:42;a:6:{s:9:"tablename";s:14:"ims_menu_event";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"keyword";a:6:{s:4:"name";s:7:"keyword";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"picmd5";a:6:{s:4:"name";s:6:"picmd5";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"openid";a:6:{s:4:"name";s:6:"openid";s:4:"type";s:7:"varchar";s:6:"length";s:3:"128";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:6:"picmd5";a:3:{s:4:"name";s:6:"picmd5";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"picmd5";}}}}i:43;a:6:{s:9:"tablename";s:16:"ims_mobilenumber";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:4:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"enabled";a:6:{s:4:"name";s:7:"enabled";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"dateline";a:6:{s:4:"name";s:8:"dateline";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:1;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:44;a:6:{s:9:"tablename";s:11:"ims_modules";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:2:"10";s:6:"fields";a:20:{s:3:"mid";a:6:{s:4:"name";s:3:"mid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"version";a:6:{s:4:"name";s:7:"version";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"ability";a:6:{s:4:"name";s:7:"ability";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"author";a:6:{s:4:"name";s:6:"author";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"settings";a:6:{s:4:"name";s:8:"settings";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"subscribes";a:6:{s:4:"name";s:10:"subscribes";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"handles";a:6:{s:4:"name";s:7:"handles";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"isrulefields";a:6:{s:4:"name";s:12:"isrulefields";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"issystem";a:6:{s:4:"name";s:8:"issystem";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"target";a:6:{s:4:"name";s:6:"target";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"iscard";a:6:{s:4:"name";s:6:"iscard";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:11:"permissions";a:6:{s:4:"name";s:11:"permissions";s:4:"type";s:7:"varchar";s:6:"length";s:4:"5000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:13:"title_initial";a:6:{s:4:"name";s:13:"title_initial";s:4:"type";s:7:"varchar";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:13:"wxapp_support";a:6:{s:4:"name";s:13:"wxapp_support";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"app_support";a:6:{s:4:"name";s:11:"app_support";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"mid";}}s:8:"idx_name";a:3:{s:4:"name";s:8:"idx_name";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:4:"name";}}}}i:45;a:6:{s:9:"tablename";s:20:"ims_modules_bindings";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:11:{s:3:"eid";a:6:{s:4:"name";s:3:"eid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:1;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"entry";a:6:{s:4:"name";s:5:"entry";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"call";a:6:{s:4:"name";s:4:"call";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:2:"do";a:6:{s:4:"name";s:2:"do";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"state";a:6:{s:4:"name";s:5:"state";s:4:"type";s:7:"varchar";s:6:"length";s:3:"200";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"direct";a:6:{s:4:"name";s:6:"direct";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"icon";a:6:{s:4:"name";s:4:"icon";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:7:"tinyint";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"eid";}}s:10:"idx_module";a:3:{s:4:"name";s:10:"idx_module";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"module";}}}}i:46;a:6:{s:9:"tablename";s:18:"ims_modules_plugin";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:3:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:1;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:1;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"main_module";a:6:{s:4:"name";s:11:"main_module";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:1;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:4:"name";a:3:{s:4:"name";s:4:"name";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:4:"name";}}s:11:"main_module";a:3:{s:4:"name";s:11:"main_module";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:11:"main_module";}}}}i:47;a:6:{s:9:"tablename";s:19:"ims_modules_recycle";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:2:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:1;}s:10:"modulename";a:6:{s:4:"name";s:10:"modulename";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:10:"modulename";a:3:{s:4:"name";s:10:"modulename";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:10:"modulename";}}}}i:48;a:6:{s:9:"tablename";s:15:"ims_music_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"300";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"hqurl";a:6:{s:4:"name";s:5:"hqurl";s:4:"type";s:7:"varchar";s:6:"length";s:3:"300";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:49;a:6:{s:9:"tablename";s:14:"ims_news_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:13:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"parent_id";a:6:{s:4:"name";s:9:"parent_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"author";a:6:{s:4:"name";s:6:"author";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"thumb";a:6:{s:4:"name";s:5:"thumb";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:10:"mediumtext";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"incontent";a:6:{s:4:"name";s:9:"incontent";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"media_id";a:6:{s:4:"name";s:8:"media_id";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:50;a:6:{s:9:"tablename";s:18:"ims_profile_fields";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:2:"37";s:6:"fields";a:10:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:5:"field";a:6:{s:4:"name";s:5:"field";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"available";a:6:{s:4:"name";s:9:"available";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:8:"smallint";s:6:"length";s:1:"6";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"required";a:6:{s:4:"name";s:8:"required";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"unchangeable";a:6:{s:4:"name";s:12:"unchangeable";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:14:"showinregister";a:6:{s:4:"name";s:14:"showinregister";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"field_length";a:6:{s:4:"name";s:12:"field_length";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:51;a:6:{s:9:"tablename";s:10:"ims_qrcode";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:16:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"extra";a:6:{s:4:"name";s:5:"extra";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"qrcid";a:6:{s:4:"name";s:5:"qrcid";s:4:"type";s:6:"bigint";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"scene_str";a:6:{s:4:"name";s:9:"scene_str";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"keyword";a:6:{s:4:"name";s:7:"keyword";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"model";a:6:{s:4:"name";s:5:"model";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"ticket";a:6:{s:4:"name";s:6:"ticket";s:4:"type";s:7:"varchar";s:6:"length";s:3:"250";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"256";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"expire";a:6:{s:4:"name";s:6:"expire";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"subnum";a:6:{s:4:"name";s:6:"subnum";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:4:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:9:"idx_qrcid";a:3:{s:4:"name";s:9:"idx_qrcid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"qrcid";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:6:"ticket";a:3:{s:4:"name";s:6:"ticket";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"ticket";}}}}i:52;a:6:{s:9:"tablename";s:15:"ims_qrcode_stat";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:10:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"qid";a:6:{s:4:"name";s:3:"qid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"openid";a:6:{s:4:"name";s:6:"openid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"qrcid";a:6:{s:4:"name";s:5:"qrcid";s:4:"type";s:6:"bigint";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"scene_str";a:6:{s:4:"name";s:9:"scene_str";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:53;a:6:{s:9:"tablename";s:8:"ims_rule";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"9";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:11:"containtype";a:6:{s:4:"name";s:11:"containtype";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:54;a:6:{s:9:"tablename";s:16:"ims_rule_keyword";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:2:"13";s:6:"fields";a:8:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:11:"idx_content";a:3:{s:4:"name";s:11:"idx_content";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"content";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:55;a:6:{s:9:"tablename";s:16:"ims_site_article";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:23:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"kid";a:6:{s:4:"name";s:3:"kid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"iscommend";a:6:{s:4:"name";s:9:"iscommend";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"ishot";a:6:{s:4:"name";s:5:"ishot";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"pcate";a:6:{s:4:"name";s:5:"pcate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"ccate";a:6:{s:4:"name";s:5:"ccate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"template";a:6:{s:4:"name";s:8:"template";s:4:"type";s:7:"varchar";s:6:"length";s:3:"300";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:10:"mediumtext";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"thumb";a:6:{s:4:"name";s:5:"thumb";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"incontent";a:6:{s:4:"name";s:9:"incontent";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"source";a:6:{s:4:"name";s:6:"source";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"author";a:6:{s:4:"name";s:6:"author";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"linkurl";a:6:{s:4:"name";s:7:"linkurl";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"edittime";a:6:{s:4:"name";s:8:"edittime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"click";a:6:{s:4:"name";s:5:"click";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"credit";a:6:{s:4:"name";s:6:"credit";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:13:"idx_iscommend";a:3:{s:4:"name";s:13:"idx_iscommend";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:9:"iscommend";}}s:9:"idx_ishot";a:3:{s:4:"name";s:9:"idx_ishot";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"ishot";}}}}i:56;a:6:{s:9:"tablename";s:17:"ims_site_category";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:15:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"nid";a:6:{s:4:"name";s:3:"nid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"parentid";a:6:{s:4:"name";s:8:"parentid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"enabled";a:6:{s:4:"name";s:7:"enabled";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"icon";a:6:{s:4:"name";s:4:"icon";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"styleid";a:6:{s:4:"name";s:7:"styleid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"linkurl";a:6:{s:4:"name";s:7:"linkurl";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"ishomepage";a:6:{s:4:"name";s:10:"ishomepage";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"icontype";a:6:{s:4:"name";s:8:"icontype";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"css";a:6:{s:4:"name";s:3:"css";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"multiid";a:6:{s:4:"name";s:7:"multiid";s:4:"type";s:3:"int";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:57;a:6:{s:9:"tablename";s:14:"ims_site_multi";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"styleid";a:6:{s:4:"name";s:7:"styleid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"site_info";a:6:{s:4:"name";s:9:"site_info";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"bindhost";a:6:{s:4:"name";s:8:"bindhost";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:8:"bindhost";a:3:{s:4:"name";s:8:"bindhost";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:8:"bindhost";}}}}i:58;a:6:{s:9:"tablename";s:12:"ims_site_nav";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:14:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"multiid";a:6:{s:4:"name";s:7:"multiid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"section";a:6:{s:4:"name";s:7:"section";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:8:"smallint";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"position";a:6:{s:4:"name";s:8:"position";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"icon";a:6:{s:4:"name";s:4:"icon";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"css";a:6:{s:4:"name";s:3:"css";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"categoryid";a:6:{s:4:"name";s:10:"categoryid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:7:"multiid";a:3:{s:4:"name";s:7:"multiid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"multiid";}}}}i:59;a:6:{s:9:"tablename";s:13:"ims_site_page";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:12:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"multiid";a:6:{s:4:"name";s:7:"multiid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"params";a:6:{s:4:"name";s:6:"params";s:4:"type";s:8:"longtext";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"html";a:6:{s:4:"name";s:4:"html";s:4:"type";s:8:"longtext";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"multipage";a:6:{s:4:"name";s:9:"multipage";s:4:"type";s:8:"longtext";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"goodnum";a:6:{s:4:"name";s:7:"goodnum";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:7:"multiid";a:3:{s:4:"name";s:7:"multiid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"multiid";}}}}i:60;a:6:{s:9:"tablename";s:14:"ims_site_slide";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"multiid";a:6:{s:4:"name";s:7:"multiid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"thumb";a:6:{s:4:"name";s:5:"thumb";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:7:"multiid";a:3:{s:4:"name";s:7:"multiid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"multiid";}}}}i:61;a:6:{s:9:"tablename";s:20:"ims_site_store_goods";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:15:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"account_num";a:6:{s:4:"name";s:11:"account_num";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"wxapp_num";a:6:{s:4:"name";s:9:"wxapp_num";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"price";a:6:{s:4:"name";s:5:"price";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"unit";a:6:{s:4:"name";s:4:"unit";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"slide";a:6:{s:4:"name";s:5:"slide";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"category_id";a:6:{s:4:"name";s:11:"category_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:13:"title_initial";a:6:{s:4:"name";s:13:"title_initial";s:4:"type";s:7:"varchar";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"synopsis";a:6:{s:4:"name";s:8:"synopsis";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:4:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:6:"module";a:3:{s:4:"name";s:6:"module";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"module";}}s:11:"category_id";a:3:{s:4:"name";s:11:"category_id";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:11:"category_id";}}s:5:"price";a:3:{s:4:"name";s:5:"price";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:5:"price";}}}}i:62;a:6:{s:9:"tablename";s:20:"ims_site_store_order";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:11:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"orderid";a:6:{s:4:"name";s:7:"orderid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"28";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"goodsid";a:6:{s:4:"name";s:7:"goodsid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"duration";a:6:{s:4:"name";s:8:"duration";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"buyer";a:6:{s:4:"name";s:5:"buyer";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"buyerid";a:6:{s:4:"name";s:7:"buyerid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"amount";a:6:{s:4:"name";s:6:"amount";s:4:"type";s:7:"decimal";s:6:"length";s:4:"10,2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"changeprice";a:6:{s:4:"name";s:11:"changeprice";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:6:"goodid";a:3:{s:4:"name";s:6:"goodid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"goodsid";}}s:7:"buyerid";a:3:{s:4:"name";s:7:"buyerid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"buyerid";}}}}i:63;a:6:{s:9:"tablename";s:15:"ims_site_styles";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:4:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"templateid";a:6:{s:4:"name";s:10:"templateid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:64;a:6:{s:9:"tablename";s:20:"ims_site_styles_vars";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"templateid";a:6:{s:4:"name";s:10:"templateid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"styleid";a:6:{s:4:"name";s:7:"styleid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"variable";a:6:{s:4:"name";s:8:"variable";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:65;a:6:{s:9:"tablename";s:18:"ims_site_templates";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:9:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"version";a:6:{s:4:"name";s:7:"version";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"author";a:6:{s:4:"name";s:6:"author";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"sections";a:6:{s:4:"name";s:8:"sections";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:66;a:6:{s:9:"tablename";s:13:"ims_stat_fans";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"new";a:6:{s:4:"name";s:3:"new";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"cancel";a:6:{s:4:"name";s:6:"cancel";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"cumulate";a:6:{s:4:"name";s:8:"cumulate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"date";a:6:{s:4:"name";s:4:"date";s:4:"type";s:7:"varchar";s:6:"length";s:1:"8";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:7:"uniacid";i:1;s:4:"date";}}}}i:67;a:6:{s:9:"tablename";s:16:"ims_stat_keyword";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"kid";a:6:{s:4:"name";s:3:"kid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"hit";a:6:{s:4:"name";s:3:"hit";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"lastupdate";a:6:{s:4:"name";s:10:"lastupdate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:14:"idx_createtime";a:3:{s:4:"name";s:14:"idx_createtime";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:10:"createtime";}}}}i:68;a:6:{s:9:"tablename";s:20:"ims_stat_msg_history";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:9:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"kid";a:6:{s:4:"name";s:3:"kid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"from_user";a:6:{s:4:"name";s:9:"from_user";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"message";a:6:{s:4:"name";s:7:"message";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:14:"idx_createtime";a:3:{s:4:"name";s:14:"idx_createtime";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:10:"createtime";}}}}i:69;a:6:{s:9:"tablename";s:13:"ims_stat_rule";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"hit";a:6:{s:4:"name";s:3:"hit";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"lastupdate";a:6:{s:4:"name";s:10:"lastupdate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:14:"idx_createtime";a:3:{s:4:"name";s:14:"idx_createtime";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:10:"createtime";}}}}i:70;a:6:{s:9:"tablename";s:14:"ims_stat_visit";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:5:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"count";a:6:{s:4:"name";s:5:"count";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"date";a:6:{s:4:"name";s:4:"date";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:4:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:4:"date";a:3:{s:4:"name";s:4:"date";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:4:"date";}}s:6:"module";a:3:{s:4:"name";s:6:"module";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"module";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:71;a:6:{s:9:"tablename";s:15:"ims_uni_account";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:7:{s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"groupid";a:6:{s:4:"name";s:7:"groupid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"default_acid";a:6:{s:4:"name";s:12:"default_acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"rank";a:6:{s:4:"name";s:4:"rank";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:1;s:6:"signed";b:1;s:9:"increment";b:0;}s:13:"title_initial";a:6:{s:4:"name";s:13:"title_initial";s:4:"type";s:7:"varchar";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:72;a:6:{s:9:"tablename";s:21:"ims_uni_account_group";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:3:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"groupid";a:6:{s:4:"name";s:7:"groupid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:73;a:6:{s:9:"tablename";s:21:"ims_uni_account_menus";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:13:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"menuid";a:6:{s:4:"name";s:6:"menuid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"sex";a:6:{s:4:"name";s:3:"sex";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"group_id";a:6:{s:4:"name";s:8:"group_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:20:"client_platform_type";a:6:{s:4:"name";s:20:"client_platform_type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"area";a:6:{s:4:"name";s:4:"area";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"data";a:6:{s:4:"name";s:4:"data";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"isdeleted";a:6:{s:4:"name";s:9:"isdeleted";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:6:"menuid";a:3:{s:4:"name";s:6:"menuid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"menuid";}}}}i:74;a:6:{s:9:"tablename";s:23:"ims_uni_account_modules";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"6";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"module";a:6:{s:4:"name";s:6:"module";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"enabled";a:6:{s:4:"name";s:7:"enabled";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"settings";a:6:{s:4:"name";s:8:"settings";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"shortcut";a:6:{s:4:"name";s:8:"shortcut";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:10:"idx_module";a:3:{s:4:"name";s:10:"idx_module";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:6:"module";}}s:11:"idx_uniacid";a:3:{s:4:"name";s:11:"idx_uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:75;a:6:{s:9:"tablename";s:21:"ims_uni_account_users";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:5:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"role";a:6:{s:4:"name";s:4:"role";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"rank";a:6:{s:4:"name";s:4:"rank";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:12:"idx_memberid";a:3:{s:4:"name";s:12:"idx_memberid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"uid";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:76;a:6:{s:9:"tablename";s:13:"ims_uni_group";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:9:"owner_uid";a:6:{s:4:"name";s:9:"owner_uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"modules";a:6:{s:4:"name";s:7:"modules";s:4:"type";s:7:"varchar";s:6:"length";s:5:"15000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"templates";a:6:{s:4:"name";s:9:"templates";s:4:"type";s:7:"varchar";s:6:"length";s:4:"5000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:77;a:6:{s:9:"tablename";s:16:"ims_uni_settings";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";N;s:6:"fields";a:22:{s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"passport";a:6:{s:4:"name";s:8:"passport";s:4:"type";s:7:"varchar";s:6:"length";s:3:"200";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"oauth";a:6:{s:4:"name";s:5:"oauth";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"jsauth_acid";a:6:{s:4:"name";s:11:"jsauth_acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:2:"uc";a:6:{s:4:"name";s:2:"uc";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"notify";a:6:{s:4:"name";s:6:"notify";s:4:"type";s:7:"varchar";s:6:"length";s:4:"2000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"creditnames";a:6:{s:4:"name";s:11:"creditnames";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:15:"creditbehaviors";a:6:{s:4:"name";s:15:"creditbehaviors";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"welcome";a:6:{s:4:"name";s:7:"welcome";s:4:"type";s:7:"varchar";s:6:"length";s:2:"60";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"default";a:6:{s:4:"name";s:7:"default";s:4:"type";s:7:"varchar";s:6:"length";s:2:"60";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:15:"default_message";a:6:{s:4:"name";s:15:"default_message";s:4:"type";s:7:"varchar";s:6:"length";s:4:"2000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"payment";a:6:{s:4:"name";s:7:"payment";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"stat";a:6:{s:4:"name";s:4:"stat";s:4:"type";s:7:"varchar";s:6:"length";s:3:"300";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"default_site";a:6:{s:4:"name";s:12:"default_site";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:1;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"sync";a:6:{s:4:"name";s:4:"sync";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"recharge";a:6:{s:4:"name";s:8:"recharge";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"tplnotice";a:6:{s:4:"name";s:9:"tplnotice";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"grouplevel";a:6:{s:4:"name";s:10:"grouplevel";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"mcplugin";a:6:{s:4:"name";s:8:"mcplugin";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:15:"exchange_enable";a:6:{s:4:"name";s:15:"exchange_enable";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:11:"coupon_type";a:6:{s:4:"name";s:11:"coupon_type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"menuset";a:6:{s:4:"name";s:7:"menuset";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:78;a:6:{s:9:"tablename";s:18:"ims_uni_verifycode";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"receiver";a:6:{s:4:"name";s:8:"receiver";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"verifycode";a:6:{s:4:"name";s:10:"verifycode";s:4:"type";s:7:"varchar";s:6:"length";s:1:"6";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"total";a:6:{s:4:"name";s:5:"total";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:79;a:6:{s:9:"tablename";s:17:"ims_userapi_cache";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:4:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"key";a:6:{s:4:"name";s:3:"key";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"lastupdate";a:6:{s:4:"name";s:10:"lastupdate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:80;a:6:{s:9:"tablename";s:17:"ims_userapi_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"7";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"300";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"apiurl";a:6:{s:4:"name";s:6:"apiurl";s:4:"type";s:7:"varchar";s:6:"length";s:3:"300";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"token";a:6:{s:4:"name";s:5:"token";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"default_text";a:6:{s:4:"name";s:12:"default_text";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"cachetime";a:6:{s:4:"name";s:9:"cachetime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:81;a:6:{s:9:"tablename";s:9:"ims_users";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"2";s:6:"fields";a:16:{s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:9:"owner_uid";a:6:{s:4:"name";s:9:"owner_uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"groupid";a:6:{s:4:"name";s:7:"groupid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:15:"founder_groupid";a:6:{s:4:"name";s:15:"founder_groupid";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"username";a:6:{s:4:"name";s:8:"username";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"password";a:6:{s:4:"name";s:8:"password";s:4:"type";s:7:"varchar";s:6:"length";s:3:"200";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"salt";a:6:{s:4:"name";s:4:"salt";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"status";a:6:{s:4:"name";s:6:"status";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"4";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"joindate";a:6:{s:4:"name";s:8:"joindate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"joinip";a:6:{s:4:"name";s:6:"joinip";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"lastvisit";a:6:{s:4:"name";s:9:"lastvisit";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"lastip";a:6:{s:4:"name";s:6:"lastip";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"remark";a:6:{s:4:"name";s:6:"remark";s:4:"type";s:7:"varchar";s:6:"length";s:3:"500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"starttime";a:6:{s:4:"name";s:9:"starttime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"endtime";a:6:{s:4:"name";s:7:"endtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:3:"uid";}}s:8:"username";a:3:{s:4:"name";s:8:"username";s:4:"type";s:6:"unique";s:6:"fields";a:1:{i:0;s:8:"username";}}}}i:82;a:6:{s:9:"tablename";s:22:"ims_users_failed_login";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:5:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:2:"ip";a:6:{s:4:"name";s:2:"ip";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"username";a:6:{s:4:"name";s:8:"username";s:4:"type";s:7:"varchar";s:6:"length";s:2:"32";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"count";a:6:{s:4:"name";s:5:"count";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"lastupdate";a:6:{s:4:"name";s:10:"lastupdate";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:11:"ip_username";a:3:{s:4:"name";s:11:"ip_username";s:4:"type";s:5:"index";s:6:"fields";a:2:{i:0;s:2:"ip";i:1;s:8:"username";}}}}i:83;a:6:{s:9:"tablename";s:23:"ims_users_founder_group";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:7:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"package";a:6:{s:4:"name";s:7:"package";s:4:"type";s:7:"varchar";s:6:"length";s:4:"5000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"maxaccount";a:6:{s:4:"name";s:10:"maxaccount";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:13:"maxsubaccount";a:6:{s:4:"name";s:13:"maxsubaccount";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"timelimit";a:6:{s:4:"name";s:9:"timelimit";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"maxwxapp";a:6:{s:4:"name";s:8:"maxwxapp";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:84;a:6:{s:9:"tablename";s:15:"ims_users_group";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"4";s:6:"fields";a:8:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:9:"owner_uid";a:6:{s:4:"name";s:9:"owner_uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"name";a:6:{s:4:"name";s:4:"name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"package";a:6:{s:4:"name";s:7:"package";s:4:"type";s:7:"varchar";s:6:"length";s:4:"5000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"maxaccount";a:6:{s:4:"name";s:10:"maxaccount";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:13:"maxsubaccount";a:6:{s:4:"name";s:13:"maxsubaccount";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"timelimit";a:6:{s:4:"name";s:9:"timelimit";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"maxwxapp";a:6:{s:4:"name";s:8:"maxwxapp";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:85;a:6:{s:9:"tablename";s:20:"ims_users_invitation";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:5:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:4:"code";a:6:{s:4:"name";s:4:"code";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"fromuid";a:6:{s:4:"name";s:7:"fromuid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"inviteuid";a:6:{s:4:"name";s:9:"inviteuid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:8:"idx_code";a:3:{s:4:"name";s:8:"idx_code";s:4:"type";s:6:"unique";s:6:"fields";a:1:{i:0;s:4:"code";}}}}i:86;a:6:{s:9:"tablename";s:20:"ims_users_permission";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:3:"100";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"permission";a:6:{s:4:"name";s:10:"permission";s:4:"type";s:7:"varchar";s:6:"length";s:5:"10000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:87;a:6:{s:9:"tablename";s:17:"ims_users_profile";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:46:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"edittime";a:6:{s:4:"name";s:8:"edittime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"realname";a:6:{s:4:"name";s:8:"realname";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"nickname";a:6:{s:4:"name";s:8:"nickname";s:4:"type";s:7:"varchar";s:6:"length";s:2:"20";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"avatar";a:6:{s:4:"name";s:6:"avatar";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:2:"qq";a:6:{s:4:"name";s:2:"qq";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"mobile";a:6:{s:4:"name";s:6:"mobile";s:4:"type";s:7:"varchar";s:6:"length";s:2:"11";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"fakeid";a:6:{s:4:"name";s:6:"fakeid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"vip";a:6:{s:4:"name";s:3:"vip";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"gender";a:6:{s:4:"name";s:6:"gender";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"birthyear";a:6:{s:4:"name";s:9:"birthyear";s:4:"type";s:8:"smallint";s:6:"length";s:1:"6";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"birthmonth";a:6:{s:4:"name";s:10:"birthmonth";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"birthday";a:6:{s:4:"name";s:8:"birthday";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:13:"constellation";a:6:{s:4:"name";s:13:"constellation";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"zodiac";a:6:{s:4:"name";s:6:"zodiac";s:4:"type";s:7:"varchar";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"telephone";a:6:{s:4:"name";s:9:"telephone";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"idcard";a:6:{s:4:"name";s:6:"idcard";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"studentid";a:6:{s:4:"name";s:9:"studentid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"grade";a:6:{s:4:"name";s:5:"grade";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"address";a:6:{s:4:"name";s:7:"address";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"zipcode";a:6:{s:4:"name";s:7:"zipcode";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"nationality";a:6:{s:4:"name";s:11:"nationality";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:14:"resideprovince";a:6:{s:4:"name";s:14:"resideprovince";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"residecity";a:6:{s:4:"name";s:10:"residecity";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"residedist";a:6:{s:4:"name";s:10:"residedist";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:14:"graduateschool";a:6:{s:4:"name";s:14:"graduateschool";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"company";a:6:{s:4:"name";s:7:"company";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"education";a:6:{s:4:"name";s:9:"education";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"occupation";a:6:{s:4:"name";s:10:"occupation";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"position";a:6:{s:4:"name";s:8:"position";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"revenue";a:6:{s:4:"name";s:7:"revenue";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:15:"affectivestatus";a:6:{s:4:"name";s:15:"affectivestatus";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"lookingfor";a:6:{s:4:"name";s:10:"lookingfor";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"bloodtype";a:6:{s:4:"name";s:9:"bloodtype";s:4:"type";s:7:"varchar";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"height";a:6:{s:4:"name";s:6:"height";s:4:"type";s:7:"varchar";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"weight";a:6:{s:4:"name";s:6:"weight";s:4:"type";s:7:"varchar";s:6:"length";s:1:"5";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"alipay";a:6:{s:4:"name";s:6:"alipay";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"msn";a:6:{s:4:"name";s:3:"msn";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"email";a:6:{s:4:"name";s:5:"email";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"taobao";a:6:{s:4:"name";s:6:"taobao";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"site";a:6:{s:4:"name";s:4:"site";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"bio";a:6:{s:4:"name";s:3:"bio";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"interest";a:6:{s:4:"name";s:8:"interest";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"workerid";a:6:{s:4:"name";s:8:"workerid";s:4:"type";s:7:"varchar";s:6:"length";s:2:"64";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:1:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}}}i:88;a:6:{s:9:"tablename";s:15:"ims_video_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:6:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"mediaid";a:6:{s:4:"name";s:7:"mediaid";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:89;a:6:{s:9:"tablename";s:15:"ims_voice_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:5:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"mediaid";a:6:{s:4:"name";s:7:"mediaid";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}i:90;a:6:{s:9:"tablename";s:21:"ims_wechat_attachment";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:13:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"acid";a:6:{s:4:"name";s:4:"acid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"uid";a:6:{s:4:"name";s:3:"uid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:8:"filename";a:6:{s:4:"name";s:8:"filename";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"attachment";a:6:{s:4:"name";s:10:"attachment";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"media_id";a:6:{s:4:"name";s:8:"media_id";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"width";a:6:{s:4:"name";s:5:"width";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:6:"height";a:6:{s:4:"name";s:6:"height";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"varchar";s:6:"length";s:2:"15";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"model";a:6:{s:4:"name";s:5:"model";s:4:"type";s:7:"varchar";s:6:"length";s:2:"25";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"tag";a:6:{s:4:"name";s:3:"tag";s:4:"type";s:7:"varchar";s:6:"length";s:4:"5000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}}s:7:"indexes";a:4:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:8:"media_id";a:3:{s:4:"name";s:8:"media_id";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:8:"media_id";}}s:4:"acid";a:3:{s:4:"name";s:4:"acid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:4:"acid";}}}}i:91;a:6:{s:9:"tablename";s:15:"ims_wechat_news";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:13:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:1;s:6:"signed";b:0;s:9:"increment";b:0;}s:9:"attach_id";a:6:{s:4:"name";s:9:"attach_id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:14:"thumb_media_id";a:6:{s:4:"name";s:14:"thumb_media_id";s:4:"type";s:7:"varchar";s:6:"length";s:2:"60";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"thumb_url";a:6:{s:4:"name";s:9:"thumb_url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"author";a:6:{s:4:"name";s:6:"author";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:6:"digest";a:6:{s:4:"name";s:6:"digest";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"content";a:6:{s:4:"name";s:7:"content";s:4:"type";s:4:"text";s:6:"length";s:0:"";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:18:"content_source_url";a:6:{s:4:"name";s:18:"content_source_url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"200";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:14:"show_cover_pic";a:6:{s:4:"name";s:14:"show_cover_pic";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"3";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:3:"url";a:6:{s:4:"name";s:3:"url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"200";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"displayorder";a:6:{s:4:"name";s:12:"displayorder";s:4:"type";s:3:"int";s:6:"length";s:1:"2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:9:"attach_id";a:3:{s:4:"name";s:9:"attach_id";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:9:"attach_id";}}}}i:92;a:6:{s:9:"tablename";s:26:"ims_wxapp_general_analysis";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:11:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"session_cnt";a:6:{s:4:"name";s:11:"session_cnt";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"visit_pv";a:6:{s:4:"name";s:8:"visit_pv";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"visit_uv";a:6:{s:4:"name";s:8:"visit_uv";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"visit_uv_new";a:6:{s:4:"name";s:12:"visit_uv_new";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:4:"type";a:6:{s:4:"name";s:4:"type";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"2";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:12:"stay_time_uv";a:6:{s:4:"name";s:12:"stay_time_uv";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:17:"stay_time_session";a:6:{s:4:"name";s:17:"stay_time_session";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"visit_depth";a:6:{s:4:"name";s:11:"visit_depth";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"ref_date";a:6:{s:4:"name";s:8:"ref_date";s:4:"type";s:7:"varchar";s:6:"length";s:1:"8";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}s:8:"ref_date";a:3:{s:4:"name";s:8:"ref_date";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:8:"ref_date";}}}}i:93;a:6:{s:9:"tablename";s:18:"ims_wxapp_versions";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:10:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:7:"uniacid";a:6:{s:4:"name";s:7:"uniacid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"multiid";a:6:{s:4:"name";s:7:"multiid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:7:"version";a:6:{s:4:"name";s:7:"version";s:4:"type";s:7:"varchar";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:11:"description";a:6:{s:4:"name";s:11:"description";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"modules";a:6:{s:4:"name";s:7:"modules";s:4:"type";s:7:"varchar";s:6:"length";s:4:"1000";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:13:"design_method";a:6:{s:4:"name";s:13:"design_method";s:4:"type";s:7:"tinyint";s:6:"length";s:1:"1";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"template";a:6:{s:4:"name";s:8:"template";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:9:"quickmenu";a:6:{s:4:"name";s:9:"quickmenu";s:4:"type";s:7:"varchar";s:6:"length";s:4:"2500";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:10:"createtime";a:6:{s:4:"name";s:10:"createtime";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:3:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:7:"version";a:3:{s:4:"name";s:7:"version";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"version";}}s:7:"uniacid";a:3:{s:4:"name";s:7:"uniacid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:7:"uniacid";}}}}i:94;a:6:{s:9:"tablename";s:16:"ims_wxcard_reply";s:7:"charset";s:15:"utf8_general_ci";s:6:"engine";s:6:"MyISAM";s:9:"increment";s:1:"1";s:6:"fields";a:9:{s:2:"id";a:6:{s:4:"name";s:2:"id";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:1;}s:3:"rid";a:6:{s:4:"name";s:3:"rid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:5:"title";a:6:{s:4:"name";s:5:"title";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"card_id";a:6:{s:4:"name";s:7:"card_id";s:4:"type";s:7:"varchar";s:6:"length";s:2:"50";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:3:"cid";a:6:{s:4:"name";s:3:"cid";s:4:"type";s:3:"int";s:6:"length";s:2:"10";s:4:"null";b:0;s:6:"signed";b:0;s:9:"increment";b:0;}s:10:"brand_name";a:6:{s:4:"name";s:10:"brand_name";s:4:"type";s:7:"varchar";s:6:"length";s:2:"30";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:8:"logo_url";a:6:{s:4:"name";s:8:"logo_url";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:7:"success";a:6:{s:4:"name";s:7:"success";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}s:5:"error";a:6:{s:4:"name";s:5:"error";s:4:"type";s:7:"varchar";s:6:"length";s:3:"255";s:4:"null";b:0;s:6:"signed";b:1;s:9:"increment";b:0;}}s:7:"indexes";a:2:{s:7:"PRIMARY";a:3:{s:4:"name";s:7:"PRIMARY";s:4:"type";s:7:"primary";s:6:"fields";a:1:{i:0;s:2:"id";}}s:3:"rid";a:3:{s:4:"name";s:3:"rid";s:4:"type";s:5:"index";s:6:"fields";a:1:{i:0;s:3:"rid";}}}}}';

$datas = array();
//公众号相关
$datas[] = "INSERT INTO `ims_account` (`acid`, `uniacid`, `hash`, `type`, `isconnect`) VALUES(1, 1, 'uRr8qvQV', 1, 0);";
$datas[] = "INSERT INTO `ims_account_wechats` (`acid`, `uniacid`, `token`, `encodingaeskey`, `level`, `name`, `account`, `original`, `signature`, `country`, `province`, `city`, `username`, `password`, `lastupdate`, `key`, `secret`, `styleid`, `subscribeurl`) VALUES (1, 1, 'omJNpZEhZeHj1ZxFECKkP48B5VFbk1HP', '', 1, 'we7team', '', '', '', '', '', '', '', '', 0, '', '', 1, '');";
$datas[] = "INSERT INTO `ims_uni_account` (`uniacid`, `groupid`, `name`, `description`, `default_acid`, `title_initial`) VALUES(1, -1, '微擎团队', '一个朝气蓬勃的团队', '1', 'W');";

$datas[] = "INSERT INTO `ims_uni_group` (`id`, `name`, `modules`, `templates`) VALUES(1, '体验套餐服务', 'N;', 'N;');";
$datas[] = <<<EOF
INSERT INTO `ims_uni_settings` (`uniacid`, `passport`, `oauth`, `uc`, `notify`, `creditnames`, `creditbehaviors`, `welcome`, `default`, `default_message`, `payment`, `stat`, `default_site`) VALUES
(1, 'a:3:{s:8:"focusreg";i:0;s:4:"item";s:5:"email";s:4:"type";s:8:"password";}', 'a:2:{s:6:"status";s:1:"0";s:7:"account";s:1:"0";}', 'a:1:{s:6:"status";i:0;}', 'a:1:{s:3:"sms";a:2:{s:7:"balance";i:0;s:9:"signature";s:0:"";}}', 'a:5:{s:7:"credit1";a:2:{s:5:"title";s:6:"积分";s:7:"enabled";i:1;}s:7:"credit2";a:2:{s:5:"title";s:6:"余额";s:7:"enabled";i:1;}s:7:"credit3";a:2:{s:5:"title";s:0:"";s:7:"enabled";i:0;}s:7:"credit4";a:2:{s:5:"title";s:0:"";s:7:"enabled";i:0;}s:7:"credit5";a:2:{s:5:"title";s:0:"";s:7:"enabled";i:0;}}', 'a:2:{s:8:"activity";s:7:"credit1";s:8:"currency";s:7:"credit2";}', '', '', '', 'a:4:{s:6:"credit";a:1:{s:6:"switch";b:0;}s:6:"alipay";a:4:{s:6:"switch";b:0;s:7:"account";s:0:"";s:7:"partner";s:0:"";s:6:"secret";s:0:"";}s:6:"wechat";a:5:{s:6:"switch";b:0;s:7:"account";b:0;s:7:"signkey";s:0:"";s:7:"partner";s:0:"";s:3:"key";s:0:"";}s:8:"delivery";a:1:{s:6:"switch";b:0;}}', '', 1);
EOF;

//微站相关
$datas[] = <<<EOF
INSERT INTO `ims_site_multi` (`id`, `uniacid`, `title`, `styleid`, `site_info`, `status`) VALUES
(1, 1, '微擎团队', 1, '', 1);
EOF;
$datas[] = "INSERT INTO `ims_site_styles` (`id`, `uniacid`, `templateid`, `name`) VALUES(1, 1, 1, '微站默认模板_gC5C');";
$datas[] = "INSERT INTO `ims_site_templates` (`id`, `name`, `title`, `description`, `author`, `url`, `type`) VALUES(1, 'default', '微站默认模板', '由微擎提供默认微站模板套系', '微擎团队', 'http://we7.cc', 1);";


//系统初始化数据
$datas[] = <<<EOF
INSERT INTO `ims_core_settings` (`key`, `value`) VALUES('authmode', 'i:1;'),('close', 'a:2:{s:6:"status";s:1:"0";s:6:"reason";s:0:"";}');
EOF;
$datas[] = <<<EOF
INSERT INTO `ims_core_settings` (`key`, `value`) VALUES ('register', 'a:4:{s:4:"open";i:1;s:6:"verify";i:0;s:4:"code";i:1;s:7:"groupid";i:1;}');
EOF;

$datas[] = "INSERT INTO `ims_mc_groups` (`groupid`, `uniacid`, `title`, `isdefault`) VALUES(1, 1, '默认会员组', 1);";

$datas[] = <<<EOF
INSERT INTO `ims_modules` (`mid`, `name`, `type`, `title`, `version`, `ability`, `description`, `author`, `url`, `settings`, `subscribes`, `handles`, `isrulefields`, `issystem`, `target`, `wxapp_support`, `app_support`) VALUES
(1, 'basic', 'system', '基本文字回复', '1.0', '和您进行简单对话', '一问一答得简单对话. 当访客的对话语句中包含指定关键字, 或对话语句完全等于特定关键字, 或符合某些特定的格式时. 系统自动应答设定好的回复内容.', 'WeEngine Team', 'http://www.we7.cc/', 0, '', '', 1, 1, 0, 1, 2),
(2, 'news', 'system', '基本混合图文回复', '1.0', '为你提供生动的图文资讯', '一问一答得简单对话, 但是回复内容包括图片文字等更生动的媒体内容. 当访客的对话语句中包含指定关键字, 或对话语句完全等于特定关键字, 或符合某些特定的格式时. 系统自动应答设定好的图文回复内容.', 'WeEngine Team', 'http://www.we7.cc/', 0, '', '', 1, 1, 0, 1, 2),
(3, 'music', 'system', '基本音乐回复', '1.0', '提供语音、音乐等音频类回复', '在回复规则中可选择具有语音、音乐等音频类的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝，实现一问一答得简单对话。', 'WeEngine Team', 'http://www.we7.cc/', 0, '', '', 1, 1, 0, 1, 2),
(4, 'userapi', 'system', '自定义接口回复', '1.1', '更方便的第三方接口设置', '自定义接口又称第三方接口，可以让开发者更方便的接入微擎系统，高效的与微信公众平台进行对接整合。', 'WeEngine Team', 'http://www.we7.cc/', 0, '', '', 1, 1, 0, 1, 2),
(5, 'recharge', 'system', '会员中心充值模块', '1.0', '提供会员充值功能', '', 'WeEngine Team', 'http://www.we7.cc/', 0, '', '', 0, 1, 0, 1, 2),
(6, 'custom', 'system', '多客服转接', '1.0.0', '用来接入腾讯的多客服系统', '', 'WeEngine Team', 'http://bbs.we7.cc', 0, 'a:0:{}', 'a:6:{i:0;s:5:"image";i:1;s:5:"voice";i:2;s:5:"video";i:3;s:8:"location";i:4;s:4:"link";i:5;s:4:"text";}', 1, 1, 0, 1, 2),
(7, 'images', 'system', '基本图片回复', '1.0', '提供图片回复', '在回复规则中可选择具有图片的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝图片。', 'WeEngine Team', 'http://www.we7.cc/', 0, '', '', 1, 1, 0, 1, 2),
(8, 'video', 'system', '基本视频回复', '1.0', '提供图片回复', '在回复规则中可选择具有视频的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝视频。', 'WeEngine Team', 'http://www.we7.cc/', 0, '', '', 1, 1, 0, 1, 2),
(9, 'voice', 'system', '基本语音回复', '1.0', '提供语音回复', '在回复规则中可选择具有语音的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝语音。', 'WeEngine Team', 'http://www.we7.cc/', 0, '', '', 1, 1, 0, 1, 2),
(10, 'chats', 'system', '发送客服消息', '1.0', '公众号可以在粉丝最后发送消息的48小时内无限制发送消息', '', 'WeEngine Team', 'http://www.we7.cc/', '0', '', '', '0', '1', '0', 1, 2),
(11, 'wxcard', 'system', '微信卡券回复', '1.0', '微信卡券回复', '微信卡券回复', 'WeEngine Team', 'http://www.we7.cc/', '0', '', '', '1', '1', '0', 1, 2);
EOF;

$datas[] = <<<EOF
INSERT INTO `ims_cover_reply` (`id`, `uniacid`, `multiid`, `rid`, `module`, `do`, `title`, `description`, `thumb`, `url`) VALUES
(1, 1, 0, 7, 'mc', '', '进入个人中心', '', '', './index.php?c=mc&a=home&i=1'),
(2, 1, 1, 8, 'site', '', '进入首页', '', '', './index.php?c=home&i=1&t=1');
EOF;

$datas[] = "INSERT INTO `ims_rule` (`id`, `uniacid`, `name`, `module`, `displayorder`, `status`) VALUES
(1, 0, '城市天气', 'userapi', 255, 1),
(2, 0, '百度百科', 'userapi', 255, 1),
(3, 0, '即时翻译', 'userapi', 255, 1),
(4, 0, '今日老黄历', 'userapi', 255, 1),
(5, 0, '看新闻', 'userapi', 255, 1),
(6, 0, '快递查询', 'userapi', 255, 1),
(7, 1, '个人中心入口设置', 'cover', 0, 1),
(8, 1, '微擎团队入口设置', 'cover', 0, 1);";

$datas[] = "INSERT INTO `ims_rule_keyword` (`id`, `rid`, `uniacid`, `module`, `content`, `type`, `displayorder`, `status`) VALUES
(1, 1, 0, 'userapi', '^.+天气$', 3, 255, 1),
(2, 2, 0, 'userapi', '^百科.+$', 3, 255, 1),
(3, 2, 0, 'userapi', '^定义.+$', 3, 255, 1),
(4, 3, 0, 'userapi', '^@.+$', 3, 255, 1),
(5, 4, 0, 'userapi', '日历', 1, 255, 1),
(6, 4, 0, 'userapi', '万年历', 1, 255, 1),
(7, 4, 0, 'userapi', '黄历', 1, 255, 1),
(8, 4, 0, 'userapi', '几号', 1, 255, 1),
(9, 5, 0, 'userapi', '新闻', 1, 255, 1),
(10, 6, 0, 'userapi', '^(申通|圆通|中通|汇通|韵达|顺丰|EMS) *[a-z0-9]{1,}$', 3, 255, 1),
(11, 7, 1, 'cover', '个人中心', 1, 0, 1),
(12, 8, 1, 'cover', '首页', 1, 0, 1);";

//系统服务回复
$datas[] = <<<EOF
INSERT INTO `ims_userapi_reply` (`id`, `rid`, `description`, `apiurl`, `token`, `default_text`, `cachetime`) VALUES
(1, 1, '"城市名+天气", 如: "北京天气"', 'weather.php', '', '', 0),
(2, 2, '"百科+查询内容" 或 "定义+查询内容", 如: "百科姚明", "定义自行车"', 'baike.php', '', '', 0),
(3, 3, '"@查询内容(中文或英文)"', 'translate.php', '', '', 0),
(4, 4, '"日历", "万年历", "黄历"或"几号"', 'calendar.php', '', '', 0),
(5, 5, '"新闻"', 'news.php', '', '', 0),
(6, 6, '"快递+单号", 如: "申通1200041125"', 'express.php', '', '', 0);
EOF;


$datas[] = "INSERT INTO `ims_profile_fields` (`id`, `field`, `available`, `title`, `description`, `displayorder`, `required`, `unchangeable`, `showinregister`) VALUES
(1, 'realname', 1, '真实姓名', '', 0, 1, 1, 1),
(2, 'nickname', 1, '昵称', '', 1, 1, 0, 1),
(3, 'avatar', 1, '头像', '', 1, 0, 0, 0),
(4, 'qq', 1, 'QQ号', '', 0, 0, 0, 1),
(5, 'mobile', 1, '手机号码', '', 0, 0, 0, 0),
(6, 'vip', 1, 'VIP级别', '', 0, 0, 0, 0),
(7, 'gender', 1, '性别', '', 0, 0, 0, 0),
(8, 'birthyear', 1, '出生生日', '', 0, 0, 0, 0),
(9, 'constellation', 1, '星座', '', 0, 0, 0, 0),
(10, 'zodiac', 1, '生肖', '', 0, 0, 0, 0),
(11, 'telephone', 1, '固定电话', '', 0, 0, 0, 0),
(12, 'idcard', 1, '证件号码', '', 0, 0, 0, 0),
(13, 'studentid', 1, '学号', '', 0, 0, 0, 0),
(14, 'grade', 1, '班级', '', 0, 0, 0, 0),
(15, 'address', 1, '邮寄地址', '', 0, 0, 0, 0),
(16, 'zipcode', 1, '邮编', '', 0, 0, 0, 0),
(17, 'nationality', 1, '国籍', '', 0, 0, 0, 0),
(18, 'resideprovince', 1, '居住地址', '', 0, 0, 0, 0),
(19, 'graduateschool', 1, '毕业学校', '', 0, 0, 0, 0),
(20, 'company', 1, '公司', '', 0, 0, 0, 0),
(21, 'education', 1, '学历', '', 0, 0, 0, 0),
(22, 'occupation', 1, '职业', '', 0, 0, 0, 0),
(23, 'position', 1, '职位', '', 0, 0, 0, 0),
(24, 'revenue', 1, '年收入', '', 0, 0, 0, 0),
(25, 'affectivestatus', 1, '情感状态', '', 0, 0, 0, 0),
(26, 'lookingfor', 1, ' 交友目的', '', 0, 0, 0, 0),
(27, 'bloodtype', 1, '血型', '', 0, 0, 0, 0),
(28, 'height', 1, '身高', '', 0, 0, 0, 0),
(29, 'weight', 1, '体重', '', 0, 0, 0, 0),
(30, 'alipay', 1, '支付宝帐号', '', 0, 0, 0, 0),
(31, 'msn', 1, 'MSN', '', 0, 0, 0, 0),
(32, 'email', 1, '电子邮箱', '', 0, 0, 0, 0),
(33, 'taobao', 1, '阿里旺旺', '', 0, 0, 0, 0),
(34, 'site', 1, '主页', '', 0, 0, 0, 0),
(35, 'bio', 1, '自我介绍', '', 0, 0, 0, 0),
(36, 'interest', 1, '兴趣爱好', '', 0, 0, 0, 0);";

$datas[] = <<<EOF
ALTER TABLE `ims_rule_keyword` ADD INDEX `idx_rid` (`rid`);
ALTER TABLE `ims_rule_keyword` ADD INDEX `idx_uniacid_type_content` (`uniacid`,`type`,`content`);
EOF;

$datas[] = <<<EOF
ALTER TABLE `ims_mc_mapping_fans` ADD UNIQUE(`openid`);
ALTER TABLE `ims_stat_rule` ADD INDEX(`rid`);
EOF;

$datas[] = <<<EOF
DROP TABLE IF EXISTS ims_account;
CREATE TABLE `ims_account` (
  `acid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `hash` varchar(8) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `isconnect` tinyint(4) NOT NULL,
  `isdeleted` tinyint(3) unsigned NOT NULL,
  `endtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`acid`),
  KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO ims_account VALUES 
('1','1','uRr8qvQV','1','0','0','0');


DROP TABLE IF EXISTS ims_account_wechats;
CREATE TABLE `ims_account_wechats` (
  `acid` int(10) unsigned NOT NULL,
  `uniacid` int(10) unsigned NOT NULL,
  `token` varchar(32) NOT NULL,
  `encodingaeskey` varchar(255) NOT NULL,
  `level` tinyint(4) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `account` varchar(30) NOT NULL,
  `original` varchar(50) NOT NULL,
  `signature` varchar(100) NOT NULL,
  `country` varchar(10) NOT NULL,
  `province` varchar(3) NOT NULL,
  `city` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL,
  `key` varchar(50) NOT NULL,
  `secret` varchar(50) NOT NULL,
  `styleid` int(10) unsigned NOT NULL,
  `subscribeurl` varchar(120) NOT NULL,
  `auth_refresh_token` varchar(255) NOT NULL,
  PRIMARY KEY (`acid`),
  KEY `idx_key` (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO ims_account_wechats VALUES 
('1','1','omJNpZEhZeHj1ZxFECKkP48B5VFbk1HP','','1','we7team','','','','','','','','','0','','','1','','');


DROP TABLE IF EXISTS ims_account_wxapp;
CREATE TABLE `ims_account_wxapp` (
  `acid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `token` varchar(32) NOT NULL,
  `encodingaeskey` varchar(43) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `account` varchar(30) NOT NULL,
  `original` varchar(50) NOT NULL,
  `key` varchar(50) NOT NULL,
  `secret` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `appdomain` varchar(255) NOT NULL,
  PRIMARY KEY (`acid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_article_category;
CREATE TABLE `ims_article_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_article_news;
CREATE TABLE `ims_article_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cateid` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL,
  `is_display` tinyint(3) unsigned NOT NULL,
  `is_show_home` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `click` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `cateid` (`cateid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_article_notice;
CREATE TABLE `ims_article_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cateid` int(10) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL,
  `is_display` tinyint(3) unsigned NOT NULL,
  `is_show_home` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `click` int(10) unsigned NOT NULL,
  `style` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `cateid` (`cateid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_article_unread_notice;
CREATE TABLE `ims_article_unread_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `notice_id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `is_new` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `notice_id` (`notice_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_basic_reply;
CREATE TABLE `ims_basic_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_business;
CREATE TABLE `ims_business` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `qq` varchar(15) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `lng` varchar(10) NOT NULL,
  `lat` varchar(10) NOT NULL,
  `industry1` varchar(10) NOT NULL,
  `industry2` varchar(10) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_lat_lng` (`lng`,`lat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_attachment;
CREATE TABLE `ims_core_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `filename` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `module_upload_dir` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_cache;
CREATE TABLE `ims_core_cache` (
  `key` varchar(50) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS ims_core_cron;
CREATE TABLE `ims_core_cron` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cloudid` int(10) unsigned NOT NULL,
  `module` varchar(50) NOT NULL,
  `uniacid` int(10) unsigned NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `lastruntime` int(10) unsigned NOT NULL,
  `nextruntime` int(10) unsigned NOT NULL,
  `weekday` tinyint(3) NOT NULL,
  `day` tinyint(3) NOT NULL,
  `hour` tinyint(3) NOT NULL,
  `minute` varchar(255) NOT NULL,
  `extra` varchar(5000) NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `createtime` (`createtime`),
  KEY `nextruntime` (`nextruntime`),
  KEY `uniacid` (`uniacid`),
  KEY `cloudid` (`cloudid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_cron_record;
CREATE TABLE `ims_core_cron_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `module` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tid` int(10) unsigned NOT NULL,
  `note` varchar(500) NOT NULL,
  `tag` varchar(5000) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `tid` (`tid`),
  KEY `module` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_menu;
CREATE TABLE `ims_core_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL,
  `title` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  `append_title` varchar(30) NOT NULL,
  `append_url` varchar(255) NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL,
  `type` varchar(15) NOT NULL,
  `is_display` tinyint(3) unsigned NOT NULL,
  `is_system` tinyint(3) unsigned NOT NULL,
  `permission_name` varchar(50) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `icon` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_paylog;
CREATE TABLE `ims_core_paylog` (
  `plid` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `acid` int(10) NOT NULL,
  `openid` varchar(40) NOT NULL,
  `uniontid` varchar(64) NOT NULL,
  `tid` varchar(128) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `module` varchar(50) NOT NULL,
  `tag` varchar(2000) NOT NULL,
  `is_usecard` tinyint(3) unsigned NOT NULL,
  `card_type` tinyint(3) unsigned NOT NULL,
  `card_id` varchar(50) NOT NULL,
  `card_fee` decimal(10,2) unsigned NOT NULL,
  `encrypt_code` varchar(100) NOT NULL,
  PRIMARY KEY (`plid`),
  KEY `idx_openid` (`openid`),
  KEY `idx_tid` (`tid`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `uniontid` (`uniontid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_performance;
CREATE TABLE `ims_core_performance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL,
  `runtime` varchar(10) NOT NULL,
  `runurl` varchar(512) NOT NULL,
  `runsql` varchar(512) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_queue;
CREATE TABLE `ims_core_queue` (
  `qid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `message` varchar(2000) NOT NULL,
  `params` varchar(1000) NOT NULL,
  `keyword` varchar(1000) NOT NULL,
  `response` varchar(2000) NOT NULL,
  `module` varchar(50) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`qid`),
  KEY `uniacid` (`uniacid`,`acid`),
  KEY `module` (`module`),
  KEY `dateline` (`dateline`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_refundlog;
CREATE TABLE `ims_core_refundlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `refund_uniontid` varchar(64) NOT NULL,
  `reason` varchar(80) NOT NULL,
  `uniontid` varchar(64) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `refund_uniontid` (`refund_uniontid`),
  KEY `uniontid` (`uniontid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_resource;
CREATE TABLE `ims_core_resource` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `media_id` varchar(100) NOT NULL,
  `trunk` int(10) unsigned NOT NULL,
  `type` varchar(10) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `acid` (`uniacid`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_sendsms_log;
CREATE TABLE `ims_core_sendsms_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `createtime` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_sessions;
CREATE TABLE `ims_core_sessions` (
  `sid` char(32) NOT NULL,
  `uniacid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL,
  `data` varchar(5000) NOT NULL,
  `expiretime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_core_settings;
CREATE TABLE `ims_core_settings` (
  `key` varchar(200) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_coupon_location;
CREATE TABLE `ims_coupon_location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `sid` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `category` varchar(255) NOT NULL,
  `province` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `longitude` varchar(15) NOT NULL,
  `latitude` varchar(15) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `photo_list` varchar(10000) NOT NULL,
  `avg_price` int(10) unsigned NOT NULL,
  `open_time` varchar(50) NOT NULL,
  `recommend` varchar(255) NOT NULL,
  `special` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `offset_type` tinyint(3) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`,`acid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_cover_reply;
CREATE TABLE `ims_cover_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  `module` varchar(30) NOT NULL,
  `do` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO ims_cover_reply VALUES 
('1','1','0','7','mc','','进入个人中心','','','./index.php?c=mc&a=home&i=1'),
('2','1','1','8','site','','进入首页','','','./index.php?c=home&i=1&t=1');


DROP TABLE IF EXISTS ims_custom_reply;
CREATE TABLE `ims_custom_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `start1` int(10) NOT NULL,
  `end1` int(10) NOT NULL,
  `start2` int(10) NOT NULL,
  `end2` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_images_reply;
CREATE TABLE `ims_images_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mediaid` varchar(255) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_cash_record;
CREATE TABLE `ims_mc_cash_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `clerk_id` int(10) unsigned NOT NULL,
  `store_id` int(10) unsigned NOT NULL,
  `clerk_type` tinyint(3) unsigned NOT NULL,
  `fee` decimal(10,2) unsigned NOT NULL,
  `final_fee` decimal(10,2) unsigned NOT NULL,
  `credit1` int(10) unsigned NOT NULL,
  `credit1_fee` decimal(10,2) unsigned NOT NULL,
  `credit2` decimal(10,2) unsigned NOT NULL,
  `cash` decimal(10,2) unsigned NOT NULL,
  `return_cash` decimal(10,2) unsigned NOT NULL,
  `final_cash` decimal(10,2) unsigned NOT NULL,
  `remark` varchar(255) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `trade_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_chats_record;
CREATE TABLE `ims_mc_chats_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `flag` tinyint(3) unsigned NOT NULL,
  `openid` varchar(32) NOT NULL,
  `msgtype` varchar(15) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`,`acid`),
  KEY `openid` (`openid`),
  KEY `createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_credits_recharge;
CREATE TABLE `ims_mc_credits_recharge` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL,
  `tid` varchar(64) NOT NULL,
  `transid` varchar(30) NOT NULL,
  `fee` varchar(10) NOT NULL,
  `type` varchar(15) NOT NULL,
  `tag` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `backtype` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid_uid` (`uniacid`,`uid`),
  KEY `idx_tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_credits_record;
CREATE TABLE `ims_mc_credits_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `uniacid` int(11) NOT NULL,
  `credittype` varchar(10) NOT NULL,
  `num` decimal(10,2) NOT NULL,
  `operator` int(10) unsigned NOT NULL,
  `module` varchar(30) NOT NULL,
  `clerk_id` int(10) unsigned NOT NULL,
  `store_id` int(10) unsigned NOT NULL,
  `clerk_type` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `remark` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_fans_groups;
CREATE TABLE `ims_mc_fans_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `groups` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_fans_tag_mapping;
CREATE TABLE `ims_mc_fans_tag_mapping` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fanid` int(11) unsigned NOT NULL,
  `tagid` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mapping` (`fanid`,`tagid`),
  KEY `fanid_index` (`fanid`),
  KEY `tagid_index` (`tagid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_groups;
CREATE TABLE `ims_mc_groups` (
  `groupid` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `credit` int(10) unsigned NOT NULL,
  `isdefault` tinyint(4) NOT NULL,
  PRIMARY KEY (`groupid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO ims_mc_groups VALUES 
('1','1','默认会员组','0','1');


DROP TABLE IF EXISTS ims_mc_handsel;
CREATE TABLE `ims_mc_handsel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `touid` int(10) unsigned NOT NULL,
  `fromuid` varchar(32) NOT NULL,
  `module` varchar(30) NOT NULL,
  `sign` varchar(100) NOT NULL,
  `action` varchar(20) NOT NULL,
  `credit_value` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`touid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_mapping_fans;
CREATE TABLE `ims_mc_mapping_fans` (
  `fanid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acid` int(10) unsigned NOT NULL,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `groupid` varchar(30) NOT NULL,
  `salt` char(8) NOT NULL,
  `follow` tinyint(1) unsigned NOT NULL,
  `followtime` int(10) unsigned NOT NULL,
  `unfollowtime` int(10) unsigned NOT NULL,
  `tag` varchar(1000) NOT NULL,
  `updatetime` int(10) unsigned DEFAULT NULL,
  `unionid` varchar(64) NOT NULL,
  PRIMARY KEY (`fanid`),
  KEY `acid` (`acid`),
  KEY `uniacid` (`uniacid`),
  KEY `nickname` (`nickname`),
  KEY `updatetime` (`updatetime`),
  KEY `uid` (`uid`),
  KEY `openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_mapping_ucenter;
CREATE TABLE `ims_mc_mapping_ucenter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `centeruid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_mass_record;
CREATE TABLE `ims_mc_mass_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `groupname` varchar(50) NOT NULL,
  `fansnum` int(10) unsigned NOT NULL,
  `msgtype` varchar(10) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `group` int(10) NOT NULL,
  `attach_id` int(10) unsigned NOT NULL,
  `media_id` varchar(100) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `cron_id` int(10) unsigned NOT NULL,
  `sendtime` int(10) unsigned NOT NULL,
  `finalsendtime` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`,`acid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_member_address;
CREATE TABLE `ims_mc_member_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(50) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `province` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `district` varchar(32) NOT NULL,
  `address` varchar(512) NOT NULL,
  `isdefault` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uinacid` (`uniacid`),
  KEY `idx_uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_member_fields;
CREATE TABLE `ims_mc_member_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `fieldid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `displayorder` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_fieldid` (`fieldid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_member_property;
CREATE TABLE `ims_mc_member_property` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `property` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_members;
CREATE TABLE `ims_mc_members` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(8) NOT NULL,
  `groupid` int(11) NOT NULL,
  `credit1` decimal(10,2) unsigned NOT NULL,
  `credit2` decimal(10,2) unsigned NOT NULL,
  `credit3` decimal(10,2) unsigned NOT NULL,
  `credit4` decimal(10,2) unsigned NOT NULL,
  `credit5` decimal(10,2) unsigned NOT NULL,
  `credit6` decimal(10,2) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `realname` varchar(10) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `qq` varchar(15) NOT NULL,
  `vip` tinyint(3) unsigned NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthyear` smallint(6) unsigned NOT NULL,
  `birthmonth` tinyint(3) unsigned NOT NULL,
  `birthday` tinyint(3) unsigned NOT NULL,
  `constellation` varchar(10) NOT NULL,
  `zodiac` varchar(5) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `idcard` varchar(30) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `resideprovince` varchar(30) NOT NULL,
  `residecity` varchar(30) NOT NULL,
  `residedist` varchar(30) NOT NULL,
  `graduateschool` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `education` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `revenue` varchar(10) NOT NULL,
  `affectivestatus` varchar(30) NOT NULL,
  `lookingfor` varchar(255) NOT NULL,
  `bloodtype` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `alipay` varchar(30) NOT NULL,
  `msn` varchar(30) NOT NULL,
  `taobao` varchar(30) NOT NULL,
  `site` varchar(30) NOT NULL,
  `bio` text NOT NULL,
  `interest` text NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `groupid` (`groupid`),
  KEY `uniacid` (`uniacid`),
  KEY `email` (`email`),
  KEY `mobile` (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mc_oauth_fans;
CREATE TABLE `ims_mc_oauth_fans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oauth_openid` varchar(50) NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_oauthopenid_acid` (`oauth_openid`,`acid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_menu_event;
CREATE TABLE `ims_menu_event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `picmd5` varchar(32) NOT NULL,
  `openid` varchar(128) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `picmd5` (`picmd5`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_mobilenumber;
CREATE TABLE `ims_mobilenumber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(10) NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL,
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_modules;
CREATE TABLE `ims_modules` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `version` varchar(15) NOT NULL,
  `ability` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `settings` tinyint(1) NOT NULL,
  `subscribes` varchar(500) NOT NULL,
  `handles` varchar(500) NOT NULL,
  `isrulefields` tinyint(1) NOT NULL,
  `issystem` tinyint(1) unsigned NOT NULL,
  `target` int(10) unsigned NOT NULL,
  `iscard` tinyint(3) unsigned NOT NULL,
  `permissions` varchar(5000) NOT NULL,
  `title_initial` varchar(1) NOT NULL,
  `wxapp_support` tinyint(1) NOT NULL,
  `app_support` tinyint(1) NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `idx_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO ims_modules VALUES 
('1','basic','system','基本文字回复','1.0','和您进行简单对话','一问一答得简单对话. 当访客的对话语句中包含指定关键字, 或对话语句完全等于特定关键字, 或符合某些特定的格式时. 系统自动应答设定好的回复内容.','WeEngine Team','http://www.we7.cc/','0','','','1','1','0','0','','','1','2'),
('2','news','system','基本混合图文回复','1.0','为你提供生动的图文资讯','一问一答得简单对话, 但是回复内容包括图片文字等更生动的媒体内容. 当访客的对话语句中包含指定关键字, 或对话语句完全等于特定关键字, 或符合某些特定的格式时. 系统自动应答设定好的图文回复内容.','WeEngine Team','http://www.we7.cc/','0','','','1','1','0','0','','','1','2'),
('3','music','system','基本音乐回复','1.0','提供语音、音乐等音频类回复','在回复规则中可选择具有语音、音乐等音频类的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝，实现一问一答得简单对话。','WeEngine Team','http://www.we7.cc/','0','','','1','1','0','0','','','1','2'),
('4','userapi','system','自定义接口回复','1.1','更方便的第三方接口设置','自定义接口又称第三方接口，可以让开发者更方便的接入微擎系统，高效的与微信公众平台进行对接整合。','WeEngine Team','http://www.we7.cc/','0','','','1','1','0','0','','','1','2'),
('5','recharge','system','会员中心充值模块','1.0','提供会员充值功能','','WeEngine Team','http://www.we7.cc/','0','','','0','1','0','0','','','1','2'),
('6','custom','system','多客服转接','1.0.0','用来接入腾讯的多客服系统','','WeEngine Team','http://bbs.we7.cc','0','a:0:{}','a:6:{i:0;s:5:\"image\";i:1;s:5:\"voice\";i:2;s:5:\"video\";i:3;s:8:\"location\";i:4;s:4:\"link\";i:5;s:4:\"text\";}','1','1','0','0','','','1','2'),
('7','images','system','基本图片回复','1.0','提供图片回复','在回复规则中可选择具有图片的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝图片。','WeEngine Team','http://www.we7.cc/','0','','','1','1','0','0','','','1','2'),
('8','video','system','基本视频回复','1.0','提供图片回复','在回复规则中可选择具有视频的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝视频。','WeEngine Team','http://www.we7.cc/','0','','','1','1','0','0','','','1','2'),
('9','voice','system','基本语音回复','1.0','提供语音回复','在回复规则中可选择具有语音的回复内容，并根据用户所设置的特定关键字精准的返回给粉丝语音。','WeEngine Team','http://www.we7.cc/','0','','','1','1','0','0','','','1','2'),
('10','chats','system','发送客服消息','1.0','公众号可以在粉丝最后发送消息的48小时内无限制发送消息','','WeEngine Team','http://www.we7.cc/','0','','','0','1','0','0','','','1','2'),
('11','wxcard','system','微信卡券回复','1.0','微信卡券回复','微信卡券回复','WeEngine Team','http://www.we7.cc/','0','','','1','1','0','0','','','1','2');


DROP TABLE IF EXISTS ims_modules_bindings;
CREATE TABLE `ims_modules_bindings` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(100) NOT NULL,
  `entry` varchar(10) NOT NULL,
  `call` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `do` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `direct` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `displayorder` tinyint(255) unsigned NOT NULL,
  PRIMARY KEY (`eid`),
  KEY `idx_module` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_modules_plugin;
CREATE TABLE `ims_modules_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `main_module` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `main_module` (`main_module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_modules_recycle;
CREATE TABLE `ims_modules_recycle` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `modulename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `modulename` (`modulename`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_music_reply;
CREATE TABLE `ims_music_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(300) NOT NULL,
  `hqurl` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_news_reply;
CREATE TABLE `ims_news_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `parent_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(64) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumb` varchar(500) NOT NULL,
  `content` mediumtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `displayorder` int(10) NOT NULL,
  `incontent` tinyint(1) NOT NULL,
  `createtime` int(10) NOT NULL,
  `media_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_profile_fields;
CREATE TABLE `ims_profile_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field` varchar(255) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `displayorder` smallint(6) NOT NULL,
  `required` tinyint(1) NOT NULL,
  `unchangeable` tinyint(1) NOT NULL,
  `showinregister` tinyint(1) NOT NULL,
  `field_length` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

INSERT INTO ims_profile_fields VALUES 
('1','realname','1','真实姓名','','0','1','1','1','0'),
('2','nickname','1','昵称','','1','1','0','1','0'),
('3','avatar','1','头像','','1','0','0','0','0'),
('4','qq','1','QQ号','','0','0','0','1','0'),
('5','mobile','1','手机号码','','0','0','0','0','0'),
('6','vip','1','VIP级别','','0','0','0','0','0'),
('7','gender','1','性别','','0','0','0','0','0'),
('8','birthyear','1','出生生日','','0','0','0','0','0'),
('9','constellation','1','星座','','0','0','0','0','0'),
('10','zodiac','1','生肖','','0','0','0','0','0'),
('11','telephone','1','固定电话','','0','0','0','0','0'),
('12','idcard','1','证件号码','','0','0','0','0','0'),
('13','studentid','1','学号','','0','0','0','0','0'),
('14','grade','1','班级','','0','0','0','0','0'),
('15','address','1','邮寄地址','','0','0','0','0','0'),
('16','zipcode','1','邮编','','0','0','0','0','0'),
('17','nationality','1','国籍','','0','0','0','0','0'),
('18','resideprovince','1','居住地址','','0','0','0','0','0'),
('19','graduateschool','1','毕业学校','','0','0','0','0','0'),
('20','company','1','公司','','0','0','0','0','0'),
('21','education','1','学历','','0','0','0','0','0'),
('22','occupation','1','职业','','0','0','0','0','0'),
('23','position','1','职位','','0','0','0','0','0'),
('24','revenue','1','年收入','','0','0','0','0','0'),
('25','affectivestatus','1','情感状态','','0','0','0','0','0'),
('26','lookingfor','1',' 交友目的','','0','0','0','0','0'),
('27','bloodtype','1','血型','','0','0','0','0','0'),
('28','height','1','身高','','0','0','0','0','0'),
('29','weight','1','体重','','0','0','0','0','0'),
('30','alipay','1','支付宝帐号','','0','0','0','0','0'),
('31','msn','1','MSN','','0','0','0','0','0'),
('32','email','1','电子邮箱','','0','0','0','0','0'),
('33','taobao','1','阿里旺旺','','0','0','0','0','0'),
('34','site','1','主页','','0','0','0','0','0'),
('35','bio','1','自我介绍','','0','0','0','0','0'),
('36','interest','1','兴趣爱好','','0','0','0','0','0');


DROP TABLE IF EXISTS ims_qrcode;
CREATE TABLE `ims_qrcode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `type` varchar(10) NOT NULL,
  `extra` int(10) unsigned NOT NULL,
  `qrcid` bigint(20) NOT NULL,
  `scene_str` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `model` tinyint(1) unsigned NOT NULL,
  `ticket` varchar(250) NOT NULL,
  `url` varchar(256) NOT NULL,
  `expire` int(10) unsigned NOT NULL,
  `subnum` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_qrcid` (`qrcid`),
  KEY `uniacid` (`uniacid`),
  KEY `ticket` (`ticket`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_qrcode_stat;
CREATE TABLE `ims_qrcode_stat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `qid` int(10) unsigned NOT NULL,
  `openid` varchar(50) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `qrcid` bigint(20) unsigned NOT NULL,
  `scene_str` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_rule;
CREATE TABLE `ims_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL,
  `displayorder` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `containtype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO ims_rule VALUES 
('1','0','城市天气','userapi','255','1',''),
('2','0','百度百科','userapi','255','1',''),
('3','0','即时翻译','userapi','255','1',''),
('4','0','今日老黄历','userapi','255','1',''),
('5','0','看新闻','userapi','255','1',''),
('6','0','快递查询','userapi','255','1',''),
('7','1','个人中心入口设置','cover','0','1',''),
('8','1','微擎团队入口设置','cover','0','1','');


DROP TABLE IF EXISTS ims_rule_keyword;
CREATE TABLE `ims_rule_keyword` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `uniacid` int(10) unsigned NOT NULL,
  `module` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_content` (`content`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO ims_rule_keyword VALUES 
('1','1','0','userapi','^.+天气$','3','255','1'),
('2','2','0','userapi','^百科.+$','3','255','1'),
('3','2','0','userapi','^定义.+$','3','255','1'),
('4','3','0','userapi','^@.+$','3','255','1'),
('5','4','0','userapi','日历','1','255','1'),
('6','4','0','userapi','万年历','1','255','1'),
('7','4','0','userapi','黄历','1','255','1'),
('8','4','0','userapi','几号','1','255','1'),
('9','5','0','userapi','新闻','1','255','1'),
('10','6','0','userapi','^(申通|圆通|中通|汇通|韵达|顺丰|EMS) *[a-z0-9]{1,}$','3','255','1'),
('11','7','1','cover','个人中心','1','0','1'),
('12','8','1','cover','首页','1','0','1');


DROP TABLE IF EXISTS ims_site_article;
CREATE TABLE `ims_site_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  `kid` int(10) unsigned NOT NULL,
  `iscommend` tinyint(1) NOT NULL,
  `ishot` tinyint(1) unsigned NOT NULL,
  `pcate` int(10) unsigned NOT NULL,
  `ccate` int(10) unsigned NOT NULL,
  `template` varchar(300) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `incontent` tinyint(1) NOT NULL,
  `source` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `displayorder` int(10) unsigned NOT NULL,
  `linkurl` varchar(500) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `edittime` int(10) NOT NULL,
  `click` int(10) unsigned NOT NULL,
  `type` varchar(10) NOT NULL,
  `credit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_iscommend` (`iscommend`),
  KEY `idx_ishot` (`ishot`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_category;
CREATE TABLE `ims_site_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `nid` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `parentid` int(10) unsigned NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL,
  `icon` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `styleid` int(10) unsigned NOT NULL,
  `linkurl` varchar(500) NOT NULL,
  `ishomepage` tinyint(1) NOT NULL,
  `icontype` tinyint(1) unsigned NOT NULL,
  `css` varchar(500) NOT NULL,
  `multiid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_multi;
CREATE TABLE `ims_site_multi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `title` varchar(30) NOT NULL,
  `styleid` int(10) unsigned NOT NULL,
  `site_info` text NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `bindhost` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `bindhost` (`bindhost`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO ims_site_multi VALUES 
('1','1','微擎团队','1','','1','');


DROP TABLE IF EXISTS ims_site_nav;
CREATE TABLE `ims_site_nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL,
  `section` tinyint(4) NOT NULL,
  `module` varchar(50) NOT NULL,
  `displayorder` smallint(5) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `position` tinyint(4) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(500) NOT NULL,
  `css` varchar(1000) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `categoryid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `multiid` (`multiid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_page;
CREATE TABLE `ims_site_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `params` longtext NOT NULL,
  `html` longtext NOT NULL,
  `multipage` longtext NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `goodnum` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `multiid` (`multiid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_slide;
CREATE TABLE `ims_site_slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `displayorder` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `multiid` (`multiid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_store_create_account;
CREATE TABLE `ims_site_store_create_account` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_store_goods;
CREATE TABLE `ims_site_store_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL,
  `title` varchar(100) NOT NULL,
  `module` varchar(50) NOT NULL,
  `account_num` int(10) NOT NULL,
  `wxapp_num` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `slide` varchar(1000) NOT NULL,
  `category_id` int(10) NOT NULL,
  `title_initial` varchar(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createtime` int(10) NOT NULL,
  `synopsis` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `module_group` int(10) NOT NULL,
  `api_num` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `module` (`module`),
  KEY `category_id` (`category_id`),
  KEY `price` (`price`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_store_order;
CREATE TABLE `ims_site_store_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orderid` varchar(28) NOT NULL,
  `goodsid` int(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `buyerid` int(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `changeprice` tinyint(1) NOT NULL,
  `createtime` int(10) NOT NULL,
  `uniacid` int(10) NOT NULL,
  `endtime` int(15) NOT NULL,
  `wxapp` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `goodid` (`goodsid`),
  KEY `buyerid` (`buyerid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_styles;
CREATE TABLE `ims_site_styles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `templateid` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO ims_site_styles VALUES 
('1','1','1','微站默认模板_gC5C');


DROP TABLE IF EXISTS ims_site_styles_vars;
CREATE TABLE `ims_site_styles_vars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `templateid` int(10) unsigned NOT NULL,
  `styleid` int(10) unsigned NOT NULL,
  `variable` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_site_templates;
CREATE TABLE `ims_site_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `version` varchar(64) NOT NULL,
  `description` varchar(500) NOT NULL,
  `author` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `sections` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO ims_site_templates VALUES 
('1','default','微站默认模板','','由微擎提供默认微站模板套系','微擎团队','http://we7.cc','1','0');


DROP TABLE IF EXISTS ims_stat_fans;
CREATE TABLE `ims_stat_fans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `new` int(10) unsigned NOT NULL,
  `cancel` int(10) unsigned NOT NULL,
  `cumulate` int(10) NOT NULL,
  `date` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`,`date`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO ims_stat_fans VALUES 
('1','1','0','0','0','20171119'),
('2','1','0','0','0','20171118'),
('3','1','0','0','0','20171117'),
('4','1','0','0','0','20171116'),
('5','1','0','0','0','20171115'),
('6','1','0','0','0','20171114'),
('7','1','0','0','0','20171113');


DROP TABLE IF EXISTS ims_stat_keyword;
CREATE TABLE `ims_stat_keyword` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `rid` varchar(10) NOT NULL,
  `kid` int(10) unsigned NOT NULL,
  `hit` int(10) unsigned NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_stat_msg_history;
CREATE TABLE `ims_stat_msg_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  `kid` int(10) unsigned NOT NULL,
  `from_user` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `type` varchar(10) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_stat_rule;
CREATE TABLE `ims_stat_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  `hit` int(10) unsigned NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_createtime` (`createtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_stat_visit;
CREATE TABLE `ims_stat_visit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `module` varchar(100) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `date` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `module` (`module`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_uni_account;
CREATE TABLE `ims_uni_account` (
  `uniacid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `default_acid` int(10) unsigned NOT NULL,
  `rank` int(10) DEFAULT NULL,
  `title_initial` varchar(1) NOT NULL,
  PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO ims_uni_account VALUES 
('1','-1','微擎团队','一个朝气蓬勃的团队','1','','W');


DROP TABLE IF EXISTS ims_uni_account_group;
CREATE TABLE `ims_uni_account_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `groupid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_uni_account_menus;
CREATE TABLE `ims_uni_account_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `menuid` int(10) unsigned NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `title` varchar(30) NOT NULL,
  `sex` tinyint(3) unsigned NOT NULL,
  `group_id` int(10) NOT NULL,
  `client_platform_type` tinyint(3) unsigned NOT NULL,
  `area` varchar(50) NOT NULL,
  `data` text NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `isdeleted` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `menuid` (`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_uni_account_modules;
CREATE TABLE `ims_uni_account_modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `module` varchar(50) NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL,
  `settings` text NOT NULL,
  `shortcut` tinyint(1) unsigned NOT NULL,
  `displayorder` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_module` (`module`),
  KEY `idx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_uni_account_users;
CREATE TABLE `ims_uni_account_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `role` varchar(255) NOT NULL,
  `rank` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_memberid` (`uid`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_uni_group;
CREATE TABLE `ims_uni_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_uid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `modules` varchar(15000) NOT NULL,
  `templates` varchar(5000) NOT NULL,
  `uniacid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO ims_uni_group VALUES 
('1','0','体验套餐服务','N;','N;','0');


DROP TABLE IF EXISTS ims_uni_settings;
CREATE TABLE `ims_uni_settings` (
  `uniacid` int(10) unsigned NOT NULL,
  `passport` varchar(200) NOT NULL,
  `oauth` varchar(100) NOT NULL,
  `jsauth_acid` int(10) unsigned NOT NULL,
  `uc` varchar(500) NOT NULL,
  `notify` varchar(2000) NOT NULL,
  `creditnames` varchar(500) NOT NULL,
  `creditbehaviors` varchar(500) NOT NULL,
  `welcome` varchar(60) NOT NULL,
  `default` varchar(60) NOT NULL,
  `default_message` varchar(2000) NOT NULL,
  `payment` text NOT NULL,
  `stat` varchar(300) NOT NULL,
  `default_site` int(10) unsigned DEFAULT NULL,
  `sync` tinyint(3) unsigned NOT NULL,
  `recharge` varchar(500) NOT NULL,
  `tplnotice` varchar(1000) NOT NULL,
  `grouplevel` tinyint(3) unsigned NOT NULL,
  `mcplugin` varchar(500) NOT NULL,
  `exchange_enable` tinyint(3) unsigned NOT NULL,
  `coupon_type` tinyint(3) unsigned NOT NULL,
  `menuset` text NOT NULL,
  `statistics` varchar(100) NOT NULL,
  `bind_domain` varchar(200) NOT NULL,
  PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO ims_uni_settings VALUES 
('1','a:3:{s:8:\"focusreg\";i:0;s:4:\"item\";s:5:\"email\";s:4:\"type\";s:8:\"password\";}','a:2:{s:6:\"status\";s:1:\"0\";s:7:\"account\";s:1:\"0\";}','0','a:1:{s:6:\"status\";i:0;}','a:1:{s:3:\"sms\";a:2:{s:7:\"balance\";i:0;s:9:\"signature\";s:0:\"\";}}','a:5:{s:7:\"credit1\";a:2:{s:5:\"title\";s:6:\"积分\";s:7:\"enabled\";i:1;}s:7:\"credit2\";a:2:{s:5:\"title\";s:6:\"余额\";s:7:\"enabled\";i:1;}s:7:\"credit3\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}s:7:\"credit4\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}s:7:\"credit5\";a:2:{s:5:\"title\";s:0:\"\";s:7:\"enabled\";i:0;}}','a:2:{s:8:\"activity\";s:7:\"credit1\";s:8:\"currency\";s:7:\"credit2\";}','','','','a:4:{s:6:\"credit\";a:1:{s:6:\"switch\";b:0;}s:6:\"alipay\";a:4:{s:6:\"switch\";b:0;s:7:\"account\";s:0:\"\";s:7:\"partner\";s:0:\"\";s:6:\"secret\";s:0:\"\";}s:6:\"wechat\";a:5:{s:6:\"switch\";b:0;s:7:\"account\";b:0;s:7:\"signkey\";s:0:\"\";s:7:\"partner\";s:0:\"\";s:3:\"key\";s:0:\"\";}s:8:\"delivery\";a:1:{s:6:\"switch\";b:0;}}','','1','0','','','0','','0','0','','','');


DROP TABLE IF EXISTS ims_uni_verifycode;
CREATE TABLE `ims_uni_verifycode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `verifycode` varchar(6) NOT NULL,
  `total` tinyint(3) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_userapi_cache;
CREATE TABLE `ims_userapi_cache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_userapi_reply;
CREATE TABLE `ims_userapi_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `description` varchar(300) NOT NULL,
  `apiurl` varchar(300) NOT NULL,
  `token` varchar(32) NOT NULL,
  `default_text` varchar(100) NOT NULL,
  `cachetime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO ims_userapi_reply VALUES 
('1','1','\"城市名+天气\", 如: \"北京天气\"','weather.php','','','0'),
('2','2','\"百科+查询内容\" 或 \"定义+查询内容\", 如: \"百科姚明\", \"定义自行车\"','baike.php','','','0'),
('3','3','\"@查询内容(中文或英文)\"','translate.php','','','0'),
('4','4','\"日历\", \"万年历\", \"黄历\"或\"几号\"','calendar.php','','','0'),
('5','5','\"新闻\"','news.php','','','0'),
('6','6','\"快递+单号\", 如: \"申通1200041125\"','express.php','','','0');


DROP TABLE IF EXISTS ims_users;
CREATE TABLE `ims_users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_uid` int(10) NOT NULL,
  `groupid` int(10) unsigned NOT NULL,
  `founder_groupid` tinyint(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  `joindate` int(10) unsigned NOT NULL,
  `joinip` varchar(15) NOT NULL,
  `lastvisit` int(10) unsigned NOT NULL,
  `lastip` varchar(15) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `starttime` int(10) unsigned NOT NULL,
  `endtime` int(10) unsigned NOT NULL,
  `register_type` tinyint(3) NOT NULL,
  `openid` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_users_failed_login;
CREATE TABLE `ims_users_failed_login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL,
  `username` varchar(32) NOT NULL,
  `count` tinyint(1) unsigned NOT NULL,
  `lastupdate` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip_username` (`ip`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_users_founder_group;
CREATE TABLE `ims_users_founder_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `package` varchar(5000) NOT NULL,
  `maxaccount` int(10) unsigned NOT NULL,
  `maxsubaccount` int(10) unsigned NOT NULL,
  `timelimit` int(10) unsigned NOT NULL,
  `maxwxapp` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_users_group;
CREATE TABLE `ims_users_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_uid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `package` varchar(5000) NOT NULL,
  `maxaccount` int(10) unsigned NOT NULL,
  `maxsubaccount` int(10) unsigned NOT NULL,
  `timelimit` int(10) unsigned NOT NULL,
  `maxwxapp` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_users_invitation;
CREATE TABLE `ims_users_invitation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(64) NOT NULL,
  `fromuid` int(10) unsigned NOT NULL,
  `inviteuid` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_users_permission;
CREATE TABLE `ims_users_permission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `type` varchar(100) NOT NULL,
  `permission` varchar(10000) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_users_profile;
CREATE TABLE `ims_users_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `edittime` int(10) NOT NULL,
  `realname` varchar(10) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `qq` varchar(15) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `fakeid` varchar(30) NOT NULL,
  `vip` tinyint(3) unsigned NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthyear` smallint(6) unsigned NOT NULL,
  `birthmonth` tinyint(3) unsigned NOT NULL,
  `birthday` tinyint(3) unsigned NOT NULL,
  `constellation` varchar(10) NOT NULL,
  `zodiac` varchar(5) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `idcard` varchar(30) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `resideprovince` varchar(30) NOT NULL,
  `residecity` varchar(30) NOT NULL,
  `residedist` varchar(30) NOT NULL,
  `graduateschool` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `education` varchar(10) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `revenue` varchar(10) NOT NULL,
  `affectivestatus` varchar(30) NOT NULL,
  `lookingfor` varchar(255) NOT NULL,
  `bloodtype` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `alipay` varchar(30) NOT NULL,
  `msn` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `taobao` varchar(30) NOT NULL,
  `site` varchar(30) NOT NULL,
  `bio` text NOT NULL,
  `interest` text NOT NULL,
  `workerid` varchar(64) NOT NULL,
  `is_send_mobile_status` tinyint(3) NOT NULL,
  `send_expire_status` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_video_reply;
CREATE TABLE `ims_video_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mediaid` varchar(255) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_voice_reply;
CREATE TABLE `ims_voice_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `mediaid` varchar(255) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_wechat_attachment;
CREATE TABLE `ims_wechat_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `acid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `filename` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `media_id` varchar(255) NOT NULL,
  `width` int(10) unsigned NOT NULL,
  `height` int(10) unsigned NOT NULL,
  `type` varchar(15) NOT NULL,
  `model` varchar(25) NOT NULL,
  `tag` varchar(5000) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `module_upload_dir` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `media_id` (`media_id`),
  KEY `acid` (`acid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_wechat_news;
CREATE TABLE `ims_wechat_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned DEFAULT NULL,
  `attach_id` int(10) unsigned NOT NULL,
  `thumb_media_id` varchar(60) NOT NULL,
  `thumb_url` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `digest` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_source_url` varchar(200) NOT NULL,
  `show_cover_pic` tinyint(3) unsigned NOT NULL,
  `url` varchar(200) NOT NULL,
  `displayorder` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `attach_id` (`attach_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_wxapp_general_analysis;
CREATE TABLE `ims_wxapp_general_analysis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) NOT NULL,
  `session_cnt` int(10) NOT NULL,
  `visit_pv` int(10) NOT NULL,
  `visit_uv` int(10) NOT NULL,
  `visit_uv_new` int(10) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `stay_time_uv` varchar(10) NOT NULL,
  `stay_time_session` varchar(10) NOT NULL,
  `visit_depth` varchar(10) NOT NULL,
  `ref_date` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `ref_date` (`ref_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_wxapp_versions;
CREATE TABLE `ims_wxapp_versions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(10) unsigned NOT NULL,
  `multiid` int(10) unsigned NOT NULL,
  `version` varchar(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `modules` varchar(1000) NOT NULL,
  `design_method` tinyint(1) NOT NULL,
  `template` int(10) NOT NULL,
  `quickmenu` varchar(2500) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `version` (`version`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS ims_wxcard_reply;
CREATE TABLE `ims_wxcard_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL,
  `title` varchar(30) NOT NULL,
  `card_id` varchar(50) NOT NULL,
  `cid` int(10) unsigned NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `success` varchar(255) NOT NULL,
  `error` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
EOF;

$datas[] = <<<EOF
INSERT INTO `ims_core_settings` (`key`, `value`) VALUES
('copyright', 'a:1:{s:6:"slides";a:3:{i:0;s:58:"https://img.alicdn.com/tps/TB1pfG4IFXXXXc6XXXXXXXXXXXX.jpg";i:1;s:58:"https://img.alicdn.com/tps/TB1sXGYIFXXXXc5XpXXXXXXXXXX.jpg";i:2;s:58:"https://img.alicdn.com/tps/TB1h9xxIFXXXXbKXXXXXXXXXXXX.jpg";}}');
EOF;

$dat = array();
$dat['schemas'] = unserialize($schemas);
$dat['datas'] = $datas;
return $dat;