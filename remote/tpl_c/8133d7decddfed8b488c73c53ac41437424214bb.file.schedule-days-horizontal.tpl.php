<?php /* Smarty version Smarty-3.1.16, created on 2015-11-13 00:33:24
         compiled from "/var/www/html/remote/tpl/Schedule/schedule-days-horizontal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1499646731564521c43e2764-46221540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8133d7decddfed8b488c73c53ac41437424214bb' => 
    array (
      0 => '/var/www/html/remote/tpl/Schedule/schedule-days-horizontal.tpl',
      1 => 1437386759,
      2 => 'file',
    ),
    'dd71bc59d84a06c2fe83211599dff5b3a88944e8' => 
    array (
      0 => '/var/www/html/remote/tpl/Schedule/schedule.tpl',
      1 => 1441715690,
      2 => 'file',
    ),
    '136b808907fb263c271b38572fb2eef6f9531bfc' => 
    array (
      0 => '/var/www/html/remote/tpl/globalheader.tpl',
      1 => 1443435099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1499646731564521c43e2764-46221540',
  'function' => 
  array (
    'displayGeneralReserved' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayMyReserved' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayMyParticipating' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayReserved' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayPastTime' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayReservable' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayRestricted' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayUnreservable' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displaySlot' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'Slot' => 0,
    'spantype' => 0,
    'class' => 0,
    'OwnershipClass' => 0,
    'color' => 0,
    'SlotLabelFactory' => 0,
    'Href' => 0,
    'SlotRef' => 0,
    'AccessAllowed' => 0,
    'DisplaySlotFactory' => 0,
    'ShowResourceWarning' => 0,
    'IsAccessible' => 0,
    'SubscriptionUrl' => 0,
    'ScheduleName' => 0,
    'Schedules' => 0,
    'schedule' => 0,
    'DisplayDates' => 0,
    'PreviousDate' => 0,
    'FirstDate' => 0,
    'LastDate' => 0,
    'NextDate' => 0,
    'ShowFullWeekLink' => 0,
    'Resources' => 0,
    'ResourceIdFilter' => 0,
    'MaxParticipantsFilter' => 0,
    'ResourceTypes' => 0,
    'ResourceTypeIdFilter' => 0,
    'BoundDates' => 0,
    'TodaysDate' => 0,
    'date' => 0,
    'DailyLayout' => 0,
    'period' => 0,
    'resource' => 0,
    'resourceId' => 0,
    'ScheduleId' => 0,
    'href' => 0,
    'slots' => 0,
    'slot' => 0,
    'slotRef' => 0,
    'Path' => 0,
    'CookieName' => 0,
    'ResourceGroupsAsJson' => 0,
    'FirstWeekday' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_564521c467c110_52440305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564521c467c110_52440305')) {function content_564521c467c110_52440305($_smarty_tpl) {?>



<?php if (!function_exists('smarty_template_function_displayGeneralReserved')) {
    function smarty_template_function_displayGeneralReserved($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayGeneralReserved']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php if ($_smarty_tpl->tpl_vars['Slot']->value->IsPending()) {?>
		<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('pending', null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Slot']->value->HasCustomColor()) {?>
		<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable((((('style="background-color:').($_smarty_tpl->tpl_vars['Slot']->value->Color())).(';color:')).($_smarty_tpl->tpl_vars['Slot']->value->TextColor())).(';"'), null, 0);?>
	<?php }?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" class="reserved <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['OwnershipClass']->value;?>
 clickres slot"
		resid="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Id();?>
" <?php echo $_smarty_tpl->tpl_vars['color']->value;?>

		id="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Id();?>
|<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Date()->Format('Ymd');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapequotes'][0][0]->EscapeQuotes($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value));?>
</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayMyReserved')) {
    function smarty_template_function_displayMyReserved($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayMyReserved']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php smarty_template_function_displayGeneralReserved($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'mine'));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayMyParticipating')) {
    function smarty_template_function_displayMyParticipating($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayMyParticipating']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php smarty_template_function_displayGeneralReserved($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'participating'));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayReserved')) {
    function smarty_template_function_displayReserved($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayReserved']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php smarty_template_function_displayGeneralReserved($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>''));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayPastTime')) {
    function smarty_template_function_displayPastTime($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayPastTime']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
"
		class="pasttime slot"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapequotes'][0][0]->EscapeQuotes($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value));?>
</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayReservable')) {
    function smarty_template_function_displayReservable($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayReservable']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
" class="reservable clickres slot" data-href="<?php echo $_smarty_tpl->tpl_vars['Href']->value;?>
" data-start="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('Y-m-d H:i:s'));?>
" data-end="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Format('Y-m-d H:i:s'));?>
">&nbsp;</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayRestricted')) {
    function smarty_template_function_displayRestricted($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayRestricted']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" class="restricted slot">&nbsp;</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayUnreservable')) {
    function smarty_template_function_displayUnreservable($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayUnreservable']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
"
		class="unreservable slot"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value), ENT_QUOTES, 'UTF-8', true);?>
</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displaySlot')) {
    function smarty_template_function_displaySlot($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displaySlot']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php $tmp = "smarty_template_function_".$_smarty_tpl->tpl_vars['DisplaySlotFactory']->value->GetFunction($_smarty_tpl->tpl_vars['Slot']->value,$_smarty_tpl->tpl_vars['AccessAllowed']->value); $tmp($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>





	<?php /*  Call merged included template "globalheader.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/jquery.qtip.min.css,scripts/css/jqtree.css,css/schedule.css'), 0, '1499646731564521c43e2764-46221540');
content_564521c4466266_55331174($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "globalheader.tpl" */?>


