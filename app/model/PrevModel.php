<?php
namespace Dva\Hotels\Model;

use Dva\Hotels\core\DB;

class PrevModel Extends BaseModel
{
	protected $table = 'hotelsheader';
	
	
	public function addPrev($enName, $post)
	{	
		$uName = $this->isUniqName($enName, 'hotelName');
		if($uName){
			echo 'Совпадение';
		}
		else{
			echo 'Нет';
		}
		// $sql = sprintf("INSERT INTO %s (text, userName) VALUES (:text, :userName)", $this->table);
		// $stmt = $this->db->prepare($sql);
		// $stmt->execute(['text' => $text,
						// 'userName' => $userName
		// ]);
		// return $this->db->lastInsertId();
	}
	
	private function isUniqName($uName, $col)
	{
		$sql = sprintf('SELECT %s FROM %s', $col, $this->table);
		$stmt = $this->db->query($sql);
		$res = $stmt->fetchAll();
		
		foreach($res as $data){
			echo $data[$col];
			echo '<br>';
			echo $uName;
			echo '<br>';
			if($data[$col] == $uName){
				return true;
			}
		}
		return false;
	}
		
	// public function editConfigs($siteName, $menu1)
	// {
		// $sql = sprintf("UPDATE %s SET siteName = :siteName, menu1 = :menu1, menu2 = :menu2, phoneNumber = :phoneNumber, phoneNumber2 = :phoneNumber2, heading1 = :heading1, words1 = :words1, heading2 = :heading2, words2 = :words2, adress = :adress, email = :email WHERE id = '1'", $this->table);
		// $stmt = $this->db->prepare($sql);
		// $stmt->execute([
		// 'siteName' => $siteName,
		// 'menu1' => $menu1,
		// 'menu2' => $menu2,
		// 'phoneNumber' => $phoneNumber,
		// 'phoneNumber2' => $phoneNumber2,
		// 'heading1' => $heading1,
		// 'words1' => $words1,
		// 'heading2' => $heading2,
		// 'words2' => $words2,
		// 'adress' => $adress,
		// 'email' => $email
		// ]);
		// return $stmt->fetch();
	// }
	
}