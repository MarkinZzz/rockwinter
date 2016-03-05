<html><head lang="en">
    <meta charset="utf-8">
	<title>知乎</title>
	<link rel="stylesheet" type="text/css" href="mainpage.css">
</head>
<body>
	<div id="all" >
		<div id="menu">
			<a id="backhomepage" href="mainpage.html">知乎</a>
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
			<div id="menu_con">
                <div class="tag" style="display: block;">
                    <i class="top-left-icon"></i>
                    <p id="top-left-a">最新动态</p>
                    <i class="top-right-icon"></i>
                    <a href="../set" id="top-right-a">设置</a>
                    <hr size="5px" width="700px" style="position: absolute;top: 120px; left: -500px; background-color: #8B8282;z-index: 1;">
                   <table id="content"></table>
                    <ul id="tp">
                    	    <li>
                    		    <i class="icon-1"></i>
                    		    <a href="">我的草稿</a>
                    	    </li>
                    	    <li>
                    		    <i class="icon-2"></i>
                    		    <a href="">我的收藏</a>
                    	    </li>
                    	    <li>
                    		    <i class="icon-3"></i>
                    		    <a href="">我的关注问题</a>
                    	    </li>
                    	    <li>
                    		    <i class="icon-4"></i>
                    		    <a href="">邀请我回答的问题</a>
                    	    </li>
                        </ul>
                        <hr size="3px" width="500px" style="position: absolute;top: 270px;left: 400px;background-color: #8B8282;z-index: 1;">
                        <ul id="mid">
                            <li>
                        	    <i class="icon-5"></i>
                        	    <a href="">所有问题</a>
                        	</li>
                        	<li>
                        		<i class="icon-6"></i>
                        		<a href="">话题广场</a>
                        	</li>
                        	<li>
                        		<i class="icon-7"></i>
                        		<a href="">公共编辑动态</a>
                        	</li>
                        	<li>
                        		<i class="icon-8"></i>
                        		<a href="">社区服务中心</a>
                        	</li>
                        </ul>
                        <p id="bot-a">知乎圆桌</p>
                        <a href="" id="bot-b">查看全部&gt;&gt;</a>
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
                 
                <span id="" style="position: absolute; width: 72%; height: 800px; top: 200px; left:-500px; overflow: scroll; background-color: lightgray;">
                <form action="../dbh/review.php" method="POST" >
                <?php
                include('../dbh/getqa.php');
                foreach ($message as $key => $value) {
                ?>
                <p>有关话题：<?php echo $value['topic'] ?></p>
                <br>
                <h1><?php echo $value['title'] ?></h1>
                <br>
                <br>
                <p><?php echo $value['content'] ?></p>
                <br>
                <br>
                <p>评论:<?php echo $value['review'] ?></p>
                <br>
                <input type="test" name="review" style="/*position: absolute; width: 300px; height: 50px; top:20px; left: 50px; border: solid 2px */lightgray;"></input>
                <input type="submit" value="发表评论" style="position: absolute; width: 130px; height: 35px; left: 500px; border: solid 2px lightgray; z-index: 1;"></input>
                <br>
                <br>
                <?php
                    }
                ?>
                </form>
                </span>
                <span style="position: absolute; width: 300px;height: 200px;top: 550px;left: 400px;">
                  <form action="../dbh/delete.php" method="POST">
                  删除问题题目:
                    <input type="text" style="width: 250px;height: 35px;top: 20px;left: 25px; border: solid 2px lightgray;" name="title"></input>
                    <input type="submit" value="删除问题" style="width: 120px;height: 35px;top: 40px;left: 200px;"></input>
                  </form>
                </span>

                </div> 

                <div class="tag" style="display: none;">
                     <ul id="topic-top">
                     	<li>
                            <i class="topic-top-icon"></i>
                     		<p>已关注的话题</p>
                     		
                     	</li>
                        <li></li>
                     </ul>
                     <ul id="topic-change">
                         <li>
                             <p id="others">其他人关注的话题</p>
                             <a href="" id="change">换一换</a>
                         </li>
                         <hr size="3px" width="850px" style="position: absolute;top: 30px;background-color: #8B8282;">
                         <li></li>
                     </ul>
                     <ul id="topic-square">
                         <button  id="enter"><a href="" >进入话题广场</a></button>
                         <a href="" id="discover">来这里发现更多有趣话题</a>
                     </ul>
                </div> 
                <div class="tag" style="display: none;">
                	<ul id="find-top">
                        <li>
                            <i class="find-top-icon"></i>
                            <p>编辑推荐</p>
                        </li>
                        <li>
                            <a href="#">更多推荐>></a>
                        </li>
                        <hr size="3px" width="" style="position: relative;">  
                        <li></li> 
                    </ul>
                    <ul id="find-right-top">
                        <li> 
                            <p>热门圆桌</p>
                            <a href="#">更多热>></a>
                        </li>
                        <hr size="3">
                    </ul>
                    <ul id="find-right-mid">
                        <li>
                            <p>热门话题</p>
                            <a href="#">更多话题>></a>
                        </li>
                        <hr size="3">
                    </ul>
                    <ul id="find-right-bot">
                        <li>
                            <p>热门收藏</p>
                            <a href="#">换一换</a>
                        </li>
                    </ul>
                    <ul id="find-link-ctn">
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
                                <i class="icon-10"></i>
                                <p id="fd">2016知乎</p>
                </div>   
            </div>
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
	</div>
 <script type="text/javascript" >
 //标题选项卡
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
tabs.set("msg-frame-title","display-box");
//消息选项卡
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
tabs.set("nav","menu_con");
//
function hover(obj, sType) { 
var oDiv = document.getElementById(obj); 
if (sType == 'show') { oDiv.style.display = 'block';} 
if (sType == 'hide') { oDiv.style.display = 'none';} 

} 


//
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