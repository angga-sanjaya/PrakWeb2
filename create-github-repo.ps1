param (
    [string]$RepoName = "PrakWeb2"
)

$ghExe = "C:\Program Files\GitHub CLI\gh.exe"
if (-not (Test-Path $ghExe)) {
    Write-Error "GitHub CLI not found at $ghExe. Please install gh or set the correct path."
    exit 1
}

$authStatus = & $ghExe auth status 2>&1
if ($authStatus -match "You are not logged into any GitHub hosts") {
    Write-Host "GitHub CLI belum login. Memulai login interaktif..."
    & $ghExe auth login --web
    $authStatus = & $ghExe auth status 2>&1
    if ($authStatus -match "You are not logged into any GitHub hosts") {
        Write-Error "Login tidak selesai. Silakan jalankan kembali skrip ini setelah menyelesaikan autentikasi."
        exit 1
    }
}

Write-Host "Membuat repository public GitHub dan mendorong branch main..."
& $ghExe repo create $RepoName --public --source . --remote origin --push --confirm
