<?php
/**
Copyright 2011-2015 Nick Korbel
		  2015 Simon Beltram

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
*/

require_once(ROOT_DIR . 'Controls/Dashboard/DashboardItem.php');
require_once(ROOT_DIR . 'Presenters/Dashboard/UpcomingReservationsPresenter.php');
require_once(ROOT_DIR . 'Domain/Access/ReservationViewRepository.php');
require_once(ROOT_DIR . 'Controls/AttributeControl.php');

class UpcomingReservations extends DashboardItem implements IUpcomingReservationsControl
{ 
	/**
	 * @var UpcomingReservationsPresenter
	 */
	protected $presenter;
	private $DBconn;

	public function __construct(SmartyPage $smarty)
	{
		parent::__construct($smarty);
		$this->presenter = new UpcomingReservationsPresenter($this, new ReservationViewRepository());
		$this->DBconn= ServiceLocator::GetDatabase();
	}

	public function PageLoad()
	{
	//	$this->attrControl->PageLoad();	
        $this->Set('DefaultTitle', Resources::GetInstance()->GetString('NoTitleLabel'));
		$this->presenter->SetSearchCriteria(ReservationViewRepository::ALL_USERS, ReservationUserLevel::ALL);
		$this->presenter->PageLoad();
		$this->Display('upcoming_reservations.tpl');
	}

	public function SetTimezone($timezone)
	{
		$this->Set('Timezone', $timezone);
	}

	public function SetTotal($total)
	{
		$this->Set('Total', $total);
	}

	public function SetUserId($userId)
	{
		$this->Set('UserId', $userId);
	}
	/*public function getRemoteLink(){
		userId = ServiceLocator::GetServer()->GetUserSession()->UserId;
	}*/
	/*public function BindToday($reservations)
	{
		$this->Set('TodaysReservations', $reservations);
	}

	public function BindTomorrow($reservations)
	{
		$this->Set('TomorrowsReservations', $reservations);
	}

	public function BindThisWeek($reservations)
	{
		$this->Set('ThisWeeksReservations', $reservations);
	}

	public function BindNextWeek($reservations)
	{
		$this->Set('NextWeeksReservations', $reservations);
	}*/
	public function BindReservations($reservations)
	{
		$this->Set('newReservations', $reservations);
	}
	public function BindUserRole($userRole){
		$this->Set('userRole',$userRole);
	}
	public function BindExperiment($experiment){
		$this->Set("Experiment",$experiment);
	}
	public function BindTodayDate(){
		$this->Set("today",Date::Now());
	}
}

interface IUpcomingReservationsControl
{
	function SetTimezone($timezone);
	function SetTotal($total);
	function SetUserId($userId);

	/*function BindToday($reservations);
	function BindTomorrow($reservations);
	function BindThisWeek($reservations);
	function BindNextWeek($reservations*/
	function BindReservations ($reservations);
}

class AllUpcomingReservations extends  UpcomingReservations
{
	public function PageLoad()
	{
		$this->Set('DefaultTitle', Resources::GetInstance()->GetString('NoTitleLabel'));
		$this->presenter->SetSearchCriteria(ReservationViewRepository::ALL_USERS, ReservationUserLevel::ALL);
		$this->presenter->PageLoad();
		$this->Display('admin_upcoming_reservations.tpl');
	}
}
