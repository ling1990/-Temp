<?php if (!defined('THINK_PATH')) exit();?><ul>
    <?php if(is_array($list)): foreach($list as $key=>$v): ?><li><?php echo ($v["truename"]); ?></li><?php endforeach; endif; ?>
</ul>

<div class="pagination">
    　　<?php echo ($page); ?>
</div>