<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<!--小程序前端下载-->

<ul class="we7-page-tab">
	<li class="<?php  if($do == 'front_download') { ?>active<?php  } ?>"><a
			href="./index.php?c=wxapp&a=front-download&do=front_download&version_id=<?php  echo $version_id;?>">小程序上传</a></li>
	<li class="<?php  if($do == 'domainset') { ?>active<?php  } ?>"><a
			href="./index.php?c=wxapp&a=front-download&do=domainset&version_id=<?php  echo $version_id;?>">小程序域名设置</a></li>
	<li class="<?php  if($do == 'custom') { ?>active<?php  } ?>"><a
			href="./index.php?c=wxapp&a=front-download&do=custom&version_id=<?php  echo $version_id;?>">定制主题<span style="color: red">(beta)</span></a></li>
	<!-- xstart -->
	<?php  if(IMS_FAMILY == 'x') { ?>
		<?php  if(($is_single_module_wxapp)) { ?>
		<li class="<?php  if($do == 'entrychoose') { ?>active<?php  } ?>"><a
				href="./index.php?c=wxapp&a=front-download&do=entrychoose&version_id=<?php  echo $version_id;?>">小程序入口配置</a></li>
		<?php  } ?>
	<?php  } ?>
	<!-- xend -->


</ul>
<?php  if($do == 'entrychoose') { ?>
<div class="panel we7-panel">
	<div class="panel-heading">小程序入口配置</div>
	<div class="panel-body ">
		<table class="table we7-table table-hover" >
			<tr>
				<th>标题</th>
				<th>url</th>
				<th>操作</th>
			</tr>
			<?php  if(is_array($entrys)) { foreach($entrys as $entry) { ?>
			<tr>
				<td><?php  echo $entry['title'];?></td>
				<td><?php  echo $entry['url'];?></td>
				<td><button class="btn btn-primary js-entry-btn" data-eid="<?php  echo $entry['eid'];?>" <?php  if($entry['eid'] == $version_info['entry_id']) { ?> disabled <?php  } ?> >设为入口</button></td>
			</tr>
			<?php  } } ?>
		</table>
	</div>
</div>
<script type="text/javascript">
	var entry_url = "<?php  echo url('wxapp/front-download/set_wxapp_entry', array('version_id'=>$version_id))?>";
	$('.js-entry-btn').click(function(){
		var entry_id = $(this).data('eid');
		$.post(entry_url, {'entry_id':entry_id}, function(data){
			if(data.errno == '0') {
				util.message('设置成功');
			}
			window.location.reload();
		})
	});
</script>
<?php  } ?>
<?php  if($do == 'custom') { ?>
<div ng-controller="code_appjson_ctrl" id="codeappjson" ng-controller="codeAppjsonCtrl">
	<div class="panel we7-panel wxapp-upload-setting">
		<div class="panel-heading">顶部导航栏设置</div>
		<div class="panel-body">
			<div class="we7-flex">
				<div class="view-img"><img src="/web/resource/images/wxapp/setting-01.png" alt=""></div>
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-xs-3 control-label">小程序标题</label>
						<div class="col-xs-9">
							<input type="text" required="required" ng-model="window.navigationBarTitleText"
							       placeholder="小程序标题" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-3 control-label">标题颜色</label>
						<div class="col-xs-9">
							<select ng-model="window.navigationBarTextStyle">
								<option value="white">白</option>
								<option value="black">黑</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-3 control-label">导航背景颜色</label>
						<div class="col-xs-9">
							<input type="text" placeholder="小程序导航背景颜色" ng-model="window.navigationBarBackgroundColor" class="form-control js-color">
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-3 control-label">小程序背景色</label>
						<div class="col-xs-9">
							<input type="text" placeholder="小程序背景色" ng-model="window.backgroundColor" class="form-control js-color">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel we7-panel wxapp-upload-setting">
		<div class="panel-heading">底部导航栏设置</div>
		<div class="panel-body">
			<div class="we7-flex">
				<div class="view-img"><img src="/web/resource/images/wxapp/setting-02.png" alt=""></div>
				<div class="form-horizontal">
					<div class="form-group">
						<label class="col-xs-3 control-label">文字默认颜色</label>
						<div class="col-xs-9">
							<input type="text" placeholder="文字默认颜色" ng-model="tabBar.color" class="form-control js-color">
						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-3 control-label">文字选中颜色</label>
						<div class="col-xs-9">
							<input type="text" placeholder="文字默认颜色" ng-model="tabBar.selectedColor" class="form-control js-color">
						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-3 control-label">底部导航颜色</label>
						<div class="col-xs-9">
							<input type="text" placeholder="底部导航颜色" ng-model="tabBar.backgroundColor" class="form-control js-color">
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-3 control-label">交界线颜色</label>
						<div class="col-xs-9">
							<select ng-model="tabBar.borderStyle">
								<option value="white">白</option>
								<option value="black">黑</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-3 control-label">tab类型</label>
						<div class="col-xs-9">
							<select ng-model="tabBar.isSystemTabBar">
								<option value="1">系统</option>
								<option value="0">开发者自定义</option>
							</select>
						</div>
					</div>
					<table class="table we7-table">
						<col width="75px">
						<col width="75px">
						<col width="90px">
						<col width="60px">
						<col width="60px">
						<col width="100px">
						<tr>
							<th>默认</th>
							<th>选中</th>
							<th>菜单名称</th>
							<th class="text-center">跳转</th>
							<th>操作</th>
						</tr>
						<tbody ng-repeat="tabitem in tabBar.list" ng-init="current = $index">
						<tr >
							<td>
								<div class="icon js-image"  data-index="{{current}}" data-selected="0">
									<img ng-src="{{iconPath(tabitem)}}" />
									<span class="replace ">更换</span>
								</div>
							</td>
							<td>
								<div class="icon js-image" data-index="{{current}}" data-selected="1">
									<img ng-src="{{tabitem.selectedIconPath}}" />
									<span class="replace " >更换</span>
								</div>
							</td>
							<td>
								<input type="text" class="form-control" value="首页" ng-model="tabitem.text">
							</td>
							<td>
								<div>
									<select ng-model="tabitem.pagePath" ng-options="x for x in pages" style="width:100px;"></select>
								</div>
							</td>
							<td>
								<button class="btn btn-primary" ng-click="del($index)">删除</button>
							</td>
						</tr>
						</tbody>
						<tfoot>
							<button class="btn btn-primary" ng-click="add()">添加</button>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<button class="btn btn-primary" ng-click="default()">恢复默认</button>
			<button class="btn btn-primary" ng-click="save()">保存</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	angular.module('we7codeAppjsonApp').value('config',{
		'version_id' : <?php  echo $version_id;?>,
		'default_appjson' : '<?php  echo $default_appjson;?>',
		'save_url' : "<?php  echo url('wxapp/front-download/custom_save')?>",
		'default_url' : "<?php  echo url('wxapp/front-download/custom_default')?>",
		'convert_img_url' : "<?php  echo url('wxapp/front-download/custom_convert_img')?>"
	});
	angular.bootstrap($('#codeappjson'), ['we7codeAppjsonApp']);
</script>
<?php  } ?>
<?php  if($do == 'domainset') { ?>
<div class="panel we7-panel">
	<div class="panel-heading">小程序配置</div>
	<div class="panel-body we7-padding">
		<form
		      action="./index.php?c=wxapp&a=front-download&do=domainset&version_id=<?php  echo $version_id;?>"
		      class="we7-form" enctype="multipart/form-data"
		      method="post">
			<div class="form-group">
				<label class="control-label col-sm-2">设置小程序URL</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="appurl" value="<?php  echo $appurl;?>" placeholder="">
					<label style="color: red;">https://域名/app/index.php</label>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">小程序业务域名校验文件</label>
				<div class="col-sm-10">
					<input type="file" class="form-control"
					       name="file" value="" placeholder="没有可不传"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"></label>
				<div class="col-sm-10">
					<button class="btn btn-primary" type="submit">更新</button>
					<a href="<?php  echo $appurl;?>?i=<?php  echo $uniacid;?>&c=utility&a=visit&do=health" class="btn btn-primary" target="_blank">https访问检测</a>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="wxapp-download-procedure">
	<div class="title color-gray">设置小程序域名说明：</div>
	<div class="step">1.设置链接域名，可以在系统后台设置操作小程序。设置完成后到小程序审核发布里点击下载后，域名更新。</div>
	<div class="step">2.设置后的生效页面（<a href="#" class="color-default">站点管理</a><span class="color-default"><i
			class="wi wi-angle-right"></i></span> <a href="#" class="color-default">站点设置</a>）
	</div>
	<div class="img">
		<img src="/web/resource/images/wxapp/12.png" alt="" class="img-responsive">
	</div>
</div>
<?php  } ?>

