<?php

/**
 * Response
 */
class Response
{
	/*
	* Print log response
	*/
	public static function json($statuscode = 200,$message = 'Everything OK',$data=array()){
		header("HTTP/ ".$statuscode." ".$message);
		header('Content-type: application/json; charset=utf-8');
		$response = array('status'=>$statuscode,'message' =>$message,'data'=>$data);
		echo json_encode($response);
	}
}