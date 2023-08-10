<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
<div class="breadcrumbs"><a href="<?php $this->options->siteUrl(); ?>">首页</a> &raquo; <?php $this->archiveTitle(array(
'category'  =>  _t('分类 &raquo; %s'),
'search'    =>  _t('搜索 &raquo; %s'),
'tag'       =>  _t('标签 &raquo; %s'),
'date'      =>  _t('日期 &raquo; %s'),
'author'    =>  _t('作者 &raquo; %s')
), '', ''); ?></div>
<?php if ($this->have()): ?>
<?php while($this->next()): ?>
<article class="post<?php if ($this->options->PjaxOption && $this->hidden): ?> protected<?php endif; ?>">
<h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
<ul class="post-meta">
<li><?php _e('时间：'); $this->date(); ?></li>
<li><?php _e('分类：'); $this->category(',', false); ?></li>
<li><?php $this->commentsNum('暂无评论', '%d 条评论'); ?></li>
</ul>
<div class="post-content">
<?php if ($this->options->PjaxOption && $this->hidden): ?>
<form <?php if (!$this->options->AjaxLoad): ?>action="<?php echo Typecho_Widget::widget('Widget_Security')->getTokenUrl($this->permalink); ?>" <?php endif; ?>method="post">
<p class="word">请输入密码访问</p>
<p>
<input type="password" class="text" name="protectPassword" />
<input type="submit" class="submit" value="提交" />
</p>
</form>
<?php else: ?>
<?php if (postThumb($this)): ?>
<p class="thumb"><?php echo postThumb($this); ?></p>
<?php endif; ?>
<p><?php $this->content('- 阅读剩余部分 -'); ?></p>
<?php endif; ?>
</div>
</article>
<?php endwhile; ?>
<?php else: ?>
<article class="post">
<h2 class="post-title">没有找到内容</h2>
</article>
<?php endif; ?>
<?php $this->pageNav('上一页', $this->options->AjaxLoad ? '查看更多' : '下一页', 0, '..', $this->options->AjaxLoad ? array('wrapClass' => 'page-navigator ajaxload') : ''); ?>
</div>
<?php if (!$this->options->OneCOL): $this->need('sidebar.php'); endif; ?>
<?php $this->need('footer.php'); ?>