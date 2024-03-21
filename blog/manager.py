from textual.app import App
import json
from textual.widgets.selection_list import Selection

data=open("./docs/list.jsonc","r+").read()
try:
	data=json.loads(data)
except json.JSONDecodeError:
	data={}


class main(App):
	data={}
	annocement=[]
	def load_file(self):
		try:
			self.data=json.loads(open("./docs/list.jsonc","r+").read())
		except json.JSONDecodeError or FileNotFoundError:
			self.data={}
			self.annocement.append("找不到檔案or檔案非jsonc格式")

	def show_item(self,id):

		pass

	def compose(self):#開始畫面 顯示所有文章
		filename=["[ "+i["id"]+" ]"+i["title"] for i in self.data]
		self.load_file()

if __name__=="__main__":
	main().run()

