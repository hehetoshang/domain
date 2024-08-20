
<!--                                                               
                                                                                     人民有信仰 民族有希望 国家有力量
                                                                          以实现中国特色社会主义共同理想为目标 党的十八大曾首次以  
                                                                                  +----------------------------------- +
                                                                                  |  =======社会主义核心价值观=======  |    
                                                                                  +----------------------------------- +
                                                                                  | 富强      民主      文明      和谐 |
                                                                                  +----------------------------------- +
                                                                                  | 自由      平等       公正     法治 |                                                                  
                                                                                  +----------------------------------- +
                                                                                  | 爱国      敬业       诚信     友善 |
                                                                                  +----------------------------------- +
                                                                                  |  =======社会主义核心价值观=======  |
                                                                                  +----------------------------------- +
                                                                              这二十四个字来高度概括社会主义核心价值观的组成
 -->
 <!--


                                         
                                   .. .vr       
                                 qBMBBBMBMY     
                                8BBBBBOBMBMv    
                              iMBMM5vOY:BMBBv        
              .r,             OBM;   .: rBBBBBY     
              vUL             7BB   .;7. LBMMBBM.   
             .@Wwz.           :uvir .i:.iLMOMOBM..  
              vv::r;             iY. ...rv,@arqiao. 
               Li. i:             v:.::::7vOBBMBL.. 
               ,i7: vSUi,         :M7.:.,:u08OP. .  
                 .N2k5u1ju7,..     BMGiiL7   ,i,i.  
                  :rLjFYjvjLY7r::.  ;v  vr... rE8q;.:,, 
                 751jSLXPFu5uU@guohezou.,1vjY2E8@Yizero.    
                 BB:FMu rkM8Eq0PFjF15FZ0Xu15F25uuLuu25Gi.   
               ivSvvXL    :v58ZOGZXF2UUkFSFkU1u125uUJUUZ,   
             :@kevensun.      ,iY20GOXSUXkSuS2F5XXkUX5SEv.  
         .:i0BMBMBBOOBMUi;,        ,;8PkFP5NkPXkFqPEqqkZu.  
       .rqMqBBMOMMBMBBBM .           @kexianli.S11kFSU5q5   
     .7BBOi1L1MM8BBBOMBB..,          8kqS52XkkU1Uqkk1kUEJ   
     .;MBZ;iiMBMBMMOBBBu ,           1OkS1F1X5kPP112F51kU   
       .rPY  OMBMBBBMBB2 ,.          rME5SSSFk1XPqFNkSUPZ,.
              ;;JuBML::r:.:.,,        SZPX0SXSP5kXGNP15UBr.
                  L,    :@sanshao.      :MNZqNXqSqXk2E0PSXPE .
              viLBX.,,v8Bj. i:r7:,     2Zkqq0XXSNN0NOXXSXOU 
            :r2. rMBGBMGi .7Y, 1i::i   vO0PMNNSXXEqP@Secbone.
            .i1r. .jkY,    vE. iY....  20Fq0q5X5F1S2F22uuv1M; 


    我爱你！！！


-->

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - 管理后台</title>
    <meta name="keywords" content="{{ config('app.name') }}"/>
    <meta name="description" content="{{ config('app.name') }}"/>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
    @yield('head')
</head>
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
    <aside class="lyear-layout-sidebar">
      
      <!-- logo -->
      <div id="logo" class="sidebar-header">
        <a href="/"><img src="/images/logo.png" title="析云网" alt="析云网" /></a>
      </div>
      <div class="lyear-layout-sidebar-scroll"> 
        
        <nav class="sidebar-main">
          <ul class="nav nav-drawer">
            <li class="nav-item active"> <a href="/admin"><i class="mdi mdi-home"></i>后台首页</a> </li>
            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-palette"></i> 系统设置</a>
              <ul class="nav nav-subnav">
                <li> <a href="/admin/config/sys">站点配置</a> </li>
                <li> <a href="/admin/config/check">自动检测</a> </li>
                <li> <a href="/admin/config/dns">接口设置</a> </li>
              </ul>
            </li>
             <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-account"></i> 用户管理</a>
              <ul class="nav nav-subnav">
                <li> <a href="/admin/user/group">用户组</a> </li>
                <li> <a href="/admin/user/list">用户列表</a> </li>
                <li> <a href="/admin/user/point">积分明细</a> </li>
              </ul>
            </li>
            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-jsfiddle"></i> 域名管理</a>
              <ul class="nav nav-subnav">
                <li> <a href="/admin/domain/list">域名列表</a> </li>
                <li> <a href="/admin/domain/record">记录列表</a> </li>
              </ul>
            </li>
            
            </li>
          </ul>
        </nav>
        
        <div class="sidebar-footer">
          <p class="copyright">Copyright &copy; 2017-2021. <a target="_blank" href="https://www.superry.net">盛世容颜</a> All rights reserved.</p>
        </div>
      </div>
      
    </aside>
    <!--End 左侧导航-->
    
    <!--头部信息-->
    <header class="lyear-layout-header">
      <nav class="navbar navbar-default">
        <div class="topbar">
          <div class="topbar-left">
            <div class="lyear-aside-toggler">
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
            </div>
            <span class="navbar-page-title"> 后台首页 </span>
          </div>
          <ul class="topbar-right">
            <li class="dropdown dropdown-profile">
              <a href="javascript:void(0)" data-toggle="dropdown">
                <img class="img-avatar img-avatar-48 m-r-10" src="http://q1.qlogo.cn/g?b=qq&s=100&nk=191548915" alt="盛世容颜" />
                <span>盛世容颜 <span class="caret"></span></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li> <a href="/admin/profile"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                <li> <a href="javascript:void(0)"><i class="mdi mdi-delete"></i> 清空缓存</a></li>
                <li class="divider"></li>
                <li> <a href="/admin/logout" onclick="return confirm('确认退出登录？');"><i class="mdi mdi-logout-variant"></i> 退出登录</a> </li>
              </ul>
            </li>
          </ul>
          
        </div>
      </nav>
      
    </header>
    <!--End 头部信息-->
           @yield('content')
    </div>
