import wx
from wx import html2
import os


class MyForm(wx.Frame):
    def __init__(self):
        wx.Frame.__init__(self, None, title="Screenshot Tutorial", size=(1000, 800))
        # panel = wx.Panel(self)
        filepath = os.path.abspath('base.html')
        self._browser = html2.WebView.New(self)
        self._browser.LoadURL(f"{filepath}")

        # sizer = wx.BoxSizer(wx.VERTICAL)
        # sizer.Add(self._browser,)



if __name__ == "__main__":
 app = wx.App(False)
 frame = MyForm()
 frame.Show()
 app.MainLoop()
