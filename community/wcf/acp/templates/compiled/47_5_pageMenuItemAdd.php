<?php
/**
* WoltLab Community Framework
* Template: pageMenuItemAdd
* Compiled at: Tue, 13 Aug 2013 11:10:40 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'pageMenuItemAdd';
?>
<?php
$outerTemplateNamedfd921afb5cc338625c106c3d8b4cdf266e78cf0 = $this->v['tpl']['template'];
$this->includeTemplate('header', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNamedfd921afb5cc338625c106c3d8b4cdf266e78cf0;
$this->v['tpl']['includedTemplates']['header'] = 1;
?>

<div class="mainHeadline">
	<img src="<?php echo RELATIVE_WCF_DIR; ?>icon/pageMenuItem<?php echo ucfirst($this->v['action']); ?>L.png" alt="" />
	<div class="headlineContainer">
		<h2><?php $this->tagStack[] = array('lang', array()); ob_start(); ?>wcf.acp.pageMenuItem.<?php echo $this->v['action']; ?><?php $_lang7097d9df746c68d8a4c4ca97599572d7bb502e67 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang7097d9df746c68d8a4c4ca97599572d7bb502e67, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></h2>
	</div>
</div>

<?php if ($this->v['errorField']) { ?>
	<p class="error">Ihre Angaben sind ungültig. Bitte überprüfen Sie die markierten Eingabefelder.</p>
<?php } ?>

<?php if (isset($this->v['success'])) { ?>
	<p class="success"><?php $this->tagStack[] = array('lang', array()); ob_start(); ?>wcf.acp.pageMenuItem.<?php echo $this->v['action']; ?>.success<?php $_langf0dc40dac8ebb29b34b0b791793b9cc21c115606 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langf0dc40dac8ebb29b34b0b791793b9cc21c115606, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></p>	
<?php } ?>

<div class="contentHeader">
	<div class="largeButtons">
		<ul><li><a href="index.php?page=PageMenuItemList&amp;packageID=<?php echo PACKAGE_ID; ?><?php echo SID_ARG_2ND; ?>"><img src="<?php echo RELATIVE_WCF_DIR; ?>icon/pageMenuItemM.png" alt="" title="Menüpunkte auflisten" /> <span>Menüpunkte auflisten</span></a></li></ul>
	</div>
</div>

<form method="post" action="index.php?form=PageMenuItem<?php echo ucfirst($this->v['action']); ?>">
	<div class="border content">
		<div class="container-1">
			<fieldset>
				<legend>Daten</legend>
				
				<?php if ($this->v['action'] == 'edit') { ?>
					<div class="formElement" id="languageIDDiv">
						<div class="formFieldLabel">
							<label for="languageID">Sprache</label>
						</div>
						<div class="formField">
							<select name="languageID" id="languageID" onchange="location.href='index.php?form=PageMenuItemEdit&amp;pageMenuItemID=<?php echo $this->v['pageMenuItemID']; ?>&amp;languageID=' + this.value + '&amp;packageID=<?php echo PACKAGE_ID; ?><?php echo SID_ARG_2ND; ?>'">
								<?php
if (count($this->v['languages']) > 0) {
foreach ($this->v['languages'] as $this->v['availableLanguageID'] => $this->v['languageCode']) {
?>
									<option value="<?php echo $this->v['availableLanguageID']; ?>"<?php if ($this->v['availableLanguageID'] == $this->v['languageID']) { ?> selected="selected"<?php } ?>><?php $this->tagStack[] = array('lang', array()); ob_start(); ?>wcf.global.language.<?php echo $this->v['languageCode']; ?><?php $_lang0e37c3cec6fd3d72cd1a30c54d5713bb0297239b = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang0e37c3cec6fd3d72cd1a30c54d5713bb0297239b, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></option>
								<?php } } ?>
							</select>
						</div>
						<div class="formFieldDesc hidden" id="languageIDHelpMessage">
							Bestimmen Sie hier die Sprache des Menüpunktes.
						</div>
					</div>
					<script type="text/javascript">//<![CDATA[
						inlineHelp.register('languageID');
					//]]></script>
				<?php } ?>
				
				<div class="formElement<?php if ($this->v['errorField'] == 'name') { ?> formError<?php } ?>" id="nameDiv">
					<div class="formFieldLabel">
						<label for="name">Name</label>
					</div>
					<div class="formField">
						<input type="text" class="inputText" id="name" name="name" value="<?php echo StringUtil::encodeHTML($this->v['name']); ?>" />
						<?php if ($this->v['errorField'] == 'name') { ?>
							<p class="innerError">
								<?php if ($this->v['errorType'] == 'empty') { ?>Bitte füllen Sie dieses Eingabefeld aus.<?php } ?>
							</p>
						<?php } ?>
					</div>
					<div class="formFieldDesc hidden" id="nameHelpMessage">
						Bestimmen Sie hier den Namen des Menüpunktes.
					</div>
				</div>
				<script type="text/javascript">//<![CDATA[
					inlineHelp.register('name');
				//]]></script>
				
				<div class="formElement<?php if ($this->v['errorField'] == 'link') { ?> formError<?php } ?>" id="linkDiv">
					<div class="formFieldLabel">
						<label for="link">Link</label>
					</div>
					<div class="formField">
						<input type="text" class="inputText" id="link" name="link" value="<?php echo StringUtil::encodeHTML($this->v['link']); ?>" />
						<?php if ($this->v['errorField'] == 'link') { ?>
							<p class="innerError">
								<?php if ($this->v['errorType'] == 'empty') { ?>Bitte füllen Sie dieses Eingabefeld aus.<?php } ?>
							</p>
						<?php } ?>
					</div>
					<div class="formFieldDesc hidden" id="linkHelpMessage">
						Geben Sie hier den Link an, der mit dem Menüpunkt verknüpft ist.
					</div>
				</div>
				<script type="text/javascript">//<![CDATA[
					inlineHelp.register('link');
				//]]></script>
			</fieldset>
							
			<fieldset>
				<legend>Darstellung</legend>
					
				<div class="formElement" id="positionDiv">
					<div class="formFieldLabel">
						<label for="position">Position</label>
					</div>
					<div class="formField">
						<select name="position" id="position">
							<option value="header"<?php if ($this->v['position'] == "header") { ?> selected="selected"<?php } ?>>Kopfzeile</option>
							<option value="footer"<?php if ($this->v['position'] == "footer") { ?> selected="selected"<?php } ?>>Fußzeile</option>
						</select>
					</div>
					<div class="formFieldDesc hidden" id="positionHelpMessage">
						Geben Sie hier die Position des Menüpunktes an.
					</div>
				</div>
				<script type="text/javascript">//<![CDATA[
					inlineHelp.register('position');
				//]]></script>	
				
				<div class="formElement<?php if ($this->v['errorField'] == 'iconS') { ?> formError<?php } ?>" id="iconSDiv">
					<div class="formFieldLabel">
						<label for="iconS">Dateiname des kleinen Icons</label>
					</div>
					<div class="formField">
						<input type="text" class="inputText" id="iconS" name="iconS" value="<?php echo StringUtil::encodeHTML($this->v['iconS']); ?>" />
						<?php if ($this->v['errorField'] == 'iconS') { ?>
							<p class="innerError">
								<?php if ($this->v['errorType'] == 'empty') { ?>Bitte füllen Sie dieses Eingabefeld aus.<?php } ?>
							</p>
						<?php } ?>
					</div>
					<div class="formFieldDesc hidden" id="iconSHelpMessage">
						Geben Sie den Dateinamen einer kleinen Bilddatei an (S-Größe, in der Regel 16px:16px), die im icon-Ordner liegt und für die Darstellung in der Fußzeile verwendet wird.
					</div>
				</div>
				<script type="text/javascript">//<![CDATA[
					inlineHelp.register('iconS');
				//]]></script>
				
				<div class="formElement<?php if ($this->v['errorField'] == 'iconM') { ?> formError<?php } ?>" id="iconMDiv">
					<div class="formFieldLabel">
						<label for="iconM">Dateiname des großen Icons</label>
					</div>
					<div class="formField">
						<input type="text" class="inputText" id="iconM" name="iconM" value="<?php echo StringUtil::encodeHTML($this->v['iconM']); ?>" />
						<?php if ($this->v['errorField'] == 'iconM') { ?>
							<p class="innerError">
								<?php if ($this->v['errorType'] == 'empty') { ?>Bitte füllen Sie dieses Eingabefeld aus.<?php } ?>
							</p>
						<?php } ?>
					</div>
					<div class="formFieldDesc hidden" id="iconMHelpMessage">
						Geben Sie den Dateinamen einer großen Bilddatei an (M-Größe, in der Regel 24px:24px), die im icon-Ordner liegt und für die Darstellung in der Kopfzeile verwendet wird.
					</div>
				</div>
				<script type="text/javascript">//<![CDATA[
					inlineHelp.register('iconM');
				//]]></script>
				
				<div class="formElement" id="showOrderDiv">
					<div class="formFieldLabel">
						<label for="showOrder">Reihenfolge</label>
					</div>
					<div class="formField">
						<input type="text" class="inputText" id="showOrder" name="showOrder" value="<?php echo $this->v['showOrder']; ?>" />
					</div>
					<div class="formFieldDesc hidden" id="showOrderHelpMessage">
						Geben Sie hier die Position des Menüpunktes im Menü an.
					</div>
				</div>
				<script type="text/javascript">//<![CDATA[
					inlineHelp.register('showOrder');
				//]]></script>	
			</fieldset>
			
			<?php if (isset($this->v['additionalFields'])) { ?><?php echo $this->v['additionalFields']; ?><?php } ?>
		</div>
	</div>

	<div class="formSubmit">
		<input type="submit" accesskey="s" value="Absenden" />
		<input type="reset" accesskey="r" value="Zurücksetzen" />
		<input type="hidden" name="packageID" value="<?php echo PACKAGE_ID; ?>" />
		<?php if (isset($this->v['pageMenuItemID'])) { ?><input type="hidden" name="pageMenuItemID" value="<?php echo $this->v['pageMenuItemID']; ?>" /><?php } ?>
 		<?php echo SID_INPUT_TAG; ?>
 	</div>
</form>

<?php
$outerTemplateName2e8dc10a260f4756439527b391fec3df3317abce = $this->v['tpl']['template'];
$this->includeTemplate('footer', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName2e8dc10a260f4756439527b391fec3df3317abce;
$this->v['tpl']['includedTemplates']['footer'] = 1;
?>