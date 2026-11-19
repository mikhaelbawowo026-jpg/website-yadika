@echo off
title Server SMK Yadika Manado
cd /d C:\xampp\htdocs\smk-yadika-manado

:: Deteksi IP lokal yang aktif
for /f "tokens=4" %%a in ('route print 0.0.0.0 ^| findstr /r "[0-9]*\.[0-9]*\.[0-9]*\.[0-9]*"') do (
    set LOCAL_IP=%%a
    goto :ip_found
)
:ip_found
if "%LOCAL_IP%"=="" set LOCAL_IP=127.0.0.1

:: Jalankan artisan serve secara background
taskkill /f /im php.exe 2>nul
start /b php artisan serve --host=0.0.0.0 --port=8000

:: Beri jeda 2 detik agar port listening
powershell -Command "Start-Sleep -Seconds 2"

:: Buka browser langsung ke URL IP Lokal
start http://%LOCAL_IP%:8000