<?php
/**
* WoltLab Community Framework
* language: en
* encoding: UTF-8
* category: wcf.attachment
* generated at Tue, 13 Aug 2013 17:19:32 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.attachment.add'] = 'Add attachments';
$this->items[$this->languageID]['wcf.attachment.addUploadField'] = 'Add another upload entry';
$this->items[$this->languageID]['wcf.attachment.attachmentID'] = 'ID';
$this->items[$this->languageID]['wcf.attachment.attachmentName'] = 'File name';
$this->items[$this->languageID]['wcf.attachment.attachmentSize'] = 'Attachment size';
$this->items[$this->languageID]['wcf.attachment.attachments'] = 'Attachments';
$this->items[$this->languageID]['wcf.attachment.button.upload'] = 'Upload';
$this->items[$this->languageID]['wcf.attachment.containerType'] = 'Type';
$this->items[$this->languageID]['wcf.attachment.delete.sure'] = 'Are you sure you want to remove this attachment?';
$this->items[$this->languageID]['wcf.attachment.downloads'] = 'Downloads';
$this->items[$this->languageID]['wcf.attachment.fileType'] = 'File type';
$this->items[$this->languageID]['wcf.attachment.files'] = '{$author->username} has attached the following file{if $attachments.$messageID.files|count > 1}s{/if}:';
$this->dynamicItems[$this->languageID]['wcf.attachment.files'] = '<?php echo StringUtil::encodeHTML($this->v[\'author\']->username); ?> has attached the following file<?php if (count($this->v[\'attachments\'][$this->v[\'messageID\']][\'files\']) > 1) { ?>s<?php } ?>:';
$this->items[$this->languageID]['wcf.attachment.images'] = '{$author->username} has attached the following image{if $attachments.$messageID.images|count > 1}s{/if}:';
$this->dynamicItems[$this->languageID]['wcf.attachment.images'] = '<?php echo StringUtil::encodeHTML($this->v[\'author\']->username); ?> has attached the following image<?php if (count($this->v[\'attachments\'][$this->v[\'messageID\']][\'images\']) > 1) { ?>s<?php } ?>:';
$this->items[$this->languageID]['wcf.attachment.info'] = '({@$attachment->attachmentSize|filesize} - <b>{#$attachment->downloads}</b> times downloaded{if $attachment->downloads > 0} - latest: {@$attachment->lastDownloadTime|shorttime}{/if})';
$this->dynamicItems[$this->languageID]['wcf.attachment.info'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFilesize\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFilesize.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFilesize\'] = new TemplatePluginModifierFilesize;
}
if (!isset($this->pluginObjects[\'TemplatePluginModifierShorttime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierShorttime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierShorttime\'] = new TemplatePluginModifierShorttime;
}
?>(<?php echo $this->pluginObjects[\'TemplatePluginModifierFilesize\']->execute(array($this->v[\'attachment\']->attachmentSize), $this); ?> - <b><?php echo StringUtil::formatNumeric($this->v[\'attachment\']->downloads); ?></b> times downloaded<?php if ($this->v[\'attachment\']->downloads > 0) { ?> - latest: <?php echo $this->pluginObjects[\'TemplatePluginModifierShorttime\']->execute(array($this->v[\'attachment\']->lastDownloadTime), $this); ?><?php } ?>)';
$this->items[$this->languageID]['wcf.attachment.lastDownloadTime'] = 'Last download time';
$this->items[$this->languageID]['wcf.attachment.list.count'] = '{#$stats.count} {if $stats.count == 1}attachment{else}attachments{/if} - {@$stats.size|filesize} - {#$stats.downloads} Download{if $stats.downloads != 1}s{/if}';
$this->dynamicItems[$this->languageID]['wcf.attachment.list.count'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFilesize\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFilesize.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFilesize\'] = new TemplatePluginModifierFilesize;
}
?><?php echo StringUtil::formatNumeric($this->v[\'stats\'][\'count\']); ?> <?php if ($this->v[\'stats\'][\'count\'] == 1) { ?>attachment<?php } else { ?>attachments<?php } ?> - <?php echo $this->pluginObjects[\'TemplatePluginModifierFilesize\']->execute(array($this->v[\'stats\'][\'size\']), $this); ?> - <?php echo StringUtil::formatNumeric($this->v[\'stats\'][\'downloads\']); ?> Download<?php if ($this->v[\'stats\'][\'downloads\'] != 1) { ?>s<?php } ?>';
$this->items[$this->languageID]['wcf.attachment.list.filter'] = 'Filter';
$this->items[$this->languageID]['wcf.attachment.list.filter.filename.contains'] = 'File name contains';
$this->items[$this->languageID]['wcf.attachment.list.filter.greaterThan'] = 'File size greater then';
$this->items[$this->languageID]['wcf.attachment.list.filter.isImage'] = 'Only show images';
$this->items[$this->languageID]['wcf.attachment.list.filter.period'] = 'In time period';
$this->items[$this->languageID]['wcf.attachment.list.filter.period.end'] = 'until:';
$this->items[$this->languageID]['wcf.attachment.list.filter.period.start'] = 'from:';
$this->items[$this->languageID]['wcf.attachment.list.filter.showThumbnail'] = 'Show thumbnails';
$this->items[$this->languageID]['wcf.attachment.list.noAttachments'] = 'No attachments have been found.';
$this->items[$this->languageID]['wcf.attachment.list.stats'] = '{#$statsTotal.count} {if $statsTotal.count == 1}Attachment{else}Attachments{/if} - {@$statsTotal.size|filesize} - {#$statsTotal.downloads} Download{if $statsTotal.downloads != 1}s{/if}';
$this->dynamicItems[$this->languageID]['wcf.attachment.list.stats'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFilesize\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFilesize.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFilesize\'] = new TemplatePluginModifierFilesize;
}
?><?php echo StringUtil::formatNumeric($this->v[\'statsTotal\'][\'count\']); ?> <?php if ($this->v[\'statsTotal\'][\'count\'] == 1) { ?>Attachment<?php } else { ?>Attachments<?php } ?> - <?php echo $this->pluginObjects[\'TemplatePluginModifierFilesize\']->execute(array($this->v[\'statsTotal\'][\'size\']), $this); ?> - <?php echo StringUtil::formatNumeric($this->v[\'statsTotal\'][\'downloads\']); ?> Download<?php if ($this->v[\'statsTotal\'][\'downloads\'] != 1) { ?>s<?php } ?>';
$this->items[$this->languageID]['wcf.attachment.moveUp'] = 'Move up';
$this->items[$this->languageID]['wcf.attachment.upload.error.badImage'] = 'The image you have tried to upload is corrupt.';
$this->items[$this->languageID]['wcf.attachment.upload.error.doubleUpload'] = 'The file {$error.attachmentName} has already been uploaded.';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.error.doubleUpload'] = 'The file <?php echo StringUtil::encodeHTML($this->v[\'error\'][\'attachmentName\']); ?> has already been uploaded.';
$this->items[$this->languageID]['wcf.attachment.upload.error.fileSize'] = 'The file size of {$error.attachmentName} is too large.';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.error.fileSize'] = 'The file size of <?php echo StringUtil::encodeHTML($this->v[\'error\'][\'attachmentName\']); ?> is too large.';
$this->items[$this->languageID]['wcf.attachment.upload.error.fileSizePHP'] = 'The file size of {$error.attachmentName} is too big (PHP limit).';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.error.fileSizePHP'] = 'The file size of <?php echo StringUtil::encodeHTML($this->v[\'error\'][\'attachmentName\']); ?> is too big (PHP limit).';
$this->items[$this->languageID]['wcf.attachment.upload.error.illegalExtension'] = 'The file {$error.attachmentName} has an invalid file extension.';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.error.illegalExtension'] = 'The file <?php echo StringUtil::encodeHTML($this->v[\'error\'][\'attachmentName\']); ?> has an invalid file extension.';
$this->items[$this->languageID]['wcf.attachment.upload.files'] = 'The following file{if $attachments.$containerID|count > 1}s have{else} has{/if} been uploaded successfully.';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.files'] = 'The following file<?php if (count($this->v[\'attachments\'][$this->v[\'containerID\']]) > 1) { ?>s have<?php } else { ?> has<?php } ?> been uploaded successfully.';
$this->items[$this->languageID]['wcf.attachment.upload.limits'] = 'Maximum number of attachments: {#$maxUploads}<br />
				Maximum file size: {@$maxFileSize|filesize}<br />
				Allowed file extensions: {$allowedExtensions}';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.limits'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFilesize\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFilesize.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFilesize\'] = new TemplatePluginModifierFilesize;
}
?>Maximum number of attachments: <?php echo StringUtil::formatNumeric($this->v[\'maxUploads\']); ?><br />
				Maximum file size: <?php echo $this->pluginObjects[\'TemplatePluginModifierFilesize\']->execute(array($this->v[\'maxFileSize\']), $this); ?><br />
				Allowed file extensions: <?php echo StringUtil::encodeHTML($this->v[\'allowedExtensions\']); ?>';
$this->items[$this->languageID]['wcf.attachment.uploadTime'] = 'Upload time';
$this->items[$this->languageID]['wcf.attachment.containerType.pm'] = 'Private Message';
$this->items[$this->languageID]['wcf.attachment.containerType.post'] = 'Post';
?>