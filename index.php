<?php
/**
 * Initial - 简约而不简单
 * 还原本质 勿忘初心
 * 
 * @package Initial (ChrisKim Fork)
 * @author ChrisKim (JIElive)
 * @version 2.5.5-ChrisKim
 * @link https://io.zouht.com/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
<div class="breadcrumbs"><a href="<?php $this->options->siteUrl(); ?>">首页</a></div>
<?php if ($this->_currentPage == 1 && !empty($this->options->ShowWhisper) && in_array('index', $this->options->ShowWhisper)): ?>
<article class="post whisper">
<?php Whisper(); ?>
</article>
<?php endif; ?>
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
<?php $this->pageNav('上一页', $this->options->AjaxLoad ? '查看更多' : '下一页', 0, '..', $this->options->AjaxLoad ? array('wrapClass' => $this->options->AjaxLoad == 'auto' ? 'page-navigator ajaxload auto' : 'page-navigator ajaxload') : ''); ?>
</div>
<?php if (!$this->options->OneCOL): $this->need('sidebar.php'); endif; ?>
<?php $this->need('footer.php'); ?>