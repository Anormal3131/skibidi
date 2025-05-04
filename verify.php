<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $key = $_POST['key'];
    
    // Örnek Lootlabs API endpoint'i (gerçek endpoint ile değiştirilmeli)
    $api_url = 'https://lootlabs.net/api/validate?key=' . urlencode($key);
    
    // API'den yanıtı al
    $response = file_get_contents($api_url);
    $result = json_decode($response, true);
    
    // API'nin döndürdüğü yapıya göre kontrol et (örnek: {"valid":true})
    if (isset($result['valid']) && $result['valid'] === true) {
        header('Location: success.php');
        exit();
    } else {
        echo '<h2>Key geçersiz! Skibidi pomni :(</h2>';
        echo '<a href="index.php">Geri dön</a>';
    }
} else {
    header('Location: index.php');
    exit();
}
