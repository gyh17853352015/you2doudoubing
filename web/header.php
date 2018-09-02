<？PHP
error_reporting（E_ALL ＆~ E_NOTICE）;
？>
<！DOCTYPE  html >
< html >
< 头 >
< meta  charset = “ utf-8 ” >
< meta  name = “ viewport ”  content = “ width = device-width，initial-scale = 1 ” >
< title > <？php echo $ headtitle ？> </ title >   
< meta  name = “ keywords ”  content = “ Youtube，Youtube镜像，Youtube直通车，Youtube镜像网站，Youtube视频代理，Youtube在线视频” />
< meta  name = “ description ”  content = “ Youtube镜像” />

< meta  content = “ width = device-width，initial-scale = 1.0，maximum-scale = 1.0，user-scalable = 0 ”  name = “ viewport ” />
< link  rel = “ stylesheet ”  href = “ //cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css ” >
< link  href = “ https://cdn.bootcss.com/Swiper/4.0.6/css/swiper.min.css "  rel = ” stylesheet “ >
< script  src = “ //cdn.bootcss.com/jquery/2.1.4/jquery.js ” > < / script >
< script  src = “ //cdn.bootcss.com/jqueryui/1.11.2/jquery-ui.js ” > < / script >
< 链路 HREF = “ //cdn.bootcss.com/video.js/5.20.4/alt/video-js-cdn.min.css ” 相对 = “样式表” />
< script  src = “ //libs.cdnjs.net/video.js/5.20.4/video.min.js ” > < / script >
< script  type = “ text / javascript ”  src = “。/ include / 4.js ” > < / script >
< link  rel = “ stylesheet ”  href = “。/ make  / theme.css ” type = “ text / css ” >
< link  rel = “ stylesheet ”  href = “。/inc / iiconfont.css ” >
< link  rel = “快捷图标”  href = “ ./ favicon.ico ”  type = “ image / x-icon ” >
< link  rel = “ icon ”  href = “ ./ favicon.ico ”  type = “ image / x-icon ” >
</ head >
< body >
< nav  class = “ navbar navbar-expand-md bg-primary navbar-dark ” >
< div  class = “ container ” >
	< 一 类 = “ Navbar的品牌”  HREF = “ ./ ” > < 我 类 = “ FA d-直列FA-的YouTube播放” > </ 我 > < b > ＆NBSP; <？php echo TITLENAME ？> </ b > </ a >   
	<？php require_once（' select_default_gl.php '）; ？> 
	< button  class = “ navbar-toggler navbar-toggler-right ”  type = “ button ”  data-toggle = “ collapse ”  data-target = “＃navbar2SupportedContent ”  aria-controls = “ navbar2SupportedContent ”  aria-expanded = “ false ”  aria- label = “切换导航” > < span  class = “ navbar-toggler-icon ”> </ span> </ button >
	< div  class = “ collapse navbar-collapse text-center justify-content-end ”  id = “ navbar2SupportedContent ” >
		< ul  class = “ navbar-nav ” >
		</ ul >
		< div  id = “ custom-search-input ” >
		     < form  action = “ search.php ”  style = “ margin-bottom：0px ” >
			< div  class = “ input-group col-md-12 ” >
			   
				< input  type = “ text ”  name = “ q ”   class = “ search-query form-control ”  id = “ youtube ”  placeholder = “搜索Youtube ” > < span  class = “ input-group-btn ” > < button  class = “ btn btn-danger ”  type = “ submit ”  style = “z-index：4 “> < span  class = “ fa d-inline fa-search ” > </ span > </ button > </ span >
				</ div >
			</ form >
		< script >
$（“＃ youtube ”）。自动完成（{
    source ： function（request，response）{
        
        var query =  request。项 ;
        
        $。ajax（{
            url ： “。/ ajax / autocomplete.php？q = ” +查询，  
            dataType ： ' jsonp '，
            success ： function（data，textStatus，request）{
               响应（$。地图（数据[ 1 ]，函数（项目）{
                    返回 {
                        label ： item [ 0 ]，
                        值： item [ 0 ]
                    }
                }））;
            }
        }）;
    }，
    
}）;
< / script >
		</ div >
	</ div >
</ div >
</ nav >
