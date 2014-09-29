<div class='comment-form'>
    <form method=post>
        <input type=hidden name="redirect" value="<?=$this->url->create('')?>"/>
        <input type=hidden name="id" value="<?=$id?>"/>
        <h3>Ändra kommentar</h3>
        <p><label>Kommentar<br/><textarea name='content'><?=$content?></textarea></label></p>
        <p><label>Namn<br/><input type='text' name='name' value='<?=$name?>'/></label></p>
        <p><label>Website<br/><input type='text' name='web' value='<?=$web?>'/></label></p>
        <p><label>Mail<br/><input type='text' name='mail' value='<?=$mail?>'/></label></p>
        <p class=buttons>
            <input type='submit' name='doSave' value='Spara' 
            onClick="this.form.action = '<?=$this->url->create('comment/save')?>'"/>
        </p>
    </form>
</div> 
