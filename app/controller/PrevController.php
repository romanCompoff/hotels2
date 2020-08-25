<?php
namespace Dva\Hotels\Controller;

use Dva\Hotels\Model\GAdsModel;
use Dva\Hotels\core\DB;

class PrevController Extends AdminController
{
	public function firstFunc()
	{
		
	}
	
			public function outputForm()
		{

			$this->content = $this->build($this->myPath('prevView/addPrevView'), []);
		}
		
			public static function translit_sef($value)
		{
			$converter = array(
				'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
				'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
				'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
				'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
				'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
				'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
				'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
			);
		
			$value = mb_strtolower($value);
			$value = strtr($value, $converter);
			$value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
			$value = mb_ereg_replace('[-]+', '-', $value);
			$value = trim($value, '-');	
		
			return $value;
		}
}