<?php if ($_smarty_tpl->tpl_vars['ShowResourceWarning']->value) {?>
	<div class="error"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResources'),$_smarty_tpl);?>
 <a href="admin/manage_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddResource'),$_smarty_tpl);?>
</a></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['IsAccessible']->value) {?>


	<div id="schedule-actions">
		<a href="#" id="make_default" style="display:none;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"star_boxed_full.png",'altKey'=>"MakeDefaultSchedule"),$_smarty_tpl);?>
</a>
		<a href="#" class="schedule-style" id="schedule_standard" schedule-display="<?php echo ScheduleStyle::Standard;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table.png",'altKey'=>"StandardScheduleDisplay"),$_smarty_tpl);?>
</a>
		<a href="#" class="schedule-style" id="schedule_tall" schedule-display="<?php echo ScheduleStyle::Tall;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table-tall.png",'altKey'=>"TallScheduleDisplay"),$_smarty_tpl);?>
</a>
		<a href="#" class="schedule-style" id="schedule_wide" schedule-display="<?php echo ScheduleStyle::Wide;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table-wide.png",'altKey'=>"WideScheduleDisplay"),$_smarty_tpl);?>
</a>
		<a href="#" class="schedule-style" id="schedule_week" schedule-display="<?php echo ScheduleStyle::CondensedWeek;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table-week.png",'altKey'=>"CondensedWeekScheduleDisplay"),$_smarty_tpl);?>
</a>
	</div>
	<div>
		<?php if ($_smarty_tpl->tpl_vars['SubscriptionUrl']->value!=null) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"feed.png"),$_smarty_tpl);?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value->GetAtomUrl();?>
">Atom</a> | <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value->GetWebcalUrl();?>
">iCalendar</a>
		<?php }?>
	</div>


<div id="defaultSetMessage" class="success hidden">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DefaultScheduleSet'),$_smarty_tpl);?>

</div>


	<div>
		<div class="schedule_title">
			<span><?php echo $_smarty_tpl->tpl_vars['ScheduleName']->value;?>
</span>
			<?php if (count($_smarty_tpl->tpl_vars['Schedules']->value)>0) {?>
				<ul class="schedule_drop">
					<li id="show_schedule"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"down_sm_blue.png",'alt'=>"Change Schedule"),$_smarty_tpl);?>
</li>
					<ul style="display:none;" id="schedule_list">
						<?php  $_smarty_tpl->tpl_vars['schedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['schedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->key => $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->_loop = true;
?>
							<li><a href="#"
								   onclick="ChangeSchedule(<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
); return false;"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</a>
							</li>
						<?php } ?>
					</ul>
				</ul>
			<?php }?>
			<a href="#" id="calendar_toggle"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar.png",'altKey'=>"ShowHideNavigation"),$_smarty_tpl);?>
