<div class='comment-form'>
    <form method=post>
         <input type=hidden name="redirect" value="<?=$this->url->create($pageId) . '#comments'?>">
        <input type=hidden name="pageId" value="<?=$pageId?>">
        <fieldset>
        <legend><?=$action?></legend>
        <p class='toggler'><label>Kommentar:<br/><textarea name='content'><?=$content?></textarea></label></p>
        <div class='hidden'>
        <p><label>Namn:<br/><input type='text' name='name' value='<?=$name?>'/></label></p>
        <p><label>Website:<br/><input type='text' name='web' value='<?=$web?>'/></label></p>
        <p><label>Mail:<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p>
 <p class=buttons>
        <?php if(!isset($id)): ?>
            <input type='submit' name='doCreate' value='Skicka kommentar' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
            <input type='submit' name='doRemoveAll' value='Ta bort alla kommentarer' onClick="this.form.action = '<?=$this->url->create('comment/remove-all')?>'"/>
        <?php else: ?>
            <input type='submit' name='doEdit' value='Ändra kommentar' onClick="this.form.action = '<?=$this->url->create('comment/edit') . '?id=' . $id?>'"/>
        </p>
        <?php endif; ?>
        </div>
        <output><?=$output?></output>
        </fieldset>
    </form>
</div>
