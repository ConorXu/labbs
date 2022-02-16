
# 基于Laravel框架的文学论坛

![Laravel文学论坛](shouye.png)

### 简介
 1. 采用 Laravel 7 版本框架搭建
 2. 前端使用 Bootstrap3 框架
 3. 使用 Laravel Administrator 来构建论坛管理员后台
 4. 论坛支持用户登陆注册
 5. 论坛用户可以修改个人信息，包括用户名，邮箱，个人简介，头像
 6. 论坛用户可以实现帖子的创建、删除、更改帖子且支持上传图片，顶部导航栏实现了查看通知列表的功能
 7. 非论坛用户仅支持查看帖子和发帖人的简介，不可以回复；论坛用户可以在话题下回复评论，且可以删除回复
 8. 写作功能通过 Simditor 编辑器实现
 9. 右边栏开发了的资源推荐区块
10. 论坛使用 sudo-su 工具来实现用户的切换
11. 开发了自动生成 SEO 友好 URL 的功能。当用户提交发布话题的表单时，程序将调用 百度翻译 接口将话题标题翻译为英文
12. 话题分为四种，诗歌、小说、散文、戏曲，话题列表支持【最后回复】和【最新发布】排序
13. 测试过程中，使用Laravel自带的factory功能实现的假数据，包括用户，用户信息，话题，回复

### 下一步构思
1. 完善论坛的文学元素
2. 实现分类的话题假数据填充
3. 首页使用一个展览视图而非话题视图