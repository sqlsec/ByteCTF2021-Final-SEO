<!doctype html>
<html>
<script>
    function error(){
        Swal.fire({
            icon: 'error',
            title: '网址格式有误'
        })
    }
</script>
<?php
error_reporting(0);
include('header.php');

$post_data = $_POST["domain"];
$domain = str_replace( parse_url($post_data, PHP_URL_SCHEME ) . '://', '', $post_data );

$status = checkdnsrr($domain , "A");
if ($status){
    $flag = "success";
} else {
    $flag = "fail";
}
?>

<body>
<main class="container"  style="min-height: 100vh">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="row">
            <div class="row">
                <div class="col-md-3 col-sm-12" style="display: flex; flex-direction: column;justify-content: center;height:100px; text-align: center;">
                    <h4>SEO 综合查询</h4>
                    <span id="flag" value="<?php echo $flag; ?>"></span>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form method="post" action="seo.php">
                        <div class="form-group" style="display: flex; flex-direction: column;justify-content: center;height:100px;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入需要查询的网站" name="domain" id="domain" value="<?php echo $domain; ?>">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">搜索</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;" id="net_error">{标题}</font>
            </font>
        </h6>
        <div class="container px-4 py-5">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th class="col-2 table-primary" scope="row"><i class="fa fa-list-alt"></i> SEO 信息</th>
                        <td class="row col-10">
                            <span class="col-2"><strong>百度</strong>：<img id="baidu" src="assets/imgs/rankicons/baidu0.png"/></span>
                            <span class="col-2"><strong>移动</strong>：<img id="bd" src="assets/imgs/rankicons/bd0.png"/></span>
                            <span class="col-2"><strong>头条</strong>：<img id="toutiao" src="assets/imgs/rankicons/toutiao0.png"/></span>
                            <span class="col-2"><strong>360</strong>：<img id="360" src="assets/imgs/rankicons/3600.png"/></span>
                            <span class="col-2"><strong>搜狗</strong>：<img id="sogou" src="assets/imgs/rankicons/sogou0.png"/></span>
                            <span class="col-2"><strong>神马</strong>：<img id="shenma" src="assets/imgs/rankicons/shenma0.png"/></span>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-2 table-info" scope="row"><i class="fa fa-bar-chart"></i> 网站排名</th>
                        <td class="row col-10">
                            <span class="col-4">ALEXA 世界排名：<strong id="rank">3,941,014</strong></span>
                            <span class="col-4">网站分类：<strong id="cate">科技数码</strong></span>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-2 table-success" scope="row"><i class="fa fa-info-circle"></i> 域名信息</th>
                        <td class="row col-10">
                            <span class="col-3">注册人/机构：<strong>ByteDance</strong></span>
                            <span class="col-6">注册人邮箱：<strong id="mail">**@doamin.bytedance.com</strong></span>
                            <span class="col-3">域名年龄：<strong id="date">5年3月16天</strong></span>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-2 table-warning" scope="row"><i class="fa fa-clone"></i> 备案信息</th>
                        <td class="row col-10">
                            <span class="col-4">备案号：<strong id="icp">苏ICP备19071234号-1</strong></span>
                            <span class="col-2">名称：<strong id="name">张伟</strong></span>
                            <span class="col-2">性质：<strong id="kind">个人</strong></span>
                            <span class="col-4"> 审核时间：<strong>2021-08-08 </strong></span>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-2 table-danger" scope="row"><i class="fa fa-globe"></i> 网站信息</th>
                        <td class="row col-10">
                            <span class="col-4">IP：<strong id="ip">{ip}</strong></span>
                            <span class="col-4">标题：<strong id="title">{标题}</strong></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">数据可视化</font>
            </font>
        </h6>
        <div class="row">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div id="left" style="width: auto;height:40vh;">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div id="mid" style="width: auto;height:40vh;">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div id="right" style="width: auto;height:40vh;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
<?php include('footer.php')?>

