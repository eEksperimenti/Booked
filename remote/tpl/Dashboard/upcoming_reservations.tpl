<!DOCTYPE html>
{*
	Copyright 2011-2015 Nick Korbel
	May 2015 - October 2015 Simon Beltram

	This file is part of Booked Scheduler.

	Booked Scheduler is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	Booked Scheduler is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
	*}
<!--{function name=displayReservation}
<tr class="reservation" >
	<td colspan="5">{$reservation->Title|default:$DefaultTitle}</td>
</tr>
<tr class="reservation" id="{$reservation->ReferenceNumber}">
	<td style="min-width: 250px;">{$reservation->Title|default:$DefaultTitle}</td>
	<td style="min-width:150px;">{fullname first=$reservation->FirstName last=$reservation->LastName ignorePrivacy=$reservation->IsUserOwner($UserId)} {if !$reservation->IsUserOwner($UserId)}{html_image src="users.png" altKey=Participant}{/if}</td>
	<td width="200px">{formatdate date=$reservation->StartDate->ToTimezone($Timezone) key=dashboard}</td>
	<td width="200px">{formatdate date=$reservation->EndDate->ToTimezone($Timezone) key=dashboard}</td>
	<td style="min-width: 150px; max-width: 250px;">{$reservation->ResourceName}</td>
</tr>
{/function}-->
{function name=displayReservation}

{/function}
<div class="dashboard upcomingReservationsDashboard" id="upcomingReservationsDashboard">
	<div class="dashboardHeader">
		<a href="javascript:void(0);" title="{translate key='ShowHide'}">{translate key="UpcomingReservations"}</a> ({$Total})
	</div>
	<div class="dashboardContents">
		{if $Total > 0}
		{foreach from=$newReservations item=reservation}

			<div id="event">
			<div id="leftWrapper" class="left">
				<div id="titleLeft">
				{if $UserId == $reservation->UserId}
					<a href="http://212.235.190.181:5950/{$reservation->Experiment}/index.html?p={$reservation->ResourceId}&ex={$reservation->Experiment}&t={$reservation->ReferenceNumber}">{$reservation->Title|default:$DefaultTitle}</a>
				{else}
				<a href="http://212.235.190.181:5950/{$reservation->Experiment}/index.html?p={$reservation->ResourceId}&ex={$reservation->Experiment}">{$reservation->Title|default:$DefaultTitle}</a>
				{/if}
				</div>
				<!--<div id="enterLink" class="right"><a href="#">Enter</a></div>-->
					<div>{$reservation->ResourceName}</div>
			</div>
				<div class="reservationInfo" id="{$reservation->ReferenceNumber}" class="right">
				<div style="display:inline">
					<div id="hostName" class="left Info">Host:</div>
					<div>{fullname first=$reservation->FirstName ignorePrivacy=$reservation->IsUserOwner($UserId)} {if !$reservation->IsUserOwner($UserId)}{html_image src="users.png" altKey=Participant}{/if}</div>
				</div>
				<div style="display:inline">

					<div id="start" class="left info">Start:</div>
					<div>{formatdate date=$reservation->StartDate->ToTimezone($Timezone) key=dashboard}</div>
				</div style="display:inline">
					<div id="end" class="left info">End:</div>
					<div>{formatdate date=$reservation->EndDate->ToTimezone($Timezone) key=dashboard}</div>
				</div>					
				</div>
			
			{/foreach}
		</div>
		{else}
		<div class="noresults">{translate key="NoUpcomingReservations"}</div>
		{/if}
	</div>
</div>
