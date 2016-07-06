<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html>
  <!--<![endif]-->
  <!-- BEGIN HEAD -->
  <head>
    <meta charset="utf-8" />
    <title>秀管家</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>/css/style-default.css" rel="stylesheet" id="style_color" />

    <link href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/uniform/css/uniform.default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (C("WEB_RES_ROOT")); ?>/assets/chosen-bootstrap/chosen/chosen.css" />

  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class="fixed-top">
    <!-- BEGIN HEADER -->
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="navbar-inner">
		<div class="container-fluid">
			<!--BEGIN SIDEBAR TOGGLE-->
			<div class="sidebar-toggle-box hidden-phone">
				<div class="icon-reorder tooltips" data-placement="right"
					data-original-title="Toggle Navigation"></div>
			</div>
			<!--END SIDEBAR TOGGLE-->
			<!-- BEGIN LOGO -->
			<!--
			<a class="brand" href="index.html">秀管家</a>
			-->
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a class="btn btn-navbar collapsed" id="main_menu_trigger"
				data-toggle="collapse" data-target=".nav-collapse"> <span
				class="icon-bar"></span> <span class="icon-bar"></span> <span
				class="icon-bar"></span> <span class="arrow"></span>
			</a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<div class="top-nav ">
				<ul class="nav pull-right top-menu">
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">
						<span class="username"><?php echo ($_SESSION['admin']['admin_name']); ?></span>
						<b class="caret"></b>
					</a>
						<ul class="dropdown-menu extended logout">
							<li><a href="<?php echo (C("ACTION_BASE_DIR")); ?>/admin/adminLogout"><i class="icon-key"></i>退出</a></li>
						</ul></li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->
			</div>
		</div>
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div class="sidebar-scroll">
	<div id="sidebar" class="nav-collapse collapse">
		<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
		<div class="navbar-inverse">
			<form class="navbar-search visible-phone">
				<input type="text" class="search-query" placeholder="Search" />
			</form>
		</div>
		<!-- END RESPONSIVE QUICK SEARCH FORM -->
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="sidebar-menu">
			<?php if(stripos($action_list,'Cash') !== false): ?><li class="sub-menu <?php echo stripos($base_url , 'Home') !== false ? active: ''; ?> ">
					<a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>"> <i 	class="icon icon-tasks"></i> <span>收银</span>
					</a>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'OpenCard') !== false): ?><li class="sub-menu <?php echo stripos($base_url , 'toMemberAdd') !== false ? active: ''; ?> ">
					<a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/member/toMemberAdd"> <i class="icon icon-user"> </i> <span>开卡</span>
					</a>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'Booking') !== false): ?><li class="sub-menu <?php echo stripos($base_url , 'toBookList') !== false ? active: ''; ?> ">
          <a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/member/toBookList"> <i class="icon icon-headphones"> </i> <span>预约</span>
          </a>
        </li><?php endif; ?>
			<?php if(stripos($action_list,'OrderPending') !== false): ?><li class="sub-menu <?php echo stripos($base_url , 'orderPendingList') !== false ? active: ''; ?>">
					<a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/order/orderPendingList"> <i class="icon icon-list-alt"></i> <span>挂单</span>
					</a>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'TodayAllOrder') !== false): ?><li class="sub-menu <?php echo stripos($base_url , 'orderTodayAllList') != false ? active: ''; ?>">
					<a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/order/orderTodayAllList"> <i class="icon icon-list"></i> <span>今日水单</span>
					</a>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'DayMoney') !== false): ?><li class="sub-menu <?php echo stripos($base_url , 'dayMoneyList') !== false ? active: ''; ?>">
          <a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/order/dayMoneyList"> <i class="icon icon-indent-left"></i> <span>日常收支</span>
          </a>
        </li><?php endif; ?>
			<?php if(stripos($action_list,'MemberManagement') !== false): ?><li class="sub-menu <?php echo stripos($base_url , 'memberList') !== false ? 'open active' : ''; ?>">
					<a href="javascript:;" class="">
						<i class="icon icon-check"></i> <span>会员管理</span> <span class="arrow"></span>
					</a>
					<ul class="sub" <?php echo stripos($base_url , 'memberList') !== false ? 'style="display: block;"' : ''; ?> >
						<?php if(stripos($action_list,'MemberList') !== false): ?><li><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/member/memberList">会员列表</a></li><?php endif; ?>
					</ul>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'BussinessRecord') !== false): ?><li class="sub-menu <?php echo (stripos($base_url,'orderServiceList') !== false or stripos($base_url , 'orderCourseList') !== false or stripos($base_url , 'orderChargeList') !== false) ? 'open active' : '' ?>">
					<a href="javascript:;" class="">
						<i class="icon-calendar"></i> <span>营业记录</span> <span class="arrow"></span>
					</a>
					<ul class="sub" <?php echo (stripos($base_url ,'orderServiceList') !== false or stripos($base_url ,'orderCourseList') !== false or stripos($base_url ,'orderChargeList') !== false) ? 'style="display: block;"' : ''; ?>>
						<?php if(stripos($action_list,'ServiceConsumerRecor') !== false): ?><li class="<?php echo stripos($base_url ,'orderServiceList') !== false ? active: ''; ?>"><a href="<?php echo (C("ACTION_BASE_DIR")); ?>/order/orderServiceList">项目消费记录</a></li><?php endif; ?>
						<?php if(stripos($action_list,'CourseConsumerRecord') !== false): ?><li class="<?php echo stripos($base_url ,'orderCourseList') !== false ? active: ''; ?>" ><a href="<?php echo (C("ACTION_BASE_DIR")); ?>/order/orderCourseList">订购套餐记录</a></li><?php endif; ?>
						<?php if(stripos($action_list,'ChargeConsumerRecord') !== false): ?><li class="<?php echo stripos($base_url ,'orderChargeList') !== false ? active: ''; ?>" ><a href="<?php echo (C("ACTION_BASE_DIR")); ?>/order/orderChargeList">充值开卡记录</a></li><?php endif; ?>
					</ul>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'StatisticReport') !== false): ?><li class="sub-menu <?php echo (stripos($base_url,'serviceReport') !== false or stripos($base_url , 'courseReport') !== false or stripos($base_url , 'chargeReport') !== false) ? 'open active' : '' ?>">
					<a href="javascript:;" class="">
						<i class="icon-table"></i> <span>统计报表</span> <span class="arrow"></span>
					</a>
					<ul class="sub" <?php echo (stripos($base_url ,'serviceReport') !== false or stripos($base_url ,'courseReport') !== false or stripos($base_url ,'chargeReport') !== false) ? 'style="display: block;"' : ''; ?>>
						<?php if(stripos($action_list,'ServiceConsumerRepor') !== false): ?><li class="<?php echo stripos($base_url ,'serviceReport') !== false ? active: ''; ?>" ><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/report/serviceReport">项目消费报表</a></li><?php endif; ?>
						<?php if(stripos($action_list,'CourseConsumerReport') !== false): ?><li class="<?php echo stripos($base_url ,'courseReport') !== false ? active: ''; ?>" ><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/report/courseReport">套餐订购报表</a></li><?php endif; ?>
						<?php if(stripos($action_list,'ChargeConsumerReport') !== false): ?><li class="<?php echo stripos($base_url ,'chargeReport') !== false ? active: ''; ?>" ><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/report/chargeReport">会员卡充值报表</a></li><?php endif; ?>
					</ul>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'OpenShopSetting') !== false): ?><li class="sub-menu <?php echo (stripos($base_url,'employeeList') !== false or stripos($base_url,'toEmployeePositionList') !== false or stripos($base_url,'toEmployeeAdd') !== false or stripos($base_url , 'memberCardTypeList') !== false or stripos($base_url , 'serviceList') !== false or stripos($base_url , 'courseList') !== false or stripos($base_url , 'shopList') !== false) ? 'open active' : '' ?>">
					<a href="javascript:;" class="">
						<i class="icon-wrench"></i> <span>开店设置</span> <span class="arrow"></span>
					</a>
					<ul class="sub" <?php echo (stripos($base_url,'employeeList') !== false or stripos($base_url,'toEmployeePositionList') !== false or stripos($base_url,'toEmployeeAdd') !== false or stripos($base_url , 'memberCardTypeList') !== false or stripos($base_url , 'serviceList') !== false or stripos($base_url , 'courseList') !== false or stripos($base_url , 'shopList') !== false) ? 'style="display: block;"' : '' ?>>
						<?php if(stripos($action_list,'EmployeeAdd') !== false): ?><li class="<?php echo (stripos($base_url ,'employeeList') !== false or stripos($base_url,'toEmployeePositionList') !== false or stripos($base_url,'toEmployeeAdd') !== false ) ? active: ''; ?>" ><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/employee/employeeList">添加员工</a></li><?php endif; ?>
						<?php if(stripos($action_list,'MemberCardTypeAdd') !== false): ?><li class="<?php echo stripos($base_url ,'memberCardTypeList') !== false ? active: ''; ?>" ><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/member/memberCardTypeList">添加会员卡</a></li><?php endif; ?>
						<?php if(stripos($action_list,'ServiceAdd') !== false): ?><li class="<?php echo stripos($base_url ,'serviceList') !== false ? active: ''; ?>" ><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/service/serviceList">添加服务项目</a></li><?php endif; ?>
						<?php if(stripos($action_list,'courseList') !== false): ?><li class="<?php echo stripos($base_url ,'serviceList') !== false ? active: ''; ?>" ><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/course/courseList">添加套餐</a></li><?php endif; ?>
						<?php if(stripos($action_list,'ShopInforUpdate') !== false): ?><li class="<?php echo stripos($base_url ,'shopList') !== false ? active: ''; ?>" ><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/shop/shopList">店铺信息修改</a></li><?php endif; ?>
					</ul>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'CommissionSetting') !== false): ?><li class="sub-menu <?php echo (stripos($base_url,'serviceCommisionList') !== false or stripos($base_url , 'memberCardTypeCommisionList') !== false or stripos($base_url , 'courseCommisionList') !== false) ? 'open active' : '' ?> ">
					<a href="javascript:;" class="">
						<i class="icon-credit-card"></i> <span>提成设置</span> <span class="arrow"></span>
					</a>
					<ul class="sub" <?php echo (stripos($base_url,'serviceCommisionList') !== false or stripos($base_url , 'memberCardTypeCommisionList') !== false or stripos($base_url , 'courseCommisionList') !== false) ? 'display: block;' : '' ?> >
						<?php if(stripos($action_list,'ServiceCommission') !== false): ?><li class="<?php echo stripos($base_url ,'serviceCommisionList') !== false ? active: ''; ?>"><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/service/serviceCommisionList">服务项目提成设置</a></li><?php endif; ?>
						<?php if(stripos($action_list,'ChargeCommission') !== false): ?><li class="<?php echo stripos($base_url ,'memberCardTypeCommisionList') !== false ? active: ''; ?>"><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/member/memberCardTypeCommisionList">开卡充值提成设置</a></li><?php endif; ?>
						<?php if(stripos($action_list,'CourseCommission') !== false): ?><li class="<?php echo stripos($base_url ,'courseCommisionList') !== false ? active: ''; ?>"><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/course/courseCommisionList">套餐订购提成设置</a></li><?php endif; ?>
					</ul>
				</li><?php endif; ?>
			<?php if(stripos($action_list,'SystemSetting') !== false): ?><li class="sub-menu <?php echo (stripos($base_url ,'adminList') !== false or stripos($base_url ,'systemLogList') !== false or stripos($base_url,'toAdminUpdate') !== false or stripos($base_url,'toAdminAdd') !== false) ? 'open active' : ''; ?> ">
				<a href="javascript:;" class="">
					<i class="icon-save"></i> <span>系统设置</span> <span class="arrow"></span>
				</a>
				<ul class="sub" <?php echo (stripos($base_url ,'adminList') !== false or stripos($base_url ,'systemLogList') !== false or stripos($base_url,"toAdminUpdate") !== false or stripos($base_url,'toAdminAdd') !== false) ? 'style="display: block;"' : ''; ?> >
					<?php if(stripos($action_list,'AdminSetting') !== false): ?><li class="<?php echo (stripos($base_url ,'adminList') !== false or stripos($base_url,'toAdminUpdate') !== false or stripos($base_url,'toAdminAdd') !== false ) ? active: ''; ?>"><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/admin/adminList">管理员设置</a></li><?php endif; ?>
					<?php if(stripos($action_list,'SystemLog') !== false): ?><li class="<?php echo (stripos($base_url ,'systemLogList') !== false) ? active: ''; ?>"><a class="" href="<?php echo (C("ACTION_BASE_DIR")); ?>/systemLog/systemLogList">系统日志</a></li><?php endif; ?>
				</ul>
			</li><?php endif; ?>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
          <!-- BEGIN PAGE HEADER-->
          <div class="row-fluid">
            <div class="span12">
              <!-- BEGIN PAGE TITLE & BREADCRUMB-->
              <h3 class="page-title">批量导入员工资料</h3>
              <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
          </div>
          <!-- END PAGE HEADER-->
          <!-- BEGIN ADVANCED TABLE widget-->
          <div class="row-fluid">
            <div class="span12">
              <!-- BEGIN EXAMPLE TABLE widget-->
              <div class="widget">
                <div class="widget-body">
                  <!--BEGIN TABS-->
                  <div class="tabbable custom-tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1_1" data-toggle="tab">批量导入员工资料</a></li>
                        <li><a href="#tab_1_2" data-toggle="tab">下载模板文件导入</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab_1_1">
                        <form action="<?php echo (C("ACTION_BASE_DIR")); ?>/employee/employeeListAdd/" class="form-horizontal" id="employee_list_form" method="post" enctype="multipart/form-data" onSubmit="return false;">
                          <div class="row-fluid">
                            <div class="span12">
                              <table class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>员工姓名</th>
                                    <th>职位</th>
                                    <th>性别</th>
                                    <th>手机号码</th>
                                    <th>身份证号码</th>
                                  </tr>
                                </thead>
                                <tbody id="tbody">
                                  <tr>
                                    <td>
                                      <input type="text" placeholder="员工姓名" class="span12" name="employee_name[]" />
                                    </td>
                                    <td>
                                      <select data-placeholder="请选择级别" class="span12" name="employee_position_id[]">
                                        <option value="">请选择级别</option>
                                        <?php if(is_array($employeePositionBigList)): $i = 0; $__LIST__ = $employeePositionBigList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$employee_postion_big): $mod = ($i % 2 );++$i;?><optgroup label="<?php echo ($employee_postion_big["employee_position_big_name"]); ?>">
                                            <?php $employee_postion_big_id = $employee_postion_big["employee_position_big_id"]; ?>
                                            <?php if(is_array($employeePositionList)): $i = 0; $__LIST__ = $employeePositionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$employee_postion): $mod = ($i % 2 );++$i; $employee_postion_sub_id = $employee_postion["employee_position_big_id"]; ?>
                                              <?php if($employee_postion_big_id == $employee_postion_sub_id): ?><option value="<?php echo ($employee_postion["employee_position_id"]); ?>"><?php echo ($employee_postion["employee_position_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                          </optgroup><?php endforeach; endif; else: echo "" ;endif; ?>
                                      </select>
                                    </td>
                                    <td>
                                      <select data-placeholder="请选择级别" class="span12" name="employee_sex[]">
                                        <option value="0">男</option>
                                        <option value="1">女</option>
                                      </select>
                                    </td>
                                    <td>
                                      <input type="text" placeholder="员工电话" class="span12" name="employee_tel[]" />
                                    </td>
                                    <td>
                                      <input type="text" placeholder="员工身份证号码" class="span12" name="employee_id_card[]" />
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="5">
                                      <center>
                                        <button class="btn" onClick="addRow(this)"><i class="icon-plus"></i></button>
                                        <button class="btn" onClick="delRow(this)"><i class="icon-minus"></i></button>
                                      </center>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="row-fluid">
                            <div class="span6">
                              <center>
                                <button class="btn btn-large btn-success" type="button" onClick="form_employee_list_submit(this);">提交</button>
                                <button class="btn btn-large" type="button" onClick="javascript:history.go(-1)">返回</button>
                              </center>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane" id="tab_1_2">
                        <form action="<?php echo (C("ACTION_BASE_DIR")); ?>/employee/employeeFileAdd/" class="form-horizontal" id="employee_list_file" method="post" enctype="multipart/form-data">
                          <div class="control-group">
                            <label class="control-label">下载模板文件</label>
                            <div class="controls">
                              <a href="<?php echo (C("ACTION_BASE_DIR")); ?>/fileProcess/filedown/filename/staff.csv">员工资料数据导入模板.csv</a>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label">上传文件</label>
                            <div class="controls">
                              <input type="file" class="default span5" name="employee_list_add_file" >
                            </div>
                          </div>
                          <div class="row-fluid">
                            <div class="span6">
                              <center>
                                <button class="btn btn-large btn-success" type="button" onClick="form_employee_list_file_submit(this);">提交</button>
                                <button class="btn btn-large" type="button" onClick="javascript:history.go(-1)">返回</button>
                              </center>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END EXAMPLE TABLE widget-->
            </div>
          </div>

          <!-- END ADVANCED TABLE widget-->
        </div>
        <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
    </div>
    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->
    <div id="footer">
</div>
<div class="body_overlay">
  <table>
    <tr>
      <td>
        <img src="<?php echo (C("WEB_RES_ROOT")); ?>/img/loading_yellow.gif">
      </td>
    </tr>
  </table>
</div>
    <!-- END FOOTER -->

    <!-- BEGIN JAVASCRIPTS -->
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery.blockui.js"></script>
    <script type="text/javascript" src="<?php echo (C("WEB_RES_ROOT")); ?>/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ie8 fixes -->
    <!--[if lt IE 9]>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/excanvas.js"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/respond.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo (C("WEB_RES_ROOT")); ?>/assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("WEB_RES_ROOT")); ?>/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("WEB_RES_ROOT")); ?>/assets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo (C("WEB_RES_ROOT")); ?>/assets/data-tables/DT_bootstrap.js"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery.scrollTo.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/common-scripts.js"></script>

    <!--script for this page only-->
    <script type="text/javascript" charset="utf-8">
      var action_base_dir =   "<?php echo (C("ACTION_BASE_DIR")); ?>";
    </script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/jquery.form.min.js"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/layer/layer.js"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/customer/common.js"></script>
    <script src="<?php echo (C("WEB_RES_ROOT")); ?>/js/customer/employee.js"></script>
    <!-- END JAVASCRIPTS -->
  </body>
  <!-- END BODY -->
</html>