</a>
		</div>

		<?php $_smarty_tpl->_capture_stack[0][] = array("date_navigation", null, null); ob_start(); ?>
			<div class="schedule_dates">
				<?php $_smarty_tpl->tpl_vars['FirstDate'] = new Smarty_variable($_smarty_tpl->tpl_vars['DisplayDates']->value->GetBegin(), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['LastDate'] = new Smarty_variable($_smarty_tpl->tpl_vars['DisplayDates']->value->GetEnd()->AddDays(-1), null, 0);?>
				<a href="#" onclick="ChangeDate(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['PreviousDate']->value,'format'=>"Y, m, d"),$_smarty_tpl);?>
); return false;"><img
							src="img/arrow_large_left.png" alt="Back"/></a>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['FirstDate']->value),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['LastDate']->value),$_smarty_tpl);?>

				<a href="#" onclick="ChangeDate(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['NextDate']->value,'format'=>"Y, m, d"),$_smarty_tpl);?>
); return false;"><img
							src="img/arrow_large_right.png" alt="Forward"/></a>

				<?php if ($_smarty_tpl->tpl_vars['ShowFullWeekLink']->value) {?>
					<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_querystring'][0][0]->AddQueryString(array('key'=>'SHOW_FULL_WEEK','value'=>1),$_smarty_tpl);?>
"
					   id="showFullWeek">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowFullWeek'),$_smarty_tpl);?>

						)</a>
				<?php }?>
			</div>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php echo Smarty::$_smarty_vars['capture']['date_navigation'];?>

	</div>
	<div type="text" id="datepicker" style="display:none;"></div>



<div style="text-align: center; margin: auto;">
	<div class="legend reservable"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reservable'),$_smarty_tpl);?>
</div>
	<div class="legend unreservable"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unreservable'),$_smarty_tpl);?>
</div>
	<div class="legend reserved"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserved'),$_smarty_tpl);?>
</div>
	<div class="legend reserved mine"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MyReservation'),$_smarty_tpl);?>
</div>
	<div class="legend reserved participating"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Participant'),$_smarty_tpl);?>
</div>
	<div class="legend reserved pending"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Pending'),$_smarty_tpl);?>
</div>
	<div class="legend pasttime"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Past'),$_smarty_tpl);?>
</div>
	<div class="legend restricted"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Restricted'),$_smarty_tpl);?>
</div>
</div>

<div style="height:10px">&nbsp;</div>


<div id="reservations-left">
	<div class="reservations-left-header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceFilter'),$_smarty_tpl);?>
</div>

	<div class="reservations-left-content">
		<div class="center"><a id="show_all_resources" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ClearFilter'),$_smarty_tpl);?>
</a></div>

		<div>
		<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 class="textbox" id="resourceIdFilter">
			<option value="">- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
 -</option>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'label'=>'Name','key'=>'Id','usemethod'=>false,'selected'=>$_smarty_tpl->tpl_vars['ResourceIdFilter']->value),$_smarty_tpl);?>

		</select>
		</div>

		<div>
		<div id="resourceGroups"></div>
		</div>

		<form method="POST">

			<div class="advancedFilterTitle"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdvancedFilter'),$_smarty_tpl);?>
</div>
			<hr/>

			<div id="advancedFilter">
				<div>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>

				<input type='text' id='maxCapactiy' class="textbox" size='5' maxlength='5' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['MaxParticipantsFilter']->value;?>
" />
				</div>

				<div>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>

				<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
 class="textbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
>
					<option value="">- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
 -</option>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['ResourceTypes']->value,'label'=>'Name','key'=>'Id','selected'=>$_smarty_tpl->tpl_vars['ResourceTypeIdFilter']->value),$_smarty_tpl);?>

				</select>
				</div>

				<div>
					<br/>
					<input type="submit" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Filter'),$_smarty_tpl);?>
" class="button" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUBMIT'),$_smarty_tpl);?>
/>
				</div>
			</div>
		</form>
	</div>