<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart1 = echarts.init(document.getElementById('right'));
    var myChart2 = echarts.init(document.getElementById('mid'));
    var myChart3 = echarts.init(document.getElementById('left'));

    // 指定图表的配置项和数据
    var option1 = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross',
                label: {
                    backgroundColor: '#6a7985'
                }
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                boundaryGap: false,
                data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日']
            }
        ],
        yAxis: [
            {
                type: 'value'
            }
        ],
        series: [
            {
                name: '邮件营销',
                type: 'line',
                stack: '总量',
                areaStyle: {},
                emphasis: {
                    focus: 'series'
                },
                data: [120, 132, 101, 134, 90, 230, 210]
            },
            {
                name: '联盟广告',
                type: 'line',
                stack: '总量',
                areaStyle: {},
                emphasis: {
                    focus: 'series'
                },
                data: [220, 182, 191, 234, 290, 330, 310]
            },
            {
                name: '视频广告',
                type: 'line',
                stack: '总量',
                areaStyle: {},
                emphasis: {
                    focus: 'series'
                },
                data: [150, 232, 201, 154, 190, 330, 410]
            },
            {
                name: '直接访问',
                type: 'line',
                stack: '总量',
                areaStyle: {},
                emphasis: {
                    focus: 'series'
                },
                data: [320, 332, 301, 334, 390, 330, 320]
            },
            {
                name: '搜索引擎',
                type: 'line',
                stack: '总量',
                label: {
                    show: true,
                    position: 'top'
                },
                areaStyle: {},
                emphasis: {
                    focus: 'series'
                },
                data: [820, 932, 901, 934, 1290, 1330, 1320]
            }
        ]
    };

    var option2 = {
        tooltip: {
            trigger: 'item',
            formatter: '{a} <br/>{b}: {c} ({d}%)'
        },
        series: [
            {
                name: '访问来源',
                type: 'pie',
                selectedMode: 'single',
                radius: [0, '30%'],
                label: {
                    position: 'inner',
                    fontSize: 14,
                },
                labelLine: {
                    show: false
                },
                data: [
                    {value: 1548, name: '搜索引擎'},
                    {value: 775, name: '直达'},
                    {value: 679, name: '营销广告', selected: true}
                ]
            },
            {
                name: '访问来源',
                type: 'pie',
                radius: ['45%', '60%'],
                labelLine: {
                    length: 30,
                },
                data: [
                    {value: 1048, name: '百度'},
                    {value: 335, name: '直达'},
                    {value: 310, name: '邮件营销'},
                    {value: 251, name: '谷歌'},
                    {value: 234, name: '联盟广告'},
                    {value: 147, name: '必应'},
                    {value: 135, name: '视频广告'},
                    {value: 102, name: '其他'}
                ]
            }
        ]
    };

    var option3 = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c}%"
        },

        series: [
            {
                name:'漏斗图',
                type:'funnel',
                left: '10%',
                top: 60,
                //x2: 80,
                bottom: 60,
                width: '80%',
                // height: {totalHeight} - y - y2,
                min: 0,
                max: 100,
                minSize: '0%',
                maxSize: '100%',
                sort: 'descending',
                gap: 2,
                label: {
                    show: true,
                    position: 'inside'
                },
                labelLine: {
                    length: 10,
                    lineStyle: {
                        width: 1,
                        type: 'solid'
                    }
                },
                itemStyle: {
                    borderColor: '#fff',
                    borderWidth: 1
                },
                emphasis: {
                    label: {
                        fontSize: 20
                    }
                },
                data: [
                    {value: 60, name: '访问'},
                    {value: 40, name: '咨询'},
                    {value: 20, name: '订单'},
                    {value: 80, name: '点击'},
                    {value: 100, name: '展现'}
                ]
            }
        ]
    };
    // 使用刚指定的配置项和数据显示图表。
    myChart1.setOption(option1);
    myChart2.setOption(option2);
    myChart3.setOption(option3);
</script>
<script>
    function checkURL(URL){
        var str=URL;
        var Expression=/([\w-]+\.)+[\w-]+(\/[\w- .\/?%&=]*)?/;
        var objExp=new RegExp(Expression);
        if(objExp.test(str)==true){
            return true;
        }else{
            return false;
        }
    }

    function err_info(domain){
        document.getElementById("net_error").innerHTML=domain + " - 网络查询异常";
    }

    function get_seo(domain){
        var xmlhttp=new XMLHttpRequest();
        var url="api/seo.php?domain="+domain;
        var type="GET";
        xmlhttp.open(type,url,true);
        xmlhttp.send();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                var seo = JSON.parse(xmlhttp.response);
                // SEO 信息
                document.getElementById("baidu").src = "assets/imgs/rankicons/baidu"+ seo.rank_baidu + ".png";
                document.getElementById("bd").src = "assets/imgs/rankicons/bd"+ seo.rank_bd + ".png";
                document.getElementById("toutiao").src = "assets/imgs/rankicons/toutiao"+ seo.rank_toutiao + ".png";
                document.getElementById("360").src = "assets/imgs/rankicons/360"+ seo.rank_360 + ".png";
                document.getElementById("sogou").src = "assets/imgs/rankicons/sogou"+ seo.rank_sogou + ".png";
                document.getElementById("shenma").src = "assets/imgs/rankicons/shenma"+ seo.rank_shenma + ".png";
                document.getElementById("net_error").innerHTML=domain + " - 查询结果";
            }
        }
    }

    function get_rank(){
        var xmlhttp=new XMLHttpRequest();
        var url="api/alexa.php";
        var type="POST";
        xmlhttp.open(type,url,true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("domain=" + domain);
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                var rank_json = JSON.parse(xmlhttp.response);
                document.getElementById("rank").innerText = rank_json.rank;
                document.getElementById("cate").innerText = rank_json.cate;
            }
        }
    }

    function get_social(){
        var xmlhttp=new XMLHttpRequest();
        var url="api/social.php";
        var type="POST";
        xmlhttp.open(type,url,true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("domain=" + domain);
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                var social_json = JSON.parse(xmlhttp.response);
                document.getElementById("mail").innerText = social_json.mail;
                document.getElementById("date").innerText = social_json.date;
            }
        }
    }

    function get_icp(){
        var xmlhttp=new XMLHttpRequest();
        var url="api/icp.php";
        var type="POST";
        xmlhttp.open(type,url,true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("domain=" + domain);
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                var icp_json = JSON.parse(xmlhttp.response);
                document.getElementById("icp").innerText = icp_json.icp;
                document.getElementById("name").innerText = icp_json.name;
                document.getElementById("kind").innerText = icp_json.kind;
            }
        }
    }

    function get_ip(){
        var xmlhttp=new XMLHttpRequest();
        var url="api/ip.php";
        var type="POST";
        xmlhttp.open(type,url,true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("domain=" + domain);
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                var ip_json = JSON.parse(xmlhttp.response);
                document.getElementById("ip").innerText = ip_json.ip;
                document.getElementById("title").innerText = ip_json.title;
            }
        }
    }


    var domain = document.getElementById("domain").value;
    console.log(domain);
    if(domain){
        if(checkURL(domain)){
            err_info();
            get_seo(domain);
            get_rank();
            get_social();
            get_ip();
            get_icp();
        } else {
            error();
        }
    }

</script>
</html>