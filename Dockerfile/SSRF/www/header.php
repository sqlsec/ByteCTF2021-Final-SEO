<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>站长工具</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link href="assets/css/font-awesome.css" rel="stylesheet" crossorigin="anonymous">
    <script src="assets/js/echarts.min.js"></script>
    <script src="assets/js/sweetalert2.js"></script>
    <style>
        .contact-box {
            background-color: #fff;
            padding: 15px;
            margin-bottom: -20px;
            margin-right: 1px;
            margin-left: 1px;
        }

        .stat-percent {
            float: right;
        }

        .custom-href {
            text-decoration: none;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              <use xlink:href="#bootstrap">
                  <svg id="bootstrap" viewBox="0 0 118 94">
                      <title>Bootstrap</title>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
                  </svg>
              </use>
          </svg>
    </a>
    <a class="navbar-brand" href="/">站长工具</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="./" id="dashboard">仪表盘
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="seo.php" id="seo">综合查询</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tools.php" id="tools">辅助工具</a>
        </li>
      </ul>
      <form class="d-flex" method="post">
        <input class="form-control me-sm-2" type="text"  name="keywords" placeholder="搜索点什么吧">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">搜</button>
      </form>
    </div>
  </div>
</nav>

<script>
    var dashboard = document.getElementById("dashboard").getAttribute("class");
    var seo = document.getElementById("seo").getAttribute("class");
    var tools = document.getElementById("tools").getAttribute("class");

    url_path = location.pathname;
    if (url_path.indexOf("seo") != -1){
        seo = seo.concat(" active")
        document.getElementById("seo").setAttribute("class", seo);
        document.title = "站长工具 - 综合查询";
    }
    else if (url_path.indexOf("tools") != -1){
        tools = tools.concat(" active")
        document.getElementById("tools").setAttribute("class", tools);
        document.title = "站长工具 - 辅助工具";
    } else {
        dashboard = dashboard.concat(" active")
        document.getElementById("dashboard").setAttribute("class", dashboard);
    }
</script>