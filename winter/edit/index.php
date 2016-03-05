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

    #edit{
        border: solid 1px lightgray;
        width: 700px;
        height: 1203px;
        top: 50px;
        left: 25%;
    }
    #edit-top{
        width: 700px;
        height: 50px;
        border: solid  1px  lightgray;
        line-height: 50px;
    }
    #edit-top p{
        left: 20px;
    }
    #edit-top a{
        left: 470px;
    }
    #edit-head{
        width: 700px;
        height: 150px;
        border: solid 1px lightgray;
    }
    #edit-head-p1{
        top: 25px;
        left: 50px;
    }
    #edit-head span{
        top: 25px;
        left: 100px;
    }
    #edit-head button{
        width: 80px;
        height: 30px;
        top: 25px;
        left: 150px;
    }
    #edit-head-p2{
        top: 60px;
        left: 150px;
        color: lightgray;
    }
    #edit-head-p3{
        top: 60px;
        left: 150px;
        color: black;
    }
    #edit-sex{
        width: 700px;
        height: 80px;
        border: solid 1px lightgray;
        line-height: 80px;
    }
    #edit-sex p{
        left: 50px;
    }
    #edit-sex label {
        left: 100px;
        margin-left: 50px;
    }
    #edit-sex label input{
        top: 35px;
    }
    #edit-social{
        width: 700px;
        height: 110px;
        border: solid 1px lightgray;
    }
    #edit-social label{
        top: 30px;
        left: 40px;
        margin-left: 50px;
    }
    #edit-social-p1{
        top: 30px;
        left: 50px;
    }
    #edit-social-p2{
        top: 60px;
        left: -100px;
        color: lightgray;
    }
    #one-introduce{
        width: 700px;
        height: 110px;
        border: solid 1px lightgray;
    }
    #one-introduce input{
        width: 300px;
        height: 35px;
        top: 25px;
        left: 150px;
        border: solid 2px lightgray;
        line-height: 35px;
    }
    #one-introduce-p1{
        top: 30px;
        left: 50px;
    }
    #one-introduce-p2{
        top: 75px;
        left: -150px;
        color: lightgray;
    }
    #personal-introduce{
        width: 700px;
        height: 160px;
        border: solid 1px lightgray;
    }
    #personal-introduce input{
        width: 320px;
        height: 80px;
        top: 30px;
        left: 150px;
        border: solid 2px lightgray;
    }
    #personal-introduce-p1{
        top: 30px;
        left: 50px;
    }
    #personal-introduce-p2{
        top: 35px;
        left: 210px;
        color: lightgray;
    }
    #profession{
        width: 700px;
        height: 110px;
        border: solid 1px lightgray;
    }
    #profession select{
        width: 230px;
        height: 30px;
        top: 30px;
        left: 150px;
        border: solid 2px lightgray;
        font-size: 15px;
        line-height: 30px;
    }
    #profession-p1{
        top: 30px;
        left: 50px;
    }
    #profession-p2{
        top: 70px;
        left: -85px;
        font-size: 15px;
        color: lightgray;
    }
    #address{
        width: 700px;
        height: 90px;
        border: solid 1px lightgray;
    }
    #address p{
        top: 30px;
        left: 50px;
    }
    #address input{
        width: 300px;
        height: 30px;
        top: 25px;
        left: 100px;
        border: solid 2px lightgray;
        line-height: 30px;
    }
    #address button{
        width: 70px;
        height: 30px;
        top: 25px;
        left: 200px;
    }
    #profession-experience{
        width: 700px;
        height: 90px;
        border: solid 1px lightgray;
    }
    #profession-experience p{
        top: 30px;
        left: 50px;
    }
    #profession-experience input{
        width: 150px;
        height: 30px;
        top: 25px;
        left: 70px;
        border: solid 2px lightgray;
        margin-left: 10px;
        line-height: 30px;
    }
    #profession-experience button{
        width: 70px;
        height: 30px;
        top: 25px;
        left: 170px;
    }
    #education-experience{
        width: 700px;
        height: 90px;
        border: solid 1px lightgray;
    }
    #education-experience p{
        top: 30px;
        left: 50px;
    }
    #education-experience input{
        width: 150px;
        height: 30px;
        top: 25px;
        left: 70px;
        border: solid 2px lightgray;
        margin-left: 10px;
        line-height: 30px;
    }
    #education-experience button{
        width: 70px;
        height: 30px;
        top: 25px;
        left: 170px;
    }
    #advantage-topic{
        width: 700px;
        height: 80px;
        border: solid 1px lightgray;
    }
    #advantage-topic p{
        top: 30px;
        left: 50px;
    }
    #advantage-topic label{
        top: 30px;
        left: 60px;
        margin-left: 50px;
    }
    #whether-keep{
        width: 700px;
        height: 60px;
        border: solid 1px lightgray;
        line-height: 60px;
    }
    #whether-keep a{
        top: 15px;
        margin-left: 200px;
    }
    #whether-keep a button{
        width: 70px;
        height: 30px;
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
             <li><i></i><a href="../homepage">我的主页</a></li>
            <li><i></i><a href="../message">私信</a></li>
            <li><i></i><a href="../set">设置</a></li>
            <li><i></i><a href="../Loginin">退出</a></li>
        </ul>
        <div id="edit">
            <div id="edit-top">
                <p>编辑个人资料</p>
                <a href="#">返回的人主页</a>
            </div>
            <div id="edit-head">
                <p id="edit-head-p1">头像</p>
                <span><img src="../head/head.jpg" style="width: 100px; height: 100px;"></span>
                <!-- <button>选择头像</button> -->
                <form action="../dbh/head.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <input type="file" name="file" id="edit-head-p2"></input>
                        <input type="submit" value="修改头像" id="edit-head-p3"></input>
                    </div>
                </form>
                <!-- <p id="edit-head-p2">支持 JPG、PNG 格式，不要超过 2M 。</p> -->
            </div>
            <div id="edit-sex">
                <p>性别</p>
                <label><input type="radio" name="sex"></input>男</label>
                <label><input type="radio" name="sex"></input>女</label>
            </div>
            <div id="edit-social">
                <p id="edit-social-p1">社区绑定</p>
                <label><input type="radio" name="social"></input>显示</label>
                <label><input type="radio" name="social"></input>隐藏</label>
                <p id="edit-social-p2">你可以选择把微博帐号显示在知乎个人主页。</p>
            </div>
            <div id="one-introduce">
                <p id="one-introduce-p1">一句话介绍</p>
                <input type="text"></input>
                <p id="one-introduce-p2">例如：汽车制造 / 产品设计师 / 登山爱好者</p>
            </div>
            <div id="personal-introduce">
                <p id="personal-introduce-p1">个人简介</p>
                <input type="text"></input>
                <p id="personal-introduce-p2">用一段话介绍你自己，会在你的个人页面显示</p>
            </div>
            <div id="profession">
                <p id="profession-p1">所在行业</p>
                <select>
                    <option value="0">选择行业</option>
                    <option value="a1">高新科技</option>
                    <option value="a2">&nbsp &nbsp &nbsp互联网</option>
                    <option value="a3">&nbsp &nbsp &nbsp电子商务</option>
                    <option value="a4">&nbsp &nbsp &nbsp电子游戏</option>
                    <option value="a5">&nbsp &nbsp &nbsp计算机软件</option>
                    <option value="a6">&nbsp &nbsp &nbsp计算机硬件</option>
                    <option value="b1">信息传媒</option>
                    <option value="b2">&nbsp &nbsp &nbsp出版业</option>
                    <option value="b3">&nbsp &nbsp &nbsp电影录音</option>
                    <option value="b4">&nbsp &nbsp &nbsp广播电视</option>
                    <option value="b5">&nbsp &nbsp &nbsp通信</option>
                    <option value="c1">金融</option>
                    <option value="c2">&nbsp &nbsp &nbsp银行</option>
                    <option value="c3">&nbsp &nbsp &nbsp资本投资</option>
                    <option value="c4">&nbsp &nbsp &nbsp证券投资</option>
                    <option value="c5">&nbsp &nbsp &nbsp保险</option>
                    <option value="c6">&nbsp &nbsp &nbsp信贷</option>
                    <option value="c7">&nbsp &nbsp &nbsp财务</option>
                    <option value="c8">&nbsp &nbsp &nbsp审计</option>
                    <option value="d1">服务业</option>
                    <option value="d2">&nbsp &nbsp &nbsp法律</option>
                    <option value="d3">&nbsp &nbsp &nbsp餐饮</option>
                    <option value="d4">&nbsp &nbsp &nbsp酒店</option>
                    <option value="d5">&nbsp &nbsp &nbsp旅游</option>
                    <option value="d6">&nbsp &nbsp &nbsp广告</option>
                    <option value="d7">&nbsp &nbsp &nbsp公关</option>
                    <option value="d8">&nbsp &nbsp &nbsp景观</option>
                    <option value="d9">&nbsp &nbsp &nbsp咨询分析</option>
                    <option value="d10">&nbsp &nbsp &nbsp市场推广</option>
                    <option value="d11">&nbsp &nbsp &nbsp人力资源</option>
                    <option value="d12">&nbsp &nbsp &nbsp社工服务</option>
                    <option value="d13">&nbsp &nbsp &nbsp养老服务</option>
                    <option value="e1">教育</option>
                    <option value="e2">&nbsp &nbsp &nbsp高等教育</option>
                    <option value="e3">&nbsp &nbsp &nbsp基础教育</option>
                    <option value="e4">&nbsp &nbsp &nbsp幼儿教育</option>
                    <option value="e5">&nbsp &nbsp &nbsp特殊教育</option>
                    <option value="e6">&nbsp &nbsp &nbsp培训</option>
                    <option value="f1">医疗服务</option>
                    <option value="f2">&nbsp &nbsp &nbsp临床医疗</option>
                    <option value="f3">&nbsp &nbsp &nbsp制药</option>
                    <option value="f4">&nbsp &nbsp &nbsp保健</option>
                    <option value="f5">&nbsp &nbsp &nbsp美容</option>
                    <option value="f6">&nbsp &nbsp &nbsp医疗器材</option>
                    <option value="f7">&nbsp &nbsp &nbsp生物工程</option>
                    <option value="f8">&nbsp &nbsp &nbsp疗养服务</option>
                    <option value="f9">&nbsp &nbsp &nbsp护理服务</option>
                    <option value="g1">艺术娱乐</option>
                    <option value="g2">&nbsp &nbsp &nbsp创意艺术</option>
                    <option value="g3">&nbsp &nbsp &nbsp体育健身</option>
                    <option value="g4">&nbsp &nbsp &nbsp娱乐休闲</option>
                    <option value="g5">&nbsp &nbsp &nbsp图书馆</option>
                    <option value="g6">&nbsp &nbsp &nbsp博物馆</option>
                    <option value="g7">&nbsp &nbsp &nbsp策展</option>
                    <option value="g8">&nbsp &nbsp &nbsp博彩</option>
                    <option value="h1">制造加工</option>
                    <option value="i1">&nbsp &nbsp &nbsp食品饮料业</option>
                    <option value="i2">&nbsp &nbsp &nbsp纺织皮革业</option>
                    <option value="i3">&nbsp &nbsp &nbsp服装业</option>
                    <option value="i4">&nbsp &nbsp &nbsp烟草业</option>
                    <option value="i5">&nbsp &nbsp &nbsp造纸业</option>
                    <option value="i6">&nbsp &nbsp &nbsp印刷业</option>
                    <option value="i7">&nbsp &nbsp &nbsp化工业</option>
                    <option value="i8">&nbsp &nbsp &nbsp汽车</option>
                    <option value="i9">&nbsp &nbsp &nbsp家具</option>
                    <option value="i10">&nbsp &nbsp &nbsp电子电器</option>
                    <option value="i11">&nbsp &nbsp &nbsp机械设备</option>
                    <option value="i12">&nbsp &nbsp &nbsp塑料工业</option>
                    <option value="i13">&nbsp &nbsp &nbsp金属加工</option>
                    <option value="i14">&nbsp &nbsp &nbsp军火</option>
                    <option value="j1">地产建筑</option>
                    <option value="j2">&nbsp &nbsp &nbsp房地产</option>
                    <option value="j3">&nbsp &nbsp &nbsp装饰装潢</option>
                    <option value="j4">&nbsp &nbsp &nbsp物业服务</option>
                    <option value="j5">&nbsp &nbsp &nbsp特殊建造</option>
                    <option value="j6">&nbsp &nbsp &nbsp建筑设备</option>
                    <option value="k1">贸易零售</option>
                    <option value="k2">&nbsp &nbsp &nbsp零售</option>
                    <option value="k3">&nbsp &nbsp &nbsp大宗交易</option>
                    <option value="k4">&nbsp &nbsp &nbsp进出口贸易</option>
                    <option value="l1">公共服务</option>
                    <option value="l2">&nbsp &nbsp &nbsp政府</optiok6n>
                    <option value="l3">&nbsp &nbsp &nbsp国防军事</option>
                    <option value="l4">&nbsp &nbsp &nbsp航天</option>
                    <option value="l5">&nbsp &nbsp &nbsp科研</option>
                    <option value="l6">&nbsp &nbsp &nbsp给排水</option>
                    <option value="l7">&nbsp &nbsp &nbsp水利能源</option>
                    <option value="l8">&nbsp &nbsp &nbsp电力电网</option>
                    <option value="l9">&nbsp &nbsp &nbsp公共管理</option>
                    <option value="l10">&nbsp &nbsp &nbsp环境保护</option>
                    <option value="l11">&nbsp &nbsp &nbsp非营利组织</option>
                    <option value="m1">开采</option>
                    <option value="m2">&nbsp &nbsp &nbsp煤炭工业</option>
                    <option value="m3">&nbsp &nbsp &nbsp石油工业</option>
                    <option value="m4">&nbsp &nbsp &nbsp黑色金属</option>
                    <option value="m5">&nbsp &nbsp &nbsp有色金属</option>
                    <option value="m6">&nbsp &nbsp &nbsp土砂石开采</option>
                    <option value="m7">&nbsp &nbsp &nbsp地热开采</option>
                    <option value="n1">交通仓储</option>
                    <option value="n2">&nbsp &nbsp &nbsp邮政</optiomn>
                    <option value="n3">&nbsp &nbsp &nbsp物流递送</option>
                    <option value="n4">&nbsp &nbsp &nbsp地面运输</option>
                    <option value="n5">&nbsp &nbsp &nbsp铁路运输</option>
                    <option value="n6">&nbsp &nbsp &nbsp管线运输</option>
                    <option value="n7">&nbsp &nbsp &nbsp航运业</option>
                    <option value="n8">&nbsp &nbsp &nbsp民用航空业</option>
                    <option value="o1">农林牧渔</option>
                    <option value="o2">&nbsp &nbsp &nbsp种植业</option>
                    <option value="o3">&nbsp &nbsp &nbsp畜牧养殖业</option>
                    <option value="o4">&nbsp &nbsp &nbsp林业</option>
                    <option value="o5">&nbsp &nbsp &nbsp渔业</option>
                </select>
                <p id="profession-p2">行业信息会显示在你的个人页面</p>
            </div>
            <div id="address">
                <p>居住地</p>
                <input type="text" placeholder="添加居住地"></input>
                <button>添加</button>
            </div>
            <div id="profession-experience">
                <p>职业经历</p>
                <input type="text" placeholder="公司或组织名称"></input>
                <input type="text" placeholder="你的职位（选填）"></input>
                <button>添加</button>
            </div>
            <div id="education-experience">
                <p>教育经历</p>
                <input type="text" placeholder="学校或教育机构名"> </input>
                <input type="text" placeholder="专业方向（选填）"></input>
                <button>添加</button>
            </div>
            <div id="advantage-topic">
                <p>擅长话题</p>
                <label><input type="radio" name="advantage">开启</input></label>
                <label><input type="radio" name="advantage">关闭</input></label>
            </div>
            <div id="whether-keep">
                <a href="#"><button>取消修改</button></a>
                <a href="#"><button>保存设置</button></a>
            </div>
        </div>
    </div>



<script type="text/javascript">
        function hover(obj, sType) { 
            var oDiv = document.getElementById(obj); 
            if (sType == 'show') { oDiv.style.display = 'block';} 
            if (sType == 'hide') { oDiv.style.display = 'none';} 

        } 
</script>
</body>
</html>