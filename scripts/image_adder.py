#image_adder.py

#imports
import os
from pathlib import Path

#constants
path_to_index = Path('../index.html')
path_to_images = Path('../landscape_images')

def html_generator():

	#call index.html, read/write
	# index_contents = os.read(path_to_index)
	index_html = open(path_to_index)

	#call folder of landscape images
	os.chdir(path_to_images)

	#create list of image names and put the list in order of date added
	image_list = os.listdir

	#iterate through file names to create list of strings, if necessary
	for x in range(10):
		pass
		# image_list = sys (f'ls {path_to_images}')

	#create HTML string of image paths
	html = ''
	for image in image_list:
		html.append('''<img src="landscape_images/''')
		html.append(image)
		html.append('''" alt="Image 1">
	                ''')
	return html

#update index.html


def low_res_duplicator():

	# check contents of landscape_images \
	images_contents = os.listdir('landscape_images/')
	# and compare it to contents of landscape_low_res

	