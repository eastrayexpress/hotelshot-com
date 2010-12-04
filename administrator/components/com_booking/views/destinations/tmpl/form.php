<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
$cid = JRequest::getVar( 'cid', array(0), '', 'array' );
$edit=JRequest::getVar( 'edit', true );
JArrayHelper::toInteger($cid, array(0));
$editor=JFactory::getEditor();

$text = ( $edit ? JText::_( 'Edit' ) : JText::_( 'New' ) );

JToolBarHelper::title(  JText::_( 'Popular Destinations' ).': <small><small>[ ' . $text.' ]</small></small>' );
//JToolBarHelper::Preview('index.php?option=com_poll&controller=poll&cid[]='.$cid[0]);
JToolBarHelper::save();
JToolBarHelper::apply();
if ($edit) {
	// for existing items the button is renamed `close`
	JToolBarHelper::cancel( 'cancel', 'Close' );
} else {
	JToolBarHelper::cancel();
}
JToolBarHelper::help( 'screen.booking.edit' );
?>

<?php
JFilterOutput::objectHTMLSafe( $this->destination, ENT_QUOTES );

JHTML::_('behavior.modal'); 

?>
<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}
		// do field validation
		if (form.title.value == "") {
			alert( "<?php echo JText::_( 'destination must have a title', true ); ?>" );
		} else if (isNaN(parseInt( form.availableHotels.value ) ) || parseInt(form.availableHotels.value) < 1)  {
			alert( "<?php echo JText::_( 'available Hotels must have a non-zero', true ); ?>" );
		} else if ( form.cheapestPrice.value =="")  {
			alert( "<?php echo JText::_( 'cheapest price must have a value', true ); ?>" );
		} else if ( form.thumbnail.value =="")  {
			alert( "<?php echo JText::_( 'you should enter a thumbnail url', true ); ?>" );		
		} else {
			submitform( pressbutton );
		}
	}
</script>
<form action="index.php" method="post" name="adminForm">
<div class="col width-45">
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'Details' ); ?></legend>
	<table class="admintable">
		<tr>
			<td width="110" class="key">
				<label for="title">
					<?php echo JText::_( 'Title' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="title" id="title" size="60" value="<?php echo $this->destination->title; ?>" />
			</td>
		</tr>
		<tr>
			<td width="110" class="key">
				<label for="alias">
					<?php echo JText::_( 'Available Hotels' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="availableHotels" id="availableHotels" size="10" value="<?php echo $this->destination->availableHotels; ?>" />
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="lag">
					<?php echo JText::_( 'Cheapest Price' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="cheapestPrice" id="cheapestPrice" size="10" value="<?php echo $this->destination->cheapestPrice; ?>" />
				
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="lag">
					<?php echo JText::_( 'Thumbnail' ); ?>:
				</label>
			</td>
			<td>
				<input class="inputbox" type="text" name="thumbnail" id="thumbnail" size="50" value="<?php echo $this->destination->thumbnail; ?>" />
				<table>
					<tr>
						<td></td>
						<td>
							<script language="javascript">
								function isBrowserIE() {
									return navigator.appName=="Microsoft Internet Explorer";
								}

								function IeCursorFix() {
									if (isBrowserIE()) {
										tinyMCE.execCommand('mceInsertContent', false, '');
										global_ie_bookmark = tinyMCE.activeEditor.selection.getBookmark(false);
									}
									return true;
								}

							</script>


						  <div class="button2-left">
							<div class="image">
							<a rel="{handler: 'iframe', size: {x: 570, y: 400}}" onclick="IeCursorFix(); return false;" 
								href="<?php echo JURI::root().'administrator/'.JRoute::_("index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;e_name=thumbnail&noeditor=1");?>" 
								title="Image" class="modal-button">Pick a Image</a></div></div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width="120" class="key">
				<?php echo JText::_( 'Published' ); ?>:
			</td>
			<td>
				<?php echo JHTML::_( 'select.booleanlist',  'published', 'class="inputbox"', $this->destination->published ); ?>
			</td>
		</tr>
	</table>
	</fieldset>
</div>

<div class="clr"></div>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="com_booking" />
	<input type="hidden" name="view" value="destinations" />
	
	<input type="hidden" name="id" value="<?php echo $this->destination->id; ?>" />
	<input type="hidden" name="cid[]" value="<?php echo $this->destination->id; ?>" />
	<input type="hidden" name="textfieldcheck" value="<?php echo $n; ?>" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<div style='display:none'>
<?php echo $editor->display('xx','','50','50',5,5,true);?>
</div>