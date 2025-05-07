# Prompt for commit message
$commitMessage = Read-Host "Enter your commit message"

# Run git commands
git add .
git commit -m "$commitMessage"