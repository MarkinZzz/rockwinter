<html>
<head lang="en">
    <meta charset="utf-8">
	<title>设置</title>

<style type="text/css">
	*{
        margin: 0px; 
        padding: 0px; 
        border: 0px;
		position: relative;
		float: left;
  		text-decoration: none;
	}
    h1{
        font-size: 20px;
    }
    h2{
        font-size: 20px;
    }
	#all{
		position: relative;

		
	}
	#menu{
		width: 1920px;
		height: 50px;
		background-color: #0F59AE;
	}
	#backhomepage{
		left: 450px;
		text-decoration:none;
		font-size: 45px;
		color: white;
    }
    #search{
    	width: 300px;
    	height: 30px;
		top: 10px;
		left: 450px;
		font-size: 20px;
    }
    #search-icon{
    	width: 30px;
    	height: 30px;
    	border: 0px;
    	left: 445px;
    	top: 10px;
    	background-color: #2071CE;
    }
    #nav{
    	text-align: center;
    	left: 500px;
    	top: 0px;
    	z-index: 1;
    }
    #nav li{
    	list-style-type: none;
    	text-align: center;
    	display: inline;
    }
    #nav li a{
    	width: 100px;
    	height: 50px;
        text-align: center;
    	background-color: #0F59AE;
    	font-size: 30px;
    	text-decoration: none;
    	color: white;
    }
    #nav li a:hover{
    	background-color: #2071CE;
    }
    #btn-quiz{
    	width: 70px;
    	height: 30px;
    	border: 0px;
        top: 10px;
        left: 550px;
    	background-color: #2071CE;
    	font-size: 15px;
    	color: white;
    	z-index: 1;
    }
    #character{
        width: 150px;
        height: 50px;
        position: absolute;
        top: 0px;
        left: 1500px;
        font-size: 30px;
        z-index: 1;
    }
    #character-mag{
        display: block;
        width: 150px;
        height: 160px;
        position: absolute;
        top: 50px;
        left: 1500px;
        background-color: #3896C2;
        z-index: 1;
    }
    #character-mag li{
        clear: both;
        list-style-type: none;
        line-height: 40px;
    }
    #character-mag li a{
        font-size: 20px;
    }
    #character-mag li a:hover{
        color: red;
    }

    #link-ctn{
        width: 500px;
        height: 50px;
        position: absolute;
        top: 800px;
        left: 400px;
        text-align: center;
        z-index: 1
    }
    #link-ctn li{
        list-style-type: none;
        left: 20px;

    }
    #link-ctn li a{
        text-decoration: none;
        float: 10px;
        font-size: 15px;
        color: #8B8282;
    }
    #ss{
        width: 100px;
        position: absolute;
        top: 850px;
        left: 700px;
        color: #8B8282;
        z-index: 1;
    }

    #set-title{
        top: 30px;
        left: 500px;
    }
    #set-title li {
        margin-left: 20px;
    }
    #set-title li a{
        font-size: 20px;
        z-index: 1;
    }
    #basic-msg{
        top: 100px;
        left: 50px;
    }
    #basic-msg-name{

    }
    #basic-msg-personaly{
        top: 100px;
        left: -120px;
    }
    #basic-msg-personaly input{
        width: 150px;
        height: 30px;
        border: solid 2px lightgray;
    }
    #basic-msg-protect{
        top: 200px;
        left: -430px;
    }
    #explain{
        top: 230px;
        left: -900px;
    }
    #explain a{
        font-size: 15px;
        color: lightgray;
    }
    .protect-keep{
        width: 60px;
        height: 30px;
        top: 400px;
        left: -1100px;
    }
    #personal-letter{
        width: 900px;
        top: 50px;
        left: 520px;
    }
    #personal-letter h2{
        top: 50px;
        left: -80px;
    }
    #personal-letter label{
        top: 30px;
        margin-left: 50px;
        margin-top: 20px;
    }
    #personal-letter-mail{
        top: 10px;
        left: 225px;
    }
    #letter-top{
        top: 200px;
        left: -380px;
    }
    #letter-top p{
        top: 30px;
        left: -85px;
        font-size: 15px;
        color: lightgray;
    }
    #letter{
        width: 700px;
        top: 260px;
        left: -380px;
    }
    #letter label{
        top: -20px;
        left: 85px;
        margin-left: 50px;
        margin-top: 20px;
    }
    .letter-mail{
        left: 200px;
    }
    #new-answer{
        width: 700px;
        top: 320px;
        left: 510px;
    }
    #new-answer label{
        margin-top: 20px;
        margin-left: 50px;
        top: -20px;
    }
    #new-answer-mail{
        left: 200px;
    }
    #new-answer a{
        top: -10px;
        left: 50px;
        color: lightgray;
    }
    #discuss-me{
        width: 700px;
        top: 470px;
        left: -190px;
    }
    #discuss-me label{
        top: -20px;
        margin-left: 50px;
        margin-top: 20px;
    }
    #thanks-answer{
        width: 900px;
        top: 540px;
        left: -190px;
    }
    #thanks-answer label{
        top: -20px;
        margin-left: 50px;
        margin-top: 20px;
    }
    #thanks-discuss{
        width: 900px;
        top: 620px;
        left: 510px;
    }
    #thanks-discuss label{
        top: -20px;
        margin-left: 50px;
        margin-top: 20px;
    }
    #thanks-article{
        width: 900px;
        top: 740px;
        left: -390px;
    }
    #thanks-article label{
        top: -20px;
        margin-left: 50px;
        margin-top: 20px;
    }
    #attention-me{
        width: 900px;
        top: 830px;
        left: 510px;

    }
    #attention-me label{
        top: -20px;
        margin-left: 50px;
        margin-top: 20px;
    }
    #attention-column{
        width: 900px;
        top: 920px;
        left: -390px;
    }
    #attention-column label{
        top: -20px;
        margin-left: 50px;
        margin-top: 20px;
    }
    #mail-set{
        top: 950px;
        left: 510px;
    }
    #mail-set p{
        top: 20px;
        left: -80px;
        font-size: 15px;
        color: lightgray;
    }
    #week-choice{
        top: 1020px;
        left: 145px;
    }
    #inform-new{
        top: 1070px;
        left: -115px;
    }
    #lab span{
        top: 100px;
        left: 50px;
    }
    #lab span label{
        top: 50px;
    }
    #lab span a{
        top: 90px;
        left: -250px;
    }
    #lab button{
        width: 60px;
        height: 35px;
        top: 300px;
        left: -400px;
    }
    #shield-top{
        top: 50px;
        left: 510px;
    }
    #shield-top p{
        top: 25px;
        left: -120px;
        font-size: 15px;
        color: lightgray;
    }
    #shield-top input{
        width: 200px;
        height: 30px;
        top: 70px;
        left: -400px;
        border: solid 2px lightgray;
    }
    #shield-content{
        top: 200px;
        left: -100px;
    }
    #link-content{
        top: 20px;
    }
    #link-content li a button{
        width: 70px;
        height: 30px;
        border-radius: 15px;
    }

    #shield-column{
        top: 350px;
        left: -980px;
    }
    #shield-column p{
        top: 30px;
        left: -120px;
        font-size: 15px;
        color: lightgray;
    }
    #shield-user{
        top: 420px;
        left: -980px;
    }
    #shield-user p{
        top: 30px;
        left: -120px;
        font-size: 15px;
        color: lightgray;
    }
    #account{
        top: 60px;
        left: 50px;
    }
    #account p{
        font-size: 15px;
        color: lightgray;
    }
    #account-mail{
        top: 50px;
        left: -300px;
    }
    #account-mail a{
        left: 50px;
    }
    #account-phone{
        top: 100px;
        left: -400px;
    }
    #account-phone a{
        left: 50px;
    }
    #account-password{
        top: 160px;
        left: -495px;
    }
    #account-password a{
        left: 50px;
    }
    #account-social{
        top: 230px;
        left: -620px;
    }
    #account-social a{
        left: 70px;
        margin-left: 20px;
    }

    @font-face {font-family: 'search-icon';
    src: url('search/iconfont.eot'); /* IE9*/
    src: url('search/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('search/iconfont.woff') format('woff'), /* chrome、firefox */
    url('search/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('search/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */
    }
    .search-icon{
    font-family:"search-icon" !important;
    font-size:22px;font-style:normal;
    color: white;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;}

    @font-face {font-family: 'icon-9';
    src: url('circle/iconfont.eot'); /* IE9*/
    src: url('circle/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('circle/iconfont.woff') format('woff'), /* chrome、firefox */
    url('circle/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('circle/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */}
    .icon-9{
    font-family:"icon-9" !important;
    font-size:17px;font-style:normal;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;
    position: absolute;
    top: 850px;
    left: 680px;
    z-index: 1;
    color: #8B8282;
    }

</style>
</head>
<body>
	<div id="all">
		<div id="menu">
			<a id="backhomepage" href="">知乎</a>
			<input id="search" placeholder="搜索问题、话题或人">
			<button id="search-icon">
				<i class="search-icon"></i>
			</button>
			<ul id="nav">
				<li id="home-page">
					<a href="../mainpage" >首页</a>
				</li>
				<li id="topic">
					<a href="#" >话题</a>
				</li>
				<li id="find">
					<a href="#" >发现</a>
				</li>
				<li id="msg">
					<a href="#" onclick="displayMsg()">消息</a>
				</li>
			</ul>
            <a href="../question"><button id="btn-quiz">提问</button></a>
        </div> 
        <?php
        include('../dbh/getusername.php');
        foreach ($message as $key => $value) {
        ?>
        <?php
            }
        ?>
        <button id="character" onmouseover="hover('character-mag', 'show');" onmouseout="hover('character-mag', 'hide');"><span id="head"><img src="../head/head.jpg" style="width: 50px; height: 50px;"></span><?php echo $value['username'] ?></button>
        <ul id="character-mag" style="display:none;" id="character-mag" onmouseover="hover('character-mag', 'show');" onmouseout="hover('character-mag', 'hide');">
              <li><i></i><a href="../homepage">我的主页</a></li>
            <li><i></i><a href="../message">私信</a></li>
            <li><i></i><a href="../set">设置</a></li>
            <li><i></i><a href="../Loginin">退出</a></li>
        </ul>
        <!-- <ul id="link-ctn">
            <li>
               <a href="">刘看山</a>
            </li>
            <li>
                <a href="">·知乎指南</a>
            </li>
            <li>
                <a href="">·建议反馈</a>
            </li>
            <li>
                <a href="">·移动应用</a>
            </li>
            <li>
                <a href="">·加入知乎</a>
            </li>
            <li>
                <a href="">·知乎协议</a>
            </li>
            <li>
                <a href="">·商务合作</a>
            </li>
        </ul>
        <i class="icon-9"></i>
        <p id="ss">2016知乎</p> -->
        <div id="set-menu">
            <ul id="set-title">
                <li>
                    <a href="#" class="selected">基本资料</a>
                </li>
                <li>
                    <a href="#" class="">账号和密码</a>
                </li>
                <li>
                    <a href="#" class="">消息和邮件</a>
                </li>
                <li>
                    <a href="#" class="">屏蔽</a>
                </li>
                <li>
                    <a href="#" class="">实验室</a>
                </li>
            </ul>
            <div id="set-menu-on">
                <div class="tag" style="display: block;">
                    <form id="basic-msg" action="../dbh/reusername.php" method="POST">
                     <span id="basic-msg-name">  
                        <label class="basic-name">姓名</label>
                        <span id="name">martyee</span>
                        <a href="#"><i class="icon-14"></i>修改</a>
                     </span>  
                      <span id="basic-msg-personaly"> 
                        <label class="personaly">更改用户名</label>
                        <input class="personaly-change" type="text" name="name"></input>
                        <span>只能修改一次</span>
                       </span> 
                       <span id="basic-msg-protect">
                        <label class="protect">隐私保护</label>
                           
                        <label class="protect-checkbox">
                        <input type="checkbox" class="protect-in"></input>
                        "在站外搜到我在知乎创作的内容时，我的姓名将不会被显示"
                        </label>
                        </span>    
                        <span id="explain">   
                        <a href="#">什么情况在应该使用这个选项？</a>
                         </span>   
                        <span>   
                        <button class="protect-keep">保存</button>
                      </span>      
                        
                    </form>
                </div>
                <div class="tag" style="display: none;">
                    <form id="account">
                       <p>绑定手机和邮箱，并设置密码，帐号更安全。</p>
                       <span id="account-mail">
                           <label>邮箱</label>
                           <a href="#">绑定邮箱</a>
                       </span>
                       <span id="account-phone">
                           <label>手机</label>
                           <a href="#">绑定手机</a>
                       </span>
                       <span id="account-password">
                           <label>账号密码</label>
                           <a href="#">设置密码</a>
                       </span>
                       <span id="account-social">
                           <label>社交账号</label>
                           <a href="#">绑定微信</a>
                           <a href="#">绑定微博</a>
                           <a href="#">绑定QQ</a>
                       </span>

                       
                    </form>
                </div>
                <div class="tag" style="display: none;">
                    <form id="set-msg">
                        <span id="personal-letter">
                            <h1>私信设置</h1>
                            <h2>有人给我发私信</h2>
                            <label><input type="radio"></input>允许所有人给我发私信</label>
                            <label><input type="radio"></input>只允许我关注的人给我发私信</label>
                            <label id="personal-letter-mail"><input type="checkbox"></input>有私信时邮件提醒我</label>
                        </span>
                        <span id="letter-top">
                            <h1>消息设置</h1>
                            <p>你可以在这里设置接收的消息类型。【邀请我回答问题】和【关注的问题有了新回答】 不支持关闭消息。</p>
                        </span>
                        <span id="letter">
                            <h1>邀请我回答问题</h1>
                            <label><input type="radio"></input>接收所有人的信息</label>
                            <label><input type="radio"></input>只接受关注人的消息</label>
                            <label class="letter-mail"><input type="checkbox"></input>有消息时邮件提醒我</label>
                        </span>
                        <span id="new-answer">
                            <h1>关注的问题有了新回答</h1>
                            <label><input type="radio"></input>接收所有人消息</label>
                            <label><input type="radio"></input>只接收关注人的消息</label>
                            <label id="new-answer-mail"><input type="checkbox"></input>有消息时邮件我</label>
                            <label id="attain"><input type="checkbox"></input>获取你接收消息范围内的全部新回答通知，即使这些回答质量可能不够高。</label>
                            <a href="#">选中这个会发生什么？</a>
                        </span>
                        <span id="discuss-me">
                            <h1>@/评论我</h1>
                            <label><input type="radio"></input>接收所有人的消息</label>
                            <label><input type="radio"></input>只接收关注人信息</label>
                            <label><input type="radio"></input>不接收任何人的消息</label>
                            <label><input type="checkbox"></input>有消息时邮件提醒我</label>
                        </span>
                        <span id="thanks-answer">
                            <h1>赞同/感谢我的回答</h1>
                            <label><input type="radio"></input>接收所有人的消息</label>
                            <label><input type="radio"></input>只接收关注人信息</label>
                            <label><input type="radio"></input>不接收任何人的消息</label>
                            <label><input type="checkbox"></input>有消息时邮件提醒我</label>
                        </span>
                        <span id="thanks-discuss">
                            <h1>赞了我的评论</h1>
                            <label><input type="radio"></input>接收所有人的消息</label>
                            <label><input type="radio"></input>只接收关注人信息</label>
                            <label><input type="radio"></input>不接收任何人的消息</label>
                            <label><input type="checkbox"></input>有消息时邮件提醒我</label>
                        </span>
                        <span id="thanks-article">
                            <h1>赞了专栏文章</h1>
                            <label><input type="radio"></input>接收所有人的消息</label>
                            <label><input type="radio"></input>只接收关注人信息</label>
                            <label><input type="radio"></input>不接收任何人的消息</label>
                            <label><input type="checkbox"></input>有消息时邮件提醒我</label>
                        </span>
                        <span id="attention-me">
                            <h1>有人关注了我</h1>
                            <label><input type="radio"></input>接收所有人的消息</label>
                            <label><input type="radio"></input>只接收关注人信息</label>
                            <label><input type="radio"></input>不接收任何人的消息</label>
                            <label><input type="checkbox"></input>有消息时邮件提醒我</label>
                        </span>
                        <span id="attention-column">
                            <h1>有人关注了我的专栏</h1>
                            <label><input type="radio"></input>接收所有人的消息</label>
                            <label><input type="radio"></input>只接收关注人信息</label>
                            <label><input type="radio"></input>不接收任何人的消息</label>
                            <label><input type="checkbox"></input>有消息时邮件提醒我</label>
                        </span>
                        <span id="mail-set">
                            <h1>邮件设置</h1>
                            <p>你可以在这里设置是否接收来自知乎的邮件</p>
                        </span>
                        <span id="week-choice">
                            <h1>知乎每周精选</h1>
                            <label><input type="checkbox"></input>接收每周精选邮件</label>
                        </span>
                        <span id="inform-new">
                            <h1>新品发布和活动通知</h1>
                            <label><input type="checkbox"></input>有新品发布或活动举行时发邮件给我</label>
                        </span>
                    </form>
                </div>
                <div class="tag" style="display: none;">
                    <form id="shield">
                        <span id="shield-top">
                            <h1>屏蔽话题设置</h1>
                            <p>在个人首页动态中屏蔽来自特定话题的内容</p>
                            <input type="text" placeholder="搜索话题"></input>
                        </span>
                        <span id="shield-content">
                            <h1>受限话题</h1>
                            <p>除非主动关注，来自以下话题和它们的部分子话题的内容不会出现在你的首页动态中。</p></br>
                            <p>详情参见</p>
                            <a href="#">知乎上的哪些内容需要主动关注才会出现在首页动态中？</a>
                            <ul id="link-content">
                                <li><a href="#"><button>知乎社区</button></a></li>
                                <li><a href="#"><button>成人内容</button></a></li>
                                <li><a href="#"><button>个人咨询</button></a></li>
                                <li><a href="#"><button>感情</button></a></li>
                                <li><a href="#"><button>调查类问题</button></a></li>
                                <li><a href="#"><button>钓鱼（广义的）</button></a></li>
                            </ul>
                        </span>
                        <span id="shield-column">
                            <h1>屏蔽专栏设置</h1>
                            <p>在个人首页动态中屏蔽来自特定专栏的内容</p>
                        </span>
                        <span id="shield-user">
                            <h1>屏蔽用户设置</h1>
                            <p>在个人首页动态中屏蔽来自特定用户的内容</p>
                        </span>
                    </form>
                </div>
                <div class="tag" style="display: none;">
                    <form id="lab">
                        <span>
                            <h1>首页动态</h1>
                            <label><input type="checkbox"></input>开启新版首页动态体验</label>
                            <a href="#">新首页动态包含哪些改进？</a>
                        </span>
                        <button>保存</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
            var tabs=function(){
    function tag(name,elem){
        return (elem||document).getElementsByTagName(name);
    }
    //获得相应ID的元素
    function id(name){
        return document.getElementById(name);
    }
    function first(elem){
        elem=elem.firstChild;
        return elem&&elem.nodeType==1? elem:next(elem);
    }
    function next(elem){
        do{
            elem=elem.nextSibling;  
        }while(
            elem&&elem.nodeType!=1  
        )
        return elem;
    }
    return {
        set:function(elemId,tabId){
            var elem=tag("li",id(elemId));
            var tabs=tag("div",id(tabId));
            var listNum=elem.length;
            var tabNum=tabs.length;
            for(var i=0;i<listNum;i++){
                    elem[i].onclick=(function(i){
                        return function(){
                            for(var j=0;j<tabNum;j++){
                                if(i==j){
                                    tabs[j].style.display="block";
                                    //alert(elem[j].firstChild);
                                    elem[j].firstChild.className="selected";
                                }
                                else{
                                    tabs[j].style.display="none";
                                    elem[j].firstChild.className="";
                                }
                            }
                        }
                    })(i)
            }
        }
    }
}();
tabs.set("set-title","set-menu-on");//执行


function hover(obj, sType) { 
var oDiv = document.getElementById(obj); 
if (sType == 'show') { oDiv.style.display = 'block';} 
if (sType == 'hide') { oDiv.style.display = 'none';} 

} 
    </script>
 </body>
 </html>          