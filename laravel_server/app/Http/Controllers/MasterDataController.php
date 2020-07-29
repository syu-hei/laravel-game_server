<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterLoginItem;
use App\MasterQuest;
use App\MasterCharacter;
use App\MasterGacha;

class MasterDataController extends Controller {
	public function Get(Request $request) {
		//クライアント側に送信したいマスターデータだけを選択
		$master_login_item = MasterLoginItem::GetMasterLoginItem();
		$master_quest = MasterQuest::GetMasterQuest();
		$master_character = MasterCharacter::GetMasterQuest();
		$master_gacha = MasterGacha::GetMasterGacha();

		$response = array(
			'master_data_version' => config('constants.MASTER_DATA_VERSION'),
			'master_login_item' => $master_login_item,
			'master_quest' => $master_quest,
			'master_character' => $master_character,
			'master_gacha' => $master_gacha,
		);

		return json_encode($response);
	}
}