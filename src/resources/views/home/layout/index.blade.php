
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
    <title>@yield('title') - {{ config('sys.web.name') }}</title>
    <meta name="keywords" content="{{ config('sys.web.keywords') }}"/>
    <meta name="description" content="{{ config('sys.web.description') }}"/>
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
            <li class="nav-item" > <a href="/home"><i class="mdi mdi-sticker-emoji"></i> 解析记录</a> </li>
            <li class="nav-item"><a href="/home/point"><i class="mdi mdi-marker"></i> 积分明晰</a> </li>
            <li class="nav-item nav-item-has-subnav">
              <a href="javascript:void(0)"><i class="mdi mdi-menu"></i> 友情链接</a>
              <ul class="nav nav-subnav">
                  </li>
            @foreach(\App\Helper::getIndexUrls() as $url)
                <li class="nav-item">
                    <a href="{{ $url[1] }}" target="_blank" class="nav-link">{{ $url[0] }}</a>
                </li>
            @endforeach
              </ul>
            </li>

          </ul>
        </nav>
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
            <span class="navbar-page-title">{{ config('sys.web.name') }} </span>
          </div>
             <ul class="topbar-right">
               <li class="dropdown dropdown-profile">
                <a href="javascript:void(0)" data-toggle="dropdown">
                <img  class="img-avatar img-avatar-48 m-r-10" src="/images/zhu.png"   alt="九笔容颜" />
                <span>{{ auth()->user()->username }} <span class="caret"></span></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                <li> <a ><i class="mdi mdi-account-card-details"></i> UID:{{ auth()->user()->uid }}</a> </li>
                <li> <a ><i class="mdi mdi-account"></i> {{ auth()->user()->group?auth()->user()->group->name:'' }}</a> </li>
                <li> <a href="/home/profile"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                <li class="divider"></li>
                <li> <a href="/logout" onclick="return confirm('确认退出登录？');"><i class="mdi mdi-logout-variant"></i> 退出登录</a> </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--End 头部信息-->
    
    <!--页面主要内容-->
    <main class="lyear-layout-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><h4>公告：</h4></div>
              <div class="card-body">
                   {!! config('sys.html_home') !!}
               </div>
              </div>
            </div>
            @yield('content')
            <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                 <div class="footer">
                         Copyright © 2017 - 2021 <strong>{{ config('sys.web.name') }}</strong>
                         <a href="https://www.superry.net/" target="_blank" style="display:inline-block;" rel="twipsy" title="盛世容颜博客">
					     <img src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-90b49633-e3ed-4910-b066-7bcc14cbf4b0/031ac7ad-c779-40a8-9b14-d6e963fcbf85.svg" style="height: 12px; margin-top: -2px"></a>
					     {{ config('app.name') }}
                        </div>
                    </div>
                 </div>
              </div> 
            </div>
          </div> 
         </div>
       </div> 
    </main>
    <!--End 页面主要内容-->
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
</script>

@yield('foot')
</html>