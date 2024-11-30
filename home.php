<?php
require_once 'connection.php';
session_start();

if (!isset($_SESSION['isloggedin']) || $_SESSION['isloggedin'] != 1) {
    header('Location: index.php');
    exit;
}

$community = isset($_GET['community']) ? $_GET['community'] : '';

function cleanText($text) {
    $text = preg_replace('/B\d+\$/', '', $text);
    $text = str_replace('U19', '', $text);
    $text = preg_replace('/\s+/', ' ', $text);
    return trim($text);
}
// ----


if(isset($_GET['action']) && $_GET['action'] == 'getCricketData') {
    header('Content-Type: application/json');
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

    // Pass the raw API response directly to the client
    
    $data = json_decode($response, true);
    $matchInfo = [];
    
    if (isset($data['commentaryList']) && !empty($data['commentaryList'])) {
        foreach ($data['commentaryList'] as $commentary) {
            if (isset($commentary['commText'])) {
                $matchInfo['result'] = cleanText($commentary['commText']);
                break;
            }
        }
    }
    
    echo json_encode($matchInfo);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="tikchat.png" type="image/png">
    <title>Tik Chat - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #e8d9d1;
            color: #4a3831;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 20px;
        }

        .userin {
            width: 100%;
            max-width: 1200px;
            min-height: 100vh;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 20px;
            padding: 20px;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .community-welcome, .status-feed, .right-panel, .cricket-section {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(74, 56, 49, 0.1);
        }

        .community-welcome h2 {
            color: #8b6d5c;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .right-panel {
            position: sticky;
            top: 20px;
            height: fit-content;
        }

        .profile-links a {
            display: block;
            padding: 10px;
            background-color: #8b6d5c;
            color: white;
            border-radius: 6px;
            text-align: center;
            margin-bottom: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .profile-links a:hover {
            background-color: #6d544a;
        }

        .community-tag {
            background-color: #8b6d5c;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            display: inline-block;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #d4c1b7;
            border-radius: 6px;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        button, input[type="submit"] {
            padding: 12px;
            background-color: #8b6d5c;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #6d544a;
        }

        .status {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 6px;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #d4c1b7;
        }

        .status img {
            width: 100%;
            height: auto;
            margin-top: 0.5rem;
            border-radius: 6px;
        }

        .status h3 {
            color: #8b6d5c;
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        .youtube-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            padding: 10px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(74, 56, 49, 0.2);
            display: none;
            max-width: 400px;
        }

        .youtube-container .close-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background: #8b6d5c;
            color: white;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        .youtube-section {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #d4c1b7;
        }

        .match-info div {
            margin-bottom: 10px;
            padding: 8px;
            background: rgba(139, 109, 92, 0.1);
            border-radius: 6px;
        }
        .match-teams {
    background-color: #8b6d5c !important;
    color: white !important;
    padding: 12px !important;
    text-align: center;
    font-size: 1.2em;
    margin-bottom: 15px !important;
    border-radius: 6px;
}

.match-teams {
    background-color: #8b6d5c !important;
    color: white !important;
    padding: 12px !important;
    text-align: center;
    font-size: 1.2em;
    margin-bottom: 15px !important;
    border-radius: 6px;
}

.match-teams strong {
    color: #fff;
}

.match-update {
    background-color: #fff;
    padding: 15px;
    margin: 10px 0;
    border-radius: 6px;
    border: 1px solid rgba(139, 109, 92, 0.2);
}

.team-score h3, .match-update h3 {
    color: #8b6d5c;
    margin-bottom: 10px;
}

.match-update p {
    color: #4a3831;
}

.overs, .run-rate {
    display: inline-block;
    margin: 0 10px;
    color: #666;
}

        @media (max-width: 1024px) {
            .userin {
                grid-template-columns: 1fr;
                max-width: 800px;
            }

            .right-panel {
                position: relative;
                top: 0;
                order: -1;
            }
        }

        @media (max-width: 600px) {
            .userin {
                padding: 10px;
            }

            .status-feed, .right-panel {
                padding: 1rem;
            }

            .youtube-container {
                bottom: 10px;
                right: 10px;
                left: 10px;
                max-width: none;
            }
            
            .youtube-container iframe {
                width: 100%;
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="youtube-container" id="youtubeContainer">
        <button class="close-btn" onclick="closeVideo()">×</button>
        <iframe 
            id="videoFrame"
            width="100%" 
            height="215" 
            src="" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>

    <div class="userin">
        <div class="main-content">
            <?php if ($community): ?>
            <div class="community-welcome">
                <h2>Welcome to <?php echo htmlspecialchars($community); ?> Community</h2>
                <p>Connect with fellow <?php echo htmlspecialchars($community); ?> enthusiasts!</p>
            </div>
            <?php endif; ?>

            <?php if ($community == 'Sports'): ?>
            <div class="cricket-section">
                <h2>Live Cricket Updates</h2>
                <button onclick="getCricketData()">Fetch Cricket Data</button>
                <div id="cricketData"></div>
            </div>
            <?php endif; ?>

            <div class="status-feed">
                <h2>Feeds</h2>
                <?php
                $query = "SELECT status_text, user_email, file_name, status_privacy 
                FROM status 
                WHERE (status_privacy = 1 OR user_email = ?) 
                AND " . ($community ? "community = ?" : "community IS NULL") . "
                ORDER BY status_id DESC";
       $stmt = mysqli_prepare($con, $query);
       if ($community) {
           mysqli_stmt_bind_param($stmt, "ss", $_SESSION['email'], $community);
       } else {
           mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
       }
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       
       if (mysqli_num_rows($result) == 0) {
           if ($community) {
               echo "<p><b>No posts in the $community community yet. Be the first to share!</b></p>";
           } else {
               echo "<p><b>No posts to show. Add your own!</b></p>";
           }
       } else {
           while ($row = mysqli_fetch_assoc($result)) {
               echo "<div class='status'>";
               if ($community) {
                   echo "<div class='community-tag'>$community Community</div>";
               }
               echo "<p>" . htmlspecialchars($row['status_text']) . "</p>";
               if ($row['file_name'] && $row['file_name'] !== '') {
                   echo "<img src='uploads/" . htmlspecialchars($row['file_name']) . "' alt='status image'>";
               }
               echo "<h3>Posted by: " . htmlspecialchars($row['user_email']) . "</h3>";
               echo "</div>";
           }
       }
                ?>
            </div>
        </div>

        <div class="right-panel">
            <div class="profile-links">
                <a href="yourself.php">Profile</a>
                <a href="logout.php">Logout</a>
            </div>
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?></h2>
            
            <form action="home_logic.php<?php echo $community ? '?community='.urlencode($community) : ''; ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="mind" placeholder="What's on your mind?" required>
                <div>
                    <input type="hidden" name="fileup" value="0">
                    <label>Upload Image?</label>
                    <input type="checkbox" name="fileup" value="1">
                    <input type="file" name="filetoup" id="filetoup">
                </div>
                <div>
                    <input type="hidden" name="privacy" value="1">
                    <label>Private?</label>
                    <input type="checkbox" name="privacy" value="0">
                </div>
                <input type="submit" value="Publish">
            </form>

            <div class="youtube-section">
                <h2>Add YouTube Video</h2>
                <input type="text" id="VideoPlayer" placeholder="Enter YouTube URL">
                <button onclick="loadVideo()">Load Video</button>
            </div>
        </div>
    </div>

    <script>
        function extractVideoID(url) {
            const regex = /(?:https?:\/\/)?(?:www\.)?youtube\.com\/.*v=([a-zA-Z0-9_-]+)|youtu\.be\/([a-zA-Z0-9_-]+)/;
            const match = url.match(regex);
            return match ? (match[1] || match[2]) : null;
        }

        function loadVideo() {
            const videoInput = document.getElementById('VideoPlayer').value;
            const videoFrame = document.getElementById('videoFrame');
            const videoID = extractVideoID(videoInput);
            const container = document.getElementById('youtubeContainer');

            if (videoID) {
                videoFrame.src = `https://www.youtube.com/embed/${videoID}`;
                container.style.display = 'block';
            } else {
                alert('Invalid YouTube URL');
            }
        }

        function closeVideo() {
            const container = document.getElementById('youtubeContainer');
            const videoFrame = document.getElementById('videoFrame');
            container.style.display = 'none';
            videoFrame.src = '';
        }

        <?php if ($community == 'Sports'): ?>
            async function getCricketData() {
    const cricketDataDiv = document.getElementById('cricketData');
    cricketDataDiv.innerHTML = 'Loading cricket data...';

    try {
        const response = await fetch('cricket_api.php');
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        
        let html = '<div class="match-info">';
        if (data.team1 && data.team2) {
            html += `<div class="match-teams"><strong>${data.team1}</strong> vs <strong>${data.team2}</strong></div>`;
        }
        if (data.battingTeam) {
            html += `<div>Batting Team: ${data.battingTeam}</div>`;
        }
        if (data.currentOver) {
            html += `<div>Current Over: ${data.currentOver}</div>`;
        }
        if (data.commentary) {
            html += `<div>Latest Update: ${data.commentary}</div>`;
        }
        html += '</div>';
        
        cricketDataDiv.innerHTML = html;
    } catch (error) {
        cricketDataDiv.innerHTML = `<div class="error">Error loading cricket data. Please try again.</div>`;
        console.error('Error:', error);
    }
}
        <?php endif; ?>
    </script>
</body>
</html>