</div>


	<style type="text/css">
		td.resdate-custom { background-color:#4279A5; }
		td.today-custom { background-color:#5199d1; }
	</style>

	<?php $_smarty_tpl->tpl_vars['TodaysDate'] = new Smarty_variable(Date::Now(), null, 0);?>
	<div id="reservations">
		<table class="reservations" border="1" cellpadding="0" style="width:auto;">
			<tr>
				<td rowspan="2">&nbsp;</td>
				<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BoundDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['date']->value->DateEquals($_smarty_tpl->tpl_vars['TodaysDate']->value)) {?>
						<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("today-custom", null, 0);?>
					<?php }?>
					<td class="resdate-custom resdate <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
						colspan="<?php echo count($_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value));?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>"schedule_daily"),$_smarty_tpl);?>
</td>
				<?php } ?>
			</tr>
			<tr>
				<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BoundDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
					<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
						<td class="reslabel" colspan="<?php echo $_smarty_tpl->tpl_vars['period']->value->Span();?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value->Label($_smarty_tpl->tpl_vars['date']->value);?>
</td>
					<?php } ?>
				<?php } ?>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['resourceId'] = new Smarty_variable($_smarty_tpl->tpl_vars['resource']->value->Id, null, 0);?>
				<?php ob_start();?><?php echo Pages::RESERVATION;?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable($_tmp3."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value), null, 0);?>
				<tr class="slots">
					<td class="resourcename">
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->CanAccess) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
							   class="resourceNameSelector"><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</a>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>

						<?php }?>
					</td>
					<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BoundDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['slots'] = new Smarty_variable($_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['resourceId']->value), null, 0);?>
						<?php ob_start();?><?php echo Pages::RESERVATION;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable($_tmp4."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value)."&rd=".$_tmp5, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['slotRef'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['slot']->value->BeginDate()->Format('YmdHis')).((string)$_smarty_tpl->tpl_vars['resourceId']->value), null, 0);?>
							<?php smarty_template_function_displaySlot($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['slot']->value,'Href'=>((string)$_smarty_tpl->tpl_vars['href']->value),'AccessAllowed'=>$_smarty_tpl->tpl_vars['resource']->value->CanAccess,'SlotRef'=>$_smarty_tpl->tpl_vars['slotRef']->value));?>

						<?php } ?>
					<?php } ?>
				</tr>
			<?php } ?>
		</table>
	</div>

<?php } else { ?>
	<div class="error"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResourcePermission'),$_smarty_tpl);?>
</div>
<?php }?>

<div class="clear">&nbsp;</div>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
" id="scheduleId"/>

<?php echo Smarty::$_smarty_vars['capture']['date_navigation'];?>







	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.qtip.min.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/moment.min.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"schedule.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.cookie.js"),$_smarty_tpl);?>


	<script type="text/javascript">

		$(document).ready(function ()
		{
			var scheduleOpts = {
				reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[referenceNumber]",
				summaryPopupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php",
				setDefaultScheduleUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PROFILE;?>
?action=changeDefaultSchedule&<?php echo QueryStringKeys::SCHEDULE_ID;?>
=[scheduleId]",
				cookieName: "<?php echo $_smarty_tpl->tpl_vars['CookieName']->value;?>
",
				scheduleId:"<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
"
			};

			var schedule = new Schedule(scheduleOpts, <?php echo $_smarty_tpl->tpl_vars['ResourceGroupsAsJson']->value;?>
);
			schedule.init();
		});
	</script>




<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>'datepicker','DefaultDate'=>$_smarty_tpl->tpl_vars['FirstDate']->value,'NumberOfMonths'=>'3','ShowButtonPanel'=>'true','OnSelect'=>'dpDateChanged','FirstDay'=>$_smarty_tpl->tpl_vars['FirstWeekday']->value),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.16, created on 2015-11-13 00:33:24
         compiled from "/var/www/html/remote/tpl/globalheader.tpl" */ ?>
