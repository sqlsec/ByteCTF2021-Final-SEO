# 运行测试

在 Dockerfile 当前目录下执行如下命令运行测试容器：

```bash
# build 构建镜像
docker build -t docker-ssrf:v1 . 

# 将容器的 80 端口映射到物理机的 80 端口
docker run -d -p 80:80 docker-ssrf:v1
```

