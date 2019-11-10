<?php

namespace App\Services;
use App\Models\ClientInformation\Client;
use App\Models\ClientInformation\Project;
class DataService {
	public static function generateData( $commons, $keys, $actionPrefix ) {
		$commons = $commons->toArray();
		$data    = [];
		foreach ( $commons as $common ) {
			$modelData = [];
			foreach ( $keys as $key ) {
				$modelData[] = $common[ $key ];
			}
			$id          = $common['id'];
			$action      = "<a href='/$actionPrefix/$id'><span class='label label-success'><i class='fa fa-eye'></i></span></a> <a href='/$actionPrefix/edit/$id' class='label label-info'><i class='fa fa-edit'></i></a> <a href='#modal-alert' data-toggle='modal'><span class='label label-danger'><i class='fa fa-times'></i></span></a>";
			$modelData[] = $action;
			$data[]      = $modelData;
		}

		return $data;
	}


	public static function index( $request, $commonModel, $keys, $searchKeys = [], $actionPrefix ) {
		if ( $request->get( 'length' ) ) {
			$start   = $request->input( 'start' );
			$length  = $request->input( 'length' );
			$search  = $request->input( 'search' )['value'];
			$draw    = $request->get( 'draw' );
			$commons = $commonModel::where( 'id', '!=', null );


			if ( $search ) {
				foreach ( $searchKeys as $searchKey ) {
					$commons = $commons->where( $searchKey, 'like', "%$search%" );
				}
			}
			$commons         = $commons->skip( $start )->take( $length )->get();
			$data            = self::generateData( $commons, $keys, $actionPrefix );
			$recordsTotal    = $commonModel::count();
			$recordsFiltered = $recordsTotal;

			if ( $search ) {
				$recordsFiltered = count( $data );
			}

			return [
				'draw'            => $draw,
				'recordsTotal'    => $recordsTotal,
				'recordsFiltered' => $recordsFiltered,
				'data'            => $data,
			];
		}
	}

	public static function getQuatationDescriptionList() {
		$data = [
			[
				'id'    => 1,
				'label' => 'Gable Frame-Plate'
			],
			[
				'id'    => 2,
				'label' => 'Gable Frame(only fabrication)e'
			],
			[
				'id'    => 3,
				'label' => 'GP Purlin'
			],
			[
				'id'    => 4,
				'label' => 'Anchor-Bolt'
			],
			[
				'id'    => 5,
				'label' => 'Anchor-Bolt(only satting)'
			],
			[
				'id'    => 6,
				'label' => 'Chemical Bolt'
			],
			[
				'id'    => 7,
				'label' => 'Royel Bolt(16mm dia,L-150mm)'
			],
			[
				'id'    => 8,
				'label' => 'High Strenth Nut-Bolt'
			],
			[
				'id'    => 9,
				'label' => 'Sag Rod/Tie Rod 12mm Dia'
			],
			[
				'id'    => 10,
				'label' => 'Wire Bracing'
			],
			[
				'id'    => 11,
				'label' => 'Tun-Bolt-16mm'
			],
			[
				'id'    => 12,
				'label' => 'Wire Clamp'
			],
			[
				'id'    => 13,
				'label' => 'Angle Bracing'
			],
			[
				'id'    => 14,
				'label' => 'Angle Bracing(only fabrication)'
			],
			[
				'id'    => 15,
				'label' => 'Pipe Bracing'
			],
		];

		return $data;
	}

	public static function getToolCategories() {
		$data = [
			''                => 'Not Set',
			'Equipment Tools' => 'Equipment Tools',
			'Fire Tools'      => 'Fire Tools',
			'Saifty Tools'    => 'Saifty Tools',
			'Reguler Tools'   => 'Reguler Tools'
		];

		return $data;
	}

	public static function getToolNames() {
		$data = [
			''        => 'Not Set',
			'Crane'   => 'Crane',
			'Helmate' => 'Helmate'
		];

		return $data;
	}

	public static function getModels() {
		return [
			'Tool'                     => \App\Tool::class,
			'Client'                   => \App\Tool::class,
			'ProjectWorkSchedule'      => \App\ProjectWorkSchedule::class,
			'FebricationDrawing'       => \App\FebricationDrawing::class,
			'ErectionDrawing'          => \App\ErectionDrawing::class,
			'WorkOrderTimeSchedule'    => \App\WorkOrderTimeSchedule::class,
			'WorkOrderPaymentSchedule' => \App\WorkOrderPaymentSchedule::class,
			'WorkOrderPaymentSchedule' => \App\MaterialRequisition::class
		];
	}

	public static function getModel( $model ) {
		return self::getModels()["$model"];
	}

	public static function getClientList()
	{
		$lists = Client::all();
		$map[''] = 'Not Set';
		foreach ($lists as $key => $list) {
			$map["$list->id"] = $list->name;
		}
		return $map;
	}

	public static function getProjecttList()
	{
		$lists = Project::all();
		$map[''] = 'Not Set';
		foreach ($lists as $key => $list) {
			$map["$list->id"] = $list->name;
		}
		return $map;
	}

	public static function getProjectStatuses() {
		return [
			''               => 'Not Set',
			'ongoing'        => 'Ongoing',
			'pending'        => 'Pending',
			'completed'      => 'Completed',
			'cancel'         => 'Cancel',
			'interested'     => 'Interested',
			'not interested' => 'Not Interested',
		];
	}


	public static function getUnits() {
		return [
			''       => 'Not Set',
			'sqm'    => 'Sqm',
			'ltr'    => 'Ltr',
			'kg'     => 'Kg',
			'cm'     => 'Cm',
			'm2'     => 'm<sup>2</sup>',
			'ft'     => 'Ft',
			'gallon' => 'Gallon',
			'm3'     => 'm<sup>3</sup>',
		];
	}

}

?>