<?php  if($do == 'front_download') { ?>
<!--在微信小程序后台提交审核-->
<?php  if($uptype == 'normal') { ?>
<div class="media media-wechat-setting">
	<div class="media-left color-default">
		<span class="wi wi-wxapp-webpack" style="font-size: 55px;"></span>
	</div>
	<div class="media-body media-middle ">
		<h4 class="media-heading color-dark"><?php  echo $wxapp_versions_info['modules'][0]['title'];?></h4>
		<div class="color-gray">版本: v<?php  echo $wxapp_versions_info['version'];?></div>
	</div>
	<div class="media-right media-middle">
		<a href="./index.php?c=wxapp&a=front-download&do=getpackage&uniacid=<?php  echo $_W['uniacid'];?>&version_id=<?php  echo $wxapp_versions_info['id'];?>"
		   class="btn btn-primary">立即下载</a>
	</div>
</div>
<div class="wxapp-download-procedure">
	<div class="title color-gray">小程序前端下载后操作流程说明：</div>
	<div class="step">1.进入微信小程序后台（mp.weixin.qq.com），添加小程序开发者（如已经是管理员或开发者则不需要添加）</div>
	<div class="img">
		<img src="./resource/images/wxapp/01.png" alt=""/>
		<img src="./resource/images/wxapp/02.png" alt=""/>
	</div>
	<div class="step">2.进入小程序后台，点击设置，开发设置，修改服务器域名（设置自己的微擎域名，<span class="color-default">必须是https://</span>）</div>
	<div class="img">
		<img src="./resource/images/wxapp/03.png" alt=""/>
		<img src="./resource/images/wxapp/04.png" alt=""/>
	</div>
	<div class="step">3.下载 微信web开发者工具（本帖会附上工具下载地址），更新到最新版后（切记），点击，填写小程序appid。将之前<span class="color-default">下载解压后的小程序插件上传</span>
	</div>
	<div class="img">
		<img src="./resource/images/wxapp/05.png" alt=""/>
		<img src="./resource/images/wxapp/06.png" alt=""/>
		<img src="./resource/images/wxapp/07.png" alt=""/>
	</div>
	<div class="step">4.点击项目，上传，并设置版本号和项目名称（项目名称自定义）</div>
	<div class="img">
		<img src="./resource/images/wxapp/08.png" alt=""/>
		<img src="./resource/images/wxapp/09.png" alt=""/>
	</div>
	<div class="step">5.进入小程序后台（mp.weixin.qq.com），点击开发管理，提交审核，小程序<span class="color-default">管理员</span>（必须需要管理员扫描，小程序开发者不可）扫描即可
	</div>
	<div class="img">
		<img src="./resource/images/wxapp/10.png" alt=""/>
		<img src="./resource/images/wxapp/11.png" alt=""/>
	</div>
	<div class="step">6.微信官方审核通过即可使用</div>
</div>
<?php  } ?>
<!--end 在微信小程序后台提交审核-->

<!--小程序可自行提交审核-->
<?php  if($uptype=='auto') { ?>
<div class="panel we7-panel wxapp-examine-self we7-margin-top" id="codeupload" ng-controller="code_upload_ctrl">
	<div class="panel-heading">上传小程序代码</div>
	<div class="panel-body">
		<div class="waiting text-center" id="wait_code_token" ng-show="show_wait">
			<div><span class="wi wi-waiting"></span></div>
			<div>正在获取二维码,请耐心等待,等待时间大约</div>
			<div class="second" id="wait_sec">{{wait_sec}}秒</div>
		</div>

		<div class="step we7-flex"  ng-show="!show_wait">
			<div class="one active">
				<span class="wi wi-one"></span>扫描二维码
			</div>
			<div class="arrow">
				<span class="wi wi-step-arrows"></span>
			</div>
			<div class="two" ng-class="{true:'active',false:''}[step>=2]">
				<span class="wi wi-two"></span>填写信息并上传代码
			</div>
			<div class="arrow">
				<span class="wi wi-step-arrows"></span>
			</div>
			<div class="three" ng-class="{true:'active',false:''}[step>=3]">
				<span class="wi wi-three"></span>上传成功
			</div>
		</div>

	</div>
	<div class="panel-footer bg-light-gray" id="readycommit" ng-show="!show_wait">
		<div class="text-center step1" ng-show="show_step1">
			<img alt="" src="{{qrcode_src}}"  class="qr-img" id="qrcode" >
			<div>请先扫描以上二维码，成功后再填写版本信息</div>
		</div>

		<div class="text-center preview"  ng-show="show_preview">
			<img alt="" class="qr-img" id="preview_img" src="{{preview_qrcode}}" >
			<div>微信扫码预览小程序</div>
		</div>

		<form action="" class="we7-form" id="codeform" ng-show="show_step2" ng-init="user_version = <?php  echo $version_info['version'];?>">
			<div class="form-group">
				<label class="control-label col-sm-2">版本号</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="user_version" ng-model="user_version">
					<span class="help-block">
													版本号仅限数字
												</span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">版本描述</label>
				<div class="col-sm-10">
					<textarea rows="3" class="form-control" id="user_desc" ng-model="user_desc"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"></label>
				<div class="col-sm-10">
					<input type="hidden" name="ticket" id="ticket">
					<input type="hidden" id="version_id" value="<?php  echo $version_id;?>">
					<button class="btn btn-primary" type="button" id="preview" ng-disabled="show_preview" ng-click="preview()">预览</button>
					<button class="btn btn-primary" type="button" id="commitcode" ng-click="commit()">上传代码</button>
				</div>
			</div>
		</form>

		<div class="success text-center step3" ng-show="show_step3">
			<div><span class="wi wi-right-sign"></span></div>
			<div class="status-state">上传代码成功，请到微信开发平台小程序后台预览，提交审核应用。</div>
			<div>微信开发平台小程序后台<a href="https://mp.weixin.qq.com/" class="color-default">https://mp.weixin.qq.com/</a></div>
			<div class="btns">
				<a href="https://mp.weixin.qq.com/" target="_blank" class="btn btn-primary">去提交审核</a>
				<a href="/web/index.php?c=wxapp&a=display" class="btn btn-default">小程序首页</a>
			</div>
		</div>
	</div>
</div>
<?php  } ?>
<!--end 小程序可自行提交审核-->

<!--end 小程序域名设置-->
<?php  if($uptype == 'auto') { ?>
<script type="text/javascript">
	angular.module('we7codeuploadApp').value('config',{
		'version_id' : <?php  echo $version_id;?>,
		UUIDURL : "<?php  echo url('wxapp/front-download/code_uuid')?>",
		CODE_GEN_CHECK_URL : "<?php  echo url('wxapp/front-download/code_gen')?>",
		CODE_TOKEN_URL : "<?php  echo url('wxapp/front-download/code_token')?>",
		QRCODEURL : "<?php  echo url('wxapp/front-download/qrcode')?>",
		CHECKSANURL : "<?php  echo url('wxapp/front-download/checkscan')?>",
		PREVIEWURL : "<?php  echo url('wxapp/front-download/preview')?>",
		COMMITURL : "<?php  echo url('wxapp/front-download/commitcode')?>"
	});
	angular.bootstrap($('#codeupload'), ['we7codeuploadApp']);
</script>

<?php  } ?>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>