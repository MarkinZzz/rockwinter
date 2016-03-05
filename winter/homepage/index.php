<html>
<head lang="en">
    <meta charset="utf-8">
	<title>我的主页</title>

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
        line-height: 35px;
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
    #personal-msg{
        border: solid 2px lightgray;
        width: 700px;
        height: 350px;
        top: 30px;
        left: 500px;
    }
    #attain{
        border: solid 2px lightgray;
        width: 700px;
        height: 35px;
        top: 345px;
        left: -205px;
        line-height: 35px;
    }
    #attain span{
        left: 20px;
        margin-left: 20px;
    }
    #attain button{
        width: 100px;
        height: 25px;
        top: 5px;
        left: 400px;
    }
    #nav02{
        width: 700px;
        height: 40px;
        border: solid 2px lightgray;
        top: 345px;
        left: -205px;
        line-height: 40px;
        text-align: center;
        font-size: 20px;
        color: black;
    }
    #nav02 li{
        display: block;
        width: 112.6px;
        height: 40px;
        border: solid 2px lightgray;
        left: 0px;
        margin-right: 0px;
    }
    #nav02 li a{
        color: black;
    }
    .content{
        width: 700px;
        height: 220px;
        border: solid 2px lightgray;
        top: 400px;
        left: -205px;
    }
    .top{
        width: 700px;
        height: 35px;
        border: solid 2px lightgray;
        line-height: 35px;
    }
    .top a{
        left: 500px;
        color: black;
    }
    .display-content p{
        font-size: 17px;
        color: lightgray;
    }
    @font-face {font-family: 'first';
    src: url('house/iconfont.eot'); /* IE9*/
    src: url('house/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('house/iconfont.woff') format('woff'), /* chrome、firefox */
    url('house/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('house/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */
    }
    .first{
    font-family:"first" !important;
    font-size:22px;font-style:normal;
    color: lightgray;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;
    top: -5px;
    left: 10px;
    }

    @font-face {font-family: 'admire';
    src: url('admire/iconfont.eot'); /* IE9*/
    src: url('admire/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('admire/iconfont.woff') format('woff'), /* chrome、firefox */
    url('admire/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('admire/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */
    }
    .admire{
    font-family:"admire" !important;
    font-size:22px;font-style:normal;
    color: lightgray;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;
    z-index: 1;
    }

    @font-face {font-family: 'grateful';
    src: url('grateful/iconfont.eot'); /* IE9*/
    src: url('grateful/iconfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
    url('grateful/iconfont.woff') format('woff'), /* chrome、firefox */
    url('grateful/iconfont.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
    url('grateful/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */
    }
    .grateful{
    font-family:"grateful" !important;
    font-size:22px;font-style:normal;
    color: lightgray;
    -webkit-font-smoothing: antialiased;
    -webkit-text-stroke-width: 0.2px;
    -moz-osx-font-smoothing: grayscale;
    z-index: 1;
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
					<a href="#" class="" onclick="displayMsg()">消息</a>
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
             <li><i></i><a href="../mainpage">我的主页</a></li>
            <li><i></i><a href="../message">私信</a></li>
            <li><i></i><a href="../set">设置</a></li>
            <li><i></i><a href="../Loginin">退出</a></li>
        </ul>
        <div id="personal">
        	<div id="personal-msg">个人信息</div>
            <div id="attain">
                <p>获得</p>
                <span>
                    <i class="admire">&#xe601;</i>
                    <p>赞同</p>
                </span>
                <span>
                    <i class="grateful">&#xe694;</i>
                    <p>感谢</p>
                </span>
                <a href="../edit"><button>完善我的资料</button></a>
            </div>
            <div>
                <ul id="nav02">
                    <li><a href="#" class="first">&#x3436;</a></li>
                    <li><a href="#" class="">提问</a></li>
                    <li><a href="#" class="">回答</a></li>
                    <li><a href="#" class="">专栏文章</a></li>
                    <li><a href="#" class="">收藏</a></li>
                    <li><a href="#" class="">公共编辑</a></li>
                </ul>
            </div>
            <div id="display-box">
                <div class="content" style="display: block;">
                    <span class="top"><h1>最新动态</h1></span>
                    <span class="display-content"><p>暂时没有动态</p></span>
                </div>
                <div class="content" style="display: none;">
                    <span class="top"><h1>您的提问</h1> <a href="#">返回个人主页</a></span>
                    <span class="display-content"><p>暂时没有提问</p></span>
                </div>
                <div class="content" style="display: none;">
                    <span class="top"><h1>您的回答</h1><a href="#">返回个人主页</a></span>
                    <span class="display-content"><p>暂时没有回答</p></span>
                </div>
                <div class="content" style="display: none;">
                    <span class="top"><h1>您的文章</h1><a href="#">返回个人主页</a></span>
                    <span class="display-content"><p>暂时没有文章</p></span>
                </div>
                <div class="content" style="display: none;">
                    <span class="top"><h1>您的收藏</h1><a href="#">返回个人主页</a></span>
                    <span class="display-content"><p>暂时没有文章</p></span>
                </div>
                <div class="content" style="display: none;">
                    <span class="top"><h1>您的编辑</h1><a href="#">返回个人主页</a></span>
                    <span class="display-content"><p>暂时没有编辑</p></span>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function hover(obj, sType) { 
            var oDiv = document.getElementById(obj); 
            if (sType == 'show') { oDiv.style.display = 'block';} 
            if (sType == 'hide') { oDiv.style.display = 'none';} 

        } 

        //

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
                                    elem[j].firstChild.className="first";
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
tabs.set("nav02","display-box");
    </script>
 </body>
 </html>          