from appscript import *
import time

filename = '/Users/kwecker/Desktop/April May T&T Final.pdf'

ps = app('Adobe Photoshop CS6.app')
finder = app('Finder')
event = app('System Events')
psap = event.application_processes['Adobe Photoshop CS6.app']


f = finder.items[mactypes.Alias(filename)].get(resulttype=k.alias)
ps.open(f)
ps.activate()
psap.window.first.key_code(76)

doc = a.documents