</div>
</body>

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/js/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/layer.js"></script>
<script src="/js/main.js"></script>
<script>
    var showMenu = false;
    $(document).ready(function () {
        $("#menu").click(function () {
            if (showMenu) {
                $(".bd-sidebar").removeClass('openMenu');
                $(".bd-content").removeClass('moveRight');
                $(".bd-content").addClass('moveAnimation');
                showMenu = false;
            } else {
                $(".bd-content").removeClass('moveAnimation');
                $(".bd-sidebar").addClass('openMenu');
                $(".bd-content").addClass('moveRight');
                showMenu = true;
            }
        });
        /*菜单栏*/
        $(".bd-sidebar a").each(function () {
            var pathname = window.location.pathname;
            var href = $(this).attr('href');
            if (href == pathname) {
                $(this).parent().addClass('active');
                $(this).parent().parent().addClass('show');
            }
        })
    });

</script>
<script>
        new Vue({
            el: '#user',
            data: {
                search: {
                    page: 1, gid: 'all', uid: $_GET('uid'), username: '', email: ''
                },
                data: {},
                storeInfo: {}
            },
            methods: {
                getList: function (page) {
                    var vm = this;
                    vm.search.page = typeof page === 'undefined' ? vm.search.page : page;
                    this.$post("/admin/user", vm.search, {action: 'select'})
                        .then(function (data) {
                            if (data.status === 0) {
                                vm.data = data.data
                            } else {
                                vm.$message(data.message, 'error');
                            }
                        })
                },
                form: function (id) {
                    var vm = this;
                    this.$post("/admin/user", $("#form-" + id).serialize())
                        .then(function (data) {
                            if (data.status === 0) {
                                vm.getList();
                                $("#modal-" + id).modal('hide');
                                vm.$message(data.message, 'success');
                            } else {
                                vm.$message(data.message, 'error');
                            }
                        });
                },
                del: function (id) {
                    if (!confirm('确认删除？')) return;
                    var vm = this;
                    this.$post("/admin/user", {action: 'delete', id: id})
                        .then(function (data) {
                            if (data.status === 0) {
                                vm.getList();
                                vm.$message(data.message, 'success');
                            } else {
                                vm.$message(data.message, 'error');
                            }
                        });
                },
            },
            mounted: function () {
                this.getList();
            }
        });
    </script>
     <script>
        new Vue({
            el: '#record',
            data: {
                search: {
                    page: 1, did: 0, name: '', type: 0, value: '', uid: $_GET('uid')
                },
                data: {},
            },
            methods: {
                getList: function (page) {
                    var vm = this;
                    vm.search.page = typeof page === 'undefined' ? vm.search.page : page;
                    this.$post("/admin/domain/record", vm.search, {action: 'select'})
                        .then(function (data) {
                            if (data.status === 0) {
                                vm.data = data.data
                            } else {
                                vm.$message(data.message, 'error');
                            }
                        })
                },
                del: function (id) {
                    if (!confirm('确认删除？')) return;
                    var vm = this;
                    this.$post("/admin/domain/record", {action: 'delete', id: id})
                        .then(function (data) {
                            if (data.status === 0) {
                                vm.getList();
                                vm.$message(data.message, 'success');
                            } else {
                                vm.$message(data.message, 'error');
                            }
                        });
                },
            },
            mounted: function () {
                this.getList();
            }
        });
    </script>
    <script>
        new Vue({
            el: '#point',
            data: {
                search: {
                    page: 1, uid: $_GET('uid'), act: 'all'
                },
                data: {},
                storeInfo: {}
            },
            methods: {
                getList: function (page) {
                    var vm = this;
                    vm.search.page = typeof page === 'undefined' ? vm.search.page : page;
                    this.$post("/admin/user", vm.search, {action: 'pointRecord'})
                        .then(function (data) {
                            if (data.status === 0) {
                                vm.data = data.data
                            } else {
                                vm.$message(data.message, 'error');
                            }
                        })
                },
            },
            mounted: function () {
                this.getList();
            }
        });
    </script>
@yield('foot')
</html>