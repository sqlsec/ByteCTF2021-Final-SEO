<!doctype html>
<html>
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
                    <h4>网站测速</h4>
                    <span id="flag" value="<?php echo $flag; ?>"></span>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form method="post" action="tools.php">
                        <div class="form-group" style="display: flex; flex-direction: column;justify-content: center;height:100px;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入需要测速的网站" name="domain" id="domain" value="<?php echo $domain; ?>">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">测速</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div id="speed" style="width: auto;height:40vh;">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <h6 class="text-primary text-center"><i class="fa fa-dashboard"></i> 最近测速 <i class="fa fa-dashboard"></i></h6>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">序号</th>
                        <th scope="col">网站</th>
                        <th scope="col">速度</th>
                        <th scope="col">评分</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="text-dark">1</th>
                        <td><a id="domain1" class="custom-href">exec.bytedance.com</a></td>
                        <td id="speed1">20 MB/s</td>
                        <td id="style1" class="text-danger">卡</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-dark">2</th>
                        <td><a id="domain2" class="custom-href">sql.bytedance.com</a></td>
                        <td id="speed2">40 MB/s</td>
                        <td id="style2" class="text-warning">良</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-dark">3</th>
                        <td><a id="domain3" class="custom-href">data.bytedance.com</a></td>
                        <td id="speed3">60 MB/s</td>
                        <td id="style3" class="text-info">中</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-dark">4</th>
                        <td><a id="domain4" class="custom-href">info.bytedance.com</a></td>
                        <td id="speed4">80 MB/s</td>
                        <td id="style4" class="text-success">快</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-dark">5</th>
                        <td><a id="domain5" class="custom-href">sword.bytedance.com</a></td>
                        <td id="speed5">90 MB/s</td>
                        <td id="style5" class="text-success">快</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 col-sm-12">
                <div id="score" style="width: auto;height:40vh;">
                </div>
            </div>
        </div>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">网站类别词库</font>
            </font>
        </h6>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">阅读</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><small class="text-muted fw-light">竞争站</small>：581</li>
                        <li><small class="text-muted fw-light">词量</small>：7.8万</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary" onclick=window.open("api/word.php?src=68df8a.txt")>查看词库</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">游戏</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><small class="text-muted fw-light">竞争站</small>：2543</li>
                        <li><small class="text-muted fw-light">词量</small>：19.3万</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary" onclick=window.open("api/word.php?src=6b77af.txt")>查看词库</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">动漫</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><small class="text-muted fw-light">竞争站</small>：546</li>
                        <li><small class="text-muted fw-light">词量</small>：3.8万</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary" onclick=window.open("api/word.php?src=285768.txt")>查看词库</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">美食</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><small class="text-muted fw-light">竞争站</small>：191</li>
                        <li><small class="text-muted fw-light">词量</small>：2.6万</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary" onclick=window.open("api/word.php?src=a7eb07.txt")>查看词库</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">房产</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><small class="text-muted fw-light">竞争站</small>：1923</li>
                        <li><small class="text-muted fw-light">词量</small>：4.5万</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary" onclick=window.open("api/word.php?src=ca4c0d.txt")>查看词库</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3 rounded-3 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">金融</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><small class="text-muted fw-light">竞争站</small>：734</li>
                        <li><small class="text-muted fw-light">词量</small>：2.2万</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary" onclick=window.open("api/word.php?src=22b489.txt")>查看词库</button>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
<?php include('footer.php')?>

