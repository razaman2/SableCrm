<?php

	namespace WSI\Account\formats;

	use WSI\Account\interfaces\IFormat;

	class AgenciesAsXml implements IFormat
	{
		public function format(array $data)
		{
			$agencies = "";

			foreach($data as $obj)
			{
				$agency = "<SiteAgencyPermit ";

				foreach($obj as $key => $val)
				{
					if($val !== null)
					{
						$agency .= $key."=\"$val\" ";
					}
				}

				$agencies .= $agency."/>";
			}

			return '<SiteAgencyPermits> '.$agencies.'</SiteAgencyPermits>';
		}
	}