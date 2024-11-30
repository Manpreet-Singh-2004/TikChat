<?php
function cleanText($text) {
    $text = preg_replace('/B\d+\$/', '', $text);
    $text = str_replace('U19', '', $text);
    $text = preg_replace('/\s+/', ' ', $text);
    return trim($text);
}

function getCricketData() {
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
        return json_encode(['error' => $err]);
    }

    $data = json_decode($response, true);
    $matchInfo = [];
    $currentBatsman = [];
    $currentBowler = '';
    
    if (isset($data['commentaryList']) && !empty($data['commentaryList'])) {
        $commentaryList = array_reverse($data['commentaryList']);
        
        foreach ($commentaryList as $commentary) {
            if (strpos($commentary['commText'], 'won by') !== false) {
                $matchInfo['result'] = cleanText($commentary['commText']);
                break;
            }
            
            if (isset($commentary['batTeamName'])) {
                $matchInfo['battingTeam'] = cleanText($commentary['batTeamName']);
            }
            
            if (isset($commentary['overNumber'])) {
                $matchInfo['currentOver'] = $commentary['overNumber'];
            }

            if (isset($commentary['commText'])) {
                $commText = cleanText($commentary['commText']);
                
                if (strpos($commText, 'to') !== false && empty($currentBowler)) {
                    $parts = explode(' to ', $commText);
                    if (isset($parts[0])) {
                        $currentBowler = $parts[0];
                    }
                }

                if (strpos($commText, 'lbw') !== false || 
                    strpos($commText, 'c ') !== false || 
                    strpos($commText, 'b ') !== false) {
                    $parts = explode('b ', $commText);
                    if (isset($parts[1])) {
                        $batsmanInfo = explode(' ', trim($parts[1]));
                        if (!empty($batsmanInfo[0])) {
                            $currentBatsman[] = $batsmanInfo[0];
                        }
                    }
                }
            }
        }

        if (!empty($currentBowler)) {
            $matchInfo['currentBowler'] = $currentBowler;
        }
        if (!empty($currentBatsman)) {
            $matchInfo['currentBatsmen'] = array_unique($currentBatsman);
        }
    }
    
    return json_encode($matchInfo);
}

if(isset($_GET['action']) && $_GET['action'] == 'getCricketData') {
    header('Content-Type: application/json');
    echo getCricketData();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Scores & YouTube Player</title>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .video-section, .cricket-section {
            margin-bottom: 30px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        input, button {
            padding: 8px;
            margin: 5px;
        }
        #cricketData {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        .match-info {
            font-size: 16px;
            line-height: 1.6;
        }
        .match-info div {
            margin-bottom: 10px;
        }
        .result {
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="video-section">
            <h1>YouTube Video Player</h1>
            <div class="input-group">
                <input type="text" id="VideoPlayer" placeholder="Enter YouTube URL">
                <button onclick="loadVideo()">Load Video</button>
            </div>
            <iframe 
                id="videoFrame"
                width="560" 
                height="315" 
                src="" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>

        <div class="cricket-section">
            <h1>Cricket Score</h1>
            <button onclick="getCricketData()">Fetch Cricket Data</button>
            <div id="cricketData"></div>
        </div>
    </div>

    <script>
        function loadVideo() {
            const videoInput = document.getElementById('VideoPlayer').value;
            const videoFrame = document.getElementById('videoFrame');
            const videoID = extractVideoID(videoInput);

            if (videoID) {
                videoFrame.src = `https://www.youtube.com/embed/${videoID}`;
            } else {
                alert('Invalid YouTube URL');
            }
        }

        function extractVideoID(url) {
            const regex = /(?:https?:\/\/)?(?:www\.)?youtube\.com\/.*v=([a-zA-Z0-9_-]+)|youtu\.be\/([a-zA-Z0-9_-]+)/;
            const match = url.match(regex);
            return match ? (match[1] || match[2]) : null;
        }

        async function getCricketData() {
            const cricketDataDiv = document.getElementById('cricketData');
            cricketDataDiv.innerHTML = 'Loading cricket data...';

            try {
                const response = await fetch('test.php?action=getCricketData');
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const data = await response.json();
                
                let html = '<div class="match-info">';
                
                if (data.result) {
                    html += `<div class="result">${data.result}</div>`;
                }
                if (data.battingTeam) {
                    html += `<div>Batting Team: ${data.battingTeam}</div>`;
                }
                if (data.currentOver) {
                    html += `<div>Current Over: ${data.currentOver}</div>`;
                }
                if (data.currentBowler) {
                    html += `<div>Current Bowler: ${data.currentBowler}</div>`;
                }
                if (data.currentBatsmen && data.currentBatsmen.length > 0) {
                    html += `<div>Current Batsmen: ${data.currentBatsmen.join(', ')}</div>`;
                }
                
                html += '</div>';
                
                cricketDataDiv.innerHTML = html;
            } catch (error) {
                cricketDataDiv.innerHTML = `<div class="error">Error fetching cricket data: ${error.message}</div>`;
                console.error('Error:', error);
            }
        }
    </script>
</body>
</html>