# Typecho 主题 - Initial 简约而不简单（v2.5.5-0）

我的笔记站点自用 fork 版，修改了许多主题细节使其更符合我的审美。

本仓库仅分享自己的修改版，**不处理**任何 issue, pull request，**不提供**任何技术支持，**不保证**持续更新与维护。

主题预览：https://io.zouht.com/

### 修改内容

1. (archive.php) 面包屑导航格式改成：首页 > (分类方式) > (分类条目)
2. (archive.php) 文章标题改为 h1
3. (archive.php) 文章元数据格式修改，删去阅读数量显示
4. (archive.php) 文章摘要使用 `$this->content()` 显示，支持格式渲染（需要手动插入`<!--more-->`）
5. (footer.php) 修改底部主题信息
6. (function.php) 修改版本号的格式
7. (header.php) 引入 `normalize.min.css` 标准化样式
8. (index.php) 修改主题信息
9. (index.php) 首页也显示面包屑导航
10. (index.php) 文章标题修改（同 2）
11. (index.php) 文章元数据修改（同 3）
12. (index.php) 文章摘要修改（同 4）
13. (+normalize.min.css) 新增标准化样式
14. (+page-sitemap.php) 新增文章列表模板（在页面自定义模板里选择）
15. (post.php) 文章元数据修改（同 3）
16. (style.min.css) body 字体大小增大到 17px
17. (style.min.css) 字体集修改，主要区别是西文字体，换成了有衬线的
18. (style.min.css) 代码块取消滚动条，一律全部展开
19. (style.min.css) 文章元数据字体大小增大到 1em
20. (style.min.css) 一律打开 border-bottom 文章列表分割线
21. (style.min.css) 文章内 h1 标题底部横线
22. (style.min.css) 文章内 h2 标题底部灰色阴影
