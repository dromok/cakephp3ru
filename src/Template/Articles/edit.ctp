<h1>Edit Article</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('title');
echo $this->Form->input('body', ['style' => 'display:none;']);
?>
<div id="bodyedit" contenteditable="true"><?=$article->body;?></div>
<?
echo $this->Form->button(__('Save Article'));
echo $this->Form->end();
?>
<script type="text/javascript">
    $(document).ready(

    );
</script>