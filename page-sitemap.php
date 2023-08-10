<?php
/**
 * 文章列表
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
Breadcrumbs($this); ?>
<article class="post">
    <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
    <div class="post-content" itemprop="articleBody">
        <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li>{year}-{month}-{day} : <a href="{permalink}">{title}</a></li>'); ?>
    </div>
</article>
</div>
<?php if (!$this->options->OneCOL): $this->need('sidebar.php'); endif; ?>
<?php $this->need('footer.php'); ?>