<?php if ($_valid && !is_callable('content_564521c4466266_55331174')) {function content_564521c4466266_55331174($_smarty_tpl) {?><!DOCTYPE html>

<html lang="<?php echo $_smarty_tpl->tpl_vars['HtmlLang']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['HtmlTextDirection']->value;?>
">
<head>
	<title><?php if ($_smarty_tpl->tpl_vars['TitleKey']->value!='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['TitleKey']->value,'args'=>$_smarty_tpl->tpl_vars['TitleArgs']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<?php }?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"/>
	<meta name="robots" content="noindex" />
	<!-- Latest compiled and minified CSS -->

<?php if ($_smarty_tpl->tpl_vars['ShouldLogout']->value) {?>
	<meta http-equiv="REFRESH" content="<?php echo $_smarty_tpl->tpl_vars['SessionTimeoutSeconds']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
logout.php?<?php echo QueryStringKeys::REDIRECT;?>
=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
">
<?php }?>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
favicon.png"/>
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
favicon.png"/>
	<?php if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-1.8.2.min.js"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-ui-1.9.0.custom.min.js"),$_smarty_tpl);?>

	<?php } else { ?>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
	<?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"phpscheduleit.js"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"normalize.css"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"nav.css"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"style.css"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/smoothness/jquery-ui-1.9.0.custom.min.css"),$_smarty_tpl);?>

		<?php } else { ?>
			<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/smoothness/jquery-ui.css" type="text/css"></link>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['cssFiles']->value!='') {?>
			<?php $_smarty_tpl->tpl_vars['CssFileList'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['cssFiles']->value), null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CssFileList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['cssFile']->value),$_smarty_tpl);?>

			<?php } ?>
		<?php }?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['CssUrl']->value),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['CssExtensionFile']->value!='') {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['CssExtensionFile']->value),$_smarty_tpl);?>

		<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['printCssFiles']->value!='') {?>
		<?php $_smarty_tpl->tpl_vars['PrintCssFileList'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['printCssFiles']->value), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PrintCssFileList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
		<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
' media='print' />
		<?php } ?>
	<?php }?>
	<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

	<script type="text/javascript">
		$(document).ready(function () {
		initMenu();
		});
	</script>
	<script type="text/javascript">
	/*$(".menuitem a").mouseover(function(){
 		$(this).closest('.menubaritem').find('a').addClass('selected');
	});
	$(".menuitem a").mouseleave(function(){
 		$(this).closest('.menubaritem').find('a').removeClass('selected');
	});*/
	</script>
</head>
<body>
<div id="wrapper">
	<div id="doc">
	
		<div id="header">
			<div>
				<ul id="nav" class="menubar">
				<li class="logo first "style="width:250px">
						<a href="<?php echo $_smarty_tpl->tpl_vars['HomeUrl']->value;?>
" ><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>((string)$_smarty_tpl->tpl_vars['LogoUrl']->value)),$_smarty_tpl);?>
</a>
				</li>
			<?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value) {?>
				<li class="menubaritem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::DASHBOARD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Dashboard"),$_smarty_tpl);?>
</a></li>
				
				<li class="menubaritem"><a  class="nekej" id="dropLink"class="dropdown-toggle"  aria-haspopup="true" aria-expanded="true" data-toggle="dropdown" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::SCHEDULE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Schedule"),$_smarty_tpl);?>
</a>
					<ul  id="subNav" class="dropdown-menu" aria-labelledby="dropLink">
						<li class="menuitem"><a  href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::SCHEDULE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Bookings"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a  href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::MY_CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"MyCalendar"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a  href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceCalendar"),$_smarty_tpl);?>
</a></li>
						<!--<li class="menuitem"><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Current Status"),$_smarty_tpl);?>
</a></li>-->
						<!--<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::OPENINGS;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FindAnOpening"),$_smarty_tpl);?>
</a></li>-->
					</ul>
				</li>
			<?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
				<li class="menubaritem"><a class="nekej" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ApplicationManagement'),$_smarty_tpl);?>
</a>
					<ul id="subNav">
						<li class="menuitem"><a
								href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageReservations"),$_smarty_tpl);?>
</a>
							<ul>
								<li class="menuitem"><a
										href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_blackouts.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageBlackouts"),$_smarty_tpl);?>
</a></li>
							</ul>
						</li>
						<li class="menuitem"><a
								href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_schedules.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageSchedules"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a
								href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a>
							<ul>
								<li class="menuitem"><a
										href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a></li>
								<li class="menuitem"><a
										href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_accessories.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAccessories"),$_smarty_tpl);?>
