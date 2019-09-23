<?php

/**
 * Response
 */
class Response
{
	/*
	* Print log response
	*/
	public static function json($status,$data)
	{
		$resp = array("status" => $status,"data" => $data);
		echo json_encode($resp);
		exit;
	}

	public static function errorLog($status,$message)
	{
		$resp = array("status" => $status,"message" => $message);
		echo json_encode($resp);
		exit;
	}
}