#!/usr/bin/env python
import os
import web

urls = (
    '/', 'Homepage')

app_root = os.path.dirname(__file__)
templates_root = os.path.join(app_root, 'templates')
render = web.template.render(templates_root)

class Homepage:
    def GET(self):
        return render.index()

app = web.application(urls, globals())

if __name__ == '__main__':
    app.run()
