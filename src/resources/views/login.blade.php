
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
    <title>会员登录 - {{ config('sys.web.name','二级域名分发') }}</title>
    <meta name="keywords" content="{{ config('sys.web.keywords') }}"/>
    <meta name="description" content="{{ config('sys.web.description') }}"/>
    <link href="/css/bootstraps.min.css" rel="stylesheet">
    <link href="/css/ry/all.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
    <style>
.lyear-wrapper {
    position: relative;
}
.lyear-login {
    display: flex !important;
    min-height: 100vh;
    align-items: center !important;
    justify-content: center !important;
}
.login-center {
    background: #fff;
    min-width: 38.25rem;
    padding: 2.14286em 3.57143em;
    border-radius: 5px;
    margin: 2.85714em 0;
}
.login-header {
    margin-bottom: 1.5rem !important;
}
.login-center .has-feedback.feedback-left .form-control {
    padding-left: 38px;
    padding-right: 12px;
}
.login-center .has-feedback.feedback-left .form-control-feedback {
    left: 0;
    right: auto;
    width: 38px;
    height: 38px;
    line-height: 38px;
    z-index: 4;
    color: #dcdcdc;
}
.login-center .has-feedback.feedback-left.row .form-control-feedback {
    left: 15px;
}
</style>

</head>
<body>
<div class="lyear-login">
<div>
<main class="bd-masthead" id="content">
    <div class="container" v-cloak="">
        <div class="row" v-if="act==='reg'">
            <div class="col-12 col-md-6 offset-md-3 mt-3 mt-sm-5">
                <div class="login-center">
                    <div class="login-header text-center">
                   <h1>用户注册</h1>
                    </div>
                    <div class="card-body">
                        <form id="form-reg">
                            <div class="form-group">  
                                <div class="col-9"></div>
                                     <div class="form-group has-feedback feedback-left">
                        <input type="text" placeholder="请输入您的用户名" class="form-control" name="username"/>
                        <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
                            </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-9"></div>
                                   <div class="form-group has-feedback feedback-left">
                        <input class="form-control" name="password" placeholder="请输入密码" type="password">
                        <span aria-hidden="true" class="mdi mdi-lock form-control-feedback">
                        </span>
                    </input>
                           </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-9"></div>
                                   <div class="form-group has-feedback feedback-left">
                       <input type="email" name="email" class="form-control" placeholder="输入你的邮箱地址">
                        <span aria-hidden="true" class="mdi mdi-email form-control-feedback">
                        </span>
                    </input>
                          </div>
                            </div>
                              <div class="form-group ">
                                <div class="col-9"></div>
                                    <div class="form-group has-feedback feedback-left row">
                                  <div class="col-xs-7">
                             <input type="text" name="code" class="form-control" placeholder="输入验证码">
                      <span class="mdi mdi-check-all form-control-feedback" aria-hidden="true"></span>
                       </div>
                          <div class="col-xs-5">
                                   <img title="点击刷新" src="/captcha"
                                     style="float: left;width: 150px; margin: 5px auto"
                                     onclick="this.src='/captcha?_='+Math.random();" id="findCode">
                              </div>

                         </div>
                            </div>

                  <button class="btn btn-block btn-success" @click="reg" type="button">
                    注册会员
                 </button>
               
                  <a class="btn btn-block btn-info"  @click="act='login'" href="#Jbry" >已有账号？马上登录</a>
                            
                            <p>*如邮箱持久未到请检查垃圾邮箱查看，或联系客服</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" v-else>
            <div class="col-12 col-md-6 offset-md-3 mt-3 mt-sm-5">
               <div class="login-center">
                    <div class="login-header text-center">
                   <h1>用户登录</h1>
                    </div>
                    <div class="card-body">
                        <form id="form-login">
                            <div class="form-group">
                                <div class="col-9">  </div>
                                   <div class="form-group has-feedback feedback-left">
                              <input type="text" placeholder="请输入您的用户名" class="form-control" name="username" />
                       <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
                          </div>
                            </div>
                            <div class="form-group">
                                <div class="col-9"> </div>
                                   <div class="form-group has-feedback feedback-left">
                             <input type="password" placeholder="请输入密码" class="form-control"  name="password" />
                        <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
                           </div>
                            </div>
                            <div class="form-group ">
                                <label for="staticEmail" class="col-3 col-form-label"></label>
                                <div class="col-9"> </div>
                           
                        <button class="btn btn-block btn-success" @click="login" type="button">
                        立即登录
                        </button>
                        <a class="btn btn-block btn-info" href="/">
                            首页
                        </a>
                </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <a class="btn btn-block btn-pink btn-sm" @click="act='reg'">
                            立即注册
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-block btn-danger btn-sm" href="#modal-password" data-toggle="modal" >
                            忘记密码
                        </a>
                           </div>

                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-password">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">找回密码</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-password">
                        <input type="hidden" name="action" value="sendPasswordEmail">
                        <div class="form-group">
                            <div class="col-9"></div>
                               <div class="form-group has-feedback feedback-left">
                        <input type="text" placeholder="请输入要找回的账号或邮箱地址" class="form-control" name="username"/>
                        <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-9"></div>
                              <div class="form-group has-feedback feedback-left">
                            <div class="col-xs-7"></div>
                             <input type="text" name="code" class="form-control" placeholder="输入验证码">
                      <span class="mdi mdi-check-all form-control-feedback" aria-hidden="true"></span>
                                      <img title="点击刷新" src="/captcha"
                                     style="float: left;width: 150px; margin: 5px auto"
                                     onclick="this.src='/captcha?_='+Math.random();" id="findCode">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                            <p>*邮箱持久未到请检查垃圾邮箱*</p>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" @click="password">找回密码</button>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/layer.js"></script>
<script src="/js/main.js"></script>
<script>
    new Vue({
        el: '#content',
        data: {
            act: 'login'
        },
        methods: {
            password: function () {
                var vm = this;
                this.$post('/password', $("#form-password").serialize())
                    .then(function (data) {
                        $("#findCode").click();
                        if (data.status === 0) {
                            layer.alert(data.message);
                        } else {
                            layer.alert(data.message);
                        }
                    });
            },
            login: function () {
                var vm = this;
                this.$post('/login', $("#form-login").serialize())
                    .then(function (data) {
                        if (data.status === 0) {
                            location.href = data.go ? data.go : "{{ request()->get('go','/') }}";
                        } else {
                            layer.alert(data.message);
                        }
                    });
            },
            reg: function () {
                var vm = this;
                this.$post('/reg', $("#form-reg").serialize())
                    .then(function (data) {
                        $("#code").click();
                        if (data.status === 0) {
                            layer.alert(data.message, {
                                closeBtn: 0
                            }, function (i) {
                                layer.close(i);
                            });
                        } else {
                            layer.alert(data.message);
                        }
                    });
            }
        },
        mounted: function () {
            if ($_GET('act') === 'reg') {
                this.act = 'reg';
            }
            var vm = this;
            document.onkeyup = function (e) {
                var code = parseInt(e.charCode || e.keyCode);
                if (code === 13) {
                    if (vm.act === 'reg') {
                        vm.reg();
                    } else {
                        vm.login();
                    }
                }
            }
        }
    });
</script>
</html>