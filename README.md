# Dear

Theme URI: https://yayu.net/projects/wordpress-dear

Author URI: https://yayu.net/

Description: 极极简主题，无 JS、CSS 文件载入，对程序极简优化。样式复刻于 Bear 示例主题。主题支持自定义背景、自定义菜单、自定义首页内容，支持黑暗模式；内置文章归档模板；已作中文字体优化，内置3种字体方案可选。主题仅10个文件共49kb。

Tags: blog, one-column, full-width-template, minimalism

Contributors: Jeff Chen

Version: 1.0

Requires at least: 4.5

Requires PHP: 5.6

Tested up to: 6.4.1

License: CC BY-NC-SA 4.0 DEED

License URI: https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh-hans


## 主题介

本主题复刻于 Bear 示例主题。既然是复刻“bear”，那本主题就姑且叫 “dear” 吧，亲爱的。

本主题为极极简主题，无 JS、CSS 文件载入，无分页，无评论，对程序极简优化。主题支持自定义背景、自定义菜单、自定义首页内容，支持黑暗模式；内置文章归档模板；已作中文字体优化，内置3种字体方案可选。力求极简，对程序自带功能进行禁用，若对使用有影响，酌情删除即可。


## 使用方法

1. 上传并激活主题后，在“外观”》“主题文件编辑器”中对 index.php 文件的第3行 $article_id 进行修改，将 “2” 修改为你需要在首页外露内容的页面 ID。
2. 主题已内置3种字体方案，分别为雅黑、仿宋和宋体。如需要调整字体，在“外观”》“主题文件编辑器”中选择编辑 header.php 文件，根据提示对第38行进行修改。
3. 分类/标签列表不支持分页。如需调整，使用代码编辑器修改主题内 funcitons.php 文件，按提示修改第15行“文章数设置”部分的数量。
4. 若希望一个页面显示所有分类的文章，可新建页面并在“页面属性”的“模板”一项中选择“所有文章”模板，文章按年月分组，主题已内置。


## 页面模板/所有文章

1. 创建一个新的页面，或选择一个已有页面；
2. 编辑状态，在“页面属性”的“模板”一项中选择“所有文章”模板。

该模板按年月展示博客所有文章。


## 常见问题

### 主题禁用功能和插件冲突怎么办？

使用代码编辑器打开主题内 functions.php，删除冲突部分的代码，上传文件替换即可。

### 首页显示的文章数太多/太少怎么办？

使用代码编辑器修改主题内 funcitons.php 文件，按提示修改第15行“文章数设置”部分的数量，上传文件替换即可。
