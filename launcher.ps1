# Cari IP lokal aktif (Wi-Fi / Ethernet)
$ip = (Get-NetIPAddress -AddressFamily IPv4 -InterfaceAlias 'Wi-Fi*','Ethernet*' -ErrorAction SilentlyContinue | 
       Where-Object { $_.IPAddress -notlike '127.*' -and $_.IPAddress -notlike '169.254.*' } | 
       Select-Object -ExpandProperty IPAddress -First 1)

if (-not $ip) {
    # Fallback jika nama interface berbeda
    $ip = (Get-NetIPAddress -AddressFamily IPv4 -ErrorAction SilentlyContinue | 
           Where-Object { $_.IPAddress -like '192.168.*' -or $_.IPAddress -like '10.*' -or $_.IPAddress -like '172.*' } | 
           Select-Object -ExpandProperty IPAddress -First 1)
}

if (-not $ip) {
    $ip = "127.0.0.1"
}

# Hentikan proses php artisan serve sebelumnya jika masih ada agar port 8000 bebas
Get-Process -Name "php" -ErrorAction SilentlyContinue | Where-Object { $_.CommandLine -like "*artisan*serve*" } | Stop-Process -Force -ErrorAction SilentlyContinue

# Jalankan server Laravel artisan serve di background
Start-Process -FilePath "php" -ArgumentList "artisan serve --host=0.0.0.0 --port=8000" -WorkingDirectory "C:\xampp\htdocs\smk-yadika-manado" -WindowStyle Hidden

# Tunggu 2 detik agar server listening
Start-Sleep -Seconds 2

# Buka browser default langsung ke URL IP yang benar
Start-Process "http://${ip}:8000"