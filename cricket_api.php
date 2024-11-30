<?php
header('Content-Type: application/json');

function cleanText($text) {
    $text = preg_replace('/B\d+\$/', '', $text);
    $text = str_replace('U19', '', $text);
    $text = preg_replace('/\s+/', ' ', $text);
    return trim($text);
}

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/mcenter/v1/41881/comm",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: cricbuzz-cricket.p.rapidapi.com",
        "x-rapidapi-key: 0e5e90d4f7msh94c96f9a6aba6bfp1b7291jsnb2d269d7c9e9"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo json_encode(['error' => $err]);
    exit;
}

$data = json_decode($response, true);
$matchInfo = [];

if (isset($data['commentaryList']) && !empty($data['commentaryList'])) {
    foreach ($data['commentaryList'] as $commentary) {
        if (isset($commentary['commText'])) {
            $matchInfo['commentary'] = cleanText($commentary['commText']);
        }
        if (isset($commentary['batTeamName'])) {
            $matchInfo['battingTeam'] = cleanText($commentary['batTeamName']);
        }
        if (isset($commentary['overNumber'])) {
            $matchInfo['currentOver'] = $commentary['overNumber'];
        }
        // Try to extract team names from commentary
        if (strpos($commentary['commText'], ' vs ') !== false) {
            $teams = explode(' vs ', $commentary['commText']);
            $matchInfo['team1'] = cleanText($teams[0]);
            $matchInfo['team2'] = cleanText(explode(',', $teams[1])[0]);
            break;
        }
    }

    // If teams weren't found in commentary, try to extract from first comment
    if (!isset($matchInfo['team1']) && isset($data['commentaryList'][0])) {
        $firstComment = $data['commentaryList'][0]['commText'];
        if (preg_match('/([A-Za-z\s]+) vs ([A-Za-z\s]+)/', $firstComment, $matches)) {
            $matchInfo['team1'] = cleanText($matches[1]);
            $matchInfo['team2'] = cleanText($matches[2]);
        }
    }
}

echo json_encode($matchInfo);
?>