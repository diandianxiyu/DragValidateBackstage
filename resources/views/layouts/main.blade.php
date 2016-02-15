
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>TouchCapthca | CoderFix.cn</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset("assets/global/plugins/font-awesome/css/font-awesome.min.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/global/plugins/simple-line-icons/simple-line-icons.min.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/global/plugins/bootstrap/css/bootstrap.min.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/global/plugins/uniform/css/uniform.default.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css")  }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset("assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/global/plugins/fullcalendar/fullcalendar.min.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/global/plugins/jqvmap/jqvmap/jqvmap.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/global/plugins/morris/morris.css")  }}" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="{{ asset("assets/admin/pages/css/tasks.css")  }}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="{{ asset("assets/global/css/components-md.css")  }}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/global/css/plugins-md.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/admin/layout4/css/layout.css")  }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("assets/admin/layout4/css/themes/light.css")  }}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{ asset("assets/admin/layout4/css/custom.css")  }}" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="{{ asset("assets/global/img/logo-default.png")}}" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">


                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						管理员 </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="../../assets/admin/layout4/img/avatar9.jpg"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">

                            </li>
                            <li>
                                <a href="/auth/logout">
                                    <i class="icon-key"></i> 登出 </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->

                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>

<div class="page-container">


    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="start <?php  if($func == "index"){ echo "active"; } ?> ">
                    <a href="/backend/index">
                        <i class="icon-home"></i>
                        <span class="title">首页</span>
                    </a>
                </li>

                <li class="tooltips <?php  if($func == "key"){ echo "active"; } ?>" data-container="body" data-placement="right" data-html="true" data-original-title="">
                    <a href="/backend/key" >
                        <i class="fa fa-key"></i>
					<span class="title">
					密钥管理 </span>
                    </a>
                </li>
                <li class="tooltips <?php  if($func == "pic"){ echo "active"; } ?>" data-container="body" data-placement="right" data-html="true" data-original-title="">
                    <a href="/backend/pic" >
                        <i class="fa fa-picture-o"></i>
					<span class="title">
					验证图片 </span>
                    </a>
                </li>
                <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="">
                    <a href="angularjs" >
                        <i class="fa fa-signal"></i>
					<span class="title">
					数据统计 </span>
                    </a>
                </li>
                <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="">
                    <a href="angularjs" ">
                        <i class="fa fa-users"></i>
					<span class="title">
					管理员账户 </span>
                    </a>
                </li>

            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
@yield('content')

</div>


<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2016 &copy; CoderFix.cn.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
</body>
<!-- END BODY -->
</html>