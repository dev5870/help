display dialog "Show hidden files?" buttons {"Yes", "No"}
set result to button returned of result
if result is equal to "Yes" then
	do shell script "defaults write com.apple.finder AppleShowAllFiles -boolean true"
else
	do shell script "defaults delete com.apple.finder AppleShowAllFiles"
end if
do shell script "killall Finder"
