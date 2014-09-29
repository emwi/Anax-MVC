<hr>

<h2>Kommentarer</h2>

<?php if (is_array($comments)) : ?>
<div class='comments'>

<?php foreach ($comments as $id => $comment) : ?>

<div class="comment">
<div class="commentImgSpace">
<img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($comment['mail']))) . "?s=50"; ?>"></div>
<div class="commentContSpace">
<h4><?=$comment['name']?></h4>
<p><?=$comment['content']?></p></div>
<div class="commentInfoSpace">
<div class='links'><?=date('Y-m-d H:i', $comment['timestamp'])?> |
<a href='mailto:<?=$comment['mail']?>'>mail</a> |
<a href="http://<?=$comment['web']?>" target="_blank">website</a> |
<a href="<?=$this->url->create('comment/remove') . '?id=' . $id. '&pageId=' . $pageId?>" title='Ta bort kommentar'>Ta bort kommentar</a> |
<a href="<?=$this->url->create($pageId) . '?id=' . $id . '#comments'?>" title='Ändra kommentar'>Ändra kommentar</a>
</div></div>
</div>
<div class='clear'></div>
<hr>
<?php endforeach; ?>
</div>
<?php endif; ?>
