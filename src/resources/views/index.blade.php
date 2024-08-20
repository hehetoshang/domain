
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
    <title>{{ config('sys.web.title',config('sys.web.name','网站首页')) }}</title>
    <meta name="keywords" content="{{ config('sys.web.keywords') }}"/>
    <meta name="description" content="{{ config('sys.web.description') }}"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" rel="stylesheet">
    <link href="/css/styles.min.css" rel="stylesheet" >
</head>
<body>
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="background gradient">
    	<ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        </ul>
		</div>
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
			<header class="header">
				<div class="top-menu">
					<ul>
						<li class="active">
							<a href="#about-card">
								<span class="icon ion-android-list"></span>
								<span class="link">通告</span>
							</a>
						</li>
						<li>
							<a href="#resume-card">
								<span class="icon ion-paintbrush"></span>
								<span class="link">条款</span>
							</a>
						</li>
						<li>
							<a href="#works-card">
								<span class="icon ion-briefcase"></span>
								<span class="link">域名</span>
							</a>
						</li>
						<li>
							<a href="#blog-card">
								<span class="icon ion-heart"></span>
								<span class="link">捐献</span>
							</a>
						</li>
						<li>
							<a href="#contacts-card">
								<span class="icon ion-at"></span>
								<span class="link">关于</span>
							</a>
						</li>
					</ul>
				</div>
			</header>

			<div class="card-started" id="home-card">
				<div class="profile">
					<div class="slide" style="background-image: url(http://sqimg.qq.com/qq_product_operations/im/2015/bg1_1600.jpg);"></div>
					<div class="image">
						<img src="/images/logo-ico.png" alt="">
					</div>
					<div class="title">{{ config('sys.web.name') }}</div>
					<div class="subtitle">dns.loxza.com</div>
                    <div class="col-12 mt-0 mt-sm-3">
                    <form id="form-check">
                    <input type="text" class="d-none">
                    <div class="input-group">
                    <input type="text" class="form-control" style="height: 3rem" name="name"
                               placeholder="输入你想要的二级域名前缀">
                        <select name="did" class="form-control" style="flex: none;width: 100px;height: 3rem">
                            @foreach(\App\Helper::getAvailableDomains() as $domain)
                                <option value="{{ $domain->did }}">.{{ $domain->domain }}</option>
                            @endforeach
                        </select>
                    <div class="input-group-append">	</div>
                    <span class="input-group-text" style="background: #66CC99;color: white;"
                              onclick="check()">查询</span>
                  	</div>
                   	</div>
                             @if(auth()->check())
       	        	<div class="lnks" >
						<a   href="/home" class="lnk">
						<span class="text">解析记录</span>
						</a>
						<a  href="/logout" onclick="return confirm('确认退出登录？');" class="lnk">
							<span class="text" >退出登录</span>
						</a>
					</div>
			     	  @else
					<div class="lnks" >
						<a   href="/login" class="lnk">
							<span class="text">登录</span>
						</a>
						<a  href="/login?act=reg" class="lnk">
							<span class="text" >注册</span>
						
						</a>
					</div>
                      @endif
				</div>
			</div>
			
			<div class="card-inner animated active" id="about-card">
				<div class="card-wrap">
                   	<div class="content about">
						<div class="title">公告：</div>
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="text-box">
                             {!! config('sys.html_header') !!}
                                </div>
					     	</div>
							<div class="clear"></div>
						</div>
					</div>

					<div class="content pricing">
						<div class="title">价格</div>
						<div class="row pricing-items">
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="pricing-item">
									<div class="icon"><i class="ion ion-cloud"></i></div>
									<div class="name">普通组</div>
									<div class="amount">
										<span class="dollar">￥</span>
										<span class="number">00</span>
										<span class="period">元</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>每条解析5金币</li>
											<li>未备案域名</li>
											<li class="disable">表白域名 <strong>new</strong></li>
											<li class="disable">备案域名 <strong>new</strong></li>
										</ul>
									</div>
										<div class="lnks">
										</div>
								</div>
							</div>

							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="pricing-item">
									<div class="icon"><i class="ion ion-cloud"></i></div>
									<div class="name">高级组</div>
									<div class="amount">
										<span class="dollar">￥</span>
										<span class="number">10</span>
										<span class="period">元</span>
									</div>
									<div class="feature-list">
										<ul>
											<li>每条解析2金币</li>
											<li>表白域名<strong>new</strong></li>
											<li>未备案域名</li>
											<li>备案域名 <strong>new</strong></li>
										</ul>
									</div>
									<div class="lnks">
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
				   	</div>
				</div>
			</div>
			<div class="card-inner" id="resume-card">
				<div class="card-wrap">
					<div class="content resume">
						<div class="title">条款</div>
						<div class="row">
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="resume-title border-line-h">
									<div class="icon"><i class="ion ion-person"></i></div>
									<div class="name">使用条款</div>
								</div>
								<div class="resume-items">
									<div class="resume-item border-line-h active">
										<div class="date">2017-2021</div>
										<div class="name">旗下域名不允许接入：伪造、钓鱼、诈骗、外挂、VPN、毒品、赌博、博彩、棋牌、彩票、虚假打赏、黄色、贷款、色情交友、盗版影视、不正常言论、不合法的信息收集、圈币等违规违法网站.</div>
										<div class="company">{{ config('sys.web.name') }}.</div>
									</div>
									<div class="resume-item border-line-h active">
										<div class="date">2017-2021</div>
										<div class="name">金币的充值与扣除中，都由站点根据使用情况合理调整人民币兑换金币的汇率！如有不满应当即在总换时当面提出.</div>
										<div class="company">{{ config('sys.web.name') }}.</div>
									</div>
									<div class="resume-item">
										<div class="date">2017-2021</div>
										<div class="name">如您对网站做出有效操作就等同于默认同意以上条款.</div>
										<div class="company">{{ config('sys.web.name') }}.</div>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>
			<div class="card-inner" id="works-card">
				<div class="card-wrap">
					<div class="content works">
						<div class="title">域名</div>
						<div class="row">
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-key"></i></div>
										<div class="name">未备案</div>
									</div>
									<ul>
										<li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
										<li class="border-line-h">
											<div class="name">正在筹备中</div>
										</li>
											<li class="border-line-h">
											<div class="name">正在筹备中</div>
										</li>
										<li class="border-line-h">
											<div class="name">正在筹备中</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col col-d-6 col-t-6 col-m-12 border-line-v">
								<div class="skills-list">
									<div class="skill-title border-line-h">
										<div class="icon"><i class="ion ion-code"></i></div>
										<div class="name">已备案</div>
									</div>
									<ul>
										<li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
										<li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
									    <li class="border-line-h"> 
											<div class="name">正在筹备中</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-inner blog" id="blog-card">
				<div class="card-wrap">
					<div class="content blog">
						<div class="title">捐赠</div>
						<div class="row border-line-v">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-h">
								<div class="box-item">
									<div class="image">
										<a >
											<img src="images\zfbhb.jpg" alt="">
										</a>
									</div>
									<div >
										<a class="name">用支付宝扫红包总换金币吧！</a>
									
									</div>
								</div>
							</div>
								<div class="col col-d-12 col-t-12 col-m-12 border-line-h">
								<div class="box-item">
									<div class="image">
										<a >
											<img src="images\wx.jpg" height="1000px" width="120px"  alt="">
										</a>
									</div>
									<div >
										<a  class="name">你倒是吃点菜啊，微信来点？</a>
									</div>
								</div>
							</div>
							<div class="col col-d-12 col-t-12 col-m-12 border-line-h">
								<div class="box-item">
									<div class="image">
										<a >
											<img src="images\zfb.jpg" alt="">
										
										</a>
									</div>
									<div >
										<a  class="name">能让我靓仔到六合一腹肌吗？</a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-inner contacts" id="contacts-card">
				<div class="card-wrap">
					<div class="content contacts">
						<div class="title">关于</div>
						<div class="row">
							<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
								<div class="info-list">
								<img src="/images/logo.png"   height="110px" width="300px"  alt="" />
								</div>
								<div class="resume-item border-line-h active">
									<div class="date">2019</div>
									<div class="name">站长：九笔容颜</div>
									<div class="name">企鹅客服：488273757</div>
								    <div class="name">站长邮箱：hao@biun.cn</div>
								    <div class="name">*有疑问请直接说明*</div>
									</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="content clients">
						<div class="title">旗下</div>
						<div class="row client-items">
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="http://www.loxza.com">
											<img src="链接" alt="">
										</a>
									</div>
								</div>
							</div>
							
							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank"  href="http://www.loxza.com">
											<img src="链接" alt="">
										</a>
									</div>
								</div>
							</div>

							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank"  href="http://www.loxza.com" >
											<img src="链接" alt="">
										</a>
									</div>
								</div>
							</div>

							<div class="col col-d-3 col-t-3 col-m-6 border-line-v">
								<div class="client-item">
									<div class="image">
										<a target="_blank" href="http://www.loxza.com" >
											<img src="链接" alt="">
										</a>
									</div>
								</div>
							</div>
					    	<div class="clear"></div>
					        	</div>
				                 	</div>
                 	                 <div class="content contacts">
		                           <div class="bg-white">
                                 <div class="content content-full text-center overflow-hidden">
                             <div class="py-50">
		               <h3 class="font-w700 mb-10">{{ config('sys.web.name') }} <i class="fa fa-heart text-danger"></i>
		               <a class="link-effect" href="https://ww.superry.net">盛世容颜</h3></a>
		               <a href="https://www.superry.net/" target="_blank" rel="twipsy" title="盛世容颜博客" style="display: inline-block;"><img src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-90b49633-e3ed-4910-b066-7bcc14cbf4b0/031ac7ad-c779-40a8-9b14-d6e963fcbf85.svg" style="height: 12px; margin-top: -2px;"></a><br>
		               {{ config('app.name') }}
                      </div>
                       </div>
                            </div>
 
								</div>
							</div>
							<div class="clear"></div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</body>
<script src="/js/scripts.min.js"></script>
<link href="/css/style.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/layer/2.3/layer.js"></script>
<script src="/js/main.js"></script>
<script>
    function check() {
        $post("/check", $("#form-check").serialize())
            .then(function (data) {
                if (data.status === 0) {
                    layer.confirm(data.message, {
                        btn: ['解析', '取消']
                    }, function () {
                        window.location.href = "/home/"
                    }, function () {
                    });
                } else {
                    layer.alert(data.message)
                }
            });
    }

    document.onkeyup = function (e) {
        var code = parseInt(e.charCode || e.keyCode);
        if (code === 13) {
            check();
        }
    }
</script>
</html>