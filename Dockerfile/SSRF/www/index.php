<!doctype html>
<html>
<?php include('header.php'); ?>
<body>
    <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="row">
                <div class="row">
                    <div class="col-md-3 col-sm-12" style="display: flex; flex-direction: column;justify-content: center;height:100px; text-align: center;">
                        <h4>SEO综合查询</h4>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form method="post" action="seo.php">
                        <div class="form-group" style="display: flex; flex-direction: column;justify-content: center;height:100px;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="请输入需要查询的网站" name="domain">
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
                    <font style="vertical-align: inherit;">趋势统计</font>
                </font>
            </h6>
            <div class="container px-4 py-5" id="icon-grid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row contact-box">
                            <div class="col-md-4 col-sm-4">
                                <img alt="SweetScape 010 Editor" class="img-fluid" src="./assets//imgs/1.png">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h3 class="text-primary">90.87 亿</h3>
                                <small>长尾词总量</small>
                                    <div class="stat-percent text-success">28% <i class="fa fa-level-up"></i>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="row contact-box">
                            <div class="col-sm-4">
                                <img alt="SweetScape 010 Editor" class="img-fluid" src="./assets//imgs/3.png">
                            </div>
                            <div class="col-sm-8">
                                <h3 class="text-primary">3,721,485</h3>
                                <small>今日新增量</small>
                                    <div class="stat-percent text-danger">10% <i class="fa fa-level-down"></i>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="row contact-box">
                            <div class="col-sm-4">
                                <img alt="SweetScape 010 Editor" class="img-fluid" src="./assets//imgs/2.png">
                            </div>
                            <div class="col-sm-8">
                                <h3 class="text-primary">732,338,474</h3>
                                <small>竞价关键词</small>
                                    <div class="stat-percent text-success">8% <i class="fa fa-level-up"></i>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="row contact-box">
                            <div class="col-sm-4">
                                <img alt="SweetScape 010 Editor" class="img-fluid" src="./assets//imgs/4.png">
                            </div>
                            <div class="col-sm-8">
                                <h3 class="text-primary">2,393,724</h3>
                                <small>指数关键词</small>
                                    <div class="stat-percent text-danger">5% <i class="fa fa-level-down"></i>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">当前数据</font>
                </font>
            </h6>
            <div class="container px-4 py-5" id="icon-grid">
                <div class="row">
                    <div class="col-md-4  col-sm-12">
                        <h6 class="text-success"><i class="fa fa-level-up"></i> 权重暴涨榜</h6>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">排名</th>
                                <th scope="col">网站</th>
                                <th scope="col">权重</th>
                                <th scope="col">增长</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="text-primary">1</th>
                                <td><a href="#" class="custom-href">life.bytedance.com</a></td>
                                <td>4</td>
                                <td class="text-success">4 <i class="fa fa-level-up"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-danger">2</th>
                                <td><a href="#" class="custom-href">word.bytedance.com</a></td>
                                <td>4</td>
                                <td class="text-success">3 <i class="fa fa-level-up"></i> </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-warning">3</th>
                                <td><a href="#" class="custom-href">small.bytedance.com</a></td>
                                <td>5</td>
                                <td class="text-success">3 <i class="fa fa-level-up"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-info">4</th>
                                <td><a href="#" class="custom-href">day.bytedance.com</a></td>
                                <td>4</td>
                                <td class="text-success">3 <i class="fa fa-level-up"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-success">5</th>
                                <td><a href="#" class="custom-href"><a href="#" class="custom-href">amazing.bytedance.com</a></td>
                                <td>4</td>
                                <td class="text-success">2 <i class="fa fa-level-up"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div id="main" style="width: auto;height:100%;">
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-danger"><i class="fa fa-level-down"></i> 权重暴跌榜</h6>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">排名</th>
                                <th scope="col">网站</th>
                                <th scope="col">权重</th>
                                <th scope="col">下降</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="text-primary">1</th>
                                <td><a href="#" class="custom-href">exec.bytedance.com</a></td>
                                <td>4</td>
                                <td class="text-danger">4 <i class="fa fa-level-down"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-danger">2</th>
                                <td><a href="#" class="custom-href">sql.bytedance.com</a></td>
                                <td>4</td>
                                <td class="text-danger">3 <i class="fa fa-level-down"></i> </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-warning">3</th>
                                <td><a href="#" class="custom-href">data.bytedance.com</a></td>
                                <td>5</td>
                                <td class="text-danger">3 <i class="fa fa-level-down"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-info">4</th>
                                <td><a href="#" class="custom-href">info.bytedance.com</a></td>
                                <td>4</td>
                                <td class="text-danger">3 <i class="fa fa-level-down"></i></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-success">5</th>
                                <td><a href="#" class="custom-href"><a href="#" class="custom-href">sword.bytedance.com</a></td>
                                <td>4</td>
                                <td class="text-danger">2 <i class="fa fa-level-down"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </main>

</body>
<?php include('footer.php')?>
<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '用户访问来源',
            left: 'center'
        },
        tooltip: {
            trigger: 'item'
        },
        legend: {
            bottom: 10,
            left: 'center',
        },
        series: [
            {
                name: '访问来源',
                type: 'pie',
                radius: '50%',
                data: [
                    {value: 1048, name: '搜索引擎'},
                    {value: 735, name: '直接访问'},
                    {value: 580, name: '邮件营销'},
                    {value: 484, name: '联盟广告'},
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>
</html>