<script type="text/javascript">
    var myChart1 = echarts.init(document.getElementById('speed'));
    var myChart2 = echarts.init(document.getElementById('score'));

    var option1 = {
        series: [{
            type: 'gauge',
            progress: {
                show: true,
                width: 18
            },
            axisLine: {
                lineStyle: {
                    width: 18
                }
            },
            axisTick: {
                show: false
            },
            splitLine: {
                length: 15,
                lineStyle: {
                    width: 2,
                    color: '#999'
                }
            },
            axisLabel: {
                distance: 25,
                color: '#999',
                fontSize: 20
            },
            anchor: {
                show: true,
                showAbove: true,
                size: 25,
                itemStyle: {
                    borderWidth: 10
                }
            },
            title: {
                show: false
            },
            detail: {
                valueAnimation: true,
                fontSize: 30,
                formatter: '{value} MB/s',
                offsetCenter: [0, '70%']
            },
            data: [{
                value: 0
            }]
        }]
    };

    var option2 = {
        series: [{
            type: 'gauge',
            startAngle: 180,
            endAngle: 0,
            min: 0,
            max: 1,
            splitNumber: 8,
            axisLine: {
                lineStyle: {
                    width: 6,
                    color: [
                        [0.25, '#FF6E76'],
                        [0.5, '#FDDD60'],
                        [0.75, '#58D9F9'],
                        [1, '#7CFFB2']
                    ]
                }
            },
            pointer: {
                icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
                length: '12%',
                width: 20,
                offsetCenter: [0, '-60%'],
                itemStyle: {
                    color: 'auto'
                }
            },
            axisTick: {
                length: 12,
                lineStyle: {
                    color: 'auto',
                    width: 2
                }
            },
            splitLine: {
                length: 20,
                lineStyle: {
                    color: 'auto',
                    width: 5
                }
            },
            axisLabel: {
                color: '#464646',
                fontSize: 20,
                distance: -60,
                formatter: function (value) {
                    if (value === 0.875) {
                        return '快';
                    }
                    else if (value === 0.625) {
                        return '中';
                    }
                    else if (value === 0.375) {
                        return '良';
                    }
                    else if (value === 0.125) {
                        return '卡';
                    }
                }
            },
            title: {
                offsetCenter: [0, '65%'],
                fontSize: 30
            },
            detail: {
                fontSize: 30,
                offsetCenter: [0, '0%'],
                valueAnimation: true,
                formatter: function (value) {
                    return Math.round(value * 100) + '分';
                },
                color: 'auto'
            },
            data: [{
                value: 0.0,
                name: '速度评分'
            }]
        }]
    };

    myChart1.setOption(option1);
    myChart2.setOption(option2);
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

    function error(){
        Swal.fire({
            icon: 'error',
            title: '网址格式有误'
        })
    }

    function get_domain_speed(){
        var xmlhttp=new XMLHttpRequest();
        var url="api/speed.php";
        var type="POST";
        xmlhttp.open(type,url,true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("domain=" + domain);
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                var domain_json = JSON.parse(xmlhttp.response);
                var myChart3 = echarts.init(document.getElementById('speed'));
                var myChart4 = echarts.init(document.getElementById('score'));
                var option3 = {
                    series: [{
                        type: 'gauge',
                        progress: {
                            show: true,
                            width: 18
                        },
                        axisLine: {
                            lineStyle: {
                                width: 18
                            }
                        },
                        axisTick: {
                            show: false
                        },
                        splitLine: {
                            length: 15,
                            lineStyle: {
                                width: 2,
                                color: '#999'
                            }
                        },
                        axisLabel: {
                            distance: 25,
                            color: '#999',
                            fontSize: 20
                        },
                        anchor: {
                            show: true,
                            showAbove: true,
                            size: 25,
                            itemStyle: {
                                borderWidth: 10
                            }
                        },
                        title: {
                            show: false
                        },
                        detail: {
                            valueAnimation: true,
                            fontSize: 30,
                            formatter: '{value} MB/s',
                            offsetCenter: [0, '70%']
                        },
                        data: [{
                            value: domain_json.speed
                        }]
                    }]
                };

                var option4 = {
                    series: [{
                        type: 'gauge',
                        startAngle: 180,
                        endAngle: 0,
                        min: 0,
                        max: 1,
                        splitNumber: 8,
                        axisLine: {
                            lineStyle: {
                                width: 6,
                                color: [
                                    [0.25, '#FF6E76'],
                                    [0.5, '#FDDD60'],
                                    [0.75, '#58D9F9'],
                                    [1, '#7CFFB2']
                                ]
                            }
                        },
                        pointer: {
                            icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
                            length: '12%',
                            width: 20,
                            offsetCenter: [0, '-60%'],
                            itemStyle: {
                                color: 'auto'
                            }
                        },
                        axisTick: {
                            length: 12,
                            lineStyle: {
                                color: 'auto',
                                width: 2
                            }
                        },
                        splitLine: {
                            length: 20,
                            lineStyle: {
                                color: 'auto',
                                width: 5
                            }
                        },
                        axisLabel: {
                            color: '#464646',
                            fontSize: 20,
                            distance: -60,
                            formatter: function (value) {
                                if (value === 0.875) {
                                    return '快';
                                }
                                else if (value === 0.625) {
                                    return '中';
                                }
                                else if (value === 0.375) {
                                    return '良';
                                }
                                else if (value === 0.125) {
                                    return '卡';
                                }
                            }
                        },
                        title: {
                            offsetCenter: [0, '65%'],
                            fontSize: 30
                        },
                        detail: {
                            fontSize: 30,
                            offsetCenter: [0, '0%'],
                            valueAnimation: true,
                            formatter: function (value) {
                                return Math.round(value * 100) + '分';
                            },
                            color: 'auto'
                        },
                        data: [{
                            value: domain_json.score,
                            name: '速度评分'
                        }]
                    }]
                };

                myChart3.setOption(option3);
                myChart4.setOption(option4);
            }
        }
    }

    function get_random_domain(){
        var xmlhttp=new XMLHttpRequest();
        var url="api/random.php?domain="+domain;
        var type="GET";
        xmlhttp.open(type,url,true);
        xmlhttp.send();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                var random_domain_json = JSON.parse(xmlhttp.response);
                document.getElementById("domain1").innerText = random_domain_json.domain1;
                document.getElementById("domain2").innerText = random_domain_json.domain2;
                document.getElementById("domain3").innerText = random_domain_json.domain3;
                document.getElementById("domain4").innerText = random_domain_json.domain4;
                document.getElementById("domain5").innerText = random_domain_json.domain5;


                document.getElementById("speed1").innerText = random_domain_json.speed1+" MB/s";
                document.getElementById("speed2").innerText = random_domain_json.speed2+" MB/s";
                document.getElementById("speed3").innerText = random_domain_json.speed3+" MB/s";
                document.getElementById("speed4").innerText = random_domain_json.speed4+" MB/s";
                document.getElementById("speed5").innerText = random_domain_json.speed5+" MB/s";

                document.getElementById("style1").innerText = random_domain_json.score1;
                document.getElementById("style2").innerText = random_domain_json.score2;
                document.getElementById("style3").innerText = random_domain_json.score3;
                document.getElementById("style4").innerText = random_domain_json.score4;
                document.getElementById("style5").innerText = random_domain_json.score5;

                document.getElementById("style1").setAttribute("class", random_domain_json.style1);
                document.getElementById("style2").setAttribute("class", random_domain_json.style2);
                document.getElementById("style3").setAttribute("class", random_domain_json.style3);
                document.getElementById("style4").setAttribute("class", random_domain_json.style4);
                document.getElementById("style5").setAttribute("class", random_domain_json.style5);
            }

        }
    }

    var domain = document.getElementById("domain").value;
    console.log(domain);

    if(domain){
        if(checkURL(domain)){
            get_domain_speed();
            get_random_domain();
        } else {
            error();
        }
    }
</script>
</html>