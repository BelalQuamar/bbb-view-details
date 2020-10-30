<?php
//header('Content-Type: text/xml');
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require __DIR__ . '/vendor/autoload.php';
use BigBlueButton\BigBlueButton;
use BigBlueButton\Parameters\GetRecordingsParameters;

$recordingParams = new GetRecordingsParameters();
$bbb = new BigBlueButton();
$response = $bbb->getRecordings($recordingParams);

if ($response->getReturnCode() == 'SUCCESS') {
	foreach ($response->getRawXml()->recordings->recording as $recording) {
		// process all recording
	}
}
echo "<pre>";
print_r($response);
echo "</pre>";