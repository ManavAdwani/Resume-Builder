<?php
$strdd= "Name : Manav Adwani, Job Title : Full stack Website Developer, Experience : Fresher. Please write some lines on This.";
$ch = curl_init();

$data = array(
    'model' => 'text-babbage-001',
    'prompt' => $strdd.'\n',
    'temperature' => 0,
    'max_tokens' => 100,
    'top_p' => 1,
    'frequency_penalty' => 0.2,
    'presence_penalty' => 0
);

$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer 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'
);

curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo $result;
}

curl_close($ch);

?>
