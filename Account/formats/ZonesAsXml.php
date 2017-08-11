<?php

	namespace WSI\Account\formats;

	use WSI\Account\interfaces\IFormat;

	class ZonesAsXml implements IFormat
	{
		public function format(array $data)
		{
			$zones = "";

			foreach($data as $obj)
			{
				$zone = "<Zone ";

				foreach($obj as $key => $val)
				{
					if($val !== null)
					{
						$zone .= $key."=\"$val\" ";
					}
				}

				$zones .= $zone."/>";
			}

			return '<Zones> '.$zones.'</Zones>';
		}
	}