<html>
<head lang="en">
    <meta charset="utf-8">
	<title>私信-知乎</title>

<style type="text/css">
	*{
        margin: 0px; 
        padding: 0px; 
        border: 0px;
		position: relative;
		float: left;
  		text-decoration: none;
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
    #message-top{
        top: 30px;
        left: 500px;

    }
    #message-top p{
        font-size: 20px;
    }
    #message-top button{
        width: 50px;
        height: 25px;
        left: 400px;
        background-color: lightgray;
        z-index: 1;
    }
    #message-content{
        width: 600px;
        height: 400px;
        top: 60px;
        left: 350px;
        border: solid 3px ;
        border-color: lightgray;
        z-index: 1;
    }
    #message-content p{
        font-size: 15px;
        color: lightgray;
    }

    #frame{
        width: 350px;
        height: 400px;
        position: absolute;
        text-align: center;
        top: 50px;
        left: 1100px;
        border: solid 2px;
        display: none;
        border-color: lightgray;
        background-color: white;
        z-index: 1;
    }
    #msg-frame-title{
        display: block;
        text-align: center;

        width: 350px;
        height: 30px;

    }
    #msg-frame-title li{
        margin-left: 60px;
        list-style-type: none;
    }
    /*#msg-frame-title li a{
        font-size: 20px;
        color: lightgray;

    }*/
    
    .article{
        width: 350px;
        height: 320px;
        background-color: lightgray;
    }

    #bot-wz{
        top: 10px;
        left: 240px;
        color: lightgray;
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

    @font-face {font-family: 'new-msg-icon';
    src: url('new-msg/iconfont.eot'); /* IE9*/
    src: url('new-msg/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('new-msg/iconfont.woff') format('woff'), /* chrome、firefox */
    url('new-msg/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('new-msg/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */}
    .new-msg-icon{
    font-family:"new-msg-icon" !important;
    font-size:17px;font-style:normal;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;
    position: absolute;
    left: 10px; color: lightgray;
    }
    @font-face {font-family: 'sequ-icon';
    src: url('sequ/iconfont.eot'); /* IE9*/
    src: url('sequ/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('sequ/iconfont.woff') format('woff'), /* chrome、firefox */
    url('sequ/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('sequ/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */}
    .sequ-icon{
    font-family:"sequ-icon" !important;
    font-size: 20px;font-style:normal;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;
    position: absolute;
    left: 100px; color: lightgray;
    }
    @font-face {font-family: 'ai-icon';
    src: url('ai/iconfont.eot'); /* IE9*/
    src: url('ai/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('ai/iconfont.woff') format('woff'), /* chrome、firefox */
    url('ai/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('ai/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */}
    .ai-icon{
    font-family:"ai-icon" !important;
    font-size:17px;font-style:normal;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;
    position: absolute;
    left: 200px; color: lightgray;
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
					<a href="../mainpage" class="selected">首页</a>
				</li>
				<li id="topic">
					<a href="#" class="">话题</a>
				</li>
				<li id="find">
					<a href="#" class="">发现</a>
				</li>
				<li id="msg">
					<a href="#"  onclick="openFrame()" id="link-msg">消息</a>
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
        <div id="message-top">
            <p>我的私信</p>
            <button id="write-message">写私信</button>
            
        </div>
        <div id="frame" >
            <div id="msg-frame">
                <ul id="msg-frame-title">
                    <li><a href="#" class="selected"><i class="new-msg-icon">&#xe614;</i></a></li>
                    <li><a href="#" class=""><i class="sequ-icon">&#xe65f;</i></a></li>
                    <li><a href="#" class=""><i class="ai-icon">&#xe886;</i></a></li>
                </ul>
            </div>
            <div id="display-box">
                <div class="article" style="display: block;">48484564564564</div>
                <div class="article"  style="display: none;">789798798555</div>
                <div class="article" style="display: none;">55555555555</div>
            </div>
            <div>
                <a href="#"><i class="set-icon">&#xe633;</i></a>
                <a href="#" id="bot-wz">查看全部>></a>
            </div>
        </div>
        <ul id="message-content">
            <p>还没有人给你发私信，不如你主动一点，给神交已久的知友发一封问候私信吧:)</p>
        </ul>
        <ul id="link-ctn">
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
        <p id="ss">2016知乎</p>
    </div>
    <script type="text/javascript">
        function hover(obj, sType) { 
            var oDiv = document.getElementById(obj); 
            if (sType == 'show') { oDiv.style.display = 'block';} 
            if (sType == 'hide') { oDiv.style.display = 'none';} 

        } 

         window.onload = function(){
            document.onclick = function(e){
                e = e || window.event;
                var dom =  e.srcElement|| e.target;
                if(dom.id != "frame" && document.getElementById("frame").style.display == "block") {
                    document.getElementById("frame").style.display = "none";
                }
            };
        };
        function openFrame(e) {
            document.getElementById("frame").style.display = "block";
            e = e||window.event;
            if(+'\v1') {
                e.stopPropagation();
            } else  {
                e.cancelBubble = true;
            }
        }
    </script>
 </body>
 </html>          