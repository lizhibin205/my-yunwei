# show service
chkconfig --list

nginx          	0:关闭	1:启用	2:启用	3:启用	4:启用	5:启用	6:关闭

等级代号列表：
* 等级0表示：表示关机
* 等级1表示：单用户模式
* 等级2表示：无网络连接的多用户命令行模式
* 等级3表示：有网络连接的多用户命令行模式
* 等级4表示：不可用
* 等级5表示：带图形界面的多用户模式
* 等级6表示：重新启动

# add service

chkconfig --add nginx        #增加nginx服务。

chkconfig --del nginx        #删除nginx服务。

chkconfig --level 2345 nginx on        #设置nginx在运行级别为2、3、4、5的情况下都是on（开启）的状态。