</a></li>
								<li class="menuitem"><a
										href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_types.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceTypes"),$_smarty_tpl);?>
</a></li>
								<li class="menuitem"><a
										href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_status.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceStatus"),$_smarty_tpl);?>
</a></li>
							</ul>
						</li>
						<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_users.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageUsers"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_quotas.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageQuotas"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_announcements.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAnnouncements"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Customization"),$_smarty_tpl);?>
</a>
								<ul >
									<li class="menuitem"><a
											href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_attributes.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Attributes"),$_smarty_tpl);?>
</a></li>
									<?php if ($_smarty_tpl->tpl_vars['EnableConfigurationPage']->value) {?><li class="menuitem"><a
											href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_configuration.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageConfiguration"),$_smarty_tpl);?>
</a></li>
									<?php }?>
									<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_theme.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LookAndFeel"),$_smarty_tpl);?>
</a></li>
								</ul>
							</li>
						<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/server_settings.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ServerSettings"),$_smarty_tpl);?>
</a></li>
					</ul>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CanViewResponsibilities']->value) {?>
				<li class="menubaritem"><a  class="nekej" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Responsibilities'),$_smarty_tpl);?>
</a>
					<ul id="subNav">
						<?php if ($_smarty_tpl->tpl_vars['CanViewGroupAdmin']->value) {?>
							<li class="menuitem"><a
									href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_group_users.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageUsers"),$_smarty_tpl);?>
</a></li>
							<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_group_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GroupReservations'),$_smarty_tpl);?>
</a>
							</li>
							<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CanViewResourceAdmin']->value||$_smarty_tpl->tpl_vars['CanViewScheduleAdmin']->value) {?>
							<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a></li>
							<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_blackouts.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageBlackouts"),$_smarty_tpl);?>
</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CanViewResourceAdmin']->value) {?>
							<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceReservations'),$_smarty_tpl);?>
</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CanViewScheduleAdmin']->value) {?>
							<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_schedules.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageSchedules"),$_smarty_tpl);?>
</a></li>
							<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_schedule_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ScheduleReservations'),$_smarty_tpl);?>
</a></li>
						<?php }?>
					</ul>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CanViewReports']->value) {?>
			<li class="menubaritem"><a class="nekej" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_GENERATE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reports'),$_smarty_tpl);?>
</a>
				<ul id="subNav">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_GENERATE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GenerateReport'),$_smarty_tpl);?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_SAVED;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MySavedReports'),$_smarty_tpl);?>
</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_COMMON;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CommonReports'),$_smarty_tpl);?>
</a></li>
				</ul>
			</li>
			<?php }?>
			<?php }?>
				<li class="menubaritem"><a class="nekej" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Help'),$_smarty_tpl);?>
</a>
					<ul id="subNav">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Help'),$_smarty_tpl);?>
</a></li>
						<?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php?ht=admin"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Administration'),$_smarty_tpl);?>
</a></li><?php }?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php?ht=about"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'About'),$_smarty_tpl);?>
</a></li>
					</ul>
				</li>
				<li class="menubaritem help">
					<?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value) {?>
						<a class="nekej" href="#"><?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
</a>
					<ul id="subNav">
						<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PROFILE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Profile"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PASSWORD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangePassword"),$_smarty_tpl);?>
</a></li>
						<li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::NOTIFICATION_PREFERENCES;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NotificationPreferences"),$_smarty_tpl);?>
</a></li>
						<?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value) {?><li class="menuitem"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PARTICIPATION;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"OpenInvitations"),$_smarty_tpl);?>
</a></li><?php }?>

						<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
logout.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"SignOut"),$_smarty_tpl);?>
</a></li>
					</ul id="subNav">
					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NotSignedIn"),$_smarty_tpl);?>
<br/>
						<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
index.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LogIn"),$_smarty_tpl);?>
</a>
					<?php }?>	
				</li>
			</ul>
			</div>
			<!-- end #nav -->
		</div>
		<!-- end #header -->
		<div id="content"><?php }} ?>
