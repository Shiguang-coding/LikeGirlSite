<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>温馨提醒 - </strong> 基于<a href="https://gitee.com/kiCode111/LikeGirl_5.1.0">原作者</a>开源版本的继续开发 -- Loong 2024-10-23
    <button type="button" id="myButton" class="btn btn-secondary btn-rounded" data-toggle='modal' data-target='#bs-example-modal-lg'>查看介绍</button>
</div>

<?php if ($login['user'] == $adminuser): ?>
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning - </strong> 当前账号为默认账号 请尽快修改！
    </div>
<?php endif; ?>

<?php if ($login['pw'] == md5($adminpw)): ?>
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning - </strong> 当前密码为默认密码 请尽快修改！
    </div>
<?php endif; ?>


<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">欢迎使用LikeGirl情侣小站</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                    <h4>最新版本更新详情</h4>
                    <ul>
                        <li>新增前端点点滴滴加密访问 管理员无需输入密码</li>
                        <li>新增前端恋爱相册加密访问 管理员无需输入密码</li>
                        <li>新增邮件提醒功能 管理员登录后台邮件发送频率时间可设置</li>
                        <li>新增前端留言页支持游客留言选站点预选随机头像</li>
                        <li>新增站点维护中提醒页面 管理员可在后台开启页面维护 支持自定义标题背景等信息</li>
                        <li>新增管理员登录后台单独控制邮件通知开关</li>
                        <li>新增图片文件管理页面 允许对本地图片文件进行复制、删除操作</li>
                        <li>新增本地上传图片自动添加水印、压缩图片质量等配置</li>
                        <li>后台部分页面新增在线上传图片提取外链悬浮按钮 支持点击按钮复制</li>
                        <li>新增后台设置情侣头像信息 支持预览头像效果</li>
                        <li>新增恋爱日期自定义排序权重</li>
                    </ul>

                    <ul>
                        <li>新增前端点点滴滴加密访问 管理员无需输入密码</li>
                        <li>新增前端恋爱相册加密访问 管理员无需输入密码</li>
                        <li>新增邮件提醒功能 管理员登录后台邮件发送频率时间可设置</li>
                        <li>新增前端留言页支持游客留言选站点预选随机头像</li>
                        <li>新增站点维护中提醒页面 管理员可在后台开启页面维护 支持自定义标题背景等信息</li>
                        <li>新增管理员登录后台单独控制邮件通知开关</li>
                        <li>新增图片文件管理页面 允许对本地图片文件进行复制、删除操作</li>
                        <li>新增本地上传图片自动添加水印、压缩图片质量等配置</li>
                        <li>后台部分页面新增在线上传图片提取外链悬浮按钮 支持点击按钮复制</li>
                        <li>新增后台设置情侣头像信息 支持预览头像效果</li>
                        <li>新增恋爱日期自定义排序权重</li>
                    </ul>

                    <ul>
                        <li>修复倒计时日期过期后自动往后一年的问题 修复为每年自动判断</li>
                        <li>修复前端后端已知Bug</li>
                        <li>修复后台修改全局设置相关信息时导致需重新登录问题</li>
                        <li>修复后台留言管理点击游客IP信息封禁IP</li>
                    </ul>

                    <hr>

                    <ul>
                        <li>新增在线安装向导页面 无需手动导入数据库和修改数据库信息配置文件</li>
                        <li>优化前/后端已知Bug</li>
                        <li>调整前端部分页面样式</li>
                        <li>调整前端恋爱事件支持多图上传预览</li>
                        <li>调整前端恋爱事件 当前事件已上传图片小图标提示位置定位问题</li>
                        <li>调整前端恋爱日期标题超出宽度后省略号隐藏内容 鼠标移入后显示完整内容</li>
                        <li>调整前端点点滴滴发布时间/发布地址位置样式调整</li>
                        <li>修复后台查看非法页面内容时存在Xss漏洞问题</li>

                        <hr>

                        <li>优化首页情侣昵称样式</li>
                        <li>优化获取IP归属地字段为空</li>
                        <li>优化邮件发信模板样式</li>
                        <li>优化后台登录时显示未知错误问题</li>
                        <li>优化首页恋爱纪念日部分样式</li>
                        <li>优化后台页面已知bug</li>
                        <li>优化移动端留言页用户输入无法看到留言框内容问题</li>
                        <li>新增邮件发信开关功能</li>
                        <li>新增前端首页点点滴滴跳转按钮</li>
                        <li>新增后台管理员登录记录相关信息</li>
                        <li>新增后台登录自动获取当前用户头像昵称信息</li>
                        <li>新增后台发布内容时自动优先选择当前登录用户昵称</li>
                        <li>新增留言页游客留言显示操作系统、浏览器信息</li>
                    </ul>
                    <!-- <img src="https://www.kikiw.cn/liuyi.png" alt=""> -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">关闭</button>
                <!-- <button type="button" class="btn btn-primary"><a target="_blank" style="color: #fff;"
                        href="https://blog.kikiw.cn/index.php/archives/65/">查看详情</a></button> -->
            </div>
        </div>
    </div>
</div>


<style>
    .modal-body img {
        width: 100%;
    }

    .modal-body ul li {
        line-height: 2rem
    }
</style>