<?php

namespace App\Models;

/**
* 处理考勤记录
*/
class Sheet 
{
	private $timepoint;
	private $newDayRecords = array( );

	private function  judgeTime ( $time, $timepoint )
	{
		$key = 0;
		$flag = false;
		$time_int = $this->toTime ( $time );
		$time_int_low = $time_int -40;
		$time_int_up = $time_int+40;

		for ( $i = 0; $i < 6; $i ++)
		{
			if ( $time_int_low < $timepoint[ $i ] && $time_int_up > $timepoint[ $i ] )
			{
				$key = $i;
				if ( $i % 2 == 0 )
				{
					$flag = $this->toWork ( $time_int, $timepoint[ $i ] );
				}
				else
				{
					$flag = $this->toLeave ( $time_int, $timepoint[ $i ] );
				}
				break;
			}
			
		}


		return [ $key, $time, $flag ];
	}

	private function toTime ( $str )
	{
		if ( is_array( $str ) )
		{
			foreach ($str as $key => $value)
			{
				$str[ $key ] = $this->toTime ( $value );
			}
			return $str;
		}

		$time = explode( ':', $str );
		$time = intval($time[0])*60+intval($time[1]);

		return $time;
	}

	
	private function toWork ( $time_int, $timepoint )
	{
		if ( $time_int > $timepoint )
		{
			return false;
		}

		return true;
	}

	private function toLeave ( $time_int, $timepoint )
	{
		if ( $time_int < $timepoint )
		{
			return false;
		}

		return true;
	}
	
	public function deal ( $str, $days )
	{
		// $newDayRecords = array_fill( 0, 6, null );
		$timepoint = array('8:00','12:00','13:30','17:30','18:30','21:30');
		// $a = $this->toTime('8:00');
		// return explode( ':', $timepoint[ 0 ]);
		// return $a;
		$timepoint = $this->toTime( $timepoint );
		// return $timepoint;

		$sheetstr   = explode("%09", urlencode( $str ));

		foreach ( $sheetstr as $key => $value ) 
		{
			// $value = urldecode( $value );
			// return $value;
			preg_match_all('/\d\d:\d\d/', urldecode( $value ), $matches);

			// $sheetstr[ $key ] = $matches[ 0 ];
			$dayRecord = $matches[ 0 ];
			// return $dayRecord;
			foreach ( $dayRecord as $time ) 
			{
				$data = $this->judgeTime( $time, $timepoint );
				$i = array_shift( $data );
				// return $i;
				$newDayRecords[ $i ] =  $data ;
				// return $newDayRecords;
			}

			$sheetstr[ $key ] = $newDayRecords;
			// return $newDayRecords;

			// $value = $newDayRecords;
			$newDayRecords = array( );
		}

		return $sheetstr;
	}

}