<footer class="joe_footer">
  <div class="joe_container">
    <div class="item">
      <?php $this->options->JFooter_Left() ?>
    </div>
    <?php if ($this->options->JBirthDay) : ?>
      <div class="item run">
        <span>已运行 <strong class="joe_run__day">00</strong> 天 <strong class="joe_run__hour">00</strong> 时 <strong class="joe_run__minute">00</strong> 分 <strong class="joe_run__second">00</strong> 秒</span>
      </div>
    <?php endif; ?>
    <div class="item">
      <?php $this->options->JFooter_Right() ?>
    </div>
  </div>
</footer>

<div class="joe_action">
  <div class="joe_action_item scroll">
    <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
      <path d="M725.902 498.916c18.205-251.45-93.298-410.738-205.369-475.592l-6.257-3.982-6.258 3.414c-111.502 64.853-224.711 224.142-204.8 475.59-55.751 53.476-80.214 116.623-80.214 204.8v15.36l179.2-35.27c11.378 40.39 58.596 69.973 113.21 69.973 54.613 0 101.262-29.582 112.64-68.836l180.337 36.41v-15.36c-.569-89.885-25.031-153.6-82.489-206.507zM571.733 392.533c-33.564 31.29-87.04 28.445-118.329-5.12s-28.444-87.04 5.12-117.76c33.565-31.289 87.04-28.444 118.33 5.12s28.444 86.471-5.12 117.76zm-56.32 368.64c-35.84 0-64.284 29.014-64.284 64.285 0 35.84 54.044 182.613 64.284 182.613s64.285-146.773 64.285-182.613c0-35.271-29.014-64.285-64.285-64.285z" />
    </svg>
  </div>
  <div class="joe_action_item mode">
    <svg class="icon-1" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
      <path d="M587.264 104.96c33.28 57.856 52.224 124.928 52.224 196.608 0 218.112-176.128 394.752-393.728 394.752-29.696 0-58.368-3.584-86.528-9.728C223.744 832.512 369.152 934.4 538.624 934.4c229.376 0 414.72-186.368 414.72-416.256 1.024-212.992-159.744-389.12-366.08-413.184z" />
      <path d="M340.48 567.808l-23.552-70.144-70.144-23.552 70.144-23.552 23.552-70.144 23.552 70.144 70.144 23.552-70.144 23.552-23.552 70.144zM168.96 361.472l-30.208-91.136-91.648-30.208 91.136-30.208 30.72-91.648 30.208 91.136 91.136 30.208-91.136 30.208-30.208 91.648z" />
    </svg>
    <svg class="icon-2" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
      <path d="M234.24 512a277.76 277.76 0 1 0 555.52 0 277.76 277.76 0 1 0-555.52 0zM512 187.733a42.667 42.667 0 0 1-42.667-42.666v-102.4a42.667 42.667 0 0 1 85.334 0v102.826A42.667 42.667 0 0 1 512 187.733zm-258.987 107.52a42.667 42.667 0 0 1-29.866-12.373l-72.96-73.387a42.667 42.667 0 0 1 59.306-59.306l73.387 72.96a42.667 42.667 0 0 1 0 59.733 42.667 42.667 0 0 1-29.867 12.373zm-107.52 259.414H42.667a42.667 42.667 0 0 1 0-85.334h102.826a42.667 42.667 0 0 1 0 85.334zm34.134 331.946a42.667 42.667 0 0 1-29.44-72.106l72.96-73.387a42.667 42.667 0 0 1 59.733 59.733l-73.387 73.387a42.667 42.667 0 0 1-29.866 12.373zM512 1024a42.667 42.667 0 0 1-42.667-42.667V878.507a42.667 42.667 0 0 1 85.334 0v102.826A42.667 42.667 0 0 1 512 1024zm332.373-137.387a42.667 42.667 0 0 1-29.866-12.373l-73.387-73.387a42.667 42.667 0 0 1 0-59.733 42.667 42.667 0 0 1 59.733 0l72.96 73.387a42.667 42.667 0 0 1-29.44 72.106zm136.96-331.946H878.507a42.667 42.667 0 1 1 0-85.334h102.826a42.667 42.667 0 0 1 0 85.334zM770.987 295.253a42.667 42.667 0 0 1-29.867-12.373 42.667 42.667 0 0 1 0-59.733l73.387-72.96a42.667 42.667 0 1 1 59.306 59.306l-72.96 73.387a42.667 42.667 0 0 1-29.866 12.373z" />
    </svg>
  </div>
</div>

<!-- joe public/include.php 的 js 移动到这 -->
<script src="<?php _getAssets('assets/lib/jquery@3.6.1/jquery.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/lib/scroll/scroll.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/lib/lazysizes@5.3.2/lazysizes.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/lib/APlayer@1.10.1/APlayer.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/lib/sketchpad/sketchpad.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/lib/fancybox@3.5.7/fancybox.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/lib/extend/extend.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/lib/qmsg/qmsg.min.js'); ?>"></script>
<?php if ($this->options->JAside_3DTag === 'on') : ?>
  <script src="<?php _getAssets('assets/lib/3dtag/3dtag.min.js'); ?>"></script>
<?php endif; ?>
<script src="<?php _getAssets('assets/lib/smooth/smooth.min.js'); ?>" async></script>
<?php if ($this->options->JCursorEffects && $this->options->JCursorEffects !== 'off') : ?>
  <script src="<?php _getAssets('assets/cursor/' . $this->options->JCursorEffects); ?>" async></script>
<?php endif; ?>
<script src="<?php _getAssets('assets/js/joe.global.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/js/joe.short.min.js'); ?>"></script>
<?php $this->options->JCustomHeadEnd() ?>
<!-- joe public/include.php 的 js 移动到这 -->

<!-- joe index.php 的 js 移动到这 -->
<script src="<?php _getAssets('assets/lib/swiper@5.4.5/swiper.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/lib/wowjs@1.1.3/wow.min.js'); ?>"></script>
<script src="<?php _getAssets('assets/js/joe.index.min.js'); ?>"></script>
<!-- joe index.php 的 js 移动到这 -->

<script>
  <?php
  $cookie = Typecho_Cookie::getPrefix();
  $notice = $cookie . '__typecho_notice';
  $type = $cookie . '__typecho_notice_type';
  ?>
  <?php if (isset($_COOKIE[$notice]) && isset($_COOKIE[$type]) && ($_COOKIE[$type] == 'success' || $_COOKIE[$type] == 'notice' || $_COOKIE[$type] == 'error')) : ?>
    Qmsg.info("<?php echo preg_replace('#\[\"(.*?)\"\]#', '$1', $_COOKIE[$notice]); ?>！")
  <?php endif; ?>
  <?php
  Typecho_Cookie::delete('__typecho_notice');
  Typecho_Cookie::delete('__typecho_notice_type');
  ?>
  console.log("%c页面加载耗时：<?php _endCountTime(); ?> | Theme By Joe", "color:#fff; background: linear-gradient(270deg, #986fee, #8695e6, #68b7dd, #18d7d3); padding: 8px 15px; border-radius: 0 15px 0 15px");
  <?php $this->options->JCustomScript() ?>
</script>

<?php $this->options->JCustomBodyEnd() ?>

<?php $this->footer(); ?>