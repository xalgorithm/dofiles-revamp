#!/bin/bash
#Launch Firefox, configured with proxy
open -g -F -a "/Applications/FirefoxDeveloperEdition.app"

#ssh to my home server, using a tunnel to proxy
ssh -C2qTnN -D 8080 -p 22 xalg@home.xalg.im

#Notify that it worked
osascript -e 'display notification "Proxy to Home setup" with title "Proxy"'
