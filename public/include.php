<?php $this->need('public/config.php'); ?>
<meta charset="utf-8" />
<meta name="renderer" content="webkit" />
<meta name="format-detection" content="email=no" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
<link rel="shortcut icon" href="<?php $this->options->JFavicon() ?>" />
<title><?php $this->archiveTitle(array('category' => '分类 %s 下的文章', 'search' => '包含关键字 %s 的文章', 'tag' => '标签 %s 下的文章', 'author' => '%s 发布的文章'), '', ' - '); ?><?php $this->options->title(); ?></title>
<?php if ($this->is('single')) : ?>
  <meta name="keywords" content="<?php echo $this->fields->keywords ? $this->fields->keywords : htmlspecialchars($this->_keywords); ?>" />
  <meta name="description" content="<?php echo $this->fields->description ? $this->fields->description : htmlspecialchars($this->_description); ?>" />
  <?php $this->header('keywords=&description='); ?>
<?php else : ?>
  <?php $this->header(); ?>
<?php endif; ?>
<link href="<?php _getAssets('assets/css/joe.mode.min.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/css/joe.normalize.min.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/css/joe.global.min.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/css/joe.responsive.min.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/lib/qmsg/qmsg.min.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/lib/fancybox@3.5.7/fancybox.min.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/lib/animate.css@4.1.1/animate.min.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/lib/font-awesome@4.7.0/font-awesome.min.css'); ?>" rel="stylesheet" />
<link href="<?php _getAssets('assets/lib/APlayer@1.10.1/APlayer.min.css'); ?>" rel="stylesheet" />

<!-- 原来 joe 的 js 移动到 public/footer.php -->
