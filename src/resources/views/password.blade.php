
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
    <title>重设密码 - {{ config('sys.web.name','二级域名分发') }}</title>
    <meta name="keywords" content="{{ config('sys.web.keywords') }}"/>
    <meta name="description" content="{{ config('sys.web.description') }}"/>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/css/style.min.css" rel="stylesheet">
</head>
<body>
<main class="bd-masthead" id="content">
 <div class="container" v-cloak="">
  <div class="lyear-login">
    <div class="login-center">
      <div class="login-header text-center">
       <h1>重置密码</h1>
      </div>
      <form id="form-password">
       <input type="hidden" name="action" value="setPassword">
       <input type="hidden" name="code"
          value="{{ \Illuminate\Support\Facades\Crypt::encrypt($user->sid) }}">
           <div>
           </div>
         <div class="form-group has-feedback feedback-left">
              <input type="text" class="form-control" value="{{ $user->username }}" disabled>
          <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback feedback-left">
        <input type="password" name="password" class="form-control" placeholder="输入新密码">
          <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
        </div>
       <div class="form-group has-feedback feedback-left">
             <input type="password" name="re_password" class="form-control" placeholder="重复一次新密码">
          <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group">
          <button class="btn btn-block btn-primary" type="button"  @click="password">确定</button>
        </div>
      </form>
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
                        if (data.status === 0) {
                            layer.alert(data.message, {
                                closeBtn: 0
                            }, function (i) {
                                window.location.href = "/login";
                            });
                        } else {
                            layer.alert(data.message);
                        }
                    });
            }
        },
        mounted: function () {
            var vm = this;
            document.onkeyup = function (e) {
                var code = parseInt(e.charCode || e.keyCode);
                if (code === 13) {
                    vm.password();
                }
            }
        }
    });
